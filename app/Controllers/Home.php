<?php

namespace App\Controllers;
// class home para mostrar las vistas
class Home extends BaseController
{
    public function index()
    {
        $data['titulo'] = 'Pagina principal';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('front/principal_ultimo');
        echo view('front/footer_view.php');
    }

    public function quienes_somos()
    {
        $data['titulo'] = 'Quienes somos';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('front/quienes_somos');
        echo view('front/footer_view.php');
    }

    public function registro()
    {
        $data['titulo'] = 'Registro';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('back/usuario/registro');
        echo view('front/footer_view.php');
    }

    public function login()
    {
        $data['titulo'] = 'Login';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('back/usuario/login');
        echo view('front/footer_view.php');
    }

    public function acerca_de()
    {
        $data['titulo'] = 'Acerca de';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('front/acerca_de');
        echo view('front/footer_view.php');
    }

    public function catalogo()
    {
        $data['titulo'] = 'Catalogo';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('front/catalogo');
        echo view('front/footer_view.php');
    }

}