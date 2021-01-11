<?php
    class Mobilisers{

        // Connection
        private $conn;

        // Table
        private $db_table = "mobiliser_tbl";

        // Columns
        public $mobiliser_id;
        public $net_structure;
        public $first_name;
        public $surname;
        public $date_of_birth;
        public $cellnumber;
        public $email;
        public $race;
        public $religion;
        public $sex;
        public $gender;
        public $gender_id;
        public $pronouns;
        public $mobaliser_address;
        public $province;
        public $district;
        public $municipality;
        public $alternate_person;
        public $alternate_number;
        public $disable;
        public $disability_type;
        public $school_level;
        public $created_date;

        // Db connection
        public function __construct($db){
            $this->conn = $db;
        }

        // GET ALL
        public function getMobilisers(){
            $sqlQuery = "SELECT mobiliser_id, net_structure, first_name, surname, date_of_birth, cellnumber, email, race, religion, sex, gender, gender_id, pronouns, mobaliser_address, province, district, municipality, alternate_person, alternate_number, disable, disability_type, school_level, created_date FROM " . $this->db_table . "";
            $stmt = $this->conn->prepare($sqlQuery);
            $stmt->execute();
            return $stmt;
        }

        // CREATE
        public function createEmployee(){
            $sqlQuery = "INSERT INTO
                        ". $this->db_table ."
                    SET
                        name = :name, 
                        email = :email, 
                        age = :age, 
                        designation = :designation, 
                        created = :created";
        
            $stmt = $this->conn->prepare($sqlQuery);
        
            // sanitize

            $this->mobiliser_id=htmlspecialchars(strip_tags($this->mobiliser_id));
            $this->net_structure=htmlspecialchars(strip_tags($this->net_structure));
            $this->first_name=htmlspecialchars(strip_tags($this->first_name));
            $this->surname=htmlspecialchars(strip_tags($this->surname));
            $this->date_of_birth=htmlspecialchars(strip_tags($this->date_of_birth));
            $this->cellnumber=htmlspecialchars(strip_tags($this->cellnumber));
            $this->email=htmlspecialchars(strip_tags($this->email));
            $this->race=htmlspecialchars(strip_tags($this->race));
            $this->religion=htmlspecialchars(strip_tags($this->religion));
            $this->sex=htmlspecialchars(strip_tags($this->sex));
            $this->gender=htmlspecialchars(strip_tags($this->gender));
            $this->gender_id=htmlspecialchars(strip_tags($this->gender_id));
            $this->pronouns=htmlspecialchars(strip_tags($this->pronouns));
            $this->mobaliser_address=htmlspecialchars(strip_tags($this->mobaliser_address));
            $this->province=htmlspecialchars(strip_tags($this->province));
            $this->district=htmlspecialchars(strip_tags($this->district));
            $this->municipality=htmlspecialchars(strip_tags($this->municipality));
            $this->alternate_person=htmlspecialchars(strip_tags($this->alternate_person));
            $this->alternate_number=htmlspecialchars(strip_tags($this->alternate_number));
            $this->disable=htmlspecialchars(strip_tags($this->disable));
            $this->disability_type=htmlspecialchars(strip_tags($this->disability_type));
            $this->school_level=htmlspecialchars(strip_tags($this->school_level));
            $this->created_date=htmlspecialchars(strip_tags($this->created_date));

        
            // bind data
            $stmt->bindParam(":net_structure", $this->net_structure);
            $stmt->bindParam(":first_name", $this->first_name);
            $stmt->bindParam(":surname", $this->surname);
            $stmt->bindParam(":date_of_birth", $this->date_of_birth);
            $stmt->bindParam(":cellnumber", $this->cellnumber);
            $stmt->bindParam(":email", $this->email);
            $stmt->bindParam(":race", $this->race);
            $stmt->bindParam(":religion", $this->religion);
            $stmt->bindParam(":sex", $this->sex);
            $stmt->bindParam(":gender", $this->gender);
            $stmt->bindParam(":gender_id", $this->gender_id);
            $stmt->bindParam(":pronouns", $this->pronouns);
            $stmt->bindParam(":mobaliser_address", $this->mobaliser_address);
            $stmt->bindParam(":province", $this->province);
            $stmt->bindParam(":district", $this->district);
            $stmt->bindParam(":municipality", $this->municipality);
            $stmt->bindParam(":alternate_person", $this->alternate_person);
            $stmt->bindParam(":alternate_number", $this->alternate_number);
            $stmt->bindParam(":disable", $this->disable);
            $stmt->bindParam(":disability_type", $this->disability_type);
            $stmt->bindParam(":school_level", $this->school_level);
            $stmt->bindParam(":created_date", $this->created_date);                               
        
            if($stmt->execute()){
               return true;
            }
            return false;
        }

        // READ single
        public function getSingleEmployee(){
            $sqlQuery = "SELECT
                        id, 
                        name, 
                        email, 
                        age, 
                        designation, 
                        created
                      FROM
                        ". $this->db_table ."
                    WHERE 
                       id = ?
                    LIMIT 0,1";

            $stmt = $this->conn->prepare($sqlQuery);

            $stmt->bindParam(1, $this->id);

            $stmt->execute();

            $dataRow = $stmt->fetch(PDO::FETCH_ASSOC);
            
            $this->name = $dataRow['name'];
            $this->email = $dataRow['email'];
            $this->age = $dataRow['age'];
            $this->designation = $dataRow['designation'];
            $this->created = $dataRow['created'];
        }        

        // UPDATE
        public function updateEmployee(){
            $sqlQuery = "UPDATE
                        ". $this->db_table ."
                    SET
                        name = :name, 
                        email = :email, 
                        age = :age, 
                        designation = :designation, 
                        created = :created
                    WHERE 
                        id = :id";
        
            $stmt = $this->conn->prepare($sqlQuery);
        
            $this->name=htmlspecialchars(strip_tags($this->name));
            $this->email=htmlspecialchars(strip_tags($this->email));
            $this->age=htmlspecialchars(strip_tags($this->age));
            $this->designation=htmlspecialchars(strip_tags($this->designation));
            $this->created=htmlspecialchars(strip_tags($this->created));
            $this->id=htmlspecialchars(strip_tags($this->id));
        
            // bind data
            $stmt->bindParam(":name", $this->name);
            $stmt->bindParam(":email", $this->email);
            $stmt->bindParam(":age", $this->age);
            $stmt->bindParam(":designation", $this->designation);
            $stmt->bindParam(":created", $this->created);
            $stmt->bindParam(":id", $this->id);
        
            if($stmt->execute()){
               return true;
            }
            return false;
        }

        // DELETE
        function deleteEmployee(){
            $sqlQuery = "DELETE FROM " . $this->db_table . " WHERE id = ?";
            $stmt = $this->conn->prepare($sqlQuery);
        
            $this->id=htmlspecialchars(strip_tags($this->id));
        
            $stmt->bindParam(1, $this->id);
        
            if($stmt->execute()){
                return true;
            }
            return false;
        }

    }
?>