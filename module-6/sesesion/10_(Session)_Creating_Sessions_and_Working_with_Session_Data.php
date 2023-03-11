<?php
session_name("session_app");
session_id("sessionId");
session_start([
    "cookie_lifetime"=>10,
    // "cookie_domain" => '.sabbir.com',
    // "cookie_path" => '/'
]);
// $_SESSION['name'] = "Sabbir";

if( $_SESSION['name'] ) {   
    echo $_SESSION['name'];
}