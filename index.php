
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
            <h1 class="header__title">MarvelDex</h1>
        </header>

        <?php require("controllers/connect_controller.php"); ?>

        <main>
            <!-- loop to display id and name for each team -->
            <section>
                <?php
                foreach ($result_teams as $team): ?>
                <h2>
                    <?php echo "#" .$team['id']. " " .$team['name']; ?>
                </h2>
                    <!-- in each team, loop to display picture and name for each hero -->
                    <?php foreach ($result_heroes as $hero): ?>
                    <article>
                    <?php if ($team['id'] === $hero['team']): ?>
                        <div>
                            <!-- <img src="hero_pic/<?php echo $hero['picture'] ?>" alt="<?php echo $hero['picture'] ?>"> -->
                            <p>
                                <?php echo $hero['identity']; ?>
                            </p>
                        </div>
                    <?php endif ?>
                    </article>
                    <?php endforeach; ?>

                <?php endforeach; ?>                

            </section>
           
        </main>
        <?php $dbconnect = null; ?>
    </body>
</html>