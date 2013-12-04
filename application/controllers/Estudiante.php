<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Estudiante extends CI_Controller {

	public function index()
	{
		$this->load->model("ClienteModel");
		$data['data']=$this->ClienteModel->ListaClientes();
		$data['hola']="http://t1.gstatic.com/images?q=tbn:ANd9GcSq3MHYIrl_BcNMTVtXpiBi2G_B5kmILJTdwnqSTHpksBAhoQnVgQ";
		$this->load->view('Estudiante/Index',$data);
	}

	public function Crear()
	{
		$this->load->view('Estudiante/Crear');
	}

	public function CrearEstudiante()
	{
		$cliente=array(
			'correo' => $this->input->post('correo') ,
			'Nombre' => $this->input->post('nombre') ,
			'cedula' => $this->input->post('cedula') ,
			'Contrasena' => $this->input->post('contrasena'));

		$this->load->model("ClienteModel");
		if($this->ClienteModel->Crear($cliente))
		{
			$data['data']=$this->ClienteModel->ListaClientes();
			$data['hola']="http://t1.gstatic.com/images?q=tbn:ANd9GcSq3MHYIrl_BcNMTVtXpiBi2G_B5kmILJTdwnqSTHpksBAhoQnVgQ";
			$this->load->view('Estudiante/Index',$data);
		}
		else
		{
			$this->load->view('welcome_message');
		}
	}

	public function Editar()
	{
		$id=$this->uri->segment(3);
		$this->load->model("ClienteModel");
		$data['data']=$this->ClienteModel->ObtenerCliente($id);
		$this->load->view('Estudiante/Editar',$data);
	}

	public function EditarEstudiante()
	{
		$id=$this->input->post('id'); 

		$cliente=array(
			'Correo' => $this->input->post('correo') ,
			'Nombre' => $this->input->post('nombre') ,
			'Cedula' => $this->input->post('cedula') ,
			'Contrasena' => $this->input->post('contrasena'));

		$this->load->model("ClienteModel");
		if($this->ClienteModel->Editar($id,$cliente))
		{
			redirect(base_url()."Estudiante");
		}
		else
		{
			$this->load->view('welcome_message');
		}
	}

	public function Eliminar()
	{
		$id=$this->uri->segment(3);

		$this->load->model("ClienteModel");
		if($this->ClienteModel->Eliminar($id))
		{
			redirect(base_url()."Estudiante");
		}
		else
		{
			$this->load->view('welcome_message');
		}
	}
}