<?php
    class cred{
        private $db;

        function __construct($connect){
            $this->db = $connect;
        }
        public function insert($fname, $lname, $dob, $email, $contact){
            try {
                $sql = "INSERT INTO practice(First_Name,Last_Name,DOB,Email,Contact) VALUES(:fname,:lname,:dob,:email,:contact)";
                $stmt = $this->db->prepare($sql);

                $stmt->bindparam(':fname',$fname);
                $stmt->bindparam(':lname',$lname);
                $stmt->bindparam(':dob',$dob);
                $stmt->bindparam(':email',$email);
                $stmt->bindparam(':contact',$contact);

                $stmt->execute();
                return true;
            } catch (\PDOException $e) {
                echo $e->getMessage();
            }
        }            
    }
?>