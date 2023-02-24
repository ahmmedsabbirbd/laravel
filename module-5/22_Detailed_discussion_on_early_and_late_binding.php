<?php
// 22_Detailed_discussion_on_early_and_late_binding

class FavColor { 

    static function getData1() {
        echo static::getData();
    }

    static function getData() {
        return "x";
    }
}

class extentdFavColor extends FavColor {

    static function getdata() {
        return "y";
    }
}

echo extentdFavColor::getData1(); // early (self) and late_binding(static)