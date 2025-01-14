<?php

require "function.php";
require "Database.php";
require "config.php";

$config = require("config.php");
$db = new Database($config["database"]);
require "router.php";
?>