<?php
    require("model/Characters-model.php");
    ?>

    <?php
        class CharactersControl {
            public function listCharacters(){
                $character = new Characters;
                $characters = $character -> getCharacters();
                require ("view/charactersView.php");
            }
        }
        class CharacterSingleControl {
            public function getSingleCharac(){
                $character = new CharacSingle();
                $characters = $character -> getSingleCharac();
                require ("view/characterSingleView.php");
            }
        }
?>