<?php


class Mahasiswa extends CI_Controller
{

    public function index()
    {
        $data['title'] = "List Data Mahasiswa";
        $data['getAllDataMahasiswa'] = $this->Mmahasiswa->getAllDataMahasiswa();

        $this->load->view("v_mahasiswa", $data);
    }

    public function addMahasiswa()
    {
        $data['title'] = "Tambah Data Mahasiswa";

        $data['getAllDataMahasiswa'] = $this->Mmahasiswa->getAllDataMahasiswa();

        $this->load->view("v_addmahasiswa", $data);
    }

    public function updateAddMahasiswa()
    {
        $data['title'] = "Tambah Data Mahasiswa";

        // $data['getData'] = $this->input->post();
        // print_r($data['getData']);

        $this->form_validation->set_rules("txtnpm", "NPM", "required|min_length[8]|max_length[8]");
        $this->form_validation->set_rules("txtnamamahasiswa", "Nama Mahasiswa", "required");
        $this->form_validation->set_rules("dtanggallahir", "Tanggal Lahir", "required");
        $this->form_validation->set_rules("txtjurusan", "Jurusan", "required");
        $this->form_validation->set_rules("txtalamat", "Alamat", "required");
        $this->form_validation->set_rules("eemail", "Email", "required");
        $this->form_validation->set_rules("txtnotelepon", "Email", "required");

        if ($this->form_validation->run() === FALSE) {
            $this->addMahasiswa();
        } else {
            if ($foto = '') {
            } else {
                $config['upload_path'] = './assets/images';
                $config['allowed_types'] = 'jpg|jpeg|png|tiff';
                $this->load->library("upload", $config);
                if (!$this->upload->do_upload('ffoto')) {
                    echo "Foto gagal diupload !";
                } else {
                    $foto = $this->upload->data('file_name');
                }
            }
            $npm = $this->input->post("txtnpm");
            $namaMahasiswa = $this->input->post("txtnamamahasiswa");
            $tanggalLahir = $this->input->post("dtanggallahir");
            $jurusan = $this->input->post("txtjurusan");
            $alamat = $this->input->post("txtalamat");
            $email = $this->input->post("eemail");
            $nomorTelepon = $this->input->post("txtnotelepon");

            $dataMahasiswa = array(
                "foto" => $foto,
                "npm" => $npm,
                "nama_mahasiswa" => $namaMahasiswa,
                "tanggal_lahir" => $tanggalLahir,
                "jurusan" => $jurusan,
                "alamat" => $alamat,
                "email" => $email,
                "no_telepon" => $nomorTelepon,
            );

            if ($this->Mmahasiswa->updateAddDataMahasiswa($dataMahasiswa)) {
                $this->session->set_flashdata("success", "Data berhasil ditambahkan!");
            } else {
                $this->session->set_flashdata("error", "Data gagal ditambahkan!");
            }
            redirect("mahasiswa");
        }
    }

    public function editMahasiswa($idMahasiswa)
    {
        $data['title'] = "Edit Data Mahasiswa";

        $data['getDataMahasiswa'] = $this->Mmahasiswa->getDataMahasiswa($idMahasiswa);

        $this->load->view("v_editmahasiswa", $data);
    }

    public function updateEditMahasiswa()
    {
        $data['title'] = "Edit Data Mahasiswa";

        // $data['getData'] = $this->input->post();
        // print_r($data['getData']);

        $this->form_validation->set_rules("txtnpm", "NPM", "required|min_length[8]|max_length[8]");
        $this->form_validation->set_rules("txtnamamahasiswa", "Nama Mahasiswa", "required");
        $this->form_validation->set_rules("dtanggallahir", "Tanggal Lahir", "required");
        $this->form_validation->set_rules("txtjurusan", "Jurusan", "required");
        $this->form_validation->set_rules("txtalamat", "Alamat", "required");
        $this->form_validation->set_rules("eemail", "Email", "required");
        $this->form_validation->set_rules("txtnotelepon", "Email", "required");

        if ($this->form_validation->run() === FALSE) {
            $this->addMahasiswa();
        } else {
            if ($foto = '') {
            } else {
                $config['upload_path'] = './assets/images';
                $config['allowed_types'] = 'jpg|jpeg|png|tiff';
                $this->load->library("upload", $config);
                if (!$this->upload->do_upload('ffoto')) {
                    echo "Foto gagal diupload !";
                } else {
                    $foto = $this->upload->data('file_name');
                }
            }
            $npm = $this->input->post("txtnpm");
            $namaMahasiswa = $this->input->post("txtnamamahasiswa");
            $tanggalLahir = $this->input->post("dtanggallahir");
            $jurusan = $this->input->post("txtjurusan");
            $alamat = $this->input->post("txtalamat");
            $email = $this->input->post("eemail");
            $nomorTelepon = $this->input->post("txtnotelepon");

            $idMahasiswa = $this->input->post("txtidmahasiswa");

            $dataMahasiswa = array(
                "foto" => $foto,
                "npm" => $npm,
                "nama_mahasiswa" => $namaMahasiswa,
                "tanggal_lahir" => $tanggalLahir,
                "jurusan" => $jurusan,
                "alamat" => $alamat,
                "email" => $email,
                "no_telepon" => $nomorTelepon,
            );

            if ($this->Mmahasiswa->updateDataMahasiswa($idMahasiswa, $dataMahasiswa)) {
                $this->session->set_flashdata("success", "Data berhasil diubah!");
            } else {
                $this->session->set_flashdata("error", "Data gagal diubah!");
            }
            redirect("mahasiswa");
        }
    }

