<?php
class Mahasiswa {
    public $nim;
    public $nama;
    public $universitas;
    public $mata_kuliah;
    public $nilai;
    public $grade;
    public $predikat;
    public $status;

    public function __construct($nim, $nama, $universitas, $mata_kuliah, $nilai) {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->universitas = $universitas;
        $this->mata_kuliah = $mata_kuliah;
        $this->nilai = $nilai;
        $this->grade = $this->getGrade();
        $this->predikat = $this->getPredikat();
        $this->status = $this->getStatus();
    }

    private function getGrade() {
        if ($this->nilai >= 85) {
            return "A";
        } elseif ($this->nilai >= 75) {
            return "B";
        } elseif ($this->nilai >= 69) {
            return "C";
        } else {
            return "D";
        }
    }

    private function getPredikat() {
        if ($this->nilai >= 85) {
            return "Sangat Memuaskan";
        } elseif ($this->nilai >= 70) {
            return "Memuaskan";
        } elseif ($this->nilai >= 69) {
            return "Cukup";
        } else {
            return "Kurang";
        }
    }

    private function getStatus() {
        return ($this->nilai >= 65  ) ? "Lulus" : "Tidak Lulus";
    }
}
?>
