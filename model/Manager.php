<?php
use GuzzleHttp\Client;
    class Manager {
        protected function connexion(){
            try{
                $client = new Client(['base_uri' => 'https://dragonball-api.com/api/characters?limit=70']);
                $listCharacters = $client->request('GET', 'characters?limit=70');
                return $listCharacters;
            }
            catch(Exception $e){
                die($e->getMessage());
            }
        }
}