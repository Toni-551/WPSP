<?php 



header('Content-type: text/json');
header('Content-type: application/json; charset=utf-8');

class Student{
    public $Ime= null;
    public $Prezime= null;
    public $JMBAG= null;
    public $Adresa= null;
    public $Postanski_broj= null;
    public $Grad= null;
    public $Godina_studija= null;
    public $Ostvareni_ECTS_bodovi= null;
    public $Prosjek_ocjena= null;
    public $Soba = null;

    public function __construct($ime=null, $prezime=null, $jmbag=null, $adresa=null, $postbroj=null, $grad=null, $godina=null, $ects=null, $prosjek=null ,$soba=null ){
        $this->Ime = $ime;
        $this->Prezime = $prezime;
        $this->JMBAG =  $jmbag;
        $this->Adresa=$adresa;
        $this->Grad = $grad;
        $this->Godina_studija = $godina;
        $this->Ostvareni_ECTS_bodovi = $ects;
        $this->Prosjek_ocjena = $prosjek;
        $this->Postanski_broj = $postbroj;
        $this->Soba = $soba;
    }

}

class Soba{
    public $Id = null;
    public $Naziv = null;
    public $Opis = null;
    public $Kat = null;
    public $Polje_studenata = null;
    public function __construct($id=null, $naziv=null, $opis=null, $kat=null, $poljeStudenata=null){
        $this->Id=$id;
        $this->Naziv=$naziv;
        $this->Opis =$opis;
        $this->Kat =$kat;
        $this->Polje_studenata =$poljeStudenata;
    }
}

class Studom{
    public $Polje_studenata = []; //(sadrži objekte klase Student)
    public $Polje_soba = null; //(sadrži objekte klase Soba)

    public function __construct(){
        include "connection.php";

        $sQuery="SELECT * FROM studenti, studentidodatnipodaci, studentipodacistudij, studentsoba, sobe where studenti.JMBAG=studentidodatnipodaci.JMBAG And studenti.JMBAG=studentipodacistudij.JMBAG and studenti.JMBAG= studentsoba.JMBAG and studentsoba.Id_soba= sobe.Id"; 
        $oStatement = $oConnection->query($sQuery);
        $oStudenti = array();
        while($oRow = $oStatement->fetch(PDO::FETCH_BOTH))
        {
            $oSoba = new Soba($oRow['Id_soba'], $oRow['Naziv'], $oRow['Opis'], $oRow['Kat']);
            $oStudent = new Student($oRow['Ime'], $oRow['Prezime'], $oRow['JMBAG'], $oRow['Adresa'], $oRow['Postanski_broj'], $oRow['Grad'], $oRow['Godina_studija'], $oRow['Ostvareni_ECTS_bodovi'], $oRow['Prosjek_ocjena'], $oSoba);
            array_push($oStudenti, $oStudent);
        }
        
        $this->Polje_studenata=$oStudenti;

        $sQuery="SELECT sobe.Id, sobe.Naziv, sobe.Kat, sobe.Opis, GROUP_CONCAT(JMBAG)as studenti  FROM studentsoba, sobe WHERE studentsoba.Id_soba=sobe.Id group by sobe.Id;"; 
        $oStatement = $oConnection->query($sQuery);
        $oSobe = array();
        while($oRow = $oStatement->fetch(PDO::FETCH_BOTH))
        {
            $aJMBG = explode(",", $oRow['studenti']);
            $lStudenti = [];
            foreach($aJMBG as $jmbg){
                foreach ($this->Polje_studenata as $student) {
                    if($student->JMBAG ==$jmbg){
                        array_push($lStudenti, $student);
                    }
                }
            }
            $oSoba = new Soba($oRow['Id'] ,$oRow['Naziv'], $oRow['Opis'], $oRow['Kat'], $lStudenti);
            array_push($oSobe, $oSoba);
        }
        $this->Polje_soba=$oSobe;

    }
    public function ReturnStudents(){
        return json_encode($this->Polje_studenata);
    }
    
    public function ReturnRooms(){
        return json_encode($this->Polje_soba);
    }
}
?>