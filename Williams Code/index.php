<!DOCTYPE html>
<html>
<head>
<title>Steam</title>
<style type="text/css">
    
    
    body{
        margin: 0;
        padding: 0;
        font-family: 'Helvetica';
        background: url(Images/Steam-Background.png) no-repeat;
        background-size: cover;
    }
    
    table{
        top: 75%;
        left: 60%;
        border-collapse: collapse;
        width: 100%;
        color: #202020;
        font-family: "Helvetica";
        font-size: 12px;
        text-align: left;
    }
    
    th{
        color: #D8D8D8;
;
    }
    
    tr:nth-child(even){
        background-color: #f2f2f2;
        opacity: inherit;
    }
    
     .table-box{
        width: 600px;
        position: absolute;
        top: 55%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
    
     .button-box{
        width: 100px;
        position: absolute;
        top: 55%;
        left: 50%;
        transform: translate(-50%, 200%);
    }
    
    #button {
        width: 80px;
        height: 50px;
        background: #202020;
        color: white;
        border: none;
        border-radius: 15px;
        padding: 5px;
        font-size: 14px;
        font-family: 'Arial';
    }
        
        #button:hover{
            background-color: #3F3F3F;
            opacity: inherit;
            color: #D8D8D8;

        }
    
    
</style>
</head>
<body>
<div class="table-box">
<table>
    <tr>
       
            <th>CommunityID</th>
            <th>ForumTittle</th>
            <th>PostedBy</th>
            <th>DatePosted</th>
            <th>TimePosted</th>
            <th>CommentTotal</th>

    </tr>
    </div>
    
<div class="button-box">
  <form action="http://ixd818.firebird.sheridanc.on.ca/Williams Code/signup.php">
    <button id="button" type="submit">Create Thread</button>
</form>  
    
</div>
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
  
$sql = "SELECT CommunityID, ForumTittle, PostedBy, DatePosted, TimePosted, CommentTotal FROM Community";

$result = $conn-> query($sql);
    
if($result-> num_rows > 0){
    while($row = $result-> fetch_assoc()){
        echo "<tr><td>". $row["CommunityID"]. "</td><td>". $row["ForumTittle"]."</td><td>". $row["PostedBy"]."</td><td>". $row["DatePosted"]."</td><td>". $row["TimePosted"]."</td></tr>". $row["CommentTotal"]. "</td><td>" ;
    }
    
    echo "</table>";
}
    else{
        echo "0 results";
    }
    
$conn-> close();
?>
    
    
</table>   
    
    
</body>

</html>