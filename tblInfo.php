<?php
    require_once('konek.php');

    Class TblInfo{
        public $id;
        public $firstname;
        public $middlename;
        public $lastname;
        public $position;
        public $company;
        public $created_at;
        public $updated_at;

        public function show(){
            $con = DB::db_con();

            $stmt = $con->prepare('SELECT * FROM tbl_info');
            $stmt->execute();
            
            $result = $stmt->get_result();
            $arr = array();
            while($row = $result->fetch_assoc()){
                $arr[] = $row;
            }
            return $arr;

            $stmt->close();
            $con->close();
        }
    }
?>