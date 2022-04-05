<?php
    require("models/model.php");
    
    function teams_and_heroes() {
        $result_teams = get_all_teams();
        $result_heroes = get_all_heroes();

        require("views/index_view.php");
    }

    function hero($id) {
        $result_hero = get_hero_by_id($id);

        require("views/character_view.php");
    }

?>