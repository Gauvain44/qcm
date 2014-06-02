<link rel="stylesheet" href="css/style.css" />


<div class="well">
    <h1><center>Formulaire d'inscription</center></h1>
    <p style="float:right">Saison 2013-2014</p>
    <br /><hr /><br />    
    <form class="form-horizontal" id="create-post-form" method="post" action="scripts/inscription.php">
        <div class="postOptions control-group span6">
            <label class="control-label">&nbsp</label>
            <div class="controls">
                <label for="femme"  class="radio">
                    <input type="radio" name="sexe" value="femme" id="femme" />
                    Femme
                </label>
                <label for="homme"  class="radio">
                    <input type="radio" name="sexe" value="homme" id="homme" />
                    Homme
                </label>
            </div> 

        </div>
        <div class="control-group span5">
            <label class="control-label">Date de naissance</label>
            <div class="controls">
                <input class="input_border input_width required glDatepicker span3" type="date" name="date_de_naissance" placeholder="Entrez votre date de naissance" value="" rel="Champ obligatoire" />
            </div>
        </div>
        <div style="clear:both"></div>

        <div class="control-group span6">
            <label class="control-label">Nom</label>
            <div class="controls">

                <input class="input_border input_width required span3" type="text" name="nom" placeholder="Entrez votre nom" rel="Champ obligatoire !" />
            </div>    
        </div>    
        <div class="control-group span5">
            <label class="control-label">Courriel</label>
            <div class="controls">

                <input class="input_border input_width required span3" type="text" name="email" placeholder="nom@domaine.fr" rel="Adresse email requise" />
            </div>
        </div>         
        <div style="clear:both"></div>

        <div class="control-group span6">
            <label class="control-label">Prénom</label>
            <div class="controls">

                <input class="input_border input_width required span3" type="text" name="prenom" placeholder="Entrez votre prénom" rel="Champ obligatoire !" />
            </div>
        </div>
        <div class="control-group span5">
            <label class="control-label">2ème prénom</label>
            <div class="controls">

                <input class="input_border input_width span3" type="text" name="prenom2" />
            </div>
        </div>
        <div style="clear:both"></div>

        <div class="control-group span6">
            <label class="control-label">Téléphone portable</label>
            <div class="controls">

                <input class="input_border input_width required span3" type="text" name="tel_portable" placeholder="0600000000" rel="Téléphone obligatoire !" />
            </div>
        </div>
        <div class="control-group span5">
            <label class="control-label">Téléphone fixe</label>
            <div class="controls">

                <input class="input_border input_width span3" type="text" name="tel_fixe" placeholder="0600000000" />
            </div>
        </div>

        <div style="clear:both"></div> 
        <div class="control-group span11">
            <label class="control-label">Adresse</label>
            <div class="controls">

                <input class="input_border input_width required span9" type="text" name="adresse" rel="Champ obligatoire !" />
            </div>    
        </div>    
        <div style="clear:both"></div> 
        <div class="control-group span6">
            <label class="control-label">Code postal</label>
            <div class="controls">

                <input class="input_border input_width required span3" type="text" name="code_postal" placeholder="59000" rel="Champ obligatoire !" />
            </div>    
        </div>
        <div class="control-group span5 ">

            <label class="control-label">Ville</label>
            <div class="controls">

                <input class="input_border input_width required span3" type="text" name="ville" placeholder="Lille" rel="Champ obligatoire !" />
            </div>
        </div>
        <div style="clear:both"></div> <br />

        <div class="control-group span6">
            <h3><center>Grades</center></h3>

            <label class="control-label">Ceinture jaune</label>
            <div class="controls">
                <input class="input_border input_width span3" name="ceinture_jaune_date" type="date" />
            </div>
            <br />
            <label class="control-label">Ceinture orange</label>
            <div class="controls">
                <input class="input_border input_width span3" name="ceinture_orange_date" type="date" />
            </div>
            <br />
            <label class="control-label">Ceinture verte</label>
            <div class="controls">
                <input class="input_border input_width span3" name="ceinture_verte_date" type="date" />
            </div>
            <br />
            <label class="control-label">Ceinture bleue</label>
            <div class="controls">
                <input class="input_border input_width span3" name="ceinture_bleue_date" type="date" />
            </div>
            <br />
            <label class="control-label">Ceinture Marron</label>
            <div class="controls">
                <input class="input_border input_width span3" name="ceinture_marron_date" type="date" />
            </div>
            <br />
            <label class="control-label">Ceinture noire</label>
            <div class="controls">
                <input class="input_border input_width span3" name="ceinture_noire_date" type="date" />
            </div>
        </div>
        <div class="control-group span6">
            <h3><center>Catégorie socio-professionnelle</center></h3>
            <br />
            <div class="controls">
                <label for="medical"  class="radio">
                    <input type="radio" name="CSP" value="medical" id="medical" />
                    &nbsp; Milieu Médical
                </label>
                <label for="force_ordre"  class="radio">
                    <input type="radio" name="CSP" value="force_ordre" id="force_ordre" />
                    &nbsp; Force de l'ordre
                </label>

                <label for="agriculteur"  class="radio">
                    <input type="radio" name="CSP" value="agriculteur" id="agriculteur" />&nbsp; Agriculteurs
                </label>
                <label for="artisans"  class="radio">
                    <input type="radio" name="CSP" value="artisans" id="artisans" />
                    &nbsp; Artisans, commerçants, chef d'entreprise
                </label>
                <label for="cadre"  class="radio">
                    <input type="radio" name="CSP" value="cadre" id="cadre" />
                    &nbsp; Cadres, Professions intellectuelles supérieures

                </label>
                <label for="prof_intermediaire"  class="radio">
                    <input type="radio" name="CSP" value="prof_intermediaire" id="prof_intermediaire" />
                    &nbsp; Professions intermédiaires
                </label>
                <label for="employe"  class="radio">
                    <input type="radio" name="CSP" value="employe" id="employe" />
                    &nbsp; Employés
                </label>
                <label for="ouvrier"  class="radio">
                    <input type="radio" name="CSP" value="ouvrier" id="ouvrier" />
                    &nbsp; Ouvriers
                </label>
                <label for="etudiant"  class="radio">
                    <input type="radio" name="CSP" value="etudiant" id="etudiant" />
                    &nbsp; Etudiants</label>
            </div> 

        </div>
        <div style="clear:both"></div><br /><br />
        <div class="span6">
            <h3><center>...</center></h3>
            <div class="control-group">
                <label class="control-label">Inscrit le</label>
                <div class="controls">
                    <input class="input_border input_width span3" type="date" name="date_arrivee" placeholder="Date d'inscription" />
                </div>
            </div>
            <div style="clear:both"></div>
            <div class="control-group">
                <label class="control-label">Sorti(e) le</label>
                <div class="controls">
                    <input class="input_border input_width span3" type="date" name="date_sortie" placeholder="Date de sortie" />
                </div>
            </div>
            <div style="clear:both"></div>

            <div class="control-group">
                <label class="control-label" for="role">Rôle</label>
                <div class="controls">
                    <select id="role" class="nonzero select input_border select_width " name="role">
                        <option value="AUCUN">Aucun</option>	   
                        <option value="ASSISTANT">Assistant</option>
                        <option value="BENEVOLE">Bénévole</option>
                        <option value="INSTRUCTEUR">Instructeur</option>
                        <option value="PHOTOGRAPHE">Photographe</option>
                        <option value="PRESIDENT">President</option>
                        <option value="SECRETAIRE">Secrétaire</option>
                        <option value="TRESORIER">Trésorier</option>
                    </select>
                </div>
            </div>
        </div>
        <div style="border:1px solid #ccc;padding:20px" class="span6">		
            <br />
            <p>	
                <label>En cas d'accident<a style="float:right;cursor:pointer" class="resetciv" >Annuler</a></label>
            </p>
            <label  class="radio inline">
                <input type="radio" name="civ_contact" value="Mlle" id="Mlle" /> Mlle
            </label>
            <label  class="radio inline">
                <input type="radio" name="civ_contact" value="MME" id="MME" /> Mme
            </label>
            <label  class="radio inline">
                <input type="radio" name="civ_contact" value="MR" id="MR" /> M
            </label>


            <div style="clear:both"><br /></div>
            <div class="control-group">
                <label class="labelmin">NOM</label>
                <input class="input_border" type="text" name="nom_contact" id="nom_contact" placeholder="DO" />
            </div>
            <div class="control-group">
                <label class="labelmin">Prénom</label>
                <input class="input_border" type="text" name="prenom_contact" id="prenom_contact" placeholder="John" />
            </div>
            <div class="control-group">
                <label class="labelmin">Tél Fixe</label>
                <input class="input_border" type="tel" name="tel_fixe_contact" id="tel_fixe_contact" />
            </div>
            <div class="control-group">
                <label class="labelmin">Tél portable</label>
                <input class="input_border" type="tel" name="tel_portable_contact" id="tel_portable_contact" />
            </div>
        </div>
        <div style="clear:both"></div><br /><br />
        <center>
            <input class="btn btn-primary span3" type="submit" value="Envoyer" />
        </center>
    </form>
