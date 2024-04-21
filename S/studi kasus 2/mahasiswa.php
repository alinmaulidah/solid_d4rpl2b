<?php

class Mahasiswa {
    private string $nim;
    private string $nama;

    public function __construct(string $nim, string $nama) {
        $this->nim = $nim;
        $this->nama = $nama;
    }

    public function getnim(): string {
        return $this->nim;
    }

    public function getnama(): string {
        return $this->nama;
    }
}

class MahasiswaView {
    public function showMahasiswa(Mahasiswa $mahasiswa): void {
        echo "NIM: " . $mahasiswa->getnim() . "\n";
        echo "Nama: " . $mahasiswa->getnama() . "\n";
    }
}


$mahasiswa = new Mahasiswa("2205034", "Alin maulidah");
$mahasiswaView = new MahasiswaView();
$mahasiswaView->showMahasiswa($mahasiswa);

echo "\n";
echo "<br>";
