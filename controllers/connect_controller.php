<?php
            $servname = '127.0.0.1';
            $dbname = 'marvel';
            $user = 'marvel';
            $pass = 'marvel@0503';

            //On essaie de se connecter
            try{
                $dbconnect = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
            }
            
            /*On capture les exceptions si une exception est lancée et on affiche
             *les informations relatives à celle-ci*/
            catch(PDOException $e){
              echo "Erreur : " . $e->getMessage();
            }
            
            $all_teams = $dbconnect->prepare("SELECT id, name FROM team");
            $all_teams->execute();
            $result_teams = $all_teams->fetchAll(PDO::FETCH_ASSOC);

            $all_heroes = $dbconnect->prepare("SELECT id, lastname, firstname, identity, picture, origin, description, team FROM hero");
            $all_heroes->execute();
            $result_heroes = $all_heroes->fetchAll(PDO::FETCH_ASSOC);

        ?>