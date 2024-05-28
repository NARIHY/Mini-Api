<!-- <?php
$tableau = range('a', 'z'); // Création d'un tableau avec les lettres de 'a' à 'z'

$recherche = isset($_GET['lettre']) ? $_GET['lettre'] : '';

?>

<form action="" method="get">
    <label for="lettre">Entrer une lettre :</label>
    <input type="text" name="lettre" id="lettre">
    <input type="submit" value="Valider">
</form>

<?php
// Afficher les éléments du tableau à partir de la lettre recherchée
$startPrinting = false;
foreach ($tableau as $lettre) {
    if ($startPrinting) {
        echo $lettre . '<br>';
    }
    if ($lettre == $recherche) {
        $startPrinting = true;
    }
}
?> -->
