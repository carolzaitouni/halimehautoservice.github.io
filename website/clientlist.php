<html>
<style>
table{
padding:15px;
text-align:center;
text-font:Roman;
border-collapse:collapse;
border:1px solid black;
width:100%;
height:50%;
}
.tr1{
background-color:red;
color:white;
}

</style>
<a href=addclient.php > BACK </a>
<br>
<br>
<?php 
$trash="<img src='images/trash.png' height=10 width=10 />";
if(isset($_GET['search']) ){
		
		 $del=$_GET['search'].".txt";
		 $d="clients/";
		$c=scandir($d);
		foreach($c as $fl){
		
		if(strcmp($fl,$del)==0){
		
		
		unlink($d.$fl);
		
		
		}
		}
		}



echo "<table border=1 > <tr class=tr1> <td > Name   </td> <td> Phone  </td><td> Oil type  </td> <td> Registration </td> <td> expiry </td><td> CAR </td><td> days left  </td> <td> delete customer </td> </tr>";
    $dir="clients/";
	$current=scandir($dir);
	foreach($current as $file){
	if($file!=="."&&$file!==".."){
		$f=fopen($dir.$file,"r");
		$name=fgets($f,1024);
		$phone=fgets($f,1024);
		$oil=fgets($f,1024);
		$rdate=fgets($f,1024);
		$edate=fgets($f,1024);
		$car=fgets($f,1024);
		$now=date("d/m/Y");
		$days= (strtotime($edate)-strtotime($now))/(86400);
		if($days<=0){
		$days="SEND MSG!";
		}
		
		
		echo "<tr><td>$name</td><td>$phone</td><td>$oil</td><td>$rdate</td><td>$edate</td><td> $car </td> <td style='color:red;'><b> $days <b> </td>  <td><a href='clientlist.php?search=$phone' >$trash </a> </td></tr>";
		}
		}
		echo "<table>";
?>

</html>
