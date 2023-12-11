// application/controllers/Diagnosis.php
<?php
class Diagnosis extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('diagnosis_model');
    }

    public function index() {
        $data['gejala'] = $this->diagnosis_model->get_gejala();
        $this->load->view('diagnosis', $data);
    }

    public function proses_diagnosis() {
        $gejala_terpilih = $this->input->post('gejala');

        if (!empty($gejala_terpilih)) {
            $penyakit = $this->diagnosis_model->get_penyakit_by_gejala($gejala_terpilih);

            if (!empty($penyakit)) {
                $penyakit_id = $penyakit[0]['id_penyakit'];
                $solusi = $this->diagnosis_model->get_solusi_by_penyakit($penyakit_id);

                $data['hasil_diagnosis'] = [
                    'penyakit' => $penyakit[0]['nama_penyakit'],
                    'solusi' => $solusi['solusi']
                ];
            } else {
                $data['hasil_diagnosis'] = [
                    'penyakit' => 'Tidak Ditemukan',
                    'solusi' => 'Maaf, kami tidak dapat menemukan penyakit yang sesuai dengan gejala yang Anda alami.'
                ];
            }
        } else {
            $data['hasil_diagnosis'] = [
                'penyakit' => 'Tidak Ada Gejala Dipilih',
                'solusi' => 'Anda belum memilih gejala. Mohon pilih gejala yang Anda alami.'
            ];
        }

        $this->load->view('hasil_diagnosis', $data);
    }
}
