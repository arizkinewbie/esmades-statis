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
        $dataRequest = [
            'method' => 'GET',
            'api_path' => '/api/profil?desa_id=29198',
        ];
        $response = $this->request($dataRequest);
        if ($response->getStatusCode() == 200) {
            $ContentData = json_decode($response->getBody(), true);
        } else {
            $ContentData = [
                'error' => $response->getBody(),
            ];
        }
        $data = [
            'title' => ucwords(str_replace('-', ' ', $path)) . ' | ' . getenv('APP_NAME'),
            'content' => $path,
        ];
        $data = array_merge($data, $ContentData[0]);
        return $this->render($data);
    }
}
