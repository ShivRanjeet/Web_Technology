<html>
<head>

<style>

body {background-color: black;}

table
{
position:absolute; 
top:225px; right:100px;
border-style:solid;
border-width:2px;
border-color:#6be3ec;
width: 500px;
height :500px;
color:#fff;
}
th, td {
  padding: 15px;
  text-align: left;
  
}
</style>

</head>
<body>
    <img src="btc.jpg" alt="Gateways" style="position:absolute; top:225px; left:30px; width:630px;height:430px;">
<?php

$userProfile = array ("Name"=>$_POST["name"],"Email"=>$_POST["email"],"Age"=>$_POST["age"],"Gender"=>$_POST["gender"],"Mobile"=>$_POST["mobile"],"Username"=>$_POST["username"],"Password"=>$_POST["password"]);
$address =  array ($_POST["address"],$_POST["state"],$_POST["country"]);
$wallet = array (
  array("FOAMING FACE WASH | GREEN TEA & NEEM",1,439),
  array("UNDER EYE GEL | CAFFEINE & HYALURONIC ACID",1,351),
  array("DEEP CLEANSING NOSE STRIP | BAMBOO CHARCOAL & ALOE VERA",1,263),
  array("CAFFEINE FACE SERUM FOR MEN | COFFEE ARABICA & HYALURONIC ACID",1,449)
);
?>
<h1 style="position:absolute; top:45px; Right:500px; color:#fff">
<?php
$myfile = fopen("pancake.txt", "r") or die("Unable to open file!");
echo fgets($myfile);
fclose($myfile);
?>
</h1> <br>

<?php

function print_address($location)
{
    echo '<tr>';
    echo "<th> Address </th>";
    echo '<td>'.$location[0].", ".$location[1].", ".$location[2].'</td>';
    echo '</tr>';
}

function print_wallet($wallet)
{
    echo '<tr>';
    echo "<th  rowspan='4'> Products Purchased </th>";
    echo '<td>'.$wallet[0][0]." --> ".$wallet[0][1]." --> Rs.".$wallet[0][2].'</td>';
    echo '</tr>';

    echo '<tr>';
     echo '<td>'.$wallet[1][0]." --> ".$wallet[1][1]." --> Rs.".$wallet[1][2].'</td>';
    echo '</tr>';

    echo '<tr>';
    echo '<td>'.$wallet[2][0]." --> ".$wallet[2][1]." --> Rs.".$wallet[2][2].'</td>';
    echo '</tr>';

    echo '<tr>';
    echo '<td>'.$wallet[3][0]." --> ".$wallet[3][1]." --> Rs.".$wallet[3  ][2].'</td>';
    echo '</tr>';

    
}

function userinfo_to_table($userinfo,$location,$wallet)
{
echo "<table border='1'>";
foreach($userinfo as $x => $x_value)
{
    echo '<tr>';
    echo '<th>'.$x.'</th>';
    echo '<td>'.$x_value.'</td>';
    echo '</tr>';
}

print_address($location);

print_wallet($wallet);

echo '</table>';
}

userinfo_to_table($userProfile,$address,$wallet);
?>

<?php
$myfile = fopen("userInfo.txt", "w") or die("Unable to open file!");
$txt = "User Informatio\n\nName : ".$userProfile['Name']."\n";
fwrite($myfile, $txt);
$txt = "Email : ".$userProfile['Email'];
fwrite($myfile, $txt);
fclose($myfile);
?>

</body>
</html>