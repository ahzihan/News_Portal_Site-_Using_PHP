<?php 
require('connection.php');
if (isset($_POST['btn'])) {
$categoryID=$_POST["categoryID"];
$heading=$_POST["heading"];
$description=$_POST["description"];  


$ext = pathinfo($_FILES["photo"]["name"], PATHINFO_EXTENSION);
$rand = rand(100000, 999999);
$photoName = $rand .'.'. $ext;
move_uploaded_file($_FILES["photo"]["tmp_name"], "img/".$photoName);



$sql=$db->query("INSERT INTO tbl_news(categoryID,heading,photo,description)VALUES('$categoryID','$heading','$photoName','$description')");
header('Location: view.php');
$db->close();
}

?>
<a href="add_news.php">Add News</a> | <a href="view.php">View News</a>
<hr>
<h1>Add News Form</h1>
<form action="" method="post" enctype="multipart/form-data">
        <table>
        <tr>
            <td>Category ID</td>
            <td>:</td>
            <td>
            <select name="categoryID" >
                <option>Select</option>
                <?php
                $cc=$db->query('SELECT * FROM tbl_category');
                while ($id=$cc->fetch_assoc()) {
                    ?>
                    <option value="<?php echo $id["id"]?>"><?php echo $id["name"]?></option>
                <?php }?>
            </select>
            </td>
        </tr>
        <tr>
            <td>Heading</td>
            <td>:</td>
            <td><input type="text" name="heading"></td>
        </tr>
        <tr>
            <td>Photo</td>
            <td>:</td>
            <td><input type="file" name="photo"></td>
        </tr>
        <tr>
            <td>Description</td>
            <td>:</td>
            <td><textarea name="description" cols="30" rows="4"></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name="btn" value="Add News"></td>
        </tr>
        </table>
</form>