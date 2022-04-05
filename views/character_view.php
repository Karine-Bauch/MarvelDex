<?php require("partials/header.php"); ?>

        <main class="main">
            <div class="main__name bold">
                    <?php echo $result_hero['identity']; ?>
            </div>
            <div class="main__container">
                <div class="hero-container">
                    <div class="hero-pic__container">
                        <img class="hero-pic" src="/public/hero_pic/<?php echo $result_hero['picture'] ?>" alt="<?php echo $result_hero['picture'] ?>">
                    </div>
                    <article class="hero-infos">
                        <p class="hero-infos__base">
                            <span class="bold sweet">First name: </span><?php echo $result_hero['firstname'] ?> <br>
                            <span class="bold sweet">Lastname: </span><?php echo $result_hero['lastname'] ?> <br>
                            <span class="bold sweet">Team: </span><?php echo $result_hero['team'] ?> <br>
                            <span class="bold sweet">Origin: </span><?php echo $result_hero['origin'] ?> <br>
                            <span class="bold sweet">Powers: </span><?php echo $result_hero['powers'] ?> <br>
                        </p>
                        
                        <p class="hero-infos__desc">
                            <div class="hero-infos__title bold sweet">Description:</div>
                            <div class="hero-infos__text"> <?php echo $result_hero['description'] ?> </div>
                        </p>
                    </article>
                </div>

                <div>

                </div>
            </div>
        </main>
    </body>
</html>