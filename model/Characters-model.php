<?php
    require_once("Manager.php");
    require_once("./vendor/autoload.php");
    ?>

    <?php
        class Characters extends Manager {
            public function getCharacters(){
                $client = new \GuzzleHttp\Client();
                $response = $client->request('GET', 'https://dragonball-api.com/api/characters?limit=70');
                try {
                    if ($response->getStatusCode()==200){
                        // echo $response->getStatusCode(); // 200
                        // echo $response->getHeaderLine('content-type'); // 'application/json; charset=utf8'
                        // echo "<pre>".$response->getBody()."</pre>"; // '{"id": 1420053, "name": "guzzle", ...}'
                        return json_decode($response->getBody()->getContents(), true);
                    }else{
                        require ("view/errorView.php");
                    }
                }
                catch(Exception $e){
                    die($e->getMessage());
                }
            }
        }

        class CharacSingle {
            public function getCharacter(){
               
        }
    }
        ?>