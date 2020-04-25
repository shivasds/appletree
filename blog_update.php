
<?php
require_once('dbcon.php');
if(isset($_POST['blog_submit']))
{
	$name_file = $_FILES['blog_image']['name'];
    $tmp_name = $_FILES['blog_image']['tmp_name'];

    $local_image='upload/';
$temp = explode(".", $name_file);
$newfilename = round(microtime(true)) . '.' . end($temp);
    if(move_uploaded_file($tmp_name, $local_image.$newfilename))
        {
        	$id=$_POST['id'];
            $heading=$_POST['heading'];
            $side_heading=$_POST['side_heading'];
            $image=$name_file;
            $content=$_POST['content'];
            $date = date('Y-m-d H:i:s');
            if($name_file=='')
            $sql="update blog set heading ='$heading',side_heading='$side_heading',content='$content' where id=$id ";
        else
        	$sql="update blog set heading ='$heading',side_heading='$side_heading',content='$content',image_url='$newfilename' where id=$id ";
            if ($conn->query($sql) === TRUE) {
    echo "<script>alert('blog updated successfully');location.href='blog-list';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
        }



}

?>