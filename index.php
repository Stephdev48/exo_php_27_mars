<?php
    require ("controller/characters-controller.php");
    Kint::$enabled_mode = false; // Disable kint if set on 'false'
    Kint::dump($GLOBALS, $_SERVER);

    ?>

<?php
    if (isset($_GET['page'])){
       switch($_GET['page']){
        case 'pdf':
            if (isset($_GET['id']))
            $charac_single = new CharactersControl();
            $charac_display = $charac_single->downloadPdf($_GET['id']);
       }
        
    }else{
        $charac = new CharactersControl();
        $charList = $charac->listCharacters();
    }
?>