</div>
<script src="js/validate.js"></script>

<script>
    $(function(){
        $("input[type=date]").datepicker(
        {
            dateFormat: "dd/mm/yy",
            changeMonth: true,
            changeYear: true,
            firstDay: 1
        });//.datepicker( "option", "dateFormat", "yy-mm-dd")  
    
        $( '#create-post-form' ).ipValidate( {

            required : { //required is a class
                rule : function() {
                    return $( this ).val() == '' ? false : true;
                },
                onError : function() {
                    if( !$( this ).parent().hasClass( 'element_container' ) ) {
                        $( this ).wrap( '<div class="element_container error_div"></div>' ).after( '<span>' + $( this ).attr( 'rel' ) + '</span>' );
                    } else if( !$( this ).parent().hasClass( 'error_div' ) ) {
                        $( this ).next().text( $( this ).attr( 'rel' ) ).parent().addClass( 'error_div' );
                    }
                },
                onValid : function() {
                    $( this ).next().text( '' ).parent().removeClass( 'error_div' );
                    $(this).focus();
                }
            },


            nonzero : { //nonzero is a class

                rule : function() {
                    return $( this ).val() == 0 ? false : true;
                },
                onError : function() {
                    $( this ).css( 'border', '2px solid #F7ACAC' );
                },
                onValid : function() {
                    $( this ).css( 'border', '2px solid #dbdbdb' );
                }
            },

            postOptions : {  //postOptions is a class

                rule : function() {
                    return $( 'input[type=radio]:checked' ).length < 1 ? false : true;
                },
                onError : function() {
                    $( '.chk_div', this ).css( 'border', '2px solid #F7ACAC' );
                },
                onValid : function() {
                    $( '.chk_div', this ).css( 'border', '2px solid #dbdbdb' );
                }
            },

            submitHandler : function() {
                alert( 'Form is ready for submit.' );
                return false;
            }
        });
    
        $('.resetCSP').click(function(){
            $('input[name="CSP"]').attr('checked', false);
        });
        $('.resetciv').click(function(){
            $('input[name="civ_contact"]').attr('checked', false);
        });
    
    });
</script>