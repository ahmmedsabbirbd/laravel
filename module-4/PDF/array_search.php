<?php

// array_search
$bikePrices = array(
    "RoyalEnfield" => "1000000",
    "Suzuki_GSX_R150" => "429,950",
    "Yamaha_R15_v3_Indian" => "475,000",
);
echo array_search("1000000", $bikePrices);