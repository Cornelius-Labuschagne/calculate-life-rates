<?php 

const BR = "\n";

// pre determined variables, assuming user enter DOB first thn cover amount
// we also assuming the user know how the calculator functions
// we assuming user knows how t0 pass params to the script
// assuming the user knows the given cover amounts
// assuming the user knows the correct date format

  //date in mm/dd/yyyy format; or it can be in other formats as well
  $dob = $argv[1];
  // getting cover amount
  $cover = $argv[2];

  //explode the date to get month, day and year
  $dob = explode("/", $dob);

  //get age from date or birth date
  $age = (date("md", date("U", mktime(0, 0, 0, $dob[0], $dob[1], $dob[2]))) > date("md") ? ((date("Y") - $dob[2]) - 1) : (date("Y") - $dob[2]));
   
  // displaying the user age
    echo BR;
    echo " Age is:" . $age;

    // checking user minimum age
    if (trim($age) < 18){
        echo " You are too young!";
        echo "\n";
        echo " ABORTING";
        exit;
    }
    // checking user maximum age
    if (trim($age) > 65){
        echo " You are too old!";
        echo "\n";
        echo " ABORTING";
        exit;
    }

    // displaying the cover amount chosen
    echo BR;
    echo " Cover amount chosen is: "; 
    echo $cover;
    echo BR;

    // checking the minimum Cover amount
    if (trim($cover ) < 7500 ){
        echo " We don't cover that type of an amount!";
        echo "\n";
        echo " ABORTING";
        exit;
    }

    // checking if cover amount for 7500
    if( trim($cover)  == 7500 && trim($age) >= 18 && trim($age) <= 34 ){
        echo " Your premium is 55.00 per month.";
        echo "\n";
        echo "\n";
        echo " Thank you for using this calculator.";
        echo "\n";
        echo " Good bye.";
        echo "\n";
        exit;
    }
    if( trim($cover)  == 7500 && trim($age) >= 35 && trim($age) <= 39 ){
        echo " Your premium is 61.00 per month.";
        echo "\n";
        echo "\n";
        echo " Thank you for using this calculator.";
        echo "\n";
        echo " Good bye.";
        echo "\n";
        exit;
    }
    if( trim($cover)  == 7500 && trim($age) >= 40 && trim($age) <= 44 ){
        echo " Your premium is 72.00 per month.";
        echo "\n";
        echo "\n";
        echo " Thank you for using this calculator.";
        echo "\n";
        echo " Good bye.";
        echo "\n";
        exit;
    }
    if( trim($cover)  == 7500 && trim($age) >= 45 && trim($age) <= 49 ){
        echo " Your premium is 77.00 per month.";
        echo "\n";
        echo "\n";
        echo " Thank you for using this calculator.";
        echo "\n";
        echo " Good bye.";
        echo "\n";
        exit;
    }
    if( trim($cover)  == 7500 && trim($age) >= 50 && trim($age) <= 54 ){
        echo " Your premium is 83.00 per month.";
        echo "\n";
        echo "\n";
        echo " Thank you for using this calculator.";
        echo "\n";
        echo " Good bye.";
        echo "\n";
        exit;
    }
    if( trim($cover)  == 7500 && trim($age) >= 55 && trim($age) <= 59 ){
        echo " Your premium is 88.00 per month.";
        echo "\n";
        echo "\n";
        echo " Thank you for using this calculator.";
        echo "\n";
        echo " Good bye.";
        echo "\n";
        exit;
    }
    if( trim($cover)  == 7500 && trim($age) >= 60 && trim($age) <= 64 ){
        echo " Your premium is 94.00 per month.";
        echo "\n";
        echo "\n";
        echo " Thank you for using this calculator.";
        echo "\n";
        echo " Good bye.";
        echo "\n";
        exit;
    }
    
    /* running checks for 10 000 cover amount */
    
    if( trim($cover)  == 10000 && trim($age) >= 18 && trim($age) <= 34 ){
        echo " Your premium is 66.00 per month.";
        echo "\n";
        echo "\n";
        echo " Thank you for using this calculator.";
        echo "\n";
        echo " Good bye.";
        echo "\n";
        exit;
    }
    
    if( trim($cover)  == 10000 && trim($age) >= 35 && trim($age) <= 39 ){
        echo " Your premium is 72.00 per month.";
        echo "\n";
        echo "\n";
        echo " Thank you for using this calculator.";
        echo "\n";
        echo " Good bye.";
        echo "\n";
        exit;
    }
    
    if( trim($cover)  == 10000 && trim($age) >= 40 && trim($age) <= 44 ){
        echo " Your premium is 77.00 per month.";
        echo "\n";
        echo "\n";
        echo " Thank you for using this calculator.";
        echo "\n";
        echo " Good bye.";
        echo "\n";
        exit;
    }
    if( trim($cover)  == 10000 && trim($age) >= 45 && trim($age) <= 49 ){
        echo " Your premium is 83.00 per month.";
        echo "\n";
        echo "\n";
        echo " Thank you for using this calculator.";
        echo "\n";
        echo " Good bye.";
        echo "\n";
        exit;
    }
    if( trim($cover)  == 10000 && trim($age) >= 50 && trim($age) <= 54 ){
        echo " Your premium is 88.00 per month.";
        echo "\n";
        echo "\n";
        echo " Thank you for using this calculator.";
        echo "\n";
        echo " Good bye.";
        echo "\n";
        exit;
    }
    if( trim($cover)  == 10000 && trim($age) >= 55 && trim($age) <= 59 ){
        echo " Your premium is 94.00 per month.";
        echo "\n";
        echo "\n";
        echo " Thank you for using this calculator.";
        echo "\n";
        echo " Good bye.";
        echo "\n";
        exit;
    }
    if( trim($cover)  == 10000 && trim($age) >= 60 && trim($age) <= 64 ){
        echo " Your premium is 99.00 per month.";
        echo "\n";
        echo "\n";
        echo " Thank you for using this calculator.";
        echo "\n";
        echo " Good bye.";
        echo "\n";
        exit;
    }
    
    /* running checks for 15 000 cover amount */
    
    if( trim($cover)  == 15000 && trim($age) >= 18 && trim($age) <= 34 ){
        echo " Your premium is 77.00 per month.";
        echo "\n";
        echo "\n";
        echo " Thank you for using this calculator.";
        echo "\n";
        echo " Good bye.";
        echo "\n";
        exit;
    }
    
    if( trim($cover)  == 15000 && trim($age) >= 35 && trim($age) <= 39 ){
        echo " Your premium is 83.00 per month.";
        echo "\n";
        echo "\n";
        echo " Thank you for using this calculator.";
        echo "\n";
        echo " Good bye.";
        echo "\n";
        exit;
    }
    
    if( trim($cover)  == 15000 && trim($age) >= 40 && trim($age) <= 44 ){
        echo " Your premium is 94.00 per month.";
        echo "\n";
        echo "\n";
        echo " Thank you for using this calculator.";
        echo "\n";
        echo " Good bye.";
        echo "\n";
        exit;
    }
    if( trim($cover)  == 15000 && trim($age) >= 45 && trim($age) <= 49 ){
        echo " Your premium is 99.00 per month.";
        echo "\n";
        echo "\n";
        echo " Thank you for using this calculator.";
        echo "\n";
        echo " Good bye.";
        echo "\n";
        exit;
    }
    if( trim($cover)  == 15000 && trim($age) >= 50 && trim($age) <= 54 ){
        echo " Your premium is 110.00 per month.";
        echo "\n";
        echo "\n";
        echo " Thank you for using this calculator.";
        echo "\n";
        echo " Good bye.";
        echo "\n";
        exit;
    }
    if( trim($cover)  == 15000 && trim($age) >= 55 && trim($age) <= 59 ){
        echo " Your premium is 127.00 per month.";
        echo "\n";
        echo "\n";
        echo " Thank you for using this calculator.";
        echo "\n";
        echo " Good bye.";
        echo "\n";
        exit;
    }
    if( trim($cover)  == 15000 && trim($age) >= 60 && trim($age) <= 64 ){
        echo " Your premium is 149.00 per month.";
        echo "\n";
        echo "\n";
        echo " Thank you for using this calculator.";
        echo "\n";
        echo " Good bye.";
        echo "\n";
        exit;
    }
    
    /* running checks for 20 000 cover amount */
    
    if( trim($cover)  == 20000 && trim($age) >= 18 && trim($age) <= 34 ){
        echo " Your premium is 88.00 per month.";
        echo "\n";
        echo "\n";
        echo " Thank you for using this calculator.";
        echo "\n";
        echo " Good bye.";
        echo "\n";
        exit;
    }
    
    if( trim($cover)  == 20000 && trim($age) >= 35 && trim($age) <= 39 ){
        echo " Your premium is 121.00 per month.";
        echo "\n";
        echo "\n";
        echo " Thank you for using this calculator.";
        echo "\n";
        echo " Good bye.";
        echo "\n";
        exit;
    }
    
    if( trim($cover)  == 20000 && trim($age) >= 40 && trim($age) <= 44 ){
        echo " Your premium is 127.00 per month.";
        echo "\n";
        echo "\n";
        echo " Thank you for using this calculator.";
        echo "\n";
        echo " Good bye.";
        echo "\n";
        exit;
    }
    if( trim($cover)  == 20000 && trim($age) >= 45 && trim($age) <= 49 ){
        echo " Your premium is 138.00 per month.";
        echo "\n";
        echo "\n";
        echo " Thank you for using this calculator.";
        echo "\n";
        echo " Good bye.";
        echo "\n";
        exit;
    }
    if( trim($cover)  == 20000 && trim($age) >= 50 && trim($age) <= 54 ){
        echo " Your premium is 149.00 per month.";
        echo "\n";
        echo "\n";
        echo " Thank you for using this calculator.";
        echo "\n";
        echo " Good bye.";
        echo "\n";
        exit;
    }
    if( trim($cover)  == 20000 && trim($age) >= 55 && trim($age) <= 59 ){
        echo " Your premium is 154.00 per month.";
        echo "\n";
        echo "\n";
        echo " Thank you for using this calculator.";
        echo "\n";
        echo " Good bye.";
        echo "\n";
        exit;
    }
    if( trim($cover)  == 20000 && trim($age) >= 60 && trim($age) <= 64 ){
        echo " Your premium is 165.00 per month.";
        echo "\n";
        echo "\n";
        echo " Thank you for using this calculator.";
        echo "\n";
        echo " Good bye.";
        echo "\n";
        exit;
    }
    
    
    /* running checks for 25 000 cover amount */
    
    if( trim($cover)  == 25000 && trim($age) >= 18 && trim($age) <= 34 ){
        echo " Your premium is 99.00 per month.";
        echo "\n";
        echo "\n";
        echo " Thank you for using this calculator.";
        echo "\n";
        echo " Good bye.";
        echo "\n";
        exit;
    }
    
    if( trim($cover)  == 25000 && trim($age) >= 35 && trim($age) <= 39 ){
        echo " Your premium is 138.00 per month.";
        echo "\n";
        echo "\n";
        echo " Thank you for using this calculator.";
        echo "\n";
        echo " Good bye.";
        echo "\n";
        exit;
    }
    
    if( trim($cover)  == 25000 && trim($age) >= 40 && trim($age) <= 44 ){
        echo " Your premium is 149.00 per month.";
        echo "\n";
        echo "\n";
        echo " Thank you for using this calculator.";
        echo "\n";
        echo " Good bye.";
        echo "\n";
        exit;
    }
    if( trim($cover)  == 25000 && trim($age) >= 45 && trim($age) <= 49 ){
        echo " Your premium is 154.00 per month.";
        echo "\n";
        echo "\n";
        echo " Thank you for using this calculator.";
        echo "\n";
        echo " Good bye.";
        echo "\n";
        exit;
    }
    if( trim($cover)  == 25000 && trim($age) >= 50 && trim($age) <= 54 ){
        echo " Your premium is 165.00 per month.";
        echo "\n";
        echo "\n";
        echo " Thank you for using this calculator.";
        echo "\n";
        echo " Good bye.";
        echo "\n";
        exit;
    }
    if( trim($cover)  == 25000 && trim($age) >= 55 && trim($age) <= 59 ){
        echo " Your premium is 176.00 per month.";
        echo "\n";
        echo "\n";
        echo " Thank you for using this calculator.";
        echo "\n";
        echo " Good bye.";
        echo "\n";
        exit;
    }
    if( trim($cover)  == 25000 && trim($age) >= 60 && trim($age) <= 64 ){
        echo " Your premium is 204.00 per month.";
        echo "\n";
        echo "\n";
        echo " Thank you for using this calculator.";
        echo "\n";
        echo " Good bye.";
        echo "\n";
        exit;
    }
    
    
    /* running checks for 30 000 cover amount */
    
    if( trim($cover)  == 30000 && trim($age) >= 18 && trim($age) <= 34 ){
        echo " Your premium is 121.00 per month.";
        echo "\n";
        echo "\n";
        echo " Thank you for using this calculator.";
        echo "\n";
        echo " Good bye.";
        echo "\n";
        exit;
    }
    
    if( trim($cover)  == 30000 && trim($age) >= 35 && trim($age) <= 39 ){
        echo " Your premium is 143.00 per month.";
        echo "\n";
        echo "\n";
        echo " Thank you for using this calculator.";
        echo "\n";
        echo " Good bye.";
        echo "\n";
        exit;
    }
    
    if( trim($cover)  == 30000 && trim($age) >= 40 && trim($age) <= 44 ){
        echo " Your premium is 154.00 per month.";
        echo "\n";
        echo "\n";
        echo " Thank you for using this calculator.";
        echo "\n";
        echo " Good bye.";
        echo "\n";
        exit;
    }
    if( trim($cover)  == 30000 && trim($age) >= 45 && trim($age) <= 49 ){
        echo " Your premium is 165.00 per month.";
        echo "\n";
        echo "\n";
        echo " Thank you for using this calculator.";
        echo "\n";
        echo " Good bye.";
        echo "\n";
        exit;
    }
    if( trim($cover)  == 30000 && trim($age) >= 50 && trim($age) <= 54 ){
        echo " Your premium is 176.00 per month.";
        echo "\n";
        echo "\n";
        echo " Thank you for using this calculator.";
        echo "\n";
        echo " Good bye.";
        echo "\n";
        exit;
    }
    if( trim($cover)  == 30000 && trim($age) >= 55 && trim($age) <= 59 ){
        echo " Your premium is 187.00 per month.";
        echo "\n";
        echo "\n";
        echo " Thank you for using this calculator.";
        echo "\n";
        echo " Good bye.";
        echo "\n";
        exit;
    }
    if( trim($cover)  == 30000 && trim($age) >= 60 && trim($age) <= 64 ){
        echo " Your premium is 220.00 per month.";
        echo "\n";
        echo "\n";
        echo " Thank you for using this calculator.";
        echo "\n";
        echo " Good bye.";
        echo "\n";
        exit;
    }
    
    
    /* running checks for 40 000 cover amount */
    
    if( trim($cover)  == 40000 && trim($age) >= 18 && trim($age) <= 34 ){
        echo " Your premium is 171.00 per month.";
        echo "\n";
        echo "\n";
        echo " Thank you for using this calculator.";
        echo "\n";
        echo " Good bye.";
        echo "\n";
        exit;
    }
    
    if( trim($cover)  == 40000 && trim($age) >= 35 && trim($age) <= 39 ){
        echo " Your premium is 187.00 per month.";
        echo "\n";
        echo "\n";
        echo " Thank you for using this calculator.";
        echo "\n";
        echo " Good bye.";
        echo "\n";
        exit;
    }
    
    if( trim($cover)  == 40000 && trim($age) >= 40 && trim($age) <= 44 ){
        echo " Your premium is 198.00 per month.";
        echo "\n";
        echo "\n";
        echo " Thank you for using this calculator.";
        echo "\n";
        echo " Good bye.";
        echo "\n";
        exit;
    }
    if( trim($cover)  == 40000 && trim($age) >= 45 && trim($age) <= 49 ){
        echo " Your premium is 226.00 per month.";
        echo "\n";
        echo "\n";
        echo " Thank you for using this calculator.";
        echo "\n";
        echo " Good bye.";
        echo "\n";
        exit;
    }
    if( trim($cover)  == 40000 && trim($age) >= 50 && trim($age) <= 54 ){
        echo " Your premium is 259.00 per month.";
        echo "\n";
        echo "\n";
        echo " Thank you for using this calculator.";
        echo "\n";
        echo " Good bye.";
        echo "\n";
        exit;
    }
    if( trim($cover)  == 40000 && trim($age) >= 55 && trim($age) <= 59 ){
        echo " Your premium is 275.00 per month.";
        echo "\n";
        echo "\n";
        echo " Thank you for using this calculator.";
        echo "\n";
        echo " Good bye.";
        echo "\n";
        exit;
    }
    if( trim($cover)  == 40000 && trim($age) >= 60 && trim($age) <= 64 ){
        echo " Your premium is 308.00 per month.";
        echo "\n";
        echo "\n";
        echo " Thank you for using this calculator.";
        echo "\n";
        echo " Good bye.";
        echo "\n";
        exit;
    }
    
    
    /* running checks for 50 000 cover amount */
    
    if( trim($cover)  == 50000 && trim($age) >= 18 && trim($age) <= 34 ){
        echo " Your premium is 187.00 per month.";
        echo "\n";
        echo "\n";
        echo " Thank you for using this calculator.";
        echo "\n";
        echo " Good bye.";
        echo "\n";
        exit;
    }
    
    if( trim($cover)  == 50000 && trim($age) >= 35 && trim($age) <= 39 ){
        echo " Your premium is 226.00 per month.";
        echo "\n";
        echo "\n";
        echo " Thank you for using this calculator.";
        echo "\n";
        echo " Good bye.";
        echo "\n";
        exit;
    }
    
    if( trim($cover)  == 50000 && trim($age) >= 40 && trim($age) <= 44 ){
        echo " Your premium is 253.00 per month.";
        echo "\n";
        echo "\n";
        echo " Thank you for using this calculator.";
        echo "\n";
        echo " Good bye.";
        echo "\n";
        exit;
    }
    if( trim($cover)  == 50000 && trim($age) >= 45 && trim($age) <= 49 ){
        echo " Your premium is 259.00 per month.";
        echo "\n";
        echo "\n";
        echo " Thank you for using this calculator.";
        echo "\n";
        echo " Good bye.";
        echo "\n";
        exit;
    }
    if( trim($cover)  == 50000 && trim($age) >= 50 && trim($age) <= 54 ){
        echo " Your premium is 275.00 per month.";
        echo "\n";
        echo "\n";
        echo " Thank you for using this calculator.";
        echo "\n";
        echo " Good bye.";
        echo "\n";
        exit;
    }
    if( trim($cover)  == 50000 && trim($age) >= 55 && trim($age) <= 59 ){
        echo " Your premium is 319.00 per month.";
        echo "\n";
        echo "\n";
        echo " Thank you for using this calculator.";
        echo "\n";
        echo " Good bye.";
        echo "\n";
        exit;
    }
    if( trim($cover)  == 50000 && trim($age) >= 60 && trim($age) <= 64 ){
        echo " Your premium is 374.00 per month.";
        echo "\n";
        echo "\n";
        echo " Thank you for using this calculator.";
        echo "\n";
        echo " Good bye.";
        echo "\n";
        exit;
    }
    
    
    /* running checks for 75000 cover amount */
    
    if( trim($cover)  == 75000 && trim($age) >= 18 && trim($age) <= 34 ){
        echo " Your premium is 274.00 per month.";
        echo "\n";
        echo "\n";
        echo " Thank you for using this calculator.";
        echo "\n";
        echo " Good bye.";
        echo "\n";
        exit;
    }
    
    if( trim($cover)  == 75000 && trim($age) >= 35 && trim($age) <= 39 ){
        echo " Your premium is 330.00 per month.";
        echo "\n";
        echo "\n";
        echo " Thank you for using this calculator.";
        echo "\n";
        echo " Good bye.";
        echo "\n";
        exit;
    }
    
    if( trim($cover)  == 75000 && trim($age) >= 40 && trim($age) <= 44 ){
        echo " Your premium is 352.00 per month.";
        echo "\n";
        echo "\n";
        echo " Thank you for using this calculator.";
        echo "\n";
        echo " Good bye.";
        echo "\n";
        exit;
    }
    if( trim($cover)  == 75000 && trim($age) >= 45 && trim($age) <= 49 ){
        echo " Your premium is 374.00 per month.";
        echo "\n";
        echo "\n";
        echo " Thank you for using this calculator.";
        echo "\n";
        echo " Good bye.";
        echo "\n";
        exit;
    }
    if( trim($cover)  == 75000 && trim($age) >= 50 && trim($age) <= 54 ){
        echo " Your premium is 403.00 per month.";
        echo "\n";
        echo "\n";
        echo " Thank you for using this calculator.";
        echo "\n";
        echo " Good bye.";
        echo "\n";
        exit;
    }
    if( trim($cover)  == 75000 && trim($age) >= 55 && trim($age) <= 59 ){
        echo " Your premium is 466.00 per month.";
        echo "\n";
        echo "\n";
        echo " Thank you for using this calculator.";
        echo "\n";
        echo " Good bye.";
        echo "\n";
        exit;
    }
    if( trim($cover)  == 75000 && trim($age) >= 60 && trim($age) <= 64 ){
        echo " Your premium is 550.00 per month.";
        echo "\n";
        echo "\n";
        echo " Thank you for using this calculator.";
        echo "\n";
        echo " Good bye.";
        echo "\n";
        exit;
    }



?>