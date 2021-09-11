<?php
include("header.php");
?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php  
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');




function roman2number($roman){
    $conv = array(
        array("letter" => 'I', "number" => 1),
        array("letter" => 'V', "number" => 5),
        array("letter" => 'X', "number" => 10),
        array("letter" => 'L', "number" => 50),
        array("letter" => 'C', "number" => 100),
        array("letter" => 'D', "number" => 500),
        array("letter" => 'M', "number" => 1000),
        array("letter" => 0, "number" => 0)
    );
    $arabic = 0;
    $state = 0;
    $sidx = 0;
    $len = strlen($roman);

    while ($len >= 0) {
        $i = 0;
        $sidx = $len;

        while ($conv[$i]['number'] > 0) {
            if (strtoupper(@$roman[$sidx]) == $conv[$i]['letter']) {
                if ($state > $conv[$i]['number']) {
                    $arabic -= $conv[$i]['number'];
                } else {
                    $arabic += $conv[$i]['number'];
                    $state = $conv[$i]['number'];
                }
            }
            $i++;
        }

        $len--;
    }

    return($arabic);
}


function number2roman($num,$isUpper=true) {
    $n = intval($num);
    $res = '';

    /*** roman_numerals array ***/
    $roman_numerals = array(
        'M' => 1000,
        'CM' => 900,
        'D' => 500,
        'CD' => 400,
        'C' => 100,
        'XC' => 90,
        'L' => 50,
        'XL' => 40,
        'X' => 10,
        'IX' => 9,
        'V' => 5,
        'IV' => 4,
        'I' => 1
    );

    foreach ($roman_numerals as $roman => $number)
    {
        /*** divide to get matches ***/
        $matches = intval($n / $number);

        /*** assign the roman char * $matches ***/
        $res .= str_repeat($roman, $matches);

        /*** substract from the number ***/
        $n = $n % $number;
    }

    /*** return the res ***/
    if($isUpper) return $res;
    else return strtolower($res);
}

/* TEST */
//echo "\n and bacK:\n";
//echo roman2number($s);


$fname="VYAS";
$lname="UMANG";
$con="INDIA";
$dist="UPRADESH";
$s=number2roman(1105,true);


$a=substr($fname,0,1);

$b=substr($lname,0,1);
$c=substr($con,0,2);
$r=substr($dist,0,2);

$m=date('m');
$y=date('y');
$d=date('d');

echo '<br>';

//$invID = str_pad($);

echo $result=$c.$r.$a.$b.$y.$m.$d.$s;

?>






<?php
// get the post records
$Username= $_POST["Username"];
$fname= $_POST["fname"];
$gender= $_POST["gender"];
$Email= $_POST["Email"];
$Password= $_POST["Password"];
$addre= $_POST["addre"];
$mobile= $_POST["mobile"];
$uid = $s;

 echo" $uid";
 echo "<br>";
 echo "<h1>$Username</h1>";
 echo "<br>";
 echo"$fname";
 echo "<br>";
 echo "$gender";
 echo "<br>";
 echo "$Password";
 echo "<br>";
 echo "$Email";
 echo "<br>";
 echo "$addre";
 echo "<br>";
 echo "$mobile";

$uid = $s;
 
$con = mysqli_connect('localhost', 'root', '','sen');

// database insert SQL code
$sql = "INSERT INTO register (UID,Username,fname,gender,Password,Email,addre,mobile) VALUES ('$uid','$Username', '$fname', '$gender','$Password', '$Email',' $addre','$mobile')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
	echo "Contact Records Inserted";

?>
<br>
<br>
<br>
<?php
include("footer.php");
?>