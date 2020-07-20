<?php
$cities = array('Hà Nội','Hồ Chí Minh','Đà Nẵng');
class Student{
    public $name;
    public $age;
    public $location;
    public function __construct($name,$age,$location){
        $this->name = $name;
        $this->age = $age;
        $this->location = $location;
    }
}
$hue = new Student('Đào Thị Huê',22,'Hà Nội');
echo '<pre>';
print_r($cities);
echo '</pre>';

echo '<pre>';
print_r($hue);
echo '</pre>';

$phpJson1 = json_encode($cities);
echo '<pre>';
print_r($phpJson1);
echo '</pre>';

$phpJson2 = json_encode($hue);
echo '<pre>';
print_r($phpJson2);
echo '</pre>';