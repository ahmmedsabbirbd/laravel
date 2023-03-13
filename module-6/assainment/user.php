<?php

function showUser($user) {
echo  <<<NED
    <ul class="bg-white shadow-lg p-6 mb-8">
        <li class="mb-2">Time: {$user[0]}</li>
        <li class="mb-2"><strong class="font-semibold">Name:</strong> {$user[1]}</li>
        <li class="mb-2"><strong class="font-semibold">Email:</strong> {$user[2]}</li>
        <li class="mb-2"><strong class="font-semibold">Password:</strong> {$user[3]}</li>
        <li class="mb-2"><strong class="font-semibold">Profile Picture:</strong> <img src={$user[4]} alt={$user[4]} class="mx-auto shadow-lg" style="width: 300px; margin-top:10px; height: 300px; object-fit: cover;"></li>
    </ul>
NED;
}

?>