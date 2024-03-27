<?php
    require ("controller/characters-controller.php");
    ?>

<?php
    if (isset($_GET['page'])){
        try{
            $charac = new CharactersControl();
            $charList = $charac->listCharacters();
        }
        catch (Exception){
            $error = $e->getMessage();
        }
    }else{
        require("view/errorView.php");
    }
?>