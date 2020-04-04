<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Halaman extends CI_Controller {

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
	 
	function __construct(){
		parent::__construct(); 
		$this->load->model('crud');
		$this->load->database();
		$this->load->helper(array('form', 'url')); 
	}
	
	function hapus($id,$tabel){
		$where = array('id_'.$tabel => $id);
		$this->crud->hapus_data($where,$tabel);
		redirect('halaman/i'.$tabel);
	}
	
	function hapuss($id,$tabel,$halaman){
		$where = array('id_'.$tabel => $id);
		$this->crud->hapus_data($where,$tabel);
		redirect('halaman/'.$halaman);
	}
	
	public function index()
	{ 
		$this->load->view('bawaan/head'); 
		$this->load->view('banner'); 
		$this->load->view('prioritas'); 
		$this->load->view('berita/berita'); 
		$this->load->view('video_profil'); 
		$this->load->view('prodi/prodi'); 
		$this->load->view('pendaftaran/pendaftaran'); 
		$this->load->view('mitra/mitra'); 
		$this->load->view('bawaan/footer'); 
		$this->load->view('bawaan/foodjs1'); 
	}
	
	public function kosong()
	{ 
		$this->load->view('bawaan/head'); 
		$this->load->view('404'); 
	}
	
	public function berita()
	{ 
		$this->load->view('bawaan/head');  
		$this->load->view('berita/beritafull');  
		$this->load->view('pendaftaran/pendaftaran'); 
		$this->load->view('mitra/mitra'); 
		$this->load->view('bawaan/footer'); 
		$this->load->view('bawaan/foodjs1');  
	}
	
	public function pengumuman()
	{ 
		$this->load->view('bawaan/head');  
		$this->load->view('berita/pengumuman');  
		$this->load->view('pendaftaran/pendaftaran'); 
		$this->load->view('mitra/mitra'); 
		$this->load->view('bawaan/footer'); 
		$this->load->view('bawaan/foodjs1');  
	}
	
	public function rekrutmen()
	{ 
		$this->load->view('bawaan/head');  
		$this->load->view('berita/rekrutmen');  
		$this->load->view('pendaftaran/pendaftaran'); 
		$this->load->view('mitra/mitra'); 
		$this->load->view('bawaan/footer'); 
		$this->load->view('bawaan/foodjs1');  
	}
	
	public function kerjasama()
	{ 
		$this->load->view('bawaan/head');  
		$this->load->view('berita/kerjasama');  
		$this->load->view('pendaftaran/pendaftaran'); 
		$this->load->view('mitra/mitra'); 
		$this->load->view('bawaan/footer'); 
		$this->load->view('bawaan/foodjs1');  
	}
	
	public function beasiswa()
	{ 
		$this->load->view('bawaan/head');  
		$this->load->view('berita/beasiswa');  
		$this->load->view('pendaftaran/pendaftaran'); 
		$this->load->view('mitra/mitra'); 
		$this->load->view('bawaan/footer'); 
		$this->load->view('bawaan/foodjs1');  
	}
	
	public function visi()
	{ 
		$this->load->view('bawaan/head');  
		$this->load->view('berita/visi');  
		$this->load->view('pendaftaran/pendaftaran'); 
		$this->load->view('mitra/mitra'); 
		$this->load->view('bawaan/footer'); 
		$this->load->view('bawaan/foodjs1');  
	}
	
	public function dosen()
	{ 
		$this->load->view('bawaan/head');  
		$this->load->view('berita/dosen');  
		$this->load->view('pendaftaran/pendaftaran'); 
		$this->load->view('mitra/mitra'); 
		$this->load->view('bawaan/footer'); 
		$this->load->view('bawaan/foodjs1');  
	}
	
	public function staf()
	{ 
		$this->load->view('bawaan/head');  
		$this->load->view('berita/staf');  
		$this->load->view('pendaftaran/pendaftaran'); 
		$this->load->view('mitra/mitra'); 
		$this->load->view('bawaan/footer'); 
		$this->load->view('bawaan/foodjs1');  
	}
	
	public function logo()
	{ 
		$this->load->view('bawaan/head');  
		$this->load->view('berita/logo');  
		$this->load->view('pendaftaran/pendaftaran'); 
		$this->load->view('mitra/mitra'); 
		$this->load->view('bawaan/footer'); 
		$this->load->view('bawaan/foodjs1');  
	}
	
	public function organisasi()
	{ 
		$this->load->view('bawaan/head');  
		$this->load->view('berita/organisasi');  
		$this->load->view('pendaftaran/pendaftaran'); 
		$this->load->view('mitra/mitra'); 
		$this->load->view('bawaan/footer'); 
		$this->load->view('bawaan/foodjs1');  
	}
	
	public function ibanner()
	{ 
		$this->load->view('admin/head');  
		$this->load->view('admin/menu');  
		$this->load->view('admin/banner');  
		$this->load->view('admin/end');  
	}
	 
	public function idosen()
	{ 
		$this->load->view('admin/head');  
		$this->load->view('admin/menu');  
		$this->load->view('admin/dosen');  
		$this->load->view('admin/end');  
	}
	 
	public function istaf()
	{ 
		$this->load->view('admin/head');  
		$this->load->view('admin/menu');  
		$this->load->view('admin/staf');  
		$this->load->view('admin/end');  
	}
	 
	public function aksi_ibanner(){
		
		$tanggal = $this->input->post('tanggal');
		
		$config['upload_path']          = './gambar/banner/';
		$config['allowed_types']		="png|jpg|jpeg|gif";
		$config['encrypt_name'] 		= TRUE; //Enkripsi nama yang terupload
		 $this->load->library('upload', $config);
		if ($this->upload->do_upload('foto')){ 
		$data_image=$this->upload->data('file_name');
		$location= '';
		$pict=$location.$data_image;
		}else{
			$pict='';
		}
		 
		
		$data = array(
			 
			'foto_banner' => $pict, 
			'tanggal_banner' => $tanggal 
			); 
		
		$aksi=$this->crud->input_data($data,'banner'); 
		redirect(base_url("halaman/ibanner"));
	}
	
	public function iberita()
	{ 
		$this->load->view('admin/head');  
		$this->load->view('admin/menu');  
		$this->load->view('admin/berita');  
		$this->load->view('admin/end');  
	}
	
	public function aksi_iberita(){
		
		$judul = $this->input->post('judul');
		$seo = $this->input->post('seo');
		$kategori = $this->input->post('kategori');
		$tanggal = $this->input->post('tanggal');
		$isi = $this->input->post('isi');
		
		$config['upload_path']          = './gambar/berita/';
		$config['allowed_types']		="png|jpg|jpeg|gif";
		$config['encrypt_name'] 		= TRUE; //Enkripsi nama yang terupload
		 $this->load->library('upload', $config);
		if ($this->upload->do_upload('foto')){ 
		$data_image=$this->upload->data('file_name');
		$location= 'gambar/berita/';
		$pict=$location.$data_image;
		}else{
			$pict='';
		}
		 
		
		$data = array(
			 
			'judul_berita' => $judul, 
			'seo_berita' => $seo, 
			'kategori_berita' => $kategori, 
			'isi_berita' => $isi,  
			'foto_berita' => $pict, 
			'prioritas_berita' => 'bukan', 
			'tanggal_berita' => $tanggal 
			); 
		
		$aksi=$this->crud->input_data($data,'berita'); 
		redirect(base_url("halaman/iberita"));
	}
	
	public function iiven()
	{ 
		$this->load->view('admin/head');  
		$this->load->view('admin/menu');  
		$this->load->view('admin/iven');  
		$this->load->view('admin/end');  
	}
	
	public function aksi_iiven(){
		
		$judul = $this->input->post('judul');
		$seo = $this->input->post('seo'); 
		$jam = $this->input->post('jam');
		$lokasi = $this->input->post('lokasi');
		$tanggal = $this->input->post('tanggal');
		
		$config['upload_path']          = './gambar/berita/';
		$config['allowed_types']		="png|jpg|jpeg|gif";
		$config['encrypt_name'] 		= TRUE; //Enkripsi nama yang terupload
		 $this->load->library('upload', $config);
		if ($this->upload->do_upload('foto')){ 
		$data_image=$this->upload->data('file_name');
		$location= 'gambar/berita/';
		$pict=$location.$data_image;
		}else{
			$pict='';
		}
		 
		
		$data = array(
			 
			'judul_iven' => $judul, 
			'seo_iven' => $seo,   
			'jam_iven' => $jam, 
			'lokasi_iven' => $lokasi, 
			'foto_iven' => $pict, 
			'tgl_iven' => $tanggal 
			); 
		
		$aksi=$this->crud->input_data($data,'iven'); 
		redirect(base_url("halaman/iiven"));
	}
	
	public function ivisi()
	{ 
		$this->load->view('admin/head');  
		$this->load->view('admin/menu');  
		$this->load->view('admin/visi_misi');  
		$this->load->view('admin/end');  
	}
	
	public function aksi_ivisi(){
		
		$judul = $this->input->post('judul');
		$seo = $this->input->post('seo');
		$kategori = $this->input->post('kategori');
		$tanggal = $this->input->post('tanggal');
		$isi = $this->input->post('isi');
		 
		$data = array(
			 
			'judul_atribut' => $judul, 
			'seo_atribut' => $seo, 
			'kategori_atribut' => $kategori, 
			'isi_atribut' => $isi,   
			'tGL_atribut' => $tanggal 
			); 
		
		$aksi=$this->crud->input_data($data,'atribut'); 
		redirect(base_url("halaman/ivisi"));
	}
	
	public function iorganisasi()
	{ 
		$this->load->view('admin/head');  
		$this->load->view('admin/menu');  
		$this->load->view('admin/organisasi');  
		$this->load->view('admin/end');  
	}
	
	public function aksi_iorganisasi(){
		
		$judul = $this->input->post('judul');
		$seo = $this->input->post('seo');
		$kategori = $this->input->post('kategori');
		$tanggal = $this->input->post('tanggal');
		$isi = $this->input->post('isi');
		 
		$data = array(
			 
			'judul_atribut' => $judul, 
			'seo_atribut' => $seo, 
			'kategori_atribut' => $kategori, 
			'isi_atribut' => $isi,   
			'tGL_atribut' => $tanggal 
			); 
		
		$aksi=$this->crud->input_data($data,'atribut'); 
		redirect(base_url("halaman/iorganisasi"));
	}
	
	public function ilogo()
	{ 
		$this->load->view('admin/head');  
		$this->load->view('admin/menu');  
		$this->load->view('admin/logo');  
		$this->load->view('admin/end');  
	}
	
	public function aksi_ilogo(){
		
		$judul = $this->input->post('judul');
		$seo = $this->input->post('seo');
		$kategori = $this->input->post('kategori');
		$tanggal = $this->input->post('tanggal');
		$isi = $this->input->post('isi');
		 
		$data = array(
			 
			'judul_atribut' => $judul, 
			'seo_atribut' => $seo, 
			'kategori_atribut' => $kategori, 
			'isi_atribut' => $isi,   
			'tGL_atribut' => $tanggal 
			); 
		
		$aksi=$this->crud->input_data($data,'atribut'); 
		redirect(base_url("halaman/ilogo"));
	}
	
	public function iprodi()
	{ 
		$this->load->view('admin/head');  
		$this->load->view('admin/menu');  
		$this->load->view('admin/prodi');  
		$this->load->view('admin/end');  
	}
	
	public function aksi_iprodi(){
		
		$judul = $this->input->post('judul');
		$seo = $this->input->post('seo'); 
		$video = $this->input->post('video');
		$tanggal = $this->input->post('tanggal');
		$isi = $this->input->post('isi');
		
		$config['upload_path']          = './gambar/prodi/';
		$config['allowed_types']		="png|jpg|jpeg|gif";
		$config['encrypt_name'] 		= TRUE; //Enkripsi nama yang terupload
		 $this->load->library('upload', $config);
		if ($this->upload->do_upload('foto')){ 
		$data_image=$this->upload->data('file_name');
		$location= 'gambar/prodi/';
		$pict=$location.$data_image;
		}else{
			$pict='';
		}
		 
		
		$data = array(
			 
			'judul_prodi' => $judul, 
			'seo_prodi' => $seo,   
			'video_prodi' => $video, 
			'tgl_prodi' => $tanggal, 
			'foto_prodi' => $pict, 
			'isi_prodi' => $isi 
			); 
		
		$aksi=$this->crud->input_data($data,'prodi'); 
		redirect(base_url("halaman/iprodi"));
	}
	
	public function isponsor()
	{ 
		$this->load->view('admin/head');  
		$this->load->view('admin/menu');  
		$this->load->view('admin/sponsor');  
		$this->load->view('admin/end');  
	}
	
	public function iakreditasi()
	{ 
		$this->load->view('admin/head');  
		$this->load->view('admin/menu');  
		$this->load->view('admin/akreditasi');  
		$this->load->view('admin/end');  
	}
	
	public function aksi_iakreditasi(){
		
		$judul = $this->input->post('judul');
		$seo = $this->input->post('seo');
		$kategori = $this->input->post('kategori');
		$tanggal = $this->input->post('tanggal');
		$isi = $this->input->post('isi');
		 
		$data = array(
			 
			'judul_atribut' => $judul, 
			'seo_atribut' => $seo, 
			'kategori_atribut' => $kategori, 
			'isi_atribut' => $isi,   
			'tGL_atribut' => $tanggal 
			); 
		
		$aksi=$this->crud->input_data($data,'atribut'); 
		redirect(base_url("halaman/ilogo"));
	}
	
	
	public function iPerpustakaan()
	{ 
		$this->load->view('admin/head');  
		$this->load->view('admin/menu');  
		$this->load->view('admin/Perpustakaan');  
		$this->load->view('admin/end');  
	}
	
	public function ikegitan_mahasiswa()
	{ 
		$this->load->view('admin/head');  
		$this->load->view('admin/menu');  
		$this->load->view('admin/kegitan_mahasiswa');  
		$this->load->view('admin/end');  
	}
	
	public function iasrama()
	{ 
		$this->load->view('admin/head');  
		$this->load->view('admin/menu');  
		$this->load->view('admin/asrama');  
		$this->load->view('admin/end');  
	}
	 
	public function ijadwal ()
	{ 
		$this->load->view('admin/head');  
		$this->load->view('admin/menu');  
		$this->load->view('admin/jadwal');  
		$this->load->view('admin/end');  
	}
	
	public function ipmb()
	{ 
		$this->load->view('admin/head');  
		$this->load->view('admin/menu');  
		$this->load->view('admin/pmb');  
		$this->load->view('admin/end');  
	}
	
	
	public function aksi_upload_mitra(){ 
	  
		
		$judul = $this->input->post('judul');
		 
		
		$config['upload_path']          = './bahan/mitra/';
		$config['allowed_types']		="png|jpg|jpeg|gif";
		$config['encrypt_name'] 		= TRUE; //Enkripsi nama yang terupload
		 $this->load->library('upload', $config);
		if ($this->upload->do_upload('foto')){ 
		$data_image=$this->upload->data('file_name');
		$location= 'bahan/mitra/';
		$pict=$location.$data_image;
		}else{
			$pict='';
		}
		 
		
		$data = array(
			 
			'judul_mitra' => $judul,   
			'foto_mitra' => $pict,  
			); 
		
		$aksi=$this->crud->input_data($data,'mitra'); 
		redirect(base_url("halaman/isponsor"));
	}
	
	
	public function aksi_upload_dosen(){ 
	  
		
		$judul = $this->input->post('judul');
		$prodi = $this->input->post('prodi');
		 
		
		$config['upload_path']          = './gambar/dosen/';
		$config['allowed_types']		="png|jpg|jpeg|gif";
		$config['encrypt_name'] 		= TRUE; //Enkripsi nama yang terupload
		 $this->load->library('upload', $config);
		if ($this->upload->do_upload('foto')){ 
		$data_image=$this->upload->data('file_name');
		$location= 'gambar/dosen/';
		$pict=$location.$data_image;
		}else{
			$pict='';
		}
		 
		
		$data = array(
			 
			'nama_dosen' => $judul,   
			'prodi_dosen' => $prodi,   
			'foto_dosen' => $pict,  
			); 
		
		$aksi=$this->crud->input_data($data,'dosen'); 
		redirect(base_url("halaman/idosen"));
	}
	
	
	public function aksi_upload_staf(){ 
	  
		
		$judul = $this->input->post('judul');
		$prodi = $this->input->post('prodi');
		 
		
		$config['upload_path']          = './gambar/staf/';
		$config['allowed_types']		="png|jpg|jpeg|gif";
		$config['encrypt_name'] 		= TRUE; //Enkripsi nama yang terupload
		 $this->load->library('upload', $config);
		if ($this->upload->do_upload('foto')){ 
		$data_image=$this->upload->data('file_name');
		$location= 'gambar/staf/';
		$pict=$location.$data_image;
		}else{
			$pict='';
		}
		 
		
		$data = array(
			 
			'nama_staf' => $judul,   
			'jabatan_staf' => $prodi,   
			'foto_staf' => $pict,  
			); 
		
		$aksi=$this->crud->input_data($data,'staf'); 
		redirect(base_url("halaman/istaf"));
	}
	
	
	public function aksi_upload_perpustakaan(){ 
	  
		
		$judul = $this->input->post('judul');
		 
		
		$config['upload_path']          = './bahan/mitra/';
		$config['allowed_types']		="png|jpg|jpeg|gif";
		$config['encrypt_name'] 		= TRUE; //Enkripsi nama yang terupload
		 $this->load->library('upload', $config);
		if ($this->upload->do_upload('foto')){ 
		$data_image=$this->upload->data('file_name');
		$location= 'bahan/mitra/';
		$pict=$location.$data_image;
		}else{
			$pict='';
		}
		 
		
		$data = array(
			 
			'judul_galeri' => $judul,   
			'foto_galeri' => $pict,  
			'kategori_galeri' => 'perpustakaan',  
			); 
		
		$aksi=$this->crud->input_data($data,'galeri'); 
		redirect(base_url("halaman/iPerpustakaan"));
	}
	
	public function aksi_upload_asrama(){ 
	  
		
		$judul = $this->input->post('judul');
		 
		
		$config['upload_path']          = './bahan/mitra/';
		$config['allowed_types']		="png|jpg|jpeg|gif";
		$config['encrypt_name'] 		= TRUE; //Enkripsi nama yang terupload
		 $this->load->library('upload', $config);
		if ($this->upload->do_upload('foto')){ 
		$data_image=$this->upload->data('file_name');
		$location= 'bahan/mitra/';
		$pict=$location.$data_image;
		}else{
			$pict='';
		}
		 
		
		$data = array(
			 
			'judul_galeri' => $judul,   
			'foto_galeri' => $pict,  
			'kategori_galeri' => 'asrama',  
			); 
		
		$aksi=$this->crud->input_data($data,'galeri'); 
		redirect(base_url("halaman/iasrama"));
	}
	
	public function aksi_upload_kegitan_mahasiswa(){ 
	  
		
		$judul = $this->input->post('judul');
		 
		
		$config['upload_path']          = './bahan/mitra/';
		$config['allowed_types']		="png|jpg|jpeg|gif";
		$config['encrypt_name'] 		= TRUE; //Enkripsi nama yang terupload
		 $this->load->library('upload', $config);
		if ($this->upload->do_upload('foto')){ 
		$data_image=$this->upload->data('file_name');
		$location= 'bahan/mitra/';
		$pict=$location.$data_image;
		}else{
			$pict='';
		}
		 
		
		$data = array(
			 
			'judul_galeri' => $judul,   
			'foto_galeri' => $pict,  
			'kategori_galeri' => 'kegitan_mahasiswa',  
			); 
		
		$aksi=$this->crud->input_data($data,'galeri'); 
		redirect(base_url("halaman/ikegitan_mahasiswa"));
	}
	
	public function aksi_upload_jadwal(){ 
	  
		
		$judul = $this->input->post('judul');
		$seo = $this->input->post('seo');
		$tgl = $this->input->post('tgl');
		 
		
		$config['upload_path']          = './bahan/mitra/';
		$config['allowed_types']		="png|jpg|jpeg|gif";
		$config['encrypt_name'] 		= TRUE; //Enkripsi nama yang terupload
		 $this->load->library('upload', $config);
		if ($this->upload->do_upload('foto')){ 
		$data_image=$this->upload->data('file_name');
		$location= 'bahan/mitra/';
		$pict=$location.$data_image;
		}else{
			$pict='';
		}
		 
		
		$data = array(
			 
			'judul_jadwal' => $judul,   
			'seo_jadwal' => $seo,   
			'tgl_jadwal' => $tgl,   
			'foto_galeri' => $pict,   
			); 
		
		$aksi=$this->crud->input_data($data,'jadwal'); 
		redirect(base_url("halaman/ijadwal"));
	}
	
	
}
