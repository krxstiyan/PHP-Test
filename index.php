<?php
session_start();
$mypage = 'index.php';
if (!isset($_SESSION['refresher']))    {
    $_SESSION['refresher'] = 0;
}
else    {
$_SESSION['refresher']++;
}
?>

<!DOCTYPE <!DOCTYPE html>
<html>
<body bgcolor="#E6E6FA">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Index</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/slate/bootstrap.min.css"> 
</head>
<body>

    <?php include 'header.php' ?><br><br>
    <h3>Guess Age</h3>
    <?php include 'ages.php';?> <br><br>
    <h3>Factorial</h3>
    <?php include 'factorial.php'?> <br><br>
    <h3>Fibonacci</h3>
    <?php include 'fibo.php'?> <br><br>
    <h3>Sort</h3>
    <?php include 'sort.php'?> <br><br>
    <h3>Prime</h3>
    <?php include 'prime.php'?> <br><br>
    <h3>Factorial</h3>
    <?php include 'factor.php'?> <br><br>
    <h3>Min/Max</h3>
    <?php include 'minmax.php'?> <br><br>
    <h3>Palindrome Checker</h3>
    <?php include 'palindrome.php'?> <br><br>
    <h3>Combining Two Arrays</h3>
    <?php include 'twoarr.php'?> <br><br>
    <h3> Refresh Count: </h3>
    <?php echo $_SESSION['refresher']; ?> <br><br>
    <h3>Save and Edit a Text File</h3>
    <?php include 'save.php'?> <br><br>
    <?php include 'dots.php'?>
    <?php include 'footer.php' ?>

</body>
</html>