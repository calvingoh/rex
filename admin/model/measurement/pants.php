<?php
class ModelMeasurementPants  extends Model {
	public function addPants($data) {
        // echo '<pre>';
        // print_r($data);
        // // echo '</pre>';exit;
        $this->db->query("INSERT INTO `" . DB_PREFIX . "pants` SET length = '" . $this->db->escape($data['length']) . "', 
        bottom = '" . $this->db->escape($data['bottom']) . "', 
        waist = '" . $this->db->escape($data['waist']) . "', 
        hip = '" . $this->db->escape($data['hip']) . "', 
        crotch = '" . $this->db->escape($data['waist']) . "', 
        leg = '" . $this->db->escape($data['leg']) . "', 
        knee = '" . $this->db->escape($data['knee']) . "', 
        status = '" . $this->db->escape($data['status']) . "', 
        date_added=NOW()");
        $pants_id = $this->db->getLastId();
        return $pants_id;

	}
		
	public function editPants ($pants_id, $data) {
		$this->db->query("UPDATE `" . DB_PREFIX . "pants` SET length = '" . $this->db->escape($data['length']) . "',
        bottom = '" . $this->db->escape($data['bottom']) . "', 
        waist = '" . $this->db->escape($data['waist']) . "', 
        hip = '" . $this->db->escape($data['hip']) . "', 
        crotch = '" . $this->db->escape($data['waist']) . "', 
        leg = '" . $this->db->escape($data['leg']) . "', 
        knee = '" . $this->db->escape($data['knee']) . "', 
        status = '" . (int)$data['status'] . "', 
        date_modified = NOW() WHERE pants_id = '" . (int)$pants_id . "'");
	}

	public function deletePants($pants_id) {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "pants` WHERE pants_id = '" . (int)$pants_id ."'");
    }
    
    public function getPants ($pants_id) {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "pants` WHERE pants_id = '" . (int)$pants_id . "'");

		// return $query->row;
	}

	public function getPantss($pants_id) {
        $query = $this->db->query("SELECT * FROM pants");

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

public function getTotalPantss() {
//     $sql = "SELECT COUNT(*) AS total FROM " . DB_PREFIX . "admin";

//     $query = $this->db->query($sql);

//     return $query->row['total'];
}

}