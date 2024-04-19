<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="ageCalculate.php" method="post">
        <input type="date" name="birthday">
        <button type="submit" name="calculate">Calculate</button>
    </form>

    <?php
// $calculate;
if(isset($_POST['calculate'])){
    $bday = $_POST['birthday'];
    $today = date("y-m-d");
    $diff=date_diff(date_create($bday),date_create($today));
    echo "Your age is ".$diff->format('%y')."Year: ".$diff->format('%m')."Month: ".$diff->format('%d')."Days: ";

} 
?>
</body>
</html>





