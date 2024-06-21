<?php
require "connect.php";

$id = $_GET['id'];

// $sql = "SELECT * FROM `posts` WHERE id =:id";
// $statement = $pdo -> prepare($sql);
// $statement = execute($_GET);
// $posts = $statement -> fetch(Pdo::FETCH_ASSOC);

$query = $pdo->query("SELECT * FROM `posts` WHERE id =$id");
$post = $query->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>
            Изучение CRUD
        </title>
        <meta name="description" content="Chartist.html">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
        <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
        <link id="appbundle" rel="stylesheet" media="screen, print" href="css/app.bundle.css">
        <link id="myskin" rel="stylesheet" media="screen, print" href="css/skins/skin-master.css">
        <link rel="stylesheet" media="screen, print" href="css/statistics/chartist/chartist.css">
        <link rel="stylesheet" media="screen, print" href="css/miscellaneous/lightgallery/lightgallery.bundle.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-solid.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-brands.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-regular.css">
    
    </head>
    <body class="mod-bg-1 mod-nav-link ">
        <main id="js-page-content" role="main" class="page-content">
            <div class="col-md-6">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Список статей
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="fs-lg fw-300 p-5 bg-white border-faded rounded mb-g">
                        <form action = "vendor/update.php" method = "post">
                        <input type="hidden" name="id" value="<?=$post['id']?>">
                        <label for="text">Заголовок</label><br>
                        <input value="<?=$post['title']?>" type="text" class="form-control" id="text" placeholder="Зголовок" name = "title"><br>

                        <label for="text">Ввод</label><br>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name = "content"><?=$post['content']?></textarea><br>
                        
                        <button class="btn btn-success">редактировать</button>
                        
                    </div>
                </div>
            </div>
        </main>

    </body>
</html>





