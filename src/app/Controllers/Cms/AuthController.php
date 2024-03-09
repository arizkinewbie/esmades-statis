<?php

namespace App\Controllers\Cms;

use App\Controllers\Cms\BaseAdminController;
use App\Models\Cms\UserModel;
use CodeIgniter\HTTP\ResponseInterface;

class AuthController extends BaseAdminController
{
    public function index()
    {
        return redirect()->to('/admin/auth/signin');
    }
    public function signIn()
    {
        // Cek jika session sudah ada
        if (session()->get('isLoggedIn')) {
            return redirect()->to('/admin/dashboard/index');
        }
        $data = [
            'title' => 'Sign In',
        ];
        return view('cms/auth/signin', $data);
    }

    public function signInProcess()
    {
        $validationRules = [
            'email'    => 'required|valid_email',
            'password' => 'required'
        ];

        if (!$this->validate($validationRules)) {
            return redirect()->back()->with('error', $this->validator);
        }

        // Ambil data dari form
        $email    = $this->request->getPost('email');
        $password = $this->request->getPost('password');



        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        // Panggil model untuk mendapatkan data pengguna dari database
        $userModel = new UserModel();
        $user = $userModel->getUserByEmail($email);

        // Periksa apakah pengguna ditemukan dan password sesuai
        if (!$user || !password_verify((string) $password, $user['password'])) {
            // Jika tidak, kembali ke halaman login dengan pesan kesalahan
            return redirect()->back()->with('error', 'Email atau password salah.');
        }

        $session = session();
        //konek ke api
        $url = getenv('API_DOMAIN') . "/api/auth/login";
        $data = [
            'email' => getenv('KLIEN_EMAIL'),
            'password' => getenv('KLIEN_PASS'),
        ];
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);

        $session->set('jwtToken', json_decode($response)->token);

        curl_close($ch);

        // buat session user 

        $session->set('isLoggedIn', TRUE);
        $session->set('sessionUserID', $user['id']);

        // Redirect ke halaman dashboard atau halaman setelah login
        return redirect()->to('admin/dashboard/index');
    }

    public function signOut()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/admin/auth/signin');
    }
}
