// application/models/Diagnosis_model.php
<?php
class Diagnosis_model extends CI_Model {

    public function get_gejala() {
        $query = $this->db->get('gejala');
        return $query->result_array();
    }

    public function get_penyakit_by_gejala($gejala_ids) {
        $this->db->select('penyakit.*');
        $this->db->distinct();
        $this->db->from('penyakit');
        $this->db->join('relasi_gejala_penyakit', 'penyakit.id_penyakit = relasi_gejala_penyakit.id_penyakit');
        $this->db->where_in('relasi_gejala_penyakit.id_gejala', $gejala_ids);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_solusi_by_penyakit($penyakit_id) {
        $query = $this->db->get_where('solusi', ['id_penyakit' => $penyakit_id]);
        return $query->row_array();
    }
}
