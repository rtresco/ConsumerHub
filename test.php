
<?php
$link = mysqli_connect('fdb7.biz.nf', '2065085_test', 'mysql12345');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
mysqli_close($link);
echo '<br><br>';
?> 


<?php
   foreach ($_SERVER as $key=>$value) 
   {
      echo $key."=".$value;
      echo "<br><br>";
   }
?> 

<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php echo '<p>Hello World</p>'; ?> 
 </body>
</html> 