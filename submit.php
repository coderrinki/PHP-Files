<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: aquamarine;
        }
        .phpcont{
            background-color:pink;
            display:flex;
            justify-content:center
        }
    </style>
</head>
<body>
    <div class="phpcont">
    <h1>Welcome</h1>
    <h2>
        <?php
         echo "<br>".$_POST['firstname']."<br>";
         echo $_POST['number']."<br>";
         $num= $_POST['OE_number'];
if($num%2==0){
    echo "<br>The number is even";
}else{
    echo "<br>The number is odd";
}

         ?>
         </h2>
         </div>
        </body>
</html>