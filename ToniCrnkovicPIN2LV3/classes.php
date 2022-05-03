<?php
abstract class Zaposlenik
{ 
    private $ime = "N/A";
    private $prezime = "N/A";
    private $oib = "N/A";

    public function __construct($ime=null, $prezime=null, $oib=null){
        if($ime) $this->ime=$ime;
        if($prezime) $this->prezime=$prezime;
        if($oib) $this->oib=$oib;
    }
    public function getIme(){
        return $this->ime;
    } 
    public function getPrezime(){
        return $this->prezime;
    } 
    public function getOib(){
        return $this->oib;
    }
    //Zadatak 4
    public function Hello(){
        echo "Hello ".$this->ime." ".$this->prezime." (".$this->oib.")";
    }
    //Zadatak 5
    private function checkOib(){
        $oOibValidator = new OIB();
        if(!$oOibValidator->check($this->getOib())) throw new Exception('Oib nije ispravan');
   }
   public function check(){
       $this->checkOib();
   }
   abstract public function Radi();

}
//Zadatak 6,7
class Nastavnik extends Zaposlenik{
    public function __construct($ime, $prezime, $oib){
        parent::__construct($ime, $prezime, $oib);
    }
    public function Radi() {
        echo $this->getIme().' '.$this->getPrezime().' idi izvoditi nastavu';
    }
}
class StrucnaSluzba extends Zaposlenik{
    public function __construct($ime, $prezime, $oib){
        parent::__construct($ime, $prezime, $oib);
    }
    public function Radi() {
        echo $this->getIme().' '.$this->getPrezime().' idi obavljati administrativne poslove';
    }
}
//Zadatak 8 i 9
interface INastavnik{
    public function DrziNastavu();
}
class Predavac implements INastavnik{
    public function DrziNastavu(){
        echo $this->getIme().' '.$this->getPrezime().' idi izvoditi nastavu';
    }
}
//Zadatak 10
interface IAsistent{
    public function PripremiNastavu();
    public function CuvajIspit();
}
class Asistent extends Nastavnik implements INastavnik, IAsistent{
    public function __construct($ime, $prezime, $oib){
        parent::__construct($ime, $prezime, $oib); 
    }
    public function PripremiNastavu(){
        echo $this->getIme().' '.$this->getPrezime().' pripremi predavanja <br/>';
    }
    public function CuvajIspit(){
        echo $this->getIme().' '.$this->getPrezime().' idi čuvaj ispit <br/>';
    }
    public function DrziNastavu(){
        echo $this->getIme().' '.$this->getPrezime().' idi izvoditi vježbe <br/>';
    }
}


class OIB {
    public static function check( $oib )
    {
       if ( mb_strlen( $oib ) != 11 || ( ! is_numeric( $oib ) ) ) {
          return false;
       }
       $ostatak = 10;
       for ( $i = 0; $i < 10; $i++ ) {
          $trenutnaZnamenka = (int) $oib[$i];
          $zbroj = $trenutnaZnamenka + $ostatak;
          $meduOstatak = $zbroj % 10;
          if ( $meduOstatak == 0) {
             $meduOstatak = 10;
          }
          $umnozak = $meduOstatak * 2;
          $ostatak = $umnozak % 11;
       }
       if ( $ostatak == 1 ) {
          $kontrolnaZnamenka = 0;
       }
       else {
          $kontrolnaZnamenka = 11 - $ostatak;
       }
       if ( ( (int) $oib[10] ) == $kontrolnaZnamenka ) {
          return true;
       }
       return false;
    }
}
?>