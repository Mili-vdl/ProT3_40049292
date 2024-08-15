<?php
namespace App\Controllers;
use App\Models\usuario_model;
use CodeIgniter\Controller;

class usuario_controller extends Controller{
    public function __construct() {
        helper(['form','url']);
    }

    public function create(){
        $data['titulo'] = 'Registro';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('back/usuario/registro');
        echo view('front/footer_view.php');
    }

    public function formValidation(){
        
        $input = $this -> validate([
            'nombre' => 'required|min_length[3]',
            'apellido' => 'required|min_length[3]|max_length[25]',
            'usuario' => 'required|min_length[3]',
            'email' => 'required|min_length[4]|max_length[100]|valid_email|is_unique[usuarios.email]',
            'pass' => 'required|min_length[3]|max_length[10]'
        ],
        );

        $formModel = new usuario_model();
        
        if (!$input) {
            $data['titulo'] = 'Registro';
            echo view('front/head_view', $data);
            echo view('front/navbar_view');
            $data = ['validation' => $this->validator];
            echo view('back/usuario/registro', $data);
            echo view('front/footer_view.php');
        } else {
            $formModel -> save([
            'nombre' => $this->request->getVar('nombre'),
            'apellido' => $this->request->getVar('apellido'),
            'usuario' => $this->request->getVar('usuario'),
            'email' => $this->request->getVar('email'),
            'pass' => password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT)]);

            session()->setFlashdata('success', 'Usuario registrado con exito');
            return $this-> response-> redirect('login');
        }
    }

    public function list()
    {
        $data['titulo'] = 'Usuarios registrados';
        $model = new usuario_model();
        $data['usuarios'] = $model->findAll();
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('back/usuario/usuario_lista', $data);
        echo view('front/footer_view.php');
    }

    public function edit($id){
        $model = new usuario_model();
        $dato = $model->find($id);
        $data['titulo'] = 'Editar usuario';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('back/usuario/edit', compact('dato'));
        echo view('front/footer_view.php');
    }

    public function update(){

        $id_usuario = $this->request->getVar('id_usuario'); // Recuperar el ID del usuario desde el formulario
        $input = $this -> validate([
            'id_usuario' => 'required|integer',
            'nombre' => 'required|min_length[3]',
            'apellido' => 'required|min_length[3]|max_length[25]',
            'usuario' => 'required|min_length[3]',
            'email' => 'required|min_length[4]|max_length[100]|valid_email',
        ],
        );
        // print_r($_POST);exit;
        $formModel = new usuario_model();
        
        if (!$input) { //si input es false, mostrar los errores de validacion
            
            $data['titulo'] = 'Edición';
            $data['dato'] = $formModel->find($id_usuario);
            $data['validation'] = $this->validator;
            echo view('front/head_view', $data);
            echo view('front/navbar_view');
            echo view('back/usuario/edit', $data);
            echo view('front/footer_view.php');
        } else {  
            
            $formModel -> update($id_usuario, [
            'nombre' => $this->request->getVar('nombre'),
            'apellido' => $this->request->getVar('apellido'),
            'usuario' => $this->request->getVar('usuario'),
            'email' => $this->request->getVar('email')]);

            session()->setFlashdata('success', 'Usuario actualizado con exito');
            // Verifica el perfil_id y redirige según corresponda
            if (session()->perfil_id == 1) {
            // Si es admin, redirige a la vista de admin
                return $this->response->redirect(base_url('usuario_lista'));
            } else {
            // Para otros perfiles, redirige a la vista general
                return $this->response->redirect(base_url('panel'));
            }
        }
    }
}