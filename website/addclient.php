<html>

<style>
.button {
    background-color: #f44336; 
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
	border-radius: 50%;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}
</style>
<?php
$now=date("d/m/Y");
$car=$_GET['img'];
$c=$_GET['names'];



if(isset($_POST['name']))$name=$_POST['name'];
if(isset($_POST['phone']))$phone=$_POST['phone'];
if(isset($_POST['edate']))$edate=$_POST['edate'];
if(isset($_POST['oil']))$oil=$_POST['oil'];


if (isset($_POST['phone']) ){
  $f= fopen("clients/".$_POST['phone'].".txt","w") or die("error") ;
  fwrite($f,$name."\n");
  fwrite($f,$phone."\n");
  fwrite($f,$oil."\n");
  fwrite($f,$_POST['rdate']."\n");
  fwrite($f,$edate."\n");
  fwrite($f,$s."\n");
  fclose($f);
  }
 
  
?>
<center>
<form method=POST action=<?php echo $_SERVER['PHP_SELF']; ?> >

<?php if (isset($_GET['names']))  echo  "<img src='images/$car.jpg' width=50 height=40 >"; else echo "<a href=cars.php > select a car </a> "; ?>
<table>
<tr><td>NAME :</td><td><input type=text name=name ></td></tr><br>
<tr><td>PHONE :</td><td><input type=number name=phone ></td></tr><br>
</table>
<hr>
<table >
<tr><td>Registration date :</td><td><input type=text name=rdate value=<?php echo $now; ?> ></td></tr><br>
<tr><td>Expiry Date :</td><td><input type=text name=edate ></td></tr>


<tr> <td>Oil type:</td><td> 
<select label='oil' name=oil >
 <optgroup label=kansler >
<option > 10w40 </option>
<option > 20w50</option>
<option > 5w40 </option>
<option > 5w30 </option>
</optgroup>
<optgroup label=Avenue >
<option > 10w40 </option>
<option > 20w50</option>
<option > 5w30 </option>
<option > 5w40 </option>
</optgroup>
<optgroup label=Castrol >
<option > 10w40 </option>
<option > 20w50</option>
<option > 5w30 </option>
<option > 5w20 </option>
<option > 10w40 magnetic </option>
<option > 10w60 </option>
<option > 10w30 </option>
</optgroup>
<optgroup label=Acdelo >
<option > 10w40 </option>
<option > 10w30</option>
<option > 5w30 </option>
</optgroup>
<optgroup label=Rover >
<option > 20w50</option>
<option > 5w30 </option>
</optgroup>

<optgroup label=Champion >
<option > 10w40 </option>
<option > 5w30 </option>
</optgroup>
<optgroup label=Oryx >
<option > 10w40 </option>
<option > 20w50</option>
<option > 40w50 </option>
</optgroup>
<optgroup label=Zeetax >
<option > 10w40 </option>
<option > 20w50</option>
<option > 40 </option>
</optgroup>
<optgroup label=total >
<option > 10w40 </option>
<option > 15w50</option>
</optgroup>
<optgroup label=Others >
<option > Rayle 5w30 </option>
<option > Xcel 5w20</option>
<option > Dn8 10w40</option>
</optgroup>
</select></td></tr>
</table>
<hr>

 <input type=submit value='ADD' class=button name=submit >
 <br>
 <br>
 <a href=clientlist.php > VIEW CLIENTS </a>
</center>
</html>