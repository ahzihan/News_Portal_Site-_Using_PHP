<?php

require('connection.php');
$data=$db->query('SELECT * FROM tbl_news');

?>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<a href="add_news.php">Add News</a> | <a href="view.php">View News</a>
<hr>
<h1>View News</h1>
<table class="table table-bordered table-hover tbl-info" width="100%">

    <tr class="active bg-dark">
        <th>ID</th>
        <th>Heading</th>
        <th>Description</th>
        <th>Photo</th>
        <th>Action</th>
    </tr>
    <?php while($id=$data->fetch_assoc()){ 
        $c=$db->query("SELECT name FROM tbl_category WHERE id=".$id['categoryID']);
        $cc=$c->fetch_assoc();
        ?>
    <tr>
        <td><?php echo $cc['name'];?></td>
        <td><a href="details.php?id=<?php echo $id['id'];?>"></a><?php echo $id['heading'];?></a></td>
        <td><?php echo $id['description'];?></td>
        <td><?php echo $id['photo'];?></td>
        <td> 
		<a href="details.php?id=<?php echo $id['id'] ?>" class="btn btn-xs btn-primary">View</a>
		<a href="update.php?id=<?php echo $id['id'] ?>" class="btn btn-xs btn-success">Edit</a>
		<a href="details.php?id=<?php echo $id['id'] ?>" class="btn btn-xs btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
	</td>

    </tr>
    <?php }?>
</table><br><br>

