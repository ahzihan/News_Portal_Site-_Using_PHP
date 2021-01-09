<?php 
require('connection.php');
if(isset($_POST["btn"])){
    $categoryID=$db->real_escape_string($_POST["categoryID"]);
    $heading=$db->real_escape_string($_POST["heading"]);
    $description=$db->real_escape_string($_POST["description"]);
    $newsID=$db->real_escape_string($_POST["newsID"]);

    $p=$db->query("SELECT photo FROM tbl_news WHERE id=".$newsID);
    $pp=$p->fetch_assoc();
    unlink('img/'.$pp['photo']);

    $ext = pathinfo($_FILES["photo"]["name"], PATHINFO_EXTENSION);
    $rand = rand(100000, 999999);
    $photoName = $rand .'.'. $ext;
    move_uploaded_file($_FILES["photo"]["tmp_name"], "img/".$photoName);

    $db->query("UPDATE tbl_news SET categoryID='$categoryID', heading='$heading', photo='$photoName', description='$description'  WHERE id=$newsID");
    header('Location: view.php');
    $db->close();
}

?>
<!DOCTYPE html>
<html>
    <body>
    <title>Vua News</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </body> 
    <body>
        <div class="container-fluid">
            <a href="add_news.php">Add News</a> | <a href="view.php">View News</a>
            <hr>
            <div class="container">
            <h1>Update News</h1>
            <form action="" method="post" enctype="multipart/form-data">

            <?php
            $row=$db->query("SELECT * FROM tbl_news WHERE id=".$_GET['id']);
            while ($data=$row->fetch_assoc()) {?>
                    <table class="table">
                    <input type="hidden" name="newsID" value="<?php echo $data['id']; ?>">
                    <tr>
                        <td>Category ID</td>
                        <td>:</td>
                        <td>
                        <select name="categoryID" class="form-control">
                            <option>Select</option>
                            <?php
                            $cc=$db->query('SELECT * FROM tbl_category');
                            while ($id=$cc->fetch_assoc()) {
                                ?>
                                <option <?php if($id['id']==$data['id']){echo "selected"; }?> value="<?php echo $id["id"]?>"><?php echo $id["name"]?></option>
                            <?php }?>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Heading</td>
                        <td>:</td>
                        <td><input type="text" name="heading" class="form-control" value="<?php echo $data['heading']?>"></td>
                    </tr>
                    <tr>
                        <td>Photo</td>
                        <td>:</td>
                        <td><input type="file" name="photo" class="form-control">
                        <img src="img/<?php echo $data['photo']?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Description</td>
                        <td>:</td>
                        <td><textarea name="description" cols="40" rows="7" class="form-control"><?php echo $data['description']?></textarea></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><input type="submit" name="btn" value="Update News"></td>
                    </tr>
                    </table>
                            <?php }?>
            </form>
            </div>
        </div>
    </body>
</html>