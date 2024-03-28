<?php
    require("model/Characters-model.php");
    use Dompdf\Dompdf;
    ?>

    <?php
        class CharactersControl {
            public function listCharacters(){
                $character = new Characters;
                $characters = $character -> getCharacters();
                require ("view/charactersView.php");
            }
        
       
            public function downloadPdf($id){
              // Récupérer les données du perso
              $characterSingle = new Characters;
              $character = $characterSingle -> getSingleCharacters($id);

              // Générer le PDF
              $dompdf = new Dompdf();

              $htmlToPdf = "<h1>".$character['name']."</h1>
              <p>".$character['description']."</p>";

              $dompdf->loadHtml($htmlToPdf);
              
              // (Optional) Setup the paper size and orientation
              $dompdf->setPaper('A4', 'landscape');
              
              // Render the HTML as PDF
              $dompdf->render();
              
              // Output the generated PDF to Browser
              $dompdf->stream($character['name']);

            }
        }
?>