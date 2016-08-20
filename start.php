<?php

require 'LobiAPI/LobiAPI.php';

$lobiapi = new LobiAPI();

//$lobiapi->Login("mail", "pass");
//$lobiapi->TwitterLogin("mail", "pass");

print_r($lobiapi->getMe());
