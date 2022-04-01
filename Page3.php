
<?php 
include('HotelClass.php');
?>
   <style>
       /* Split the screen in half */
.split {
  height: 50%;
  width: 50%;
  position: fixed;
  z-index: 1;
  top: 0;
  overflow-x: hidden;
  padding-top: 20px;
}

/* Control the left side */
.left {
  left: 0;
 
}

/* Control the right side */
.right {
  right: 0;
  
}

/* If you want the content centered horizontally and vertically */
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}

/* Style the image inside the centered container, if needed */
.centered img {
  width: 70px;
  border-radius: 50%;
}
   </style>

<h1 style="text-align:center">Pick Your Choice</h1>
<div class="split left">
  <div class="centered">
    
    <h2>Hotel 1</h2>
    <p><?php echo $Hotelarray[0];
         echo $Hotelarray[0]->SwimmingPool('yes');?></p>
         <form action="Page4.php" method="post">
              <button>Book</button>
         </form>
  </div>
</div>

<div class="split right">
  <div class="centered">
    
    <h2>Hotel 2</h2>
    <p><?php echo $Hotelarray[1];
         echo $Hotelarray[1]->SwimmingPool('yes');?></p>
         <form action="Page4.php" method="post">
              <button>Book</button>
         </form>
  </div>
</div>