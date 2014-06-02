<nav class="clearfix navbar navbar-fixed-top" style="margin:0">
    <ul class="clearfix">
        <?php if (!isset($_SESSION['user'])) : ?>
        
        
        <li>
            <a data-toggle="tooltip" data-placement="bottom" title="Accueil" class="home" href="./index.php">
                <i class="icon-home icon-large"></i>
                <span>Accueil</span>
            </a>
        </li>
        <li>
            <a data-toggle="tooltip" data-placement="bottom" title="Fiche d'inscription"  class="inscription"  href="./index.php?p=inscription">
                <i class="icon icon-file-alt icon-large"></i>
                <span>Inscription</span>
            </a>
        </li>
        <li>
            <a data-toggle="tooltip" data-placement="bottom" title="Liste des membres"  class="liste"  href="./index.php?p=liste">
                <i class="icon-user icon-large"></i>
                <span>Membres</span>
            </a>
        </li>
        <li><a data-toggle="tooltip" data-placement="bottom" title="Présences"  class="presence"  href="./index.php?p=presence">
                <i class="icon-calendar-empty icon-large"></i>
                <span>Présences</span>
            </a></li>
        <li>
            <a data-toggle="tooltip" data-placement="bottom" title="Paiements"  class="paiement"  href="./index.php?p=paiement">
                <i class="icon-money icon-large"></i>
                <span>Paiements</span>
            </a>
        </li>
        <li>
            <a data-toggle="tooltip" data-placement="bottom" title="Statistiques"  class="statistiques"  href="./index.php?p=statistiques">
                <i class="icon icon-bar-chart icon-large"></i>
                <span>Statistiques</span>
            </a>
        </li>
            <li id="deco">
            <a href="index.php?deco">
                <i class="icon icon-remove icon-large"></i>
                <span>Déconnexion</span>
            </a>
        </li>
        <?php else: ?>
               <li>
            <a style="cursor:pointer" onClick="focusC();" for="conn">
                <i class="icon icon-user icon-large"></i>
                <span>Connexion</span>
            </a>
        </li>
        <li>
               <form style="margin:5px" method="post" action="./index.php"><input id="conn" type="password" name="con"/></form>
            
        </li>
        <?php endif; ?>
    </ul>
    <a href="#" id="pull"><img style="height:35px;margin:0;margin-top:-5px;padding:0" src="./img/km.jpg"/>&nbsp;&nbsp;Krav Maga Club Lille</a>
</nav>
<div id="separateur"></div>

<script>
    $(function() {
        var pull        = $('#pull');
        menu 		= $('nav ul');
        menuHeight	= menu.height();

        $(pull).on('click', function(e) {
            e.preventDefault();
            menu.slideToggle();
        });

        $(window).resize(function(){
            var w = $(window).width();
            if(w > 320 && menu.is(':hidden')) { menu.removeAttr('style'); }
            if(w < 600) {
            $('input[type=date]').attr('readonly', true);
            $("nav li a").tooltip('disable')
            }
            else{
            $('input[type=date]').attr('readonly', false);
            }
            
        });
   
        $("a.<?php echo $p ?>").addClass('active');
        $("nav li a").tooltip();
        $(window).resize();

        
    });
    function focusC(){$('#conn').focus();}
</script>
<style>
    .tooltip {border:none;text-shadow: none;font-size:15px}
select[name=DataTables_Table_0_length]{width:auto;}
</style>

