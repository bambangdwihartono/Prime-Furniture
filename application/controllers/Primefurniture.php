<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Primefurniture extends CI_Controller {

	public function __construct(){
		parent::__construct();
        $this->load->helper(array('form', 'url'));
		$this->load->model('primefurniture_model');
		$this->load->library('cart');
		$this->load->library('image_lib');
		$this->load->helper(array('url','dompdf'));
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index(){
		$data['katagoriaside'] = $this->primefurniture_model->tampilkankatagoriaside();
		$data['produk'] = $this->primefurniture_model->tampilkanprodukupdate();
		$data['testimoni2'] = $this->primefurniture_model->tampilkantestimoni2();

		$this->load->view('headerlogo');
		$this->load->view('halaman-utama',$data);
		$this->load->view('footer',$data);
	}

	public function katalog(){
		$data['katagori'] = $this->primefurniture_model->tampilkanKatagori();
		$data['katagoriaside'] = $this->primefurniture_model->tampilkankatagoriaside();
		$data['testimoni2'] = $this->primefurniture_model->tampilkantestimoni2();

		$this->load->view('header');
		$this->load->view('katalog',$data);
		$this->load->view('footer',$data);
	}

	public function kontakkami(){
		$data['katagoriaside'] = $this->primefurniture_model->tampilkankatagoriaside();
		$data['testimoni2'] = $this->primefurniture_model->tampilkantestimoni2();

		$this->load->view('header');
		$this->load->view('kontakkami',$data);
		$this->load->view('footer',$data);
	}

	public function log_in(){
		$data['testimoni2'] = $this->primefurniture_model->tampilkantestimoni2();

		$this->load->view('header');
		$this->load->view('login');
		$this->load->view('footer',$data);
	}

	public function carapemesanan(){
		$data['katagoriaside'] = $this->primefurniture_model->tampilkankatagoriaside();
		$data['testimoni2'] = $this->primefurniture_model->tampilkantestimoni2();

		$this->load->view('header');
		$this->load->view('carapemesanan',$data);
		$this->load->view('footer',$data);
	}

	public function tentangkami(){
		$data['katagoriaside'] = $this->primefurniture_model->tampilkankatagoriaside();
		$data['testimoni2'] = $this->primefurniture_model->tampilkantestimoni2();

		$this->load->view('header');
		$this->load->view('tentangkami',$data);
		$this->load->view('footer',$data);
	}

	public function testimoni(){
		$data['katagoriaside'] = $this->primefurniture_model->tampilkankatagoriaside();
		$data['testimoni'] = $this->primefurniture_model->tampilkantestimoni();
		$data['testimoni2'] = $this->primefurniture_model->tampilkantestimoni2();

		$this->load->view('header');
		$this->load->view('testimoni',$data);
		$this->load->view('footer',$data);
	}

	public function admin_dashboard(){
		$data['testimoni2'] = $this->primefurniture_model->tampilkantestimoni2();

		$this->load->view('header');
		$this->load->view('admin_dashboard');
		$this->load->view('footer',$data);
	}

	public function admin_katagori(){
		$data['katagori'] = $this->primefurniture_model->tampilkanKatagori();
		$data['testimoni2'] = $this->primefurniture_model->tampilkantestimoni2();

		$this->load->view('header');
		$this->load->view('admin_katagori',$data);
		$this->load->view('footer',$data);
	}

	public function pemesan(){
		$data['pemesan'] = $this->primefurniture_model->tampilkanpemesan();
		$data['testimoni2'] = $this->primefurniture_model->tampilkantestimoni2();

		$this->load->view('header');
		$this->load->view('pemesan',$data);
		$this->load->view('footer',$data);
	}

	public function produkpesanan(){
		$data['pesanan'] = $this->primefurniture_model->datapesanan($this->input->post('email'));
		$data['pemesan'] = $this->primefurniture_model->tampilkanpemesan();
		$data['testimoni2'] = $this->primefurniture_model->tampilkantestimoni2();

		$this->load->view('header');
		$this->load->view('produkpesanan',$data);
		$this->load->view('footer',$data);
	}

	public function perpesanan(){
		$data['pemesan'] = $this->primefurniture_model->tampilkanpemesan();
		$data['testimoni2'] = $this->primefurniture_model->tampilkantestimoni2();

		$this->load->view('header');
		$this->load->view('perpesanan',$data);
		$this->load->view('footer',$data);
	}

	public function perpesananperemail(){
		$email['email'] = $this->input->post('email');
		$this->load->view('perpesananperemail',$email);
	}

	public function perpesananperemailajax(){
		$email = $this->input->post('email');
		$datapesan = $this->primefurniture_model->tampilkanpersanperemailajax($email)->result();
		echo json_encode($datapesan);
	}


	public function proseskerja(){
		$data['pemesan'] = $this->primefurniture_model->tampilkanpemesan();
		$data['testimoni2'] = $this->primefurniture_model->tampilkantestimoni2();
		$data['proseskerja'] = $this->primefurniture_model->tampilkanproseskerja();

		$this->load->view('header');
		$this->load->view('proseskerja',$data);
		$this->load->view('footer',$data);
	}

	public function admin_preview(){
		$data['katagori'] = $this->primefurniture_model->tampilkanKatagori();
		$data['produk'] = $this->primefurniture_model->tampilkanproduk();
		$data['testimoni'] = $this->primefurniture_model->tampilkantestimoni();
		$data['testimoni2'] = $this->primefurniture_model->tampilkantestimoni2();

		$this->load->view('header');
		$this->load->view('admin_preview',$data);
		$this->load->view('footer',$data);
	}

	public function admin_produk(){
		$data['katagori'] = $this->primefurniture_model->tampilkanKatagori();
		$data['produk'] = $this->primefurniture_model->tampilkanproduk();
		$data['testimoni2'] = $this->primefurniture_model->tampilkantestimoni2();

		$this->load->view('header');
		$this->load->view('admin_produk',$data);
		$this->load->view('footer',$data);
	}

	public function admin_testimoni(){
		$data['testimoni'] = $this->primefurniture_model->tampilkantestimoni();
		$data['testimoni2'] = $this->primefurniture_model->tampilkantestimoni2();

		$this->load->view('header');
		$this->load->view('admin_testimoni',$data);
		$this->load->view('footer',$data);
	}

	public function produk_katagori($url){
		$sasaran = $url;
        $judul = str_replace("%20", " ", $sasaran);
		$data['produk_per_katagori'] = $this->primefurniture_model->tampilkanprodukperkatagori($judul);
		$data['url'] = $url;
		$data['testimoni2'] = $this->primefurniture_model->tampilkantestimoni2();

		$this->load->view('header');
		$this->load->view('produk_katagori',$data);
		$this->load->view('footer',$data);
	}


	public function hasilcari(){
		$cari = $_GET['cari'];
		$data['cari_produk'] = $this->primefurniture_model->cariproduk($cari);
		$data['testimoni2'] = $this->primefurniture_model->tampilkantestimoni2();

		$this->load->view('header');
		$this->load->view('hasilcari',$data);
		$this->load->view('footer',$data);
	}

	public function produk_kode($url){
		$data['produk_per_katagori'] = $this->primefurniture_model->tampilkanprodukperkode($url);
		$data['url'] = $url;
		$data['testimoni2'] = $this->primefurniture_model->tampilkantestimoni2();

		$this->load->view('header');
		$this->load->view('kode_produk',$data);
		$this->load->view('footer',$data);
	}

	public function tambahkeranjang($id){
		$ambildatacart = $this->primefurniture_model->ambildatacart($id);
		$data = array(
				'id' => $ambildatacart->id,
				'qty' => 1,
				'price' =>  $ambildatacart->harga,
				'name' => $ambildatacart->nama	
			);

		$this->cart->insert($data);

		redirect('primefurniture/tampilkankeranjangbelanja');
	}

	public function tampilkankeranjangbelanja(){
		$data = $this->cart->contents();
		$data['testimoni2'] = $this->primefurniture_model->tampilkantestimoni2();

		$this->load->view('header');
		$this->load->view('keranjang_belanja');
		$this->load->view('footer',$data);
	}

	public function hapusdatacart($rowid){
		$this->cart->update(array('rowid' => $rowid, 'qty' => 0));

		redirect('primefurniture/tampilkankeranjangbelanja');
	}

	public function updatedatacart(){
		$i = 1;
		foreach ($this->cart->contents() as $produkcart) {
			$this->cart->update(array('rowid' => $produkcart['rowid'], 'qty' => $_POST['qty'.$i]));
			$i++;
		}

		redirect('primefurniture/tampilkankeranjangbelanja');
	}

	public function login(){
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','username','required');
		$this->form_validation->set_rules('password','password','required');
		if ($this->form_validation->run()==false) {
			$this->load->view('kesalahan_login');
		}else {
			$username = set_value('username');
			$password = md5(set_value('password'));
			$validasi_login_db = $this->primefurniture_model->login($username,$password);
			if ($validasi_login_db != false) {
				$this->session->set_userdata('username',$username);
				redirect('primefurniture/admin_dashboard');
			}else {
				$this->session->set_flashdata('gagal_login','Tolong Masukan Username Dan Password Dengan Benar');

				$this->load->view('kesalahan_login');
			}
		}
	}

	public function loginpembeli(){
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('kode','Kode','required');
		if ($this->form_validation->run()==false) {
			$this->load->view('kesalahan_kode');
		}else {
			$email = set_value('email');
			$kode = set_value('kode');
			$validasi_login_db = $this->primefurniture_model->loginpembeli($email,$kode);
			if ($validasi_login_db != false) {
				$this->session->set_userdata('email',$email);
				redirect('primefurniture/admin_pembeli');
			}else {
				$this->session->set_flashdata('gagal_masuk_pembeli','Tolong Masukan Email Dan Kode Dengan Benar');

				$this->load->view('kesalahan_masuk_pembeli');
			}
		}
	}

	public function logout(){
		$this->session->unset_userdata('username');
		redirect('primefurniture/log_in');
	}

	public function logout_pembeli(){
		$this->session->unset_userdata('email');
		redirect('primefurniture/pembeli');
	}



	public function tambahKatalog(){
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('tambahkatagori','Nama_katagori(Tambah)','required');
		if ($this->form_validation->run()==false) {
			$this->load->view('kesalahan_katagori');
		}else{
			$this->primefurniture_model->tambahKatagori();
			redirect('primefurniture/admin_preview');
		}
	}

	public function hapusKatalog(){
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('hapuskatagori','Nama_katagori(Hapus)','required');
		if ($this->form_validation->run()==false) {
			$this->load->view('kesalahan_katagori');
		}else{
			$nama_katagori = set_value('hapuskatagori');
			$this->primefurniture_model->hapusKatalog($nama_katagori);
			redirect('primefurniture/admin_preview');
		}
	}

	public function editKatalog(){
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('editkatagoribaru','Nama_katagori(Edit)','required');
		if ($this->form_validation->run()==false) {
			$this->load->view('kesalahan_katagori');
		}else{
			$this->primefurniture_model->editKatagori();
			redirect('primefurniture/admin_preview');
		}
	}

	public function tambahtestimoni(){
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('kota','Kota','required');
		$this->form_validation->set_rules('testimoni','Testimoni','required');
		if ($this->form_validation->run()==false) {
			$this->load->view('kesalahan_testimoni');
		}else{
			$nama = $this->input->post('nama');
			$email = $this->input->post('email');
			$validasi_data_db = $this->primefurniture_model->validasitestimoni($nama,$email);
			if ($validasi_data_db != false) {
				$this->primefurniture_model->tambahtestimoni();
				redirect('primefurniture/testimoni');
			}else {
				$this->load->view('kesalahan_testimoni_data');
			}
			
		}
	}

	public function hapustestimoni(){
		$nama_testimoni = set_value('hapustestimoni');
		$this->primefurniture_model->hapustestimoni($nama_testimoni);
		redirect('primefurniture/admin_preview');
	}

	public function tambahproduk(){
		$this->load->library('upload');
        $config['max_size']             = 100000;
        $config['max_width']            = 1024000;
        $config['max_height']           = 768000;
		$config['upload_path'] 			= './assets/produk/'; //path folder
	    $config['allowed_types'] 		= 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	    $config['encrypt_name'] 		= TRUE; //nama yang terupload nantinya

	    $this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('kodeproduk','kodeproduk(Tambah)','required');
		$this->form_validation->set_rules('namaproduk','namaproduk(Tambah)','required');
		$this->form_validation->set_rules('katagoriproduk','katagoriproduk(Tambah)','required');
		$this->form_validation->set_rules('hargaproduk','hargaproduk(Tambah)','required');
		if ($this->form_validation->run()==false) {
			$this->load->view('kesalahan_produk');
		}else{
		    $this->upload->initialize($config);
		    if(!empty($_FILES['file']['name'])){
		        if ($this->upload->do_upload('file')){
	                $gbr = $this->upload->data();
	                $gambar = $gbr['file_name'];
	                $data = array('upload_data' => $this->upload->data());
	                // $this->resize($data['upload_data']['full_path'],$data['$upload_data']['file_name']);
	                $this->watermark($data['upload_data']['full_path']);
					$this->primefurniture_model->tambahproduk($gambar);
					redirect('primefurniture/admin_preview');
				}else{
	                $this->load->view('kesalahan_produk');
	            }
	        }else{
				$this->load->view('kesalahan_produk');
			}
		}
	}

	function resize($path,$file){
		$config['image_library'] 	= 'gd2';
		$config['source_image'] 	= $path;
		$config['create_thumb'] 	= TRUE;
		$config['maintain_ratio'] 	= TRUE;
		$config['width']         	= 50;
		$config['height']       	= 75;
		$config['new_image']		= './assets/produk/resize/'.$file;

		$this->image_lib->initialize($config);
		$this->image_lib->resize();
	}

	function watermark($path){
		$config['source_image'] = $path;
		$config['wm_text'] = 'PrimeFurniture';
		$config['wm_type'] = 'text';
		$config['wm_font_path'] = './system/fonts/texb.ttf';
		$config['wm_font_size'] = '40';
		$config['wm_font_color'] = '3D600A';
		$config['wm_vrt_alignment'] = 'center';
		$config['wm_hor_alignment'] = 'center';
		$config['wm_padding'] = '20';

		$this->image_lib->initialize($config);

		$this->image_lib->watermark();
	}

	public function editproduk(){
		$this->load->library('upload');
        $config['max_size']             = 100000;
        $config['max_width']            = 1024000;
        $config['max_height']           = 768000;
		$config['upload_path'] = './assets/produk/'; //path folder
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	    $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

	    $this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('kodeprodukyangedit','kodeprodukyangedit(Edit)','required');
		$this->form_validation->set_rules('namaprodukedit','namaprodukedit(Edit)','required');
		$this->form_validation->set_rules('katagoriprodukedit','katagoriprodukedit(Edit)','required');
		$this->form_validation->set_rules('kodeprodukedit','kodeprodukedit(Edit)','required');
		$this->form_validation->set_rules('hargaprodukedit','hargaprodukedit(Edit)','required');
		if ($this->form_validation->run()==false) {
			$this->load->view('kesalahan_produk');
		}else{
			$kode_produk = $this->input->post('kodeprodukyangedit');
        	$ambildatahapus = $this->primefurniture_model->ambildatahapus($kode_produk);
			$alamat = 'assets/produk/'.$ambildatahapus->gambar;
			unlink($alamat);
		    $this->upload->initialize($config);
		    if(!empty($_FILES['gambarprodukedit']['name'])){
		        if ($this->upload->do_upload('gambarprodukedit')){
	                $gbr = $this->upload->data();
	                $gambar=$gbr['file_name']; //Mengambil file name dari gambar yang diupload
	                $data = array('upload_data' => $this->upload->data());
	                $this->watermark($data['upload_data']['full_path']);
					$this->primefurniture_model->editproduk($gambar);
					redirect('primefurniture/admin_preview');
				}else{
	                $this->load->view('kesalahan_produk');
	            }
	        }else{
				$this->load->view('kesalahan_produk');
			}
		}
	}

	public function hapusproduk(){
		$kode_produk = set_value('hapusproduk');
		$ambildatahapus = $this->primefurniture_model->ambildatahapus($kode_produk);
		$alamat = 'assets/produk/'.$ambildatahapus->gambar;
		unlink($alamat);
		$kode_produk = set_value('hapusproduk');
		$this->primefurniture_model->hapusproduk($kode_produk);
		redirect('primefurniture/admin_produk');
	}

	public function daftarpembeli(){
		$data['testimoni2'] = $this->primefurniture_model->tampilkantestimoni2();
		$this->load->view('header');
		$this->load->view('daftarpembeli');
		$this->load->view('footer',$data);
	}

	public function beliproduk(){
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('j_kelamin','Jenis Kelamin','required');
		$this->form_validation->set_rules('propinsi','Alamat (Propinsi)','required');
		$this->form_validation->set_rules('kabupaten','Alamat (Kabupaten)','required');
		$this->form_validation->set_rules('kecamatan','Kecamatan (Kabupaten)','required');
		$this->form_validation->set_rules('desa','Alamat (Desa)','required');
		$this->form_validation->set_rules('no_hp','No_Handphone','required');
		$this->form_validation->set_rules('email','E-mail','required');
		if ($this->form_validation->run()==false) {
			$this->load->view('kesalahan_datapembeli');
		}else{
			$email = $this->input->post('email');
			$this->session->set_userdata('pembeli',$email);
			$kode = time();
			$this->primefurniture_model->tambahdatapembeli($kode);
			redirect('primefurniture/index');
		}
	}

	public function beli(){

		$this->cart->contents();

		foreach ($this->cart->contents() as $items){

			$database = array(
				'nama_pembeli' 	=> $this->session->userdata('pembeli'),
				'jumlah' 		=> $items['qty'],
				'nama' 			=> $items['name'],
				'harga' 		=> $this->cart->format_number($items['price']),
				'subtotal' 		=> $this->cart->format_number($items['subtotal'])
			);

			$this->primefurniture_model->tambahcart($database);
		}

		$ambildata = $this->primefurniture_model->datapembeli($this->session->userdata('pembeli'));

		redirect('primefurniture/cetakdokument');
	}

	public function cetakdokument($download_pdf=''){
		$pdf_filename = 'Data PrimeFurniture.pdf';
		$link_download = ($download_pdf == TRUE)?'':anchor(base_url().'primefurniture/cetakdokument/true','Download Pdf');
		$data = $this->session->userdata('pembeli');
		$query = $this->db->query("select * from tbl_pembeli where email = '".$data."' limit 1");
		$queryp = $this->db->query("select * from tbl_dibeli where nama_pembeli = '".$data."'");

		if ($query->num_rows()>0){
			$user_info = $query->row_array();
		}
		
		$data_header = array(
			'title' =>'Prime Furniture | Cetak'
		);
		$data_userinfo = array(
			'user_info' => $user_info,
			'link_download' =>$link_download
		);		
		$header = $this->load->view('kepalapdf',$data_header,true);
		$user_info = $this->load->view('tubuhpdf',$data_userinfo,true);
		$footer = $this->load->view('kakipdf','',true);

		$output = $header.$user_info.$footer;
		if ($download_pdf == true) {
			generate_pdf($output,$pdf_filename);
			$this->session->unset_userdata('pembeli');
			$this->cart->destroy();
		}else{
			echo $output;
		}
	}

	public function keluarkeranjang(){

		$this->session->unset_userdata('pembeli');
		$this->cart->destroy();

		redirect('primefurniture/index');
	}


	public function pembeli(){
		$data['testimoni2'] = $this->primefurniture_model->tampilkantestimoni2();

		$this->load->view('header');
		$this->load->view('pembeli');
		$this->load->view('footer',$data);
	}

	public function admin_pembeli(){
		$data['pesanan'] = $this->primefurniture_model->datapesanan($this->session->userdata('email'));
		$data['testimoni2'] = $this->primefurniture_model->tampilkantestimoni2();
		$data['proseskerja'] = $this->primefurniture_model->tampilkanproseskerjapembeli();

		$this->load->view('header');
		$this->load->view('admin_pembeli',$data);
		$this->load->view('footer',$data);
	}

	public function ambildatapesan(){
		$data = array(
			'nama' => $this->session->userdata('email')
		);
		$datapesan = $this->primefurniture_model->ambildatapesan('tbl_pesan',$data)->result();
		echo json_encode($datapesan);
	}

	public function tambahpesansc(){
		$this->form_validation->set_rules('pesan','pesan','required');
		if ($this->form_validation->run()==false) {
			$hasil['pesan'] = validation_errors();
		}else{
			$this->primefurniture_model->tambahpesancs();
			$hasil['pesan'] = "Pesan Berhasil Ditambahkan";
		}
		echo json_encode($hasil);
	}

	public function tambahpesanc(){
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('pesan','Pesan','required');
		if ($this->form_validation->run()==false) {
			$hasil['pesan'] = validation_errors();
		}else{
			$this->primefurniture_model->tambahpesanc();
			$hasil['pesan'] = "Pesan Berhasil Ditambahkan";
		}
		echo json_encode($hasil);
	}

	public function tambahproseskerja(){
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('jenis','Jenis Proses','required');
		if ($this->form_validation->run()==false) {
			$this->load->view('kesalahan_proseskerja');
		}else{
			$this->primefurniture_model->tambahproseskerja();
			redirect('primefurniture/proseskerja');
		}
	}

	public function hapusdatapembeli(){
		$this->primefurniture_model->hapusdatapembeli();
		$this->primefurniture_model->hapusdataprodukdibeli();
		$this->primefurniture_model->hapusdatapengerjaan();
		$this->primefurniture_model->hapusdatapesan();
		redirect('primefurniture/pemesan');
	}

}
