
<!DOCTYPE html>
<html>
    <head>
        <title>MarvelDex</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="/css/reset.css">
        <link rel="stylesheet" href="/css/style.css">
    </head>
    
    <body>
    
        <header>
            <img class="header__pic" src="/logo/Marvel_Logo.png" alt="Logo Marvel rouge et blanc">
            <h1 class="header__title">Repository</h1>
        </header>

        <?php
            $servname = '127.0.0.1';
            $dbname = 'marvel';
            $user = 'marvel';
            $pass = 'marvel@0503';
            
            
            //On essaie de se connecter
            try{
                $dbconnect = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
                //On définit le mode d'erreur de PDO sur Exception
                $dbconnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                // echo 'Connexion réussie';

                $teams = $dbconnect->prepare("SELECT id, name FROM team");
                $teams->execute();

                $teamRes = $teams->fetchAll(PDO::FETCH_ASSOC);
                
            }
            
            /*On capture les exceptions si une exception est lancée et on affiche
             *les informations relatives à celle-ci*/
            catch(PDOException $e){
              echo "Erreur : " . $e->getMessage();
            }
        ?>

        <main>
            <!-- loop to display id and name for each team -->
            <section>
                <h2>
                    <?php
                       foreach ($teamRes as $team) {
                        print_r("#" .$team['id']. " " .$team['name']. "<br>");
                       }
                    ?>
                </h2>
                <!-- in each team, loop to display picture and name for each hero 
                Need a file which send a list of heroes organized by team -->
                <article>
                    <div>
                        <p>
                            Surnom
                        </p>
                    </div>
                </article>

            </section>
           
        </main>
        <?php
            $dbconnect = null;
        ?>
    </body>
</html>