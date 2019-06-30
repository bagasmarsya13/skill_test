<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct(){
		parent:: __construct();
		$this->load->model('Login');
		$this->load->model('Pegawai');
		$this->load->model('Jabatan');
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
	public function index()
	{
		$this->load->view('index');
	}
	public function login()
	{
		$this->load->view('login');
	}
	public function dashboard()
	{
		$this->load->view('template/dashboard_header');
		$this->load->view('dashboard');
		$this->load->view('template/dashboard_footer');
	}
	public function pegawai()
	{
		$data['pegawai'] = $this->Pegawai->get_pegawai();
		$this->load->view('template/dashboard_header');
		$this->load->view('master/pegawai', $data);
		$this->load->view('template/dashboard_footer');
	}
	public function jabatan()
	{
		$data['jabatan'] = $this->Jabatan->get_jabatan();
		$this->load->view('template/dashboard_header');
		$this->load->view('master/jabatan', $data);
		$this->load->view('template/dashboard_footer');
	}
	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' =>$username,
			'password'=>$password
			);
		$cek = $this->Login->cek_login('login',$where)->num_rows();
		$qw = $this->db->where('username',$username)->get('login');
		$qy = $this->db->query("SELECT * FROM login WHERE username = '$username'");
		$id_login = $qy->row();
		$hsl = $qw->row();
		if($cek > 0 ){
			$data_session=array(
				'nama'=>$username,
				'id'=>$id_login->id_login,
				'status'=>'login',
				'level'=>$hsl->level
				);
			$this->session->set_userdata($data_session);
			$this->session->set_flashdata('success','Selamat Datang Di SMK Travel');
			// echo "<script>alert('Selamat Datang $username !')</script>";
			$this->load->view('template/dashboard_header');
			if($data_session['level'] == 'Pegawai'){
				$this->load->view('master/profile');
			} else{
			$this->load->view('dashboard');}
			$this->load->view('template/dashboard_footer');
		}else{
			// $this->session->set_flashdata('error','Username atau Password Salah !');
			// echo "<script>alert('Username Dan Password Salah !')</script>";
			$this->load->view('login');
		}
		
	}
	function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}
	function tambahpegawai(){
		$id_pegawai = $this->input->post('id_pegawai');
		$nama = $this->input->post('nama');
		$nip = $this->input->post('NIP');
		$alamat = $this->input->post('alamat');
		$jabatan = $this->input->post('jabatan');
		$value = array(
			'id_pegawai' =>$id_pegawai,
			'nama'=>$nama,
			'NIP'=>$nip,
			'alamat'=>$alamat,
			'jabatan'=>$jabatan,
			);
		$cek = $this->Pegawai->tambah_pegawai($value);
		if($cek){
			redirect('dashboard/pegawai');
		}else{
			redirect('dashboard/pegawai');
		}
	}
	function tambahjabatan(){
		$id_jabatan = $this->input->post('id_jabatan');
		$nama_jabatan = $this->input->post('nama_jabatan');
		$value = array(
			'id_jabatan' => $id_jabatan,
			'nama_jabatan' => $nama_jabatan
		);
		$cek = $this->Jabatan->tambah_jabatan($value);
		if($cek){
			redirect('dashboard/jabatan');
		}else{
			redirect('dashboard/jabatan');
		}
	}
	function editpegawai(){
		$id_pegawai = $this->input->post('id_pegawai');
		$nama = $this->input->post('nama');
		$nip = $this->input->post('NIP');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$jabatan = $this->input->post('jabatan');
		$value = array(
			'id_pegawai' =>$id_pegawai,
			'nama'=>$nama,
			'NIP'=>$nip,
			'tanggal_lahir'=>$tanggal_lahir,
			'jabatan'=>$jabatan,
			);
		redirect('dashboard/pegawai');
	}

}
