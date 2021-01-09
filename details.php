<?php

$host = "localhost";
$username = "root";
$password = "";
$dbName = "db_news";

$db = new mysqli($host, $username, $password);
$db->select_db($dbName);
$data = $db->query('SELECT * FROM tbl_news WHERE id=' . $_GET['id']);
$d = $data->fetch_assoc();

$db_news = new mysqli($host, $username, $password);
$db_news->select_db($dbName);
$menu = $db_news->query('SELECT * FROM tbl_category');
?>
<html>
<title>Vua News</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
    </style>
    <body>
        <div class="container-fluid">
            <div class="row">
                <header class="w3-container w3-center w3-padding-32"> 
                    <h1><b>Bangla Vua News</b></h1>
                    <p>Welcome to the <span class="w3-tag">Bangla Vua News</span></p>
                </header>
            </div>
            <div class="row">
                <nav class="navbar navbar-inverse">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>                        
                            </button>
                        </div>
                        <div class="collapse navbar-collapse" id="myNavbar">
                            <div class="navbar-header">
                                <a class="navbar-brand" href="news.php"><span><b>LOGO</b></span></a>
                            </div>
                            <ul class="nav navbar-nav">
                                <?php while ($id = $menu->fetch_assoc()) { ?>
                                    <li><a href="news.php?id=<?php echo $id['id']; ?>"><?php echo $id['name']; ?></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        
        <div class="container">
            <div class="col-md-8 offset-2">
                <h1 style="padding-bottom: 10px"><?php echo $d['heading']; ?></h1>
                <img src="img/<?php echo $d['photo']; ?>" class="responsive" height="350" width="700" alt="Image">
                <p style="padding-top: 30px"><?php echo $d['description']; ?></p>
            </div>
        </div>
        <footer class="w3-container w3-dark-grey w3-padding-32 w3-margin-top">
            <button class="w3-button w3-black w3-disabled w3-padding-large w3-margin-bottom">Previous</button>
            <button class="w3-button w3-black w3-padding-large w3-margin-bottom">Next »</button>
            <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
        </footer> 
    </div>
    </body>
</html>



