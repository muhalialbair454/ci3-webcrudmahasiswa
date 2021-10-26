<?php

class Mmahasiswa extends CI_Model
{
    public function getAllDataMahasiswa()
    {
        $this->db->select("*");
        $this->db->from("tbl_data_mahasiswa");
        $query = $this->db->get();

        return $query->result();
    }

    public function updateAddDataMahasiswa($dataMahasiswa)
    {
        if ($this->db->insert("tbl_data_mahasiswa", $dataMahasiswa)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function getDataMahasiswa($idMahasiswa)
    {
        $this->db->select("*");
        $this->db->from("tbl_data_mahasiswa");
        $this->db->where('id_mahasiswa', $idMahasiswa);
        $query = $this->db->get();

        return $query->row();
    }

    public function updateDataMahasiswa($idMahasiswa, $dataMahasiswa)
    {
        $this->db->where('id_mahasiswa', $idMahasiswa);
        return $this->db->update('tbl_data_mahasiswa', $dataMahasiswa);
    }

    public function deleteDataMahasiswa($idMahasiswa)
    {
        $this->db->where('id_mahasiswa', $idMahasiswa);
        return $this->db->delete('tbl_data_mahasiswa');
    }
}