    public function deleteMahasiswa($idMahasiswa)
    {
        if (!empty($idMahasiswa)) {
            if ($this->Mmahasiswa->deleteDataMahasiswa($idMahasiswa)) {
                $this->session->set_flashdata("success", "Data berhasil dihapus!");
            } else {
                $this->session->set_flashdata("error", "Data gagal dihapus!");
            }
        }
        redirect("mahasiswa");
    }

    public function printListDataMahasiswa()
    {
        $data['title'] = "Print Data Mahasiswa";

        $data['getAllDataMahasiswa'] = $this->Mmahasiswa->getAllDataMahasiswa();

        $this->load->view("v_printmahasiswa", $data);
    }

    public function exportPdfListDataMahasiswa()
    {
        $data['title'] = "Export PDF Data Mahasiswa";

        $this->load->library('dompdf_gen');

        $data['getAllDataMahasiswa'] = $this->Mmahasiswa->getAllDataMahasiswa();

        $this->load->view('v_exportpdfmahasiswa', $data);

        $paperSize      = 'A4';
        $orientation    = 'landscape';
        $html           = $this->output->get_output();
        $this->dompdf->set_paper($paperSize, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("list-data-mahasiswa.pdf", array('Attachment' => 0));
    }

    public function exportExcelListDataMahasiswa()
    {
        $data['title'] = "Export Excel Data Mahasiswa";

        $data['getAllDataMahasiswa'] = $this->Mmahasiswa->getAllDataMahasiswa();

        $this->load->view('v_exportexcelmahasiswa', $data);

        require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel.php');
        require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

        $object = new PHPExcel();

        $object->getProperties()->setCreator("Muhammad Ali Albair");
        $object->getProperties()->setLastModifiedBy("Muhammad Ali Albair");
        $object->getProperties()->setTitle("Daftar Mahasiswa");

        $object->setActiveSheetIndex(0);

        $object->getActiveSheet()->setCellValue('A1', 'NO');
        $object->getActiveSheet()->setCellValue('B1', 'NPM');
        $object->getActiveSheet()->setCellValue('C1', 'NAMA MAHASISWA');
        $object->getActiveSheet()->setCellValue('D1', 'TANGGAL LAHIR');
        $object->getActiveSheet()->setCellValue('E1', 'JURUSAN');
        $object->getActiveSheet()->setCellValue('F1', 'ALAMAT');
        $object->getActiveSheet()->setCellValue('G1', 'EMAIL');
        $object->getActiveSheet()->setCellValue('H1', 'NO. TELEPON');

        $baris = 2;
        $no = 1;

        foreach ($data['getAllDataMahasiswa'] as $allDataMahasiswa) {
            $object->getActiveSheet()->setCellValue('A' . $baris, $no++);
            $object->getActiveSheet()->setCellValue('B' . $baris, $allDataMahasiswa->npm);
            $object->getActiveSheet()->setCellValue('C' . $baris, $allDataMahasiswa->nama_mahasiswa);
            $object->getActiveSheet()->setCellValue('D' . $baris, $allDataMahasiswa->tanggal_lahir);
            $object->getActiveSheet()->setCellValue('E' . $baris, $allDataMahasiswa->jurusan);
            $object->getActiveSheet()->setCellValue('F' . $baris, $allDataMahasiswa->alamat);
            $object->getActiveSheet()->setCellValue('G' . $baris, $allDataMahasiswa->email);
            $object->getActiveSheet()->setCellValue('H' . $baris, $allDataMahasiswa->no_telepon);

            $baris++;
        }

        $fileName = "Data_Mahasiswa" . '.xlsx';
        $object->getActiveSheet()->setTitle("Data Mahasiswa");

        header('Content-Type: application/vnd.openmxlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: Attachment;filename="' . $fileName . '"');
        header("Chache-Control: max-age=0");

        $writer = PHPExcel_IOFactory::createwriter($object, 'Excel2007');
        $writer->save('php://output');

        exit;
    }
}
