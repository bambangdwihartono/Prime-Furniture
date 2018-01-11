<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Primefurniture_model extends CI_Model {
	public function __construct(){
		$this->load->database();
	}

	public function login($username,$password){
		$hasil = $this->db->where('username',$username)
						 					->where('password',$password)
						 					->limit(1)
						 					->get('tbl_user');
		if ($hasil->num_rows() > 0) {
			return $hasil->row();
		}else {
			return false;
		}
	}

	public function validasitestimoni($nama,$email){
		$hasil = $this->db->where('nama',$nama)
						 					->where('email',$email)
						 					->limit(1)
						 					->get('tbl_pembeli');
		if ($hasil->num_rows() > 0) {
			return $hasil->row();
		}else {
			return false;
		}
	}

	public function loginpembeli($email,$kode){
		$hasil = $this->db->where('email',$email)
											->where('kode',$kode)
						 					->limit(1)
						 					->get('tbl_pembeli');
		if ($hasil->num_rows() > 0) {
			return $hasil->row();
		}else {
			return false;
		}
	}

	public function tampilkanKatagori(){
		$query = $this->db->get('tbl_katagori');
		return $query->result_array();
	}

	public function tampilkankatagoriaside(){
		$query = $this->db->query('SELECT * FROM tbl_katagori ORDER BY nama_katagori ASC limit 10');


	 	return $query->result_array();
	}

	public function tambahKatagori(){
		$data = array(
			'nama_katagori' => $this->input->post('tambahkatagori')
		);
		return $this->db->insert('tbl_katagori',$data);
	}

	public function hapusKatalog($nama_katagori){
		return $this->db->delete('tbl_katagori',array('nama_katagori' =>$nama_katagori));
	}

	public function editKatagori(){
		$data = array(
			'nama_katagori' => $this->input->post('editkatagoribaru')
		);
		$katagorilama = $this->input->post('editkatagorilama');
		$this->db->where('nama_katagori',$katagorilama);
		return $this->db->update('tbl_katagori',$data);
	}

	public function tambahtestimoni(){
		$data = array(
			'nama' => $this->input->post('nama'),
			'email' => $this->input->post('email'),
			'kota' => $this->input->post('kota'),
			'testimoni' => $this->input->post('testimoni')
		);
		return $this->db->insert('tbl_testimoni',$data);
	}

	public function tampilkantestimoni(){
		$query = $this->db->get('tbl_testimoni');
		return $query->result_array();
	}

	public function tampilkantestimoni2(){
		$query = $this->db->query('SELECT * FROM tbl_testimoni ORDER BY id DESC limit 2');
		return $query->result_array();
	}

	public function hapustestimoni($nama_testimoni){
		return $this->db->delete('tbl_testimoni',array('nama' =>$nama_testimoni));
	}

	public function tambahproduk($gambar){
		$data = array(
			'kode' => $this->input->post('kodeproduk'),
			'nama' => $this->input->post('namaproduk'),
			'katagori' => $this->input->post('katagoriproduk'),
			'harga' => $this->input->post('hargaproduk'),
			'gambar' => $gambar
		);
		return $this->db->insert('tbl_produk',$data);
	}

	public function tampilkanproduk(){
		$query = $this->db->get('tbl_produk');
		return $query->result_array();
	}

	public function tampilkanprodukupdate(){
		$query = $this->db->query('SELECT * FROM tbl_produk ORDER BY id DESC limit 9');
		return $query->result_array();
	}

	public function tampilkanprodukperkatagori($url){
		$this->db->where('katagori',$url);
		$query = $this->db->get('tbl_produk');
		return $query->result_array();
	}

	public function tampilkanprodukperkode($url){
		$this->db->where('kode',$url);
		$query = $this->db->get('tbl_produk');
		return $query->result_array();
	}

	public function cariproduk($cari){
		$query = $this->db->query("SELECT * FROM tbl_produk WHERE nama LIKE '%$cari%'");
		return $query->result_array();
	}

	public function editproduk($gambar){
		$data = array(
			'kode' => $this->input->post('kodeprodukedit'),
			'nama' => $this->input->post('namaprodukedit'),
			'katagori' => $this->input->post('katagoriprodukedit'),
			'harga' => $this->input->post('hargaprodukedit'),
			'gambar' => $gambar
		);
		$kodeproduklama = $this->input->post('kodeprodukyangedit');
		$this->db->where('kode',$kodeproduklama);
		return $this->db->update('tbl_produk',$data);
	}

	public function hapusproduk($kode_produk){
		return $this->db->delete('tbl_produk',array('kode' =>$kode_produk));

		$this->db->where('kode', $kode_produk);
		$ambilnamafile = $this->db->get('tbl_produk')->row();
		@unlink('assets/produk/'.$ambilnamafile->gambar);
	}

	public function ambildatacart($id){
		$this->db->where('id',$id);
		$query = $this->db->get('tbl_produk');
		return $query->row();
	}

	public function tambahdatapembeli($kode){
		$data = array(
			'nama' 		=> $this->input->post('nama'),
			'j_kelamin' => $this->input->post('j_kelamin'),
			'propinsi' 	=> $this->input->post('propinsi'),
			'kabupaten' => $this->input->post('kabupaten'),
			'kecamatan' => $this->input->post('kecamatan'),
			'desa' 		=> $this->input->post('desa'),
			'rt_rw'		=> $this->input->post('rtrw'),
			'no_hp' 	=> $this->input->post('no_hp'),
			'email' 	=> $this->input->post('email'),
			'kode'		=> $kode
		);
		return $this->db->insert('tbl_pembeli',$data);

	}

	public function tambahcart($database){
		return $this->db->insert('tbl_dibeli',$database);
	}

	public function datapembeli($where){
		$this->db->where('email',$where);
		$query = $this->db->get('tbl_pembeli');
		return $query->row();
	}

	public function datapesanan($email){
		$this->db->where('nama_pembeli',$email);
		$query = $this->db->get('tbl_dibeli');
		return $query->result_array();
	}

	public function tampilkanpemesan(){
		$query = $this->db->get('tbl_pembeli');
		return $query->result_array();
	}

	public function tambahpesancs(){
		$warna = 'bg-warning';
		$perataan  = 'text-right';
		$data = array(
			'nama' 	=> $this->input->post('nama'),
			'pesan' 	=> $this->input->post('pesan'),
			'perataan' 	=> $perataan,
			'bg_warna'	=> $warna
		);
		return $this->db->insert('tbl_pesan',$data);
	}

	public function tampilkanpesan(){
		$email = $this->input->post('email');
		$this->db->where('nama',$email);
		$query = $this->db->get('tbl_pesan');
		return $query->result_array();
	}

	public function ambildatapesan($table,$data){
		$this->db->order_by('id', 'DESC');
		return $this->db->get_where($table,$data);
	}

	public function tampilkanpersanperemailajax($where){
		$this->db->order_by('id', 'DESC');
		$this->db->where('nama',$where);
		return $this->db->get_where('tbl_pesan');
	}


	public function tambahpesanc(){
		$warna = 'bg-info';
		$perataan  = 'text-left';
		$data = array(
			'nama' 		=> $this->session->userdata('email'),
			'pesan' 	=> $this->input->post('pesan'),
			'perataan' 	=> $perataan,
			'bg_warna'	=> $warna
		);
		return $this->db->insert('tbl_pesan',$data);
	}

	public function tambahproseskerja(){
		$data = array(
			'email' 			=> $this->input->post('email'),
			'jenis_pengerjaan' 	=> $this->input->post('jenis')
		);
		return $this->db->insert('tbl_pengerjaan',$data);
	}

	public function tampilkanproseskerja(){
		$email = $this->input->post('email');
		$this->db->where('email',$email);
		$query = $this->db->get('tbl_pengerjaan');
		return $query->result_array();
	}

	public function tampilkanproseskerjapembeli(){
		$email = $this->session->userdata('email');
		$this->db->where('email',$email);
		$query = $this->db->get('tbl_pengerjaan');
		return $query->result_array();
	}

	public function hapusdatapembeli(){
		$email = $this->input->post('email');
		return $this->db->delete('tbl_pembeli',array('email' =>$email));
		return $this->db->delete('tbl_dibeli',array('nama_pembeli' =>$email));
	}

	public function hapusdataprodukdibeli(){
		$email = $this->input->post('email');
		return $this->db->delete('tbl_dibeli',array('nama_pembeli' =>$email));
	}

	public function hapusdatapengerjaan(){
		$email = $this->input->post('email');
		return $this->db->delete('tbl_pengerjaan',array('email' =>$email));
	}

	public function hapusdatapesan(){
		$email = $this->input->post('email');
		return $this->db->delete('tbl_pesan',array('nama' =>$email));
	}

	public function ambildatahapus($kode){
		$this->db->where('kode',$kode);
		$query = $this->db->get('tbl_produk');
		return $query->row();
	}

}
