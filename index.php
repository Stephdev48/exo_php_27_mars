<?php
    require ("controller/characters-controller.php");
    Kint::$enabled_mode = true; // Disable kint if set on 'false'
    Kint::dump($GLOBALS, $_SERVER);

    ?>

<?php
    if (!isset($_GET['page'])){
        try{
            $charac = new CharactersControl();
            $charList = $charac->listCharacters();
        }
        catch (Exception){
            $error = $e->getMessage();
            require("view/errorView.php");
        }
    }else{
        $charac_single = new CharacterSingleControl();
        $charac_display = $charac_single->getSingleCharac();
    }
?>