<?php require("partials/header.php"); ?>

        <main class="main">
            <div class="main__container">
            <!-- loop to display id and name for each team -->
                <?php foreach ($result_teams as $team): ?>
                <div class="team">
                    <h2 class="team__title bold">
                        <?php echo "#" .$team['id']. " - " .$team['name']; ?>
                    </h2>
                        <div class="team__container">
                            <!-- loop on each hero -->
                            <?php foreach ($result_heroes as $hero): ?>
                            
                            <!-- if team id match with hero team, display in the corresponding team -->
                            <?php if ($team['id'] === $hero['team']): ?>
                                <article class="article">
                                    <a href="index.php/?id=<?php echo $hero['id'] ?>">
                                        <img class="article__pic" src="/public/hero_pic/<?php echo $hero['picture'] ?>" alt="<?php echo $hero['picture'] ?>">
                                        <div class="article-title"></div>
                                        <p class="article-title__name bold">
                                            <?php echo $hero['identity'];
                                            echo $_GET['id']; ?>
                                        </p>
                                    </a>    
                                </article>

                            <?php endif ?>
                            
                            <?php endforeach; ?>
                        </div>
                </div>
                <?php endforeach; ?>
            </div>
        </main>
    </body>
</html>