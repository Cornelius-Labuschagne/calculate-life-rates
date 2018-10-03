
<?php

/* a little welcome message */

echo " Welcome to the life cover calculator.";
echo "\n";
echo "\n";
echo " Please Keep in mind that this is a very basic calculator, made by a person with basic knowledge of PHP.";
echo "\n";
echo "\n";
echo " This was actually my first time using PHP to script. Please don't mind the repeating code or anything.";
echo "\n";
echo "\n";
echo " Would you like to calculate your cover now? \n";
echo " Type 'yes' to continue: ";

$handle = fopen ("php://stdin","r");
$line = fgets($handle);

if(trim($line) != 'yes'){
    echo " ABORTING!\n";
    exit;
}

/* getting and checking customer age */

echo "\n";
echo " Thank you, please enter your age:";
$getAge = fopen ("php://stdin","r");
$ageLine = fgets($getAge);

if (trim($ageLine) < 18){
    echo " You are too young!";
    echo "\n";
    echo " ABORTING";
    exit;
}
if (trim($ageLine) > 65){
    echo " You are too old!";
    echo "\n";
    echo " ABORTING";
    exit;
}

echo "\n";
echo " Thank you, please select your cover amount.";
echo "\n";
echo " Your options are 7500, 10000, 15000, 20000, 25000, 30000, 40000, 50000, 75000";
echo "\n";
echo "\n";
echo " Please enter one of the above cover options: ";
$getCover = fopen ("php://stdin","r");
$coverLine  = fgets($getCover);
echo "\n";
echo "\n";

/* checking if customer wants the minimum amount */

if (trim($coverLine ) < 7500 ){
    echo " We don't cover that type of an amount!";
    echo "\n";
    echo " ABORTING";
    exit;
}
/* running checks for 7500 cover amount */

