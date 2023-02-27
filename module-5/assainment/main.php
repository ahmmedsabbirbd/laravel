<?php
namespace Assainment;
require_once "autoloader.php";
require_once "Template/header.php";

// access Person;
use \Assainment\Person\Person;
// access Redirect;
use \Assainment\Redirect\Redirect;

// $person = new Person();
if($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];


    if(empty($name) !== true && empty($email) !== true) {
        $person = new Person();

        $person->setName($name);
        $person->setEmail($email);
    } else {
        echo <<<NED
        <div class="max-w-md mx-auto bg-white p-8 mt-10 rounded-lg shadow-md">
            <div class="mb-4">
                <p class="text-red-500 font-bold mb-2 text-center">Please filed all inputs</p>
            </div>
        </div>
        NED;
        Redirect::exit();
    }

} else {
    Redirect::exitWithHome();
}

echo <<<NED
<div class="max-w-md mx-auto bg-white p-8 mt-10 rounded-lg shadow-md">
  <div class="mb-4">
    <p class="text-gray-700 font-bold mb-2">
      Name: {$person->getName()}
    </p>
  </div>
  <div class="mb-6">
    <p class="text-gray-700 font-bold mb-2">
      Email: {$person->getEmail()}
    </p>
  </div>
</div>
NED;

// footer
require_once "Template/footer.php";