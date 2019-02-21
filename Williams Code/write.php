<style>
    
    p {
        font-family: 'Arial';
        font-size: 15px;
        color: #b7b7b7;
        top: 50%;
        left: 50%;
    }
    
    body{
        margin: 0;
        padding: 0;
        font-family: 'Helvetica';
        background: url(Images/Steam-Background.png) no-repeat;
        background-size: cover;
    }
</style>

<?php

//define variables
$servername = "firebird.sheridanc.on.ca";
$username = "ixd818";
$password = "Sunbirds0";
$dbname = "ixd818_SteamPowered";

//create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//check connection
if ($conn -> connect_error) {
    die("connection failed:" .$conn -> connect_error);
}

$CommunityID_input  = $conn -> real_escape_string($_POST['CommunityID']);

$ForumTittle_input    = $conn -> real_escape_string($_POST['ForumTittle']);

$PostedBy_input       = $conn -> real_escape_string($_POST['PostedBy']);

$DatePosted_input = $conn -> real_escape_string($_POST['DatePosted']);

$TimePosted_input = $conn -> real_escape_string($_POST['TimePosted']);

$CommentTotal_input = $conn -> real_escape_string($_POST['CommentTotal']);


$query = "INSERT into Community (CommunityID, ForumTittle, PostedBy, DatePosted, TimePosted, CommentTotal) VALUES ('" . $CommunityID_input . "' , '" . $ForumTittle_input . "' , '" . $PostedBy_input . "' , '" . $DatePosted_input . "' , '" . $TimePosted_input . "' , '" . $CommentTotal_input . "')";

$success = $conn -> query($query);

if (!$success) {
    die("Couldn't enter data: " .$conn -> error);
}

echo "<p>Thanks for posting on the Steam Forms!</p><br>";

//close connection
$conn -> close();

?>
