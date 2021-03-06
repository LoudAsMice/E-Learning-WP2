<?php

namespace App\Models;
use CodeIgniter\Model;

class ModelKuliah extends Model
{
    public function getMateri($where = null)
    {
        return $this->db->table('materi')->getWhere($where);
    }

    public function getTugas($where = null)
    {
        return $this->db->table('tugas')->getWhere($where);
    }

    public function hapusMateri($where = null)
    {
        return $this->db->table('materi')->delete($where);
    }

    public function hapusTugas($where = null)
    {
        return $this->db->table('tugas')->delete($where);
    }

    public function joinMateri($where)
    {
        return $this->db->table('dosen')->select('*')->join('materi', 'materi.nip = dosen.nip')->where($where)->get();
    }

    public function joinTugas($where)
    {
        return $this->db->table('dosen')->select('*')->join('tugas', 'tugas.nip = dosen.nip')->where($where)->get();
    }

    public function joinNilai($where)
    {
        return $this->db->table('nilai')->select('*')->join('mahasiswa', 'nilai.nim = mahasiswa.nim')->where($where)->get();
    }
}