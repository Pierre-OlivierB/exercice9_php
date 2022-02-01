<?php 
    
if (isset($_POST['ok'])) {
    $prenom=$_POST['prenom'];
    $nom=$_POST['nom'];
    $auteur="$prenom $nom";
}
// echo 'veuillez rentrer des données valides';
?>
<form action="saisie.php" method="post">
    <h1>Saisie</h1>
    <label>Prénom :</label>
    <input type="text" size="40" maxlength="40" name="prenom" id="">
    <br>
    <label>Nom :</label>
    <input type="text" size="40" maxlength="40" name="nom" id="">
    <button type="submit" name="ok" value="Enregistrer">Enregistrer</button>
</form>
<div><?= (isset($auteur))?$auteur:''?></div>