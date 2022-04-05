<?php
    require("controllers/connect_controller.php");

    function get_all_teams() {
        $all_teams = $dbconnect->prepare("SELECT id, name FROM team");
        $all_teams->execute();
    }
?>