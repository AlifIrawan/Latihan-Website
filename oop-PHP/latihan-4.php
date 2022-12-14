<?php 

// Membuat sebuah class dengan nama komik
class Komik{

	// Property pada class
    public $judul = "unknow";
    public $penulis = "unknow";
    public $penerbit = "unknow";
    public $harga = "unknow";

    // Method Construct yang otomatis dijalankan
    public function __construct($judul, $penulis, $penerbit, $harga){

    	$this->judul = $judul;
    	$this->penulis = $penulis;
    	$this->penerbit = $penerbit;
    	$this->harga = $harga;
    }

    // Method getLabel untuk class komik
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
}

// Menggunakan object type pada class
class cetakInfoLengkap {

	// parameter pertama didapat dari Object
	public function cetak( Komik $produk){
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
		return $str;
	}

}


// Buat sebuah objek dari class komik
$produk1 = new Komik("Gakuen school", "Moshimoto Itsuky", "Kobassolo", 20000);
$infoProduk1 = new cetakInfoLengkap();



// Tampilkan Hasilnya
echo "Komik ini memiliki judul yaitu : ". $produk1->getLabel() .", Komik ini memiliki Copyright";

echo "<br>";

echo "Info Lengkap produk " . $infoProduk1->cetak($produk1);

?>