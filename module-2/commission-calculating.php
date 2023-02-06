<?php

$tuition = 11000;

($tuition < 7000) ? ($invalid = true) :
($commission = ($tuition > 20000) ? ($tuition * 0.25) :
(($tuition >= 10000) ? ($tuition * 0.20) : ($tuition * 0.15)));
echo ($invalid) ? "Invalid fee: Tuition fee must be greater than $7000." : "The commission amount is {$commission}";
