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
        public function delete(){
            $con = DB::db_con();

            $stmt = $con->prepare('DELETE FROM tbl_info WHERE id=?');
            $stmt->bind_param('i',$id);

            $id = $this->id;

            $stmt->execute();
            
            return 1;
            
            $stmt->close();
            $con->close();
        }
        public function update(){
            $con = DB::db_con();

            $stmt = $con->prepare('UPDATE tbl_info SET firstname=?, middlename=?, lastname=?, position=?, company=?, updated_at=? WHERE id=?');
            $stmt->bind_param('ssssssi',$fname,$mname,$lname,$pos,$date,$id);

            $fname = $this->firstname;
            $mname = $this->middlename;
            $lname = $this->lastname;
            $pos = $this->position;
            $date = $this->updated_at;


            $stmt->execute();

            return
        }
    }
?>