
<?php
  
  session_start();

  class HotelClass {
    private $Hotelname;
    private $Hotelrate;
    private $NumberDays;

    public function setName($Hotelname){
        $this->Hotelname=$Hotelname;
    }
    public function getName(){
        return $this->Hotelname;
    }

    public function setRate($Hotelrate){
        $this->Hotelrate=$Hotelrate;
    }
    public function getRate(){
        return $this->Hotelrate;
    }

    public function setDays($NumberDays){
        $this->NumberDays=$NumberDays;
    }
    public function getDays(){
        return $this->NumberDays;
    }
    public function Pricing(){
        return($this->Hotelrate*$this->NumberDays);
    }
    public function Displaying(){
        //$tokos=$this->Pricing();
    //echo nl2br ("The Hotel Name:$this->Hotelname \n Rate:$this->Hotelrate\n Number of days: $this->NumberDays\n Total Price: $tokos ");
    }
    public function SwimmingPool($HotelPool){
        if ($HotelPool=='yes'){
            return("It has a Swimming Pool");
        }
        else{
            return("No Swimming Pool");
        }

    }

    public function SwimmingCondition(){
        
    }



    function __toString(){
        $tokos=$this->Pricing();
        //$PoolOption=$this->SwimmingPool($HotelPool);
        return nl2br ("The Hotel Name:$this->Hotelname\n Rate:$this->Hotelrate\n Number of days: $this->NumberDays\n Total Price: $tokos\n  ");
    }
    
   }
   //$RamsDays=$_SESSION['days'];
   $RamsDays=7;
   $Hotelarray=array();
   $Hotelarray[0]= new HotelClass();
   $Hotelarray[0]->setName("Hamilton");
   $Hotelarray[0]->setRate(350);
   $Hotelarray[0]->setDays($RamsDays);
   $Hotelarray[0]->SwimmingPool('yes');
   $Hotelarray[1]= new HotelClass();
   $Hotelarray[1]->setName("Tracy");
   $Hotelarray[1]->setRate(450);
   $Hotelarray[1]->setDays($RamsDays);
   $Hotelarray[1]->SwimmingPool("No");
   $Hotelarray[2]= new HotelClass();
   $Hotelarray[2]->setName("Pavillon");
   $Hotelarray[2]->setRate(650);
   $Hotelarray[2]->setDays($RamsDays);
   $Hotelarray[2]->SwimmingPool("yes");
   $Arraylength= count($Hotelarray);
   //echo count($Hotelarray);
   //print_r($Hotelarray);
  //echo $Hotelarray[0];
  //echo $Hotelarray[0]->SwimmingPool('yes');
?>

