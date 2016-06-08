<?php

class Person
{

    // database connection and table name
    private $conn;
    private $contacts = "contact";
    private $education = "educational";
    private $personal = "personal";

    // object properties
    public $name;
    public $dob;
    public $sex;
    public $college;
    public $degree;
    public $box;
    public $telephone;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    // create product
    function contact_details()
    {

        //write query
        $query = "INSERT INTO " . $this->contacts . " VALUES('',?,?)";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(1, $this->box);
        $stmt->bindParam(2, $this->telephone);


        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }

    }

    function educational_info()
    {

        //write query
        $query = "INSERT INTO " . $this->education . " VALUES('',?,?)";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(1, $this->college);
        $stmt->bindParam(2, $this->degree);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }

    }


    function personal_details()
    {

        //write query
        $query = "INSERT INTO " . $this->personal . " VALUES('',?,?,?)";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(1, $this->name);
        $stmt->bindParam(2, $this->dob);
        $stmt->bindParam(3, $this->sex);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }

    }

    // read products
    function readAll()
    {

        $query = "SELECT * FROM  " . $this->personal;

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }
}

?>
