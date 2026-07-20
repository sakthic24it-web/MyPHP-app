<?php
// index.php
date_default_timezone_set("Asia/Kolkata");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Index Page</title>
    <style>
        body{
            margin:0;
            font-family:Arial, sans-serif;
            background:#f4f4f4;
            display:flex;
            justify-content:center;
            align-items:center;
            height:100vh;
        }

        .container{
            background:#fff;
            padding:30px;
            border-radius:10px;
            box-shadow:0 0 10px rgba(0,0,0,0.2);
            text-align:center;
        }

        h1{
            color:#007BFF;
        }

        p{
            font-size:18px;
            color:#333;
        }

        button{
            padding:10px 20px;
            background:#007BFF;
            color:white;
            border:none;
            border-radius:5px;
            cursor:pointer;
            font-size:16px;
        }

        button:hover{
            background:#0056b3;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Welcome to My PHP Website</h1>

    <?php
        echo "<p>Hello, Sakthi!</p>";
        echo "<p>Today's Date: " . date("d-m-Y") . "</p>";
        echo "<p>Current Time: " . date("h:i:s A") . "</p>";
    ?>

    <br><br>

    <button onclick="showMessage()">Click Me</button>
</div>

<script>
function showMessage(){
    alert("Welcome to PHP!");
}
</script>

</body>
</html>