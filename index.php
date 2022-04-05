
<!DOCTYPE html>
<html>
    <head>
        <title>MarvelDex</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    
    <body>
    
        <header class="header">
            <img class="header__pic" src="/logo/Marvel_Logo.png" alt="Logo Marvel rouge et blanc">
            <h1 class="header__title">MarvelDex</h1>
        </header>

        <?php require("controllers/connect_controller.php"); ?>

        <main class="main-container">
            <!-- loop to display id and name for each team -->
            <?php foreach ($result_teams as $team): ?>
            <a class="team" href="character.php">
                <h2 class="team__title">
                    <?php echo "#" .$team['id']. " - " .$team['name']; ?>
                </h2>
                    <div class="team__container">
                        <!-- in each team, loop to display picture and name for each hero -->
                        <?php foreach ($result_heroes as $hero): ?>
                        
                        <?php if ($team['id'] === $hero['team']): ?>
                            <article class="article">
                                <img class="article__pic" src="hero_pic/<?php echo $hero['picture'] ?>" alt="<?php echo $hero['picture'] ?>">
                                <div class="article-title"></div>
                                <p class="article-title__name">
                                        <?php echo $hero['identity']; ?>
                                </p>
                            </article>
                        <?php endif ?>
                        
                        <?php endforeach; ?>
                    </div>
            </a>
            <?php endforeach; ?>
           
        </main>
        <?php $dbconnect = null; ?>
    </body>
</html>