if( trim($coverLine)  == 7500 && trim($ageLine) >= 18 && trim($ageLine) <= 34 ){
    echo " Your premium is 55.00 per month.";
    echo "\n";
    echo "\n";
    echo " Thank you for using this calculator.";
    echo "\n";
    echo " Good bye.";
    echo "\n";
    exit;
}
if( trim($coverLine)  == 7500 && trim($ageLine) >= 35 && trim($ageLine) <= 39 ){
    echo " Your premium is 61.00 per month.";
    echo "\n";
    echo "\n";
    echo " Thank you for using this calculator.";
    echo "\n";
    echo " Good bye.";
    echo "\n";
    exit;
}
if( trim($coverLine)  == 7500 && trim($ageLine) >= 40 && trim($ageLine) <= 44 ){
    echo " Your premium is 72.00 per month.";
    echo "\n";
    echo "\n";
    echo " Thank you for using this calculator.";
    echo "\n";
    echo " Good bye.";
    echo "\n";
    exit;
}
if( trim($coverLine)  == 7500 && trim($ageLine) >= 45 && trim($ageLine) <= 49 ){
    echo " Your premium is 77.00 per month.";
    echo "\n";
    echo "\n";
    echo " Thank you for using this calculator.";
    echo "\n";
    echo " Good bye.";
    echo "\n";
    exit;
}
if( trim($coverLine)  == 7500 && trim($ageLine) >= 50 && trim($ageLine) <= 54 ){
    echo " Your premium is 83.00 per month.";
    echo "\n";
    echo "\n";
    echo " Thank you for using this calculator.";
    echo "\n";
    echo " Good bye.";
    echo "\n";
    exit;
}
if( trim($coverLine)  == 7500 && trim($ageLine) >= 55 && trim($ageLine) <= 59 ){
    echo " Your premium is 88.00 per month.";
    echo "\n";
    echo "\n";
    echo " Thank you for using this calculator.";
    echo "\n";
    echo " Good bye.";
    echo "\n";
    exit;
}
if( trim($coverLine)  == 7500 && trim($ageLine) >= 60 && trim($ageLine) <= 64 ){
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

if( trim($coverLine)  == 10000 && trim($ageLine) >= 18 && trim($ageLine) <= 34 ){
    echo " Your premium is 66.00 per month.";
    echo "\n";
    echo "\n";
    echo " Thank you for using this calculator.";
    echo "\n";
    echo " Good bye.";
    echo "\n";
    exit;
}

if( trim($coverLine)  == 10000 && trim($ageLine) >= 35 && trim($ageLine) <= 39 ){
    echo " Your premium is 72.00 per month.";
    echo "\n";
    echo "\n";
    echo " Thank you for using this calculator.";
    echo "\n";
    echo " Good bye.";
    echo "\n";
    exit;
}

if( trim($coverLine)  == 10000 && trim($ageLine) >= 40 && trim($ageLine) <= 44 ){
    echo " Your premium is 77.00 per month.";
    echo "\n";
    echo "\n";
    echo " Thank you for using this calculator.";
    echo "\n";
    echo " Good bye.";
    echo "\n";
    exit;
}
if( trim($coverLine)  == 10000 && trim($ageLine) >= 45 && trim($ageLine) <= 49 ){
    echo " Your premium is 83.00 per month.";
    echo "\n";
    echo "\n";
    echo " Thank you for using this calculator.";
    echo "\n";
    echo " Good bye.";
    echo "\n";
    exit;
}
if( trim($coverLine)  == 10000 && trim($ageLine) >= 50 && trim($ageLine) <= 54 ){
    echo " Your premium is 88.00 per month.";
    echo "\n";
    echo "\n";
    echo " Thank you for using this calculator.";
    echo "\n";
    echo " Good bye.";
    echo "\n";
    exit;
}
if( trim($coverLine)  == 10000 && trim($ageLine) >= 55 && trim($ageLine) <= 59 ){
    echo " Your premium is 94.00 per month.";
    echo "\n";
    echo "\n";
    echo " Thank you for using this calculator.";
    echo "\n";
    echo " Good bye.";
    echo "\n";
    exit;
}
if( trim($coverLine)  == 10000 && trim($ageLine) >= 60 && trim($ageLine) <= 64 ){
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

if( trim($coverLine)  == 15000 && trim($ageLine) >= 18 && trim($ageLine) <= 34 ){
    echo " Your premium is 77.00 per month.";
    echo "\n";
    echo "\n";
    echo " Thank you for using this calculator.";
    echo "\n";
    echo " Good bye.";
    echo "\n";
    exit;
}

if( trim($coverLine)  == 15000 && trim($ageLine) >= 35 && trim($ageLine) <= 39 ){
    echo " Your premium is 83.00 per month.";
    echo "\n";
    echo "\n";
    echo " Thank you for using this calculator.";
    echo "\n";
    echo " Good bye.";
    echo "\n";
    exit;
}

if( trim($coverLine)  == 15000 && trim($ageLine) >= 40 && trim($ageLine) <= 44 ){
    echo " Your premium is 94.00 per month.";
    echo "\n";
    echo "\n";
    echo " Thank you for using this calculator.";
    echo "\n";
    echo " Good bye.";
    echo "\n";
    exit;
}
if( trim($coverLine)  == 15000 && trim($ageLine) >= 45 && trim($ageLine) <= 49 ){
    echo " Your premium is 99.00 per month.";
    echo "\n";
    echo "\n";
    echo " Thank you for using this calculator.";
    echo "\n";
    echo " Good bye.";
    echo "\n";
    exit;
}
if( trim($coverLine)  == 15000 && trim($ageLine) >= 50 && trim($ageLine) <= 54 ){
    echo " Your premium is 110.00 per month.";
    echo "\n";
    echo "\n";
    echo " Thank you for using this calculator.";
    echo "\n";
    echo " Good bye.";
    echo "\n";
    exit;
}
if( trim($coverLine)  == 15000 && trim($ageLine) >= 55 && trim($ageLine) <= 59 ){
    echo " Your premium is 127.00 per month.";
    echo "\n";
    echo "\n";
    echo " Thank you for using this calculator.";
    echo "\n";
    echo " Good bye.";
    echo "\n";
    exit;
}
if( trim($coverLine)  == 15000 && trim($ageLine) >= 60 && trim($ageLine) <= 64 ){
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

if( trim($coverLine)  == 20000 && trim($ageLine) >= 18 && trim($ageLine) <= 34 ){
    echo " Your premium is 88.00 per month.";
    echo "\n";
    echo "\n";
    echo " Thank you for using this calculator.";
    echo "\n";
    echo " Good bye.";
    echo "\n";
    exit;
}

if( trim($coverLine)  == 20000 && trim($ageLine) >= 35 && trim($ageLine) <= 39 ){
    echo " Your premium is 121.00 per month.";
    echo "\n";
    echo "\n";
    echo " Thank you for using this calculator.";
    echo "\n";
    echo " Good bye.";
    echo "\n";
    exit;
}

if( trim($coverLine)  == 20000 && trim($ageLine) >= 40 && trim($ageLine) <= 44 ){
    echo " Your premium is 127.00 per month.";
    echo "\n";
    echo "\n";
    echo " Thank you for using this calculator.";
    echo "\n";
    echo " Good bye.";
    echo "\n";
    exit;
}
if( trim($coverLine)  == 20000 && trim($ageLine) >= 45 && trim($ageLine) <= 49 ){
    echo " Your premium is 138.00 per month.";
    echo "\n";
    echo "\n";
    echo " Thank you for using this calculator.";
    echo "\n";
    echo " Good bye.";
    echo "\n";
    exit;
}
if( trim($coverLine)  == 20000 && trim($ageLine) >= 50 && trim($ageLine) <= 54 ){
    echo " Your premium is 149.00 per month.";
    echo "\n";
    echo "\n";
    echo " Thank you for using this calculator.";
    echo "\n";
    echo " Good bye.";
    echo "\n";
    exit;
}
if( trim($coverLine)  == 20000 && trim($ageLine) >= 55 && trim($ageLine) <= 59 ){
    echo " Your premium is 154.00 per month.";
    echo "\n";
    echo "\n";
    echo " Thank you for using this calculator.";
    echo "\n";
    echo " Good bye.";
    echo "\n";
    exit;
}
if( trim($coverLine)  == 20000 && trim($ageLine) >= 60 && trim($ageLine) <= 64 ){
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

if( trim($coverLine)  == 25000 && trim($ageLine) >= 18 && trim($ageLine) <= 34 ){
    echo " Your premium is 99.00 per month.";
    echo "\n";
    echo "\n";
    echo " Thank you for using this calculator.";
    echo "\n";
    echo " Good bye.";
    echo "\n";
    exit;
}

if( trim($coverLine)  == 25000 && trim($ageLine) >= 35 && trim($ageLine) <= 39 ){
    echo " Your premium is 138.00 per month.";
    echo "\n";
    echo "\n";
    echo " Thank you for using this calculator.";
    echo "\n";
    echo " Good bye.";
    echo "\n";
    exit;
}

if( trim($coverLine)  == 25000 && trim($ageLine) >= 40 && trim($ageLine) <= 44 ){
    echo " Your premium is 149.00 per month.";
    echo "\n";
    echo "\n";
    echo " Thank you for using this calculator.";
    echo "\n";
    echo " Good bye.";
    echo "\n";
    exit;
}
if( trim($coverLine)  == 25000 && trim($ageLine) >= 45 && trim($ageLine) <= 49 ){
    echo " Your premium is 154.00 per month.";
    echo "\n";
    echo "\n";
    echo " Thank you for using this calculator.";
    echo "\n";
    echo " Good bye.";
    echo "\n";
    exit;
}
if( trim($coverLine)  == 25000 && trim($ageLine) >= 50 && trim($ageLine) <= 54 ){
    echo " Your premium is 165.00 per month.";
    echo "\n";
    echo "\n";
    echo " Thank you for using this calculator.";
    echo "\n";
    echo " Good bye.";
    echo "\n";
    exit;
}
if( trim($coverLine)  == 25000 && trim($ageLine) >= 55 && trim($ageLine) <= 59 ){
    echo " Your premium is 176.00 per month.";
    echo "\n";
    echo "\n";
    echo " Thank you for using this calculator.";
    echo "\n";
    echo " Good bye.";
    echo "\n";
    exit;
}
if( trim($coverLine)  == 25000 && trim($ageLine) >= 60 && trim($ageLine) <= 64 ){
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

if( trim($coverLine)  == 30000 && trim($ageLine) >= 18 && trim($ageLine) <= 34 ){
    echo " Your premium is 121.00 per month.";
    echo "\n";
    echo "\n";
    echo " Thank you for using this calculator.";
    echo "\n";
    echo " Good bye.";
    echo "\n";
    exit;
}

if( trim($coverLine)  == 30000 && trim($ageLine) >= 35 && trim($ageLine) <= 39 ){
    echo " Your premium is 143.00 per month.";
    echo "\n";
    echo "\n";
    echo " Thank you for using this calculator.";
    echo "\n";
    echo " Good bye.";
    echo "\n";
    exit;
}

if( trim($coverLine)  == 30000 && trim($ageLine) >= 40 && trim($ageLine) <= 44 ){
    echo " Your premium is 154.00 per month.";
    echo "\n";
    echo "\n";
    echo " Thank you for using this calculator.";
    echo "\n";
    echo " Good bye.";
    echo "\n";
    exit;
}
if( trim($coverLine)  == 30000 && trim($ageLine) >= 45 && trim($ageLine) <= 49 ){
    echo " Your premium is 165.00 per month.";
    echo "\n";
    echo "\n";
    echo " Thank you for using this calculator.";
    echo "\n";
    echo " Good bye.";
    echo "\n";
    exit;
}
if( trim($coverLine)  == 30000 && trim($ageLine) >= 50 && trim($ageLine) <= 54 ){
    echo " Your premium is 176.00 per month.";
    echo "\n";
    echo "\n";
    echo " Thank you for using this calculator.";
    echo "\n";
    echo " Good bye.";
    echo "\n";
    exit;
}
if( trim($coverLine)  == 30000 && trim($ageLine) >= 55 && trim($ageLine) <= 59 ){
    echo " Your premium is 187.00 per month.";
    echo "\n";
    echo "\n";
    echo " Thank you for using this calculator.";
    echo "\n";
    echo " Good bye.";
    echo "\n";
    exit;
}
if( trim($coverLine)  == 30000 && trim($ageLine) >= 60 && trim($ageLine) <= 64 ){
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

if( trim($coverLine)  == 40000 && trim($ageLine) >= 18 && trim($ageLine) <= 34 ){
    echo " Your premium is 171.00 per month.";
    echo "\n";
    echo "\n";
    echo " Thank you for using this calculator.";
    echo "\n";
    echo " Good bye.";
    echo "\n";
    exit;
}

if( trim($coverLine)  == 40000 && trim($ageLine) >= 35 && trim($ageLine) <= 39 ){
    echo " Your premium is 187.00 per month.";
    echo "\n";
    echo "\n";
    echo " Thank you for using this calculator.";
    echo "\n";
    echo " Good bye.";
    echo "\n";
    exit;
}

if( trim($coverLine)  == 40000 && trim($ageLine) >= 40 && trim($ageLine) <= 44 ){
    echo " Your premium is 198.00 per month.";
    echo "\n";
    echo "\n";
    echo " Thank you for using this calculator.";
    echo "\n";
    echo " Good bye.";
    echo "\n";
    exit;
}
if( trim($coverLine)  == 40000 && trim($ageLine) >= 45 && trim($ageLine) <= 49 ){
    echo " Your premium is 226.00 per month.";
    echo "\n";
    echo "\n";
    echo " Thank you for using this calculator.";
    echo "\n";
    echo " Good bye.";
    echo "\n";
    exit;
}
if( trim($coverLine)  == 40000 && trim($ageLine) >= 50 && trim($ageLine) <= 54 ){
    echo " Your premium is 259.00 per month.";
    echo "\n";
    echo "\n";
    echo " Thank you for using this calculator.";
    echo "\n";
    echo " Good bye.";
    echo "\n";
    exit;
}
if( trim($coverLine)  == 40000 && trim($ageLine) >= 55 && trim($ageLine) <= 59 ){
    echo " Your premium is 275.00 per month.";
    echo "\n";
    echo "\n";
    echo " Thank you for using this calculator.";
    echo "\n";
    echo " Good bye.";
    echo "\n";
    exit;
}
if( trim($coverLine)  == 40000 && trim($ageLine) >= 60 && trim($ageLine) <= 64 ){
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

if( trim($coverLine)  == 50000 && trim($ageLine) >= 18 && trim($ageLine) <= 34 ){
    echo " Your premium is 187.00 per month.";
    echo "\n";
    echo "\n";
    echo " Thank you for using this calculator.";
    echo "\n";
    echo " Good bye.";
    echo "\n";
    exit;
}

if( trim($coverLine)  == 50000 && trim($ageLine) >= 35 && trim($ageLine) <= 39 ){
    echo " Your premium is 226.00 per month.";
    echo "\n";
    echo "\n";
    echo " Thank you for using this calculator.";
    echo "\n";
    echo " Good bye.";
    echo "\n";
    exit;
}

if( trim($coverLine)  == 50000 && trim($ageLine) >= 40 && trim($ageLine) <= 44 ){
    echo " Your premium is 253.00 per month.";
    echo "\n";
    echo "\n";
    echo " Thank you for using this calculator.";
    echo "\n";
    echo " Good bye.";
    echo "\n";
    exit;
}
if( trim($coverLine)  == 50000 && trim($ageLine) >= 45 && trim($ageLine) <= 49 ){
    echo " Your premium is 259.00 per month.";
    echo "\n";
    echo "\n";
    echo " Thank you for using this calculator.";
    echo "\n";
    echo " Good bye.";
    echo "\n";
    exit;
}
if( trim($coverLine)  == 50000 && trim($ageLine) >= 50 && trim($ageLine) <= 54 ){
    echo " Your premium is 275.00 per month.";
    echo "\n";
    echo "\n";
    echo " Thank you for using this calculator.";
    echo "\n";
    echo " Good bye.";
    echo "\n";
    exit;
}
if( trim($coverLine)  == 50000 && trim($ageLine) >= 55 && trim($ageLine) <= 59 ){
    echo " Your premium is 319.00 per month.";
    echo "\n";
    echo "\n";
    echo " Thank you for using this calculator.";
    echo "\n";
    echo " Good bye.";
    echo "\n";
    exit;
}
if( trim($coverLine)  == 50000 && trim($ageLine) >= 60 && trim($ageLine) <= 64 ){
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

if( trim($coverLine)  == 75000 && trim($ageLine) >= 18 && trim($ageLine) <= 34 ){
    echo " Your premium is 274.00 per month.";
    echo "\n";
    echo "\n";
    echo " Thank you for using this calculator.";
    echo "\n";
    echo " Good bye.";
    echo "\n";
    exit;
}

if( trim($coverLine)  == 75000 && trim($ageLine) >= 35 && trim($ageLine) <= 39 ){
    echo " Your premium is 330.00 per month.";
    echo "\n";
    echo "\n";
    echo " Thank you for using this calculator.";
    echo "\n";
    echo " Good bye.";
    echo "\n";
    exit;
}

if( trim($coverLine)  == 75000 && trim($ageLine) >= 40 && trim($ageLine) <= 44 ){
    echo " Your premium is 352.00 per month.";
    echo "\n";
    echo "\n";
    echo " Thank you for using this calculator.";
    echo "\n";
    echo " Good bye.";
    echo "\n";
    exit;
}
if( trim($coverLine)  == 75000 && trim($ageLine) >= 45 && trim($ageLine) <= 49 ){
    echo " Your premium is 374.00 per month.";
    echo "\n";
    echo "\n";
    echo " Thank you for using this calculator.";
    echo "\n";
    echo " Good bye.";
    echo "\n";
    exit;
}
if( trim($coverLine)  == 75000 && trim($ageLine) >= 50 && trim($ageLine) <= 54 ){
    echo " Your premium is 403.00 per month.";
    echo "\n";
    echo "\n";
    echo " Thank you for using this calculator.";
    echo "\n";
    echo " Good bye.";
    echo "\n";
    exit;
}
if( trim($coverLine)  == 75000 && trim($ageLine) >= 55 && trim($ageLine) <= 59 ){
    echo " Your premium is 466.00 per month.";
    echo "\n";
    echo "\n";
    echo " Thank you for using this calculator.";
    echo "\n";
    echo " Good bye.";
    echo "\n";
    exit;
}
if( trim($coverLine)  == 75000 && trim($ageLine) >= 60 && trim($ageLine) <= 64 ){
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