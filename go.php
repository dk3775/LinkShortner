<?php
    $id=$_GET['id'];
    include_once("config.php");
    $result = mysqli_query($connect, "SELECT link_content FROM link_details WHERE link_id='$id';");
    $row = mysqli_fetch_array($result);
    $link = $row['link_content'];
    header("Location: $link");
    if(!isset($id)){
        header("Location: index.php");
    }
?>