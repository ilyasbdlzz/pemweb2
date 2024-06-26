<?php
class NilaiMahasiswa{
    public $matakuliah;
    public $nilai;
    public $nim;
    public $nama;

    //construct
    function __construct($matakuliah,$nilai,$nim,$nama){
        $this->matakuliah=$matakuliah;
        $this->nilai=$nilai;
        $this->nim=$nim;
        $this->nama=$nama;
    }

    //method hasil ujian
    function hasilujian(){
        if($this->nilai >= 0 && $this->nilai <= 35){
            return 'E';
        }
        else if($this->nilai > 35 && $this->nilai <= 55){
            return 'D';
        }
        else if($this->nilai > 55 && $this->nilai <= 69){
            return 'C';
        }
        else if($this->nilai > 69 && $this->nilai <= 84){
            return 'B';
        }
        else if($this->nilai > 84 && $this->nilai <= 100){
            return 'A';
        }
        else{
            return 'TERJADI KESALAHAN INPUT, MASUKAN NILAI DARI 1-100';
        }
    }

    //method grade
    function grade(){
        if($this->nilai >= 0 && $this->nilai <= 56){
            return 'TIDAK LULUS';
        }
        else if($this->nilai > 56 && $this->nilai <= 100){
            return 'LULUS';
        }
        else{
            return 'SALAH INPUT';
        }
    }

}
?>
