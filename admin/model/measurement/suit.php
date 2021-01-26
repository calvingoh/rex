<?php
class ModelMeasurementSuit  extends Model {
	public function addSuit($data) {
        // echo '<pre>';
        // print_r($data);
        // // echo '</pre>';exit;
        $this->db->query("INSERT INTO `" . DB_PREFIX . "suit` SET length = '" . $this->db->escape($data['length']) . "', 
        shoulder = '" . $this->db->escape($data['shoulder']) . "', 
        cuff_h = '" . $this->db->escape($data['cuff_h']) . "', 
        cuff_o = '" . $this->db->escape($data['cuff_o']) . "', 
        chest_f = '" . $this->db->escape($data['chest_f']) . "', 
        chest_b = '" . $this->db->escape($data['chest_b']) . "', 
        hip = '" . $this->db->escape($data['hip']) . "', 
        collar = '" . $this->db->escape($data['collar']) . "', 
        status = '" . $this->db->escape($data['status']) . "', 
        date_added=NOW()");
        $suit_id = $this->db->getLastId();
        return $suit_id;

	}
		
	public function editSuit ($suit_id, $data) {
		$this->db->query("UPDATE `" . DB_PREFIX . "suit` SET length = '" . $this->db->escape($data['length']) . "',
        shoulder = '" . $this->db->escape($data['shoulder']) . "', 
        cuff_h = '" . $this->db->escape($data['cuff_h']) . "', 
        cuff_o = '" . $this->db->escape($data['cuff_o']) . "', 
        chest_f = '" . $this->db->escape($data['chest_f']) . "', 
        chest_b = '" . $this->db->escape($data['chest_b']) . "', 
        hip = '" . $this->db->escape($data['hip']) . "', 
        collar = '" . $this->db->escape($data['collar']) . "', 
        status = '" . (int)$data['status'] . "', 
        date_modified = NOW() WHERE suit_id = '" . (int)$suit_id . "'");
	}

	public function deleteSuit($suit_id) {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "suit` WHERE suit_id = '" . (int)$suit_id ."'");
    }
    
    public function getSuit ($suit_id) {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "oc_suit` WHERE suit_id = '" . (int)$suit_id . "'");

		// return $query->row;
	}

	public function getSuits($suit_id) {
        $query = $this->db->query("SELECT * FROM oc_suit");

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

public function getTotalSuits() {
//     $sql = "SELECT COUNT(*) AS total FROM " . DB_PREFIX . "admin";

//     $query = $this->db->query($sql);

//     return $query->row['total'];
}

}