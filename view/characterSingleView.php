<?php
    ob_start();
    ?>

<?php
// echo "<p>Tableau ? :</p>";
// echo "<pre>";
// var_dump($characters);
// echo "</pre>";

use Dompdf\Dompdf;


?>

<?php
    $content = ob_get_clean();
    require ("baseView.php");
    ?>