<?php
// 5 Writing a Real Life Useful Class

class RGB{
    private $color;
    private $red;
    private $green;
    private $blue;

    function __construct($color='') {
        $this->color = ltrim($color, '#');
    }
    
    public function setRGB($color) {
        $this->color = ltrim($color, '#');
    }

    private function parseRGB() {
        list($this->red, $this->green, $this->blue) = sscanf($this->color, "%02x%02x%02x");
    }

    public function getRGB() {
        if($this->color == '') {
            return "Please 'setRGB' ";
        } else {
            $this->parseRGB($this->color);
            printf("Red : %s \nGreen : %s \nBlue : %s \n", $this->red, $this->green, $this->blue);
        } 
    }
}

$color= new RGB();
$color->setRGB('#3E3D32');
$color->getRGB();
 