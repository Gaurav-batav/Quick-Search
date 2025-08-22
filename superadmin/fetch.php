<?php

//fetch.php;

$connect = new PDO("mysql:host=localhost; dbname=quicksea_new", "quicksea_new", "eBJ36(0vnZVy");

if(isset($_POST['query']))
{
 $query = "
 SELECT DISTINCT contact_info FROM users 
 WHERE contact_info LIKE '%".trim($_POST["query"])."%'
 ";

 $statement = $connect->prepare($query);

 $statement->execute();

 $result = $statement->fetchAll();

 $output = '';

 foreach($result as $row)
 {
  $output .= '
  <li class="list-group-item contsearch">
   <a href="javascript:void(0)" class="gsearch" style="color:#333;text-decoration:none;">'.$row["contact_info"].'</a>
  </li>
  ';
 }

 echo $output;
}

?>
