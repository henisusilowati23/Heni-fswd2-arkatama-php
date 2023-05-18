<?php
class Animal
{
    public $nama;
    public $jenis;

    function infoAnimal()
    {
        return "Hewan ini adalah $this->nama merupakan jenis hewan $this->jenis";
    }
}

$animal1 = new Animal();
$animal1->nama= "sapi";
$animal1->jenis= "herbivora";
echo $animal1->infoAnimal();
?>