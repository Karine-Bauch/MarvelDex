<?php
    function get_all_teams() {
        require("controllers/connect_controller.php");

        $all_teams = $dbconnect->prepare("SELECT id, name FROM team");
        $all_teams->execute();
        $result_teams = $all_teams->fetchAll(PDO::FETCH_ASSOC);
        return $result_teams;
    }

    function get_all_heroes() {
        require("controllers/connect_controller.php");

        $all_heroes = $dbconnect->prepare("SELECT id, lastname, firstname, identity, picture, origin, description, team FROM hero");
        $all_heroes->execute();
        $result_heroes = $all_heroes->fetchAll(PDO::FETCH_ASSOC);
        return $result_heroes;
    }

    function get_hero_by_id($id) {
        require("controllers/connect_controller.php");

        $one_hero = $dbconnect->prepare("SELECT hero.id, lastname, firstname, identity, picture, origin, description, team.name AS team, GROUP_CONCAT(DISTINCT power SEPARATOR ', ') AS powers FROM hero LEFT JOIN team ON team.id = hero.team LEFT JOIN hero_power ON hero_power.hero_id = hero.id LEFT JOIN power ON power.id = hero_power.power_id WHERE hero.id=? GROUP BY hero.id");
        $one_hero->execute(array($id));
        $result_hero = $one_hero->fetchAll(PDO::FETCH_ASSOC);
        return $result_hero[0];
    }
?>