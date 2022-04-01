
<?php 
session_start();
include('HotelClass.php');
$firstName= $_POST['name'];
$lastName= $_POST['lastName'];
$Ndays=$_POST['Ndays'];
//$Ndays=5;
$TotalRate= $Ndays*5;
//$__SESSION['rams'] = 'tokos';
$_SESSION['days'] = $Ndays;
$SelectHotel=$_POST['HotelSelection'];
echo nl2br (" You are booking the $SelectHotel hotel\n Number of days: $Ndays\n Daily rate: $Ndays \n Total: $TotalRate  ");

?>
<form action="Page3.php" method="post">
<button>Compare</button>
</form>