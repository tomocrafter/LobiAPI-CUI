<?php

$lobiapi = new LobiAPI\LobiAPI();

//$lobiapi->Login("mail", "pass");
//$lobiapi->TwitterLogin("mail", "pass");

print_r($lobiapi->getMe());
