<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SELECTION PHP PROGRAM</title>
</head>
<body>
  <h4>Program that compares two number</h4>
  <?php
  //variable declaration and initialization
  $numberone=98;
  $numbertwo=56;
  //setting the comparison condition
  if($numberone > $numbertwo)
  {
    echo "$numberone is greater than $numbertwo";//program output
  }
  else
  {
    echo "$numberone is less than $numbertwo";//program output
  }
  ?>
</body>
</html>