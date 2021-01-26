<?php
class ModelMeasurementShirt  extends Model {
	public function addShirt($data) {
        // echo '<pre>';
        // print_r($data);
        // // echo '</pre>';exit;
        $this->db->query("INSERT INTO `" . DB_PREFIX . "shirt` SET length = '" . $this->db->escape($data['length']) . "', 
        shoulder = '" . $this->db->escape($data['shoulder']) . "', 
        cuff_h = '" . $this->db->escape($data['cuff_h']) . "', 
        cuff_o = '" . $this->db->escape($data['cuff_o']) . "', 
        chest_f = '" . $this->db->escape($data['chest_f']) . "', 
        chest_b = '" . $this->db->escape($data['chest_b']) . "', 
        hip = '" . $this->db->escape($data['hip']) . "', 
        collar = '" . $this->db->escape($data['collar']) . "', 
        status = '" . $this->db->escape($data['status']) . "', 
        date_added=NOW()");
        $shirt_id = $this->db->getLastId();
        return $shirt_id;

	}
		
	public function editShirt ($shirt_id, $data) {
		$this->db->query("UPDATE `" . DB_PREFIX . "shirt` SET length = '" . $this->db->escape($data['length']) . "',
        shoulder = '" . $this->db->escape($data['shoulder']) . "', 
        cuff_h = '" . $this->db->escape($data['cuff_h']) . "', 
        cuff_o = '" . $this->db->escape($data['cuff_o']) . "', 
        chest_f = '" . $this->db->escape($data['chest_f']) . "', 
        chest_b = '" . $this->db->escape($data['chest_b']) . "', 
        hip = '" . $this->db->escape($data['hip']) . "', 
        collar = '" . $this->db->escape($data['collar']) . "', 
        status = '" . (int)$data['status'] . "', 
        date_modified = NOW() WHERE shirt_id = '" . (int)$shirt_id . "'");
	}

	public function deleteShirt($shirt_id) {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "shirt` WHERE shirt_id = '" . (int)$shirt_id ."'");
    }
    
    public function getShirt($shirt_id) {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "oc_shirt` WHERE shirt_id = '" . (int)$shirt_id . "'");

		// return $query->row;
	}

	public function getShirts($shirt_id) {
        $query = $this->db->query("SELECT * FROM oc_shirt");

        // echo '<pre>';
        // print_r($query->rows);
        // echo '</pre>';exit;

        return $query->rows;
}

// public function editPassword($admin_id, $password){
//         $this->db->query("UPDATE `" . DB_PREFIX . "admin` SET salt = '" . $this->db->escape($salt = token(9)) . "', 
//         password = '" . $this->db->escape(sha1($salt . sha1($salt . sha1($password)))) . "' WHERE admin_id = '" . (int)$admin_id . "'");

//     }

// public function getDepartmentById($department_id){
//     $query = $this->db->query("SELECT * FROM department WHERE department_id='".(int)$department_id."'");
//         // echo '<pre>';
//         // print_r($query->rows);
//         // echo '</pre>';exit;
//     return $query->row['department_name'];
// }

// public function getPositionById($position_id){
//     $query = $this->db->query("SELECT * FROM position WHERE position_id='".(int)$position_id."'");

//     return $query->row['position_name'];
// }

public function getTotalShirts() {
//     $sql = "SELECT COUNT(*) AS total FROM " . DB_PREFIX . "admin";

//     $query = $this->db->query($sql);

//     return $query->row['total'];
}

}