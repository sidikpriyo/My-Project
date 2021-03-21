<?php
defined('BASEPATH') OR exit ('No script access allowed');

class Produk extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		$this->load->model('M_Admin');

		if ($this->session->userdata('status') != 'admin_produk') {
			redirect('Auth');
		}
	}

	public function Dashboard() {
		$this->load->view('adm_produk/overview');
	}

	public function logout() {
		$this->session->unset_userdata('id_admin');
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('nama');
		$this->session->unset_userdata('status');
		session_destroy();
		redirect('Auth');
	}
	//menampilkan semua kategori baju
	public function allBaju() {
		$this->load->view('adm_produk/Baju/katBaju');
	}
	//menampilkan kategori baju perempuan
	public function bajuPerempuan() {
		$this->load->view('adm_produk/Baju/bajuPerempuan');
	}
	//menampilkan kategori baju Laki-Laki
	public function bajuLaki() {
		$this->load->view('adm_produk/Baju/bajuLaki');
	}
	//menampilkan kategori baju Anak
	public function bajuAnak() {
		$this->load->view('adm_produk/Baju/bajuAnak');
	}
	// CRUD Baju Perempuan
	// menambahkan data baju
	public function tambahBajuPerempuan(){
		$this->load->view('adm_produk/Baju/tambahBajuPerempuan');	
	}

	// CRUD Baju Laki
	// menambahkan data baju
	public function tambahBajuLaki(){
		$this->load->view('adm_produk/Baju/tambahBajuLaki');	
	}

	// CRUD Baju Anak
	// menambahkan data baju
	public function tambahBajuAnak(){
		$this->load->view('adm_produk/Baju/tambahBajuAnak');	
	}
	

	// menampilkan semua kategori celana
	public function allCelana() {
		$this->load->view('adm_produk/Celana/katCelana');
	}
	//menampilkan kategori celana perempuan
	public function celanaPerempuan() {
		$this->load->view('adm_produk/Celana/celanaPerempuan');
	}
	//menampilkan kategori celana Laki-Laki
	public function celanaLaki() {
		$this->load->view('adm_produk/Celana/celanaLaki');
	}
	//menampilkan kategori celana Anak
	public function celanaAnak() {
		$this->load->view('adm_produk/Celana/celanaAnak');
	}
	// CRUD Celana Perempuan
	// menambahkan data celana
	public function tambahCelanaPerempuan(){
		$this->load->view('adm_produk/Celana/tambahCelanaPerempuan');	
	}

	// CRUD Celana Laki
	// menambahkan data celana
	public function tambahCelanaLaki(){
		$this->load->view('adm_produk/Celana/tambahCelanaLaki');	
	}

	// CRUD Celana Anak
	// menambahkan data celana
	public function tambahCelanaAnak(){
		$this->load->view('adm_produk/Celana/tambahCelanaAnak');	
	}

	// menampilkan semua kategori tas
	public function allTas() {
		$this->load->view('adm_produk/Tas/katTas');
	}
	//menampilkan kategori tas perempuan
	public function tasPerempuan() {
		$this->load->view('adm_produk/Tas/tasPerempuan');
	}
	//menampilkan kategori tas Laki-Laki
	public function tasLaki() {
		$this->load->view('adm_produk/Tas/tasLaki');
	}
	//menampilkan kategori tas Anak
	public function tasAnak() {
		$this->load->view('adm_produk/Tas/tasAnak');
	}
	// CRUD Tas Perempuan
	// menambahkan data tas
	public function tambahTasPerempuan(){
		$this->load->view('adm_produk/Tas/tambahTasPerempuan');	
	}

	// CRUD Tas Laki
	// menambahkan data tas
	public function tambahTasLaki(){
		$this->load->view('adm_produk/Tas/tambahTasLaki');	
	}

	// CRUD Tas Anak
	// menambahkan data tas
	public function tambahTasAnak(){
		$this->load->view('adm_produk/Tas/tambahTasAnak');	
	}

	// menampilkan semua kategori sepatu
	public function allSepatu() {
		$this->load->view('adm_produk/Sepatu/katSepatu');
	}
	//menampilkan kategori Sepatu perempuan
	public function sepatuPerempuan() {
		$this->load->view('adm_produk/Sepatu/sepatuPerempuan');
	}
	//menampilkan kategori Sepatu Laki-Laki
	public function sepatuLaki() {
		$this->load->view('adm_produk/sepatu/sepatuLaki');
	}
	//menampilkan kategori Sepatu Anak
	public function sepatuAnak() {
		$this->load->view('adm_produk/Sepatu/sepatuAnak');
	}
	// CRUD Sepatu Perempuan
	// menambahkan data sepatu
	public function tambahSepatuPerempuan(){
		$this->load->view('adm_produk/Sepatu/tambahSepatuPerempuan');	
	}

	// CRUD Sepatu Laki
	// menambahkan data sepatu
	public function tambahSepatuLaki(){
		$this->load->view('adm_produk/Sepatu/tambahSepatuLaki');	
	}

	// CRUD Sepatu Anak
	// menambahkan data sepatu
	public function tambahSepatuAnak(){
		$this->load->view('adm_produk/Sepatu/tambahSepatuAnak');	
	}

	// menampilkan semua kategori Sandal
	public function allSandal() {
		$this->load->view('adm_produk/Sandal/katSandal');
	}
	//menampilkan kategori Sandal perempuan
	public function sandalPerempuan() {
		$this->load->view('adm_produk/Sandal/sandalPerempuan');
	}
	//menampilkan kategori Sandal Laki-Laki
	public function sandalLaki() {
		$this->load->view('adm_produk/Sandal/sandalLaki');
	}
	//menampilkan kategori Sandal Anak
	public function sandalAnak() {
		$this->load->view('adm_produk/Sandal/sandalAnak');
	}
	// CRUD Sandal Perempuan
	// menambahkan data sandal
	public function tambahSandalPerempuan(){
		$this->load->view('adm_produk/Sandal/tambahSandalPerempuan');	
	}

	// CRUD Sandal Laki
	// menambahkan data sandal
	public function tambahSandalLaki(){
		$this->load->view('adm_produk/Sandal/tambahSandalLaki');	
	}

	// CRUD Sandal Anak
	// menambahkan data sandal
	public function tambahSandalAnak(){
		$this->load->view('adm_produk/Sandal/tambahSandalAnak');	
	}

	// menampilkan semua kategori Fashion
	public function allFashion() {
		$this->load->view('adm_produk/Fashion/katFashion');
	}
	//menampilkan kategori Fashion perempuan
	public function fashionPerempuan() {
		$this->load->view('adm_produk/Fashion/fashionPerempuan');
	}
	//menampilkan kategori Fashion Laki-Laki
	public function fashionLaki() {
		$this->load->view('adm_produk/Fashion/fashionLaki');
	}
	//menampilkan kategori Fashion Anak
	public function fashionAnak() {
		$this->load->view('adm_produk/Fashion/fashionAnak');
	}
	// CRUD Fashion Perempuan
	// menambahkan data Fashion
	public function tambahFashionPerempuan(){
		$this->load->view('adm_produk/Fashion/tambahFashionPerempuan');	
	}

	// CRUD Fashion Laki
	// menambahkan data Fashion
	public function tambahFashionLaki(){
		$this->load->view('adm_produk/Fashion/tambahFashionLaki');	
	}

	// CRUD Fashion Anak
	// menambahkan data Fashion
	public function tambahFashionAnak(){
		$this->load->view('adm_produk/Fashion/tambahFashionAnak');	
	}





	//menu
	public function kategori() {
		$this->load->view('adm_produk/kategori');
	}

	public function jenis_produk() {
		$this->load->view('adm_produk/jenis_produk');
	}

	public function input_produk() {
		$this->load->view('adm_produk/input_produk');
	}

	//navbar menu
	public function profil() {
		$this->load->view('adm_produk/profil');
	}

	public function pengaturan() {
		$this->load->view('adm_produk/pengaturan');
	}


}
