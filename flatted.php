<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Welcome</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Segoe UI',sans-serif;
}

body{
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    background:linear-gradient(135deg,#0f2027,#203a43,#2c5364);
    overflow:hidden;
}

.circle{
    position:absolute;
    border-radius:50%;
    background:rgba(255,255,255,0.08);
    animation:float 8s infinite ease-in-out;
}

.circle:nth-child(1){
    width:180px;
    height:180px;
    top:10%;
    left:15%;
}

.circle:nth-child(2){
    width:250px;
    height:250px;
    bottom:10%;
    right:10%;
    animation-delay:2s;
}

@keyframes float{
    50%{
        transform:translateY(-25px);
    }
}

.container{
    width:420px;
    padding:40px;
    background:rgba(255,255,255,0.08);
    backdrop-filter:blur(15px);
    border-radius:20px;
    text-align:center;
    color:white;
    box-shadow:0 8px 30px rgba(0,0,0,.4);
}

.container h1{
    font-size:40px;
    margin-bottom:10px;
}

.container p{
    color:#ddd;
    margin-bottom:25px;
    font-size:17px;
}

.time{
    font-size:22px;
    margin-bottom:25px;
    color:#00e5ff;
    font-weight:bold;
}

.btn{
    text-decoration:none;
    color:white;
    background:#00b894;
    padding:14px 35px;
    border-radius:50px;
    display:inline-block;
    font-size:18px;
    transition:.4s;
}

.btn:hover{
    background:#00cec9;
    transform:scale(1.08);
    box-shadow:0 0 20px #00cec9;
}

.footer{
    margin-top:25px;
    font-size:14px;
    color:#ccc;
}
</style>

</head>
<body>

<div class="circle"></div>
<div class="circle"></div>

<div class="container">

<?php
date_default_timezone_set("Asia/Kolkata");

$hour = date("H");

if($hour < 12){
    $greeting = "🌞 Good Morning";
}
elseif($hour < 17){
    $greeting = "☀️ Good Afternoon";
}
else{
    $greeting = "🌙 Good Evening";
}
?>

<h1><?php echo $greeting; ?></h1>

<p>Welcome to My PHP Website</p>

<div class="time">
<?php
echo date("l, d M Y");
echo "<br>";
echo date("h:i:s A");
?>
</div>

<a href="#" class="btn">Explore Now</a>

<div class="footer">
© <?php echo date("Y"); ?> My Website | Designed with ❤️
</div>

</div>

</body>
</html>
