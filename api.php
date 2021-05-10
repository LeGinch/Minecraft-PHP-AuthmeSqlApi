<?php
//API Développé par Darren RAPETTI-MAUSS pour MINELUXMC.FR | DO NOT DISTRIBUTE

    require 'config.php';

    $response = array();

    if($db)
    {
        $sql = "SELECT * FROM " . $authme_table . " WHERE " . $authme_table_realname . " = ?" ;

        if(!empty($_GET['u'] && !empty($_GET['p']))){
            $u = $_GET['u'];
            $p = $_GET['p'];
            
            $req = $db->prepare($sql);
            $req->execute([$u]);
			$user = $req->fetch();
            if($user)
            {
                $i = "Response";
                $e = "ApiInfo";
                $author = "Darren Rapetti-Mauss";
                if($p == $user->$authme_table_password)
                {
                    header("Content-Type: JSON");
                    $response[$e]['ApiVersion'] = $api_version;
                    $response[$e]['Author'] = $author;
                    $response[$i]['Pseudo'] = $user->$authme_table_realname;
                    $response[$i]['Password'] = "true";
                    echo json_encode($response, JSON_PRETTY_PRINT);                    
                } else 
                {
                    header("Content-Type: JSON");
                    $response[$e]['ApiVersion'] = $api_version;
                    $response[$e]['Author'] = $author;
                    $response[$i]['Pseudo'] = $user->$authme_table_realname;
                    $response[$i]['Password'] = "false";
                    echo json_encode($response, JSON_PRETTY_PRINT);

                 }

            }
        }
    }
?>