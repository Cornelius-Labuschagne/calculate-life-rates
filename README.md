# calculate-life-rates
a practice and noobish attempt at creating a CLI php script to calculate life cover premiums

DO NOT USE test-file.php THIS WAS A TEST FILE. it is a different version of the same program.

PLEASE ONLY USE calcFunction.php THIS IS THE MASTER WORKING FILE NOW.

you have have PHP installed in order to use this script.

use the following command in your terminal :

php -f calcFunction.php <param1> <param2>

----------------------------------------------------------

<param1> is the first parameter that needs to be passed to the function.
This will be the user dat of bith in the format of dd/mm/yyyy.
The app will crash if not ued in this format.

<param2> is the second parameter that will be passed.
This will be the life cover amount.
Your options are: 7500, 10000, 15000, 20000, 25000, 30000, 40000, 50000 and 75000
using any other amounts other than these provided will result in a crash.

EXAMPLE OF USE:
------------------

php -f calcFunction.php 15/03/1996 20000

------------------------

The output of this code is as follows:
-----------------------------------------

 Age is:22
 Cover amount chosen is: 20000
 Your premium is 88.00 per month.

 Thank you for using this calculator.
 Good bye.
