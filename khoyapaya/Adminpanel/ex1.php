<?php
if (isset($_GET['sbt']))
{
    $x=strtotime($_GET['dob']);
   
  
    
    $day=date('d',$x);
    $month=date('m',$x);
    $year=date('Y',$x);


    $current_date = date('d'); 
    $current_month = date('m'); 
    $current_year = date('yy'); 

     echo "day=$day month=$month year=$year".'<br>';
     echo "current day=$current_date current month=$current_month current year=$current_year<br>";
  
  
    $all_month = array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31 ); 

    $age = $current_year -   $year;
    echo "$age"."year";
                
    if ($day > $current_date)  
    { 
        $current_date = $current_date +  
                        $all_month[$month - 1]; 
        $current_month = $current_month - 1; 
        $age = $current_date - $day;
        echo "$age"."date";
    } 
  
   else if ($month > $current_month) 
    { 
        $current_year = $current_year - 1; 
        $current_month = $current_month + 12; 
        $age = $current_month - $month;
        echo "$age"."month";
    }  
   
               
      
    
                       
    

   
  /*
  echo "Present Age\nYears:",$calculated_year,"   " , "Months:", $calculated_month, "   ", "Days:", $calculated_date;  
          */
    
                                  
} 
  
   
?> 
