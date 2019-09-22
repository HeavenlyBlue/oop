<?php

class kendaraan //ini adalah sebuah kelas kendaraan. ex. public class kendaraan
{
	/*ini merupakan atribut, pemberian nama var sebelum variabel merupakan encapsulation yang defaultnya adalah public. berlaku juga jika di tambahkan kedalam class, jika class tidak ada pemberian encapsulation seperti private dan protected maka class akan bersifat public */
	
	var $JumlahRoda;	 	 
	var $Warna;				
	var $BahanBakar;		
	var $Harga;				
	var $Merek; 			
	
function statusHarga()	//ini adalah sebuah fungsi atau function
	{
		if ($this->harga > 50000000) $status='Mahal';
		else $status = 'Murah';
		return $status;
	}	

function setMerek($x)
	{
		$this->merek = $x;
	}
	
function setHarga($x)
	{
		$this->harga = $x;
	}
	
function bacaMerek()
	{
		return $this->merek;
	}
	
function bacaHarga()
	{
		return $this->harga;
	}

/*digunakan untuk mendeklarasikan agar fungsi tidak bertele tele, inisiasi suatu objek dan sekaligus mensetting propertynya. dimana $x menyatakan merek kendaraan dan $y adalah harganya */
function __construct($x, $y) 
	{
		$this->merek = $x; //perintah ini digunakan untuk setting property merek kendaraan berdasarkan nilai $x
		$this->harga = $y;
	}
}

class keretaApi extends kendaraan
{
	public $jumlahGerbong;
	
	function setGerbong($x)
	{
		$this->jumlahGerbong = $x;
	}
	
	function bacaGerbong ()
	{
		return $this->jumlahGerbong;
	}
}

$kendaraan1 = new kendaraan (); //ini merupakan sebuah property dari sebuah objek $kendaraan1
$kendaraan1->setMerek('Yamaha Vixion');
$kendaraan1->setHarga(37500000);
$kendaraan1->statusHarga();
echo 'Harga dari ', $kendaraan1->merek, ' adalah Rp. ', $kendaraan1->harga;

$kereta1 = new keretaApi('KA Lokomotif',150000);
$kereta1->setGerbong(14);
echo	'Jumlah Gerbong dari ', $kereta1->bacaMerek(),
		' yang seharga ', $kereta1->bacaHarga(),
		' adalah ', $kereta1->bacaGerbong();

?>
