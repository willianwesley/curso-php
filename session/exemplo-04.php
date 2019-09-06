<?php
session_id('cifn7nk8dd1tlrdms9pgq03nsd');

require_once("config.php");

session_regenerate_id();

echo session_id();

var_dump($_SESSION);
?>