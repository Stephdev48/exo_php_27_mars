<?php
    ob_start();
    ?>

<?php
// echo "<p>Tableau ? :</p>";
// echo "<pre>";
// var_dump($characters);
// echo "</pre>";

use Dompdf\Dompdf;

foreach ($characters['items'] as $character_single){
    ?>
    <li>
        <img src="<?php echo $character_single['image']; ?>" alt="image perso" width="300px"/>
        <h1>Nom : <?php echo $character_single['name']; ?></h1>
        <h3>Race :  <?php echo $character_single['gender']; ?></h3>
        <p>Description :<?php echo $character_single['description']; ?></p>
        <?php Kint::dump($characters); ?>
        <a href="index.php?page=<?php echo $character_single['id']; ?>" target="_blank">voir plus</a>
    </li>
    <?php
}
?>

<?php
    $content = ob_get_clean();
    require ("baseView.php");
    ?>