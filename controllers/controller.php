<?php
// Need model.php for sql queries
    require("models/model.php");
    
    // To get all heroes and all teams to display in homepage
    function teams_and_heroes() {
        $result_teams = get_all_teams();
        $result_heroes = get_all_heroes();

        require("views/index_view.php");
    }

    // To get one heroe with all informaitons to display in heropage
    function hero($id) {
        $result_hero = get_hero_by_id($id);

        require("views/character_view.php");
    }

?>