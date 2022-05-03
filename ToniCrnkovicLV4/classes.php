<?php
class Configuration{
    public $host="";
    public $dbName ="";
    public $username="";
    public $password="";

}
class Employee{
    public $emp_no ="";
    public $birth_date ="";
    public $first_name="";
    public $last_name="";
    public $gender="";
    public $hire_date="";
    public function __construct($no,$birth, $fname, $lname, $gend, $hire){
        $this->emp_no =$no;
        $this->birth_date =$birth;
        $this->first_name=$fname;
        $this->last_name=$lname;
        $this->gender=$gend;
        $this->hire_date=$hire;

    }
}
class Department{
    public $dept_no ="";
    public $dept_name ="";
    public function __construct($no, $name){
        $this->dept_no =$no;
        $this->dept_name=$name;

    }
}
?>