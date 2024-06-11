<?php

class Login extends CI_Controller
{

    public function index()
    {
        if ($this->session->userdata('email')) {
            redirect('pageuser');
        }
        //jika statusnya sudah login, maka tidak bisa mengakses halaman login alias dikembalikan ke tampilan user
        
        $this->form_validation->set_rules('email', 'Alamat Email', 'required|trim|valid_email', [
            'required' => 'Email Harus diisi!!',
            'valid_email' => 'Email Tidak Benar!!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim', [
            'required' => 'Password Harus diisi'
        ]);
        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Login';
            $data['user'] = '';
            //kata 'login' merupakan nilai dari variabel judul dalam array $data dikirimkan ke view aute_header
            $this->load->view('sign/login_head', $data);
            $this->load->view('sign/view_login');
            $this->load->view('sign/login_footer');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $email = htmlspecialchars($this->input->post('email', true));
        $password = $this->input->post('password', true);

        $user = $this->ModelUser->cekData(['email' => $email])->row_array();
        //cek password

        if (password_verify($password, $user['password'])) {
            $data = [
                'email' => $user['email'],
            ];

            $this->session->set_userdata($data);
            redirect('pageuser');
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-message" role="alert">Password salah!!</div>');
            redirect('login');
        }
    }

    public function registrasi()
    {
        if ($this->session->userdata('email')) {
            redirect('pageuser');
        }
   
        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required', [
            'required' => 'Nama Belum diis!!'
        ]);
       
        $this->form_validation->set_rules('email', 'Alamat Email', 'required|trim|valid_email|is_unique[user.email]', [
            'valid_email' => 'Email Tidak Benar!!',
            'required' => 'Email Belum diisi!!',
            'is_unique' => 'Email Sudah Terdaftar!'
        ]);

        $this->form_validation->set_rules('nik', 'Nomor NIK', 'required', [
            'required' => 'NIK Harus diisi!!'
        ]);
        
        $this->form_validation->set_rules('alamat', 'Alamat Lengkap', 'required', [
            'required' => 'Alamat harus disii!!'
        ]);

        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin ', 'required', [
            'required' => 'Jenis kelamin harus dipilih!!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password Tidak Sama!!',
            'min_length' => 'Password Terlalu Pendek'
        ]);
        $this->form_validation->set_rules('password2', 'Repeat Password', 'required|trim|matches[password1]');
      
        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Registrasi Member';
            $this->load->view('sign/login_head', $data);
            $this->load->view('sign/registrasi');
            $this->load->view('sign/login_footer');
        } else {
            $email = $this->input->post('email', true);
            $data = [
                'email' => htmlspecialchars($email),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'nik' => htmlspecialchars($this->input->post('nik', true)),
                'alamat' => htmlspecialchars($this->input->post('alamat', true)),
                'jenis_kelamin' => htmlspecialchars($this->input->post('jenis_kelamin', true)),
                'image' => 'stream-05.jpg'
            ];

            $this->ModelUser->simpanData($data); //menggunakan model

            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Selamat!! akun member anda sudah dibuat. Silahkan Aktivasi Akun anda</div>');
            redirect('login');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Anda telah logout!!</div>');
        redirect('login');
    }

    public function blok()
    {
        $this->load->view('sign/blok');
    }

    public function gagal()
    {
        $this->load->view('sign/gagal');
    }
}
