# calculate-life-rates
A practice and noobish attempt at creating a CLI php script to calculate life cover premiums

DO NOT USE test-file.php THIS WAS A TEST FILE. it is a different version of the same program.

PLEASE ONLY USE calcFunction.php THIS IS THE MASTER FILE NOW.

you must have PHP installed on your machine in order to use this script.

use the following command in your terminal :

<pre> php -f calcFunction.php (param1) (param2) </pre>

-------------------------------------------------------------------------------------

<b>(param1)</b> is the first parameter that needs to be passed to the function.

This will be the user date of birth in the format of dd/mm/yyyy.

The app will crash if not ued in this format.

------------------------------------------------------------------------------------------

<b>(param2)</b> is the second parameter that will be passed.

This will be the life cover amount.

Your options are: 7500, 10000, 15000, 20000, 25000, 30000, 40000, 50000 and 75000

using any other amounts other than these provided will result in a crash.

EXAMPLE OF USE:
---------------

<pre> php -f calcFunction.php 15/03/1996 20000 </pre>

---------------------------------------------

The output of this code is as follows:
--------------------------------------
<br />
 Age is:22 <br />
 Cover amount chosen is: 20000<br />
 Your premium is 88.00 per month.<br />

 Thank you for using this calculator.<br />
 Good bye.<br />
