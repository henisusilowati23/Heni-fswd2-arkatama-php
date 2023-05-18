<?php

class Animal
{
    public $nama;
    public $jenis;

    public function info()
    {
        return "Hewan ini adalah $this->nama jenis $this->jenis";
    }
}

class Cat extends Animal{
    public $speed;
    public function info()
    {
        return "Hewan ini adalah $this->nama jenis $this->jenis";
    }
}

$cat1 = new Cat();
echo '<pre>';
print_r($cat1);
echo '</pre>';
die;
?>