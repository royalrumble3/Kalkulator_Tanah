<?php
$id = $_GET['id'];
if (isset($_GET['id'])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "testing";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $db);
    $query = "DELETE FROM tbl_comment WHERE comment_id = '$id'";
    mysqli_query($conn, $query);
    header("location: aaaa.html");
}
