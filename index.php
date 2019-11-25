<?php require("usr.php");?>
<html>
<head>
</head>
<body>
    <?php echo "tpMySQL";
    $usr1 = new usr();
    $usr1->setNom("Jae");
    $usr1->afficherNom();
    $usr1->setMDP("1234");

    $usr2 = new usr();
    $usr2->setNom("Flo");
    $usr2->afficherNom();
    $usr2->setMDP("4321");
    ?>

    <form action="index.php" method="POST">
    <label>Entrez pseudo</label>
    <input type="text" name="entree3"/>
    <label>Entrez mot de passe</label>
    <input type="text" name="entree4" />
    <input type="submit" name="Validerrr" value="Cliquer sur valider" />
    </form>
    <?php if(isset($_POST['entree3']) && $_POST['entree3'] == $usr1->_nom && isset($_POST['entree4']) && $_POST['entree4'] == $usr1->_mdp){
        ?><p>Connecte en tant que Jae</p><?php
    }
    else if(isset($_POST['entree3']) && $_POST['entree3'] == $usr2->_nom && isset($_POST['entree4']) && $_POST['entree4'] == $usr2->_mdp){
        ?><p>Connecte en tant que Flo</p><?php
    }
    else{
        ?><p>Echec</p><?php
    }
    ?>
</body>
</html>