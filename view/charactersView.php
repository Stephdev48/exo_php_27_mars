<?php
    ob_start();
    ?>

<?php

?>

<?php
    $content = ob_get_clean();
    require ("baseView.php");
    ?>