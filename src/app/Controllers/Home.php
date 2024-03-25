<?php

namespace App\Controllers;

class Home extends BaseController
{
    protected $var = [];
    protected $apiDomain;
    protected $token;

    public function __construct()
    {
        $this->var['viewPath'] = 'home/';
        $this->apiDomain = getenv('API_DOMAIN');
    }

    public function index($path = 'profil')
    {
        //Get DATA from API
        $this->setJwtToken();
        // ambil data profil 
        $profil = $this->request([
            'method' => 'GET',
            'api_path' => '/api/profil?desa_id=29198',
        ]);
        if ($profil->getStatusCode() == 200) {
            $profil = json_decode($profil->getBody(), true);
        } else {
            $profil = [
                'error' => $profil->getBody(),
            ];
        }

        //Path API for Icon Menu
        if ($path == 'kepala-desa') {
            $pathAPI = 'profil_kepala_desa/show'; //http://api.esmades.id:80/api/profil_kepala_desa/show
        } else if ($path == 'struktur-organisasi') {
            $pathAPI = 'struktur_organisasi'; //
        } else if ($path == 'kelembagaan') {
            $pathAPI = 'kelembagaan'; //
        } else if ($path == 'galeri') {
            $pathAPI = 'galeri_desa';
        } else if ($path == 'kabar-desa') {
            $pathAPI = 'kabar_desa';
        }
        // Peta Desa Menu
        // else if ($path == 'aset-desa') {
        //     $pathAPI = 'aset_desa';
        // } else if ($path == 'potensi-desa') {
        //     $pathAPI = 'potensi_desa';
        // } else if ($path == 'wisata-desa') {
        //     $pathAPI = 'wisata';
        // } 
        else if ($path == 'peraturan-desa') {
            $pathAPI = 'peraturan_desa';
        } else {
            $pathAPI = 'profil?desa_id='. getenv('DESA_ID');
        }
        $dataRequest = [
            'method' => 'GET',
            'api_path' => '/api/' . $pathAPI,
        ];
        $response = $this->request($dataRequest);
        if ($response->getStatusCode() == 200) {
            $ContentData = json_decode($response->getBody(), true);
        } else {
            $ContentData = [
                'error' => $response->getBody(),
            ];
        }
        if ($path == 'profil') {
            $title = $profil[0]['nama'] . ' | ' . getenv('APP_NAME');
        } else {
            $title = ucwords(str_replace('-', ' ', $path)) . ' | ' . getenv('APP_NAME');
        }
        $data = [
            'title' => $title,
            'content' => $path,
            'profile' => $profil,
            'api' => $ContentData,
        ];
        return $this->render($data);
    }
}
