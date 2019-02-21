<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Steam Forums</title>
    <style>
        
    body{
        margin: 0;
        padding: 0;
        font-family: 'Helvetica';
        background: url(Images/Steam-Background.png) no-repeat;
        background-size: cover;
    }
        
    .login-box{
        width: 550px;
        position: absolute;
        top: 55%;
        left: 52%;
        transform: translate(-50%, -50%);
    }

    .login-box h1{
        float: left;
        font-size: 35px;
        color: #D8D8D8;
        border-bottom: 6px solid #D8D8D8;
        margin-bottom: 40px;
        padding: 13px 0;
    }
        
    .textbox{
        width: 100%;
        font-size: 15px;
        padding: 8px 0;
        margin: 8px 0;
        color: #D8D8D8;
    }
        
    label,
    input,
    submit {
        font-family: 'Arial';
        font-size: 15px;
    }
        
        
    #button {
        width: 350px;
        height: 45px;
        background: #202020;
        color: white;
        border: none;
        border-radius: 15px;
        padding: 5px;
        font-size: 15px;
        font-family: 'Roboto';
    }
        
        #button:hover{
            background-color: #3F3F3F;
            opacity: inherit;
            color: #eaeaea;
        }

    </style>
</head>

<body>
    <div class="login-box">

    <h1>Create a Steam Thread and discuss on any topic</h1>

    <form id="signup_form" action="write.php" method="post">
        <div class="textbox">
        <label> Community ID</label><br>
        <input type="text" name="CommunityID" required><br><br>
        <label>Forum Title </label><br>
        <input type="text" name="ForumTittle" required><br><br>
        <label>Posted By</label><br>
        <input type="text" name="PostedBy" required><br><br>
        <label>Date Posted</label><br>
        <input type="text" name="DatePosted" required><br><br>
        <label>Time Posted</label><br>
        <input type="text" name="TimePosted" required><br><br>
        <label>Comment Total</label><br>
        <input type="text" name="CommentTotal" required><br><br>
        <input id="button" type="submit" value="Create Forum Thread" />
    </div>
    </form>
    </div>
</body>

</html>
