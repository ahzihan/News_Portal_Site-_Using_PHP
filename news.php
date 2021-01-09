<?php
require('connection.php');


$data = $db->query('SELECT * FROM tbl_news ORDER BY id DESC');


$menu = $db->query('SELECT * FROM tbl_category');


$admin = $db->query('SELECT * FROM tbl_admin');
?>



<!DOCTYPE html>
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
    <body class="w3-light-grey">
        <div class="container-fluid">
            <!-- Header -->
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
            <!-- Grid -->
            <div class="row">
                <div class="col-sm-8">
                    <div class="col-sm-3 float-left">
                        <div class="well">
                            <?php while ($id = $admin->fetch_assoc()) { ?>
                                <div class="well">
                                    <img src="img/<?php echo $id['photo']; ?>" class="img-circle" height="100" width="110" alt="Avatar">
                                    <p></p>
                                    <p class="text-center"><a href="#"><?php echo $id['name']; ?></a></p>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-sm-9 float-right">
                        <?php
                        while ($id = $data->fetch_assoc()) {
                            if (isset($_GET['id'])) {
                                if ($_GET['id'] == $id['categoryID']) {
                                    ?>

                                    <div class="float-left">
                                        <div class="w3-card-4 w3-margin w3-white">
                                            <img src="img/<?php echo $id['photo']; ?>" alt="Image" style="width:100%">
                                            <div class="w3-container">
                                                <h3><b><?php echo $id['heading']; ?></b></h3>
                                            </div>

                                            <div class="w3-container">
                                                <p><?php echo substr($id['description'], 0, 250); ?></p>
                                                <div class="w3-row">
                                                    <div class="w3-col m8 s12">
                                                        <p><button class="w3-button w3-padding-large w3-white w3-border"><b><a href="details.php?id=<?php echo $id['id']; ?>">READ MORE »</a></b></button></p>
                                                    </div>
                                                    <div class="w3-col m4 w3-hide-small">
                                                        <p><span class="w3-padding-large w3-right"><b>Comments  </b> <span class="w3-tag">0</span></span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                            } else {
                                ?> 
                                <div class="float-left">
                                    <div class="w3-card-4 w3-margin w3-white">
                                        <img src="img/<?php echo $id['photo']; ?>" alt="Image" style="width:100%">
                                        <div class="w3-container">
                                            <h3><b><?php echo $id['heading']; ?></b></h3>
                                        </div>

                                        <div class="w3-container">
                                            <p><?php echo substr($id['description'], 0, 250); ?></p>
                                            <div class="w3-row">
                                                <div class="w3-col m8 s12">
                                                    <p><button class="w3-button w3-padding-large w3-white w3-border"><b><a href="details.php?id=<?php echo $id['id']; ?>">READ MORE »</a></b></button></p>
                                                </div>
                                                <div class="w3-col m4 w3-hide-small">
                                                    <p><span class="w3-padding-large w3-right"><b>Comments  </b> <span class="w3-tag">0</span></span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        <?php } ?>
                    </div>
                </div>
                <!-- Introduction menu -->
                <div class="col-sm-4 float-right">
                    <div class="w3-card w3-margin">
                        <div class="w3-container w3-padding">
                            <h4>Popular News</h4>
                        </div>
                        <ul class="w3-ul w3-hoverable w3-white">
                            <li class="w3-padding-16">
                                <img src="/w3images/workshop.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
                                <span class="w3-large">Lorem</span><br>
                                <span>Sed mattis nunc</span>
                            </li>
                            <li class="w3-padding-16">
                                <img src="/w3images/gondol.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
                                <span class="w3-large">Ipsum</span><br>
                                <span>Praes tinci sed</span>
                            </li> 
                            <li class="w3-padding-16">
                                <img src="/w3images/skies.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
                                <span class="w3-large">Dorum</span><br>
                                <span>Ultricies congue</span>
                            </li>   
                            <li class="w3-padding-16 w3-hide-medium w3-hide-small">
                                <img src="/w3images/rock.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
                                <span class="w3-large">Mingsum</span><br>
                                <span>Lorem ipsum dipsum</span>
                            </li>  
                        </ul>
                    </div>
                    <hr> 

                    <!-- Labels / tags -->
                    <div class="w3-card w3-margin">
                        <div class="w3-container w3-padding">
                            <h4>Tags</h4>
                        </div>
                        <div class="w3-container w3-white">
                            <p><span class="w3-tag w3-black w3-margin-bottom">Travel</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">New York</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">London</span>
                                <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">IKEA</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">NORWAY</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">DIY</span>
                                <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Ideas</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Baby</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Family</span>
                                <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">News</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Clothing</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Shopping</span>
                                <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Sports</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Games</span>
                            </p>
                        </div>
                    </div>

                    <!-- END Introduction Menu -->
                </div>
            </div>
        </div>
        <br>
        <footer class="w3-container w3-dark-grey w3-padding-32 w3-margin-top">
            <button class="w3-button w3-black w3-disabled w3-padding-large w3-margin-bottom">Previous</button>
            <button class="w3-button w3-black w3-padding-large w3-margin-bottom">Next »</button>
            <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
        </footer>

    </body>
</html>
