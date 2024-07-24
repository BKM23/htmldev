<h1>Loops</h1>
<h4>While loop</h4>
<?php
//while loop
$init = 0;
while($init < 7){
    print $init. "<br>";
    $init++;
}
?>
<h4>Do-while loop</h4>
<?php
//do-while loop
$i = 0;
do{
    print $i. "<br>";
    $i++;
}while($i<16);
?>
<h4>For loop</h4>
<?php
//for loop
for($s=45; $s<55; $s+=2){
    print $s. "<br>";
}
?>
<h4>foreach loop</h4>
<?php
//foreach loop
//$months = ["January","February","March","April","May","June","July","August","September","October","November","December"];
//foreach ($months AS $month){
//    print $month.", ";
//}
?>
<form action="">
<select name="" id="">
    <option value="">--Months--</option>
    <?php
    foreach ($months AS $month){
        print $month.", ";
        echo"<option value=''>$month</option>";
    }
    ?>
</select>
<select name="" id="">
    <option value="">--Years--</option>
    <?php
    $y = 2015;
    while($y < 2030){
        print "<option value=''>$y</option>";
        $y++;
    }
    ?>
</select>
</form>