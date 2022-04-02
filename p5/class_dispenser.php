<?php

class Dispenser{
    protected $volume;
    protected $hargaSegelas;
    private $volumeGelas;
    public $namaMinuman;

     function __construct() {
        $this->volume = 4000;
        $this->hargaSegelas = 15000;
        $this->volumeGelas = 250;
        
    }

 protected function volume() {
    $this->volume = 4000;
}
function get_volume(){
    return $this->volume;
}
function get_namaMinuman($namaMinuman){
    return $this->namaMinuman = $namaMinuman;
}
public function jual($Mineral){
    return "Jual Sebanyak :{$Mineral} Gelas 
    <br> Sisa volume :".($this->volume-($this->volumeGelas* $Mineral));

}
}

$Mineral1 = new Dispenser;

echo"Nama Minuman :".$Mineral1->get_namaMinuman("Mineral");
echo"<br>Volume Mineral :".$Mineral1->get_volume();
echo"<br> ".$Mineral1->jual(4);
?>