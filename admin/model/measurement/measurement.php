<?php
class ModelMeasurementMeasurement  extends Model {
	public function addMeasurement($data) {
        // echo '<pre>';
        // print_r($data);
        // // echo '</pre>';exit;
        $this->db->query("INSERT INTO `" . DB_PREFIX . "measurement` SET name = '" . $this->db->escape($data['name']) . "', 
        telephone = '" . $this->db->escape($data['telephone']) . "', 
        status = '" . $this->db->escape($data['status']) . "', 
        date_added=NOW()");
        $measurement_id = $this->db->getLastId();
        return $measurement_id;

	}
		
	public function editMeasurement($measurement_id, $data) {
		$this->db->query("UPDATE `" . DB_PREFIX . "measurement` SET name = '" . $this->db->escape($data['name']) . "', 
        telephone = '" . $this->db->escape($data['telephone']) . "', 
        status = '" . (int)$data['status'] . "', 
        date_modified = NOW() WHERE measurement_id = '" . (int)$measurement_id . "'");
	}

	public function deleteMeasurement ($measurement_id) {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "measurement` WHERE measurement_id = '" . (int)$measurement_id ."'");
    }
    
    public function getMeasurement ($measurement_id) {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "measurement` WHERE measurement_id = '" . (int)$measurement_id . "'");

		return $query->row;
	}

	public function getMeasurements($measurement_id) {
        $query = $this->db->query("SELECT * FROM oc_measurement");

        // echo '<pre>';
        // print_r($query->rows);
        // echo '</pre>';exit;

        return $query->rows;
}


public function getTotalMeasurements() {
//     $sql = "SELECT COUNT(*) AS total FROM " . DB_PREFIX . "measurement";

//     $query = $this->db->query($sql);

//     return $query->row['total'];
}

}