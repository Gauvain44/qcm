<?php

/**
  ---------------------------------- Les variables principales ----------------------------------

  $host - $db - $login - $pass	 :	hôte, nomDeLaBase, login, MotDePasse 	|||
  ________________________________________________________________________________________________

  $table 			 :	la table choisie dans ma BDD
  $attribut		 	 :	attribut d'une table de ma BDD
  $valeur			 :	valeur d'un attribut de ma BDD

  $tableau = array ( $attribut => $valeur )
  ________________________________________________________________________________________________

  ---------------------------- MYSQL : les fonctions principales --------------------------------

  CONSTRUCT 			:	$mysql = new mysql( $host, $db, $login, $pass );


  INSERT				:	$insert = $mysql->insert('matable',$tableau);

  UPDATE				:	$update = $mysql->update('matable',$id,$tableau);

  DELETE				:	$delete = $mysql->delete('matable',$id);

  SELECT ( simple )		:	$select = $mysql->selectPerso("ICI MA REQUETE SELECT qui me retournera un objet");

  SELECT				:	$select = $mysql->select('matable',$tableau,$select=null);

  ________________________________________________________________________________________________

  // explications sur la fonction SELECT

  $tableau = Array
  (
  [ville] => '+lille+tourcoing',  					- LIKE
  [prix] => '120000@@200000',							- BETWEEN
  [jardin] => 'oui'									- normal...
  [surface] => '100_500',								- BETWEEN
  [ORDER] => 'id DESC',								- ORDER BY
  [LIMIT] => '0,20'									- LIMIT
  [GROUP] => 'ville'									- GROUP BY
  )
  Résultat :	SELECT * FROM matable WHERE
  ville LIKE '%lille%' OR ville LIKE '%tourcoing%'
  AND ( prix BETWEEN '120000' AND '200000' )
  AND jardin = 'oui'
  AND ( surface BETWEEN '100' AND '500' )
  ORDER BY id DESC LIMIT 0,20
  ________________________________________________________________________________________________

 * */
class mysql {

    private $bdd = null;

    // Constructeur : fonctionne avec le fichier config.ini ( les variables sont créées avec la fonction parse_ini_file )
    public function __construct($host, $db, $login, $pass) {
    
        try {
            $this->bdd = new PDO("mysql:host=$host;dbname=$db", $login, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            $this->bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function insert($table, $attribut = array()) {  
    // ex :  $attribut = $_POST = array('attribut'=>'valeur', 'nom' => 'durant','prenom'=>'jean', 'tel'=>'0663636363');
        $key = '';
        $value = '';

        foreach ($attribut as $k => $a) {
            $key .= "$k,"; 
            $value .="'$a',"; 
        }
        // J'enlève la dernère virgule, pour avoir la bonne syntaxe SQL
        $key = substr($key, 0, -1);
        $value = substr($value, 0, -1);
        $requete = "INSERT INTO $table($key) VALUE ($value)";
        //echo $requete;
        try {

            $p = $this->bdd->query($requete);
            
            // Je récpère l'id créé
            $insertId = $this->bdd->lastInsertId();
            $this->insertId = $insertId;
            return $this->insertId;
            ;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function update($table, $id, $attribut = array()) {    

        $keyValue = '';

        foreach ($attribut as $k => $a) {
            $keyValue .= "$k= '$a' , "; 
        }

        $keyValue = substr($keyValue, 0, -2);
        $requete = array($table, $keyValue, $id);
        try {
            $p = $this->bdd->query("UPDATE $table SET $keyValue WHERE id = '{$id}'");
            return $id;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    // Fonction de suppression
    public function delete($table, $id, $idOpt = null) {
        if (!is_null($idOpt))
            $p = $this->bdd->query("DELETE FROM $table WHERE $idOpt = '$id'");
        else
            $p = $this->bdd->query("DELETE FROM $table WHERE id = '$id'");
    }

    // Fonction de sélection simple
    public function selectPerso($requeteSQL) {
        try {
            $p = $this->bdd->query($requeteSQL);
            return $p->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    // Fonction de sélection complète ( presque )
    public function select($table, $data = array(), $select = '*') {

        if (empty($data)) {
            $sql = "SELECT $select FROM $table";
        } else {
            // A voir si on garde * ...
            $sql = "SELECT $select FROM $table WHERE ";
            
            $first = 0;
            $selectNormal = 0;
            $or = 0;
            $lim = 0;
            $group = 0;
            foreach ($data as $k => $v) {
                if ($k != 'ORDER' and $k != 'LIMIT' and $k != 'GROUP') {
                
                    // S'il ya un "+" dans ma valeur => LIKE
                    if (preg_match("[\+]", $v)) {
                        if ($first == 1) {
                            $sql.=" AND ";
                        }
                        $i = 0;
                        $first = 1;
                        $selectNormal = 1;
                        $LIKE = explode("+", $v);

                        foreach ($LIKE as $L) {
                            if (!empty($L)) {
                                if ($i == 0) {
                                    $sql .='(';
                                } else {
                                    $sql.=" OR ";
                                }
                                $sql .="$k LIKE '%$L%'";
                                $i = 1;
                            }
                        }
                        $sql .=')';
                    }
                    
                    // ici : si $v = un truc style $v='150@@360' => BETWEEN
                    else if (preg_match("[@@]", $v)) { 
                        $selectNormal = 1;
                        $BETWEEN = explode("@@", $v);
                        $v_1 = $BETWEEN[0];
                        $v_2 = $BETWEEN[1];

                        if ($first == 0) {
                            $sql .= "($k BETWEEN '$v_1' AND '$v_2')";
                            $first = 1;
                        } else {
                            $sql .= " AND ($k BETWEEN '$v_1' AND '$v_2')";
                        }
                    }
                    // ici : le select standard
                    else {
                        if ($selectNormal == 0) {
                            $sql .= "$k = '$v'";
                            $selectNormal = 1;
                        } else {
                            $sql .= " AND $k = '$v'";
                        }
                    }
                } else {
                
                	switch($k){
	                	
	                	case 'GROUP': // ex : [GROUP] => 'nom'
		                	$GROUP = " GROUP BY $v";
	                        $group = 1;
	                		break;
	                		
	                	case 'ORDER': // ex : [ORDER] => 'id DESC'
	                		$ORDER = " ORDER BY $v";
	                		$or = 1;
	                		break;
	                		
	                	case 'LIMIT': // ex : [LIMIT] => '0,50'
	                		$LIMIT = " LIMIT $v";
	                		$lim = 1;
	                		
                	}
                   
                }
            }
            if ($group == 1) 	{ $sql .= $GROUP; }
            if ($or == 1) 		{ $sql .= $ORDER; }
            if ($lim == 1) 		{ $sql .= $LIMIT; }
        }
        //echo $sql;
        $p = $this->bdd->query($sql);
        return $p->fetchAll(PDO::FETCH_OBJ);
    }

}

?>
