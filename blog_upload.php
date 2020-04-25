
<?php
require_once('dbcon.php');
if(isset($_POST['blog_submit']))
{
$name_file = $_FILES['blog_image']['name'];
   // echo $name_file;
    $tmp_name = $_FILES['blog_image']['tmp_name'];
    $local_image='upload/';
    //echo $local_image.$name_file;
$temp = explode(".", $name_file);
$newfilename = round(microtime(true)) . '.' . end($temp);
    if(move_uploaded_file($tmp_name, $local_image.$newfilename))
        {
            $heading=$_POST['heading'];
            $side_heading=$_POST['side_heading'];
            $image=$name_file;
            $content=$_POST['content'];
            $date = date('Y-m-d H:i:s');

            $sql="insert into blog (heading,side_heading,image_url,content,date_added)values('$heading','$side_heading','$newfilename','$content','$date')";
            if ($conn->query($sql) === TRUE) {
    echo "<script>alert('blog inserted successfully');location.href='post-blog';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
        }



}

?>