<?php
    $api_version = "1.0.0"; //DON'T TOUCH //

    $db = new PDO('mysql:dbname=#DBNAME#;host=#HOST#', '#USER#', '#PASSWORD#' ); //REPLACE '#HOST#','#USER#','#PASSWORD#' FOR YOUR DATABASE//
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //DON'T TOUCH//
	$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ); //DON'T TOUCH//

    //(in the plugin server )//
    $authme_table = "auth";
    $authme_table_realname = "realname";
    $authme_table_password = "password";
?>