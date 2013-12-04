
<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class ClienteModel extends CI_Model
{
    
    function __construct()
    {
        
        //$query = $this->db->get('cliente');
        // $this->output->append_output(var_dump($query));
        
    }
    
    public function Crear($estudiante)
    {
        if ($this->db->insert("estudiante", $estudiante)) {
            return true;
        } else {
            return false;
        }
    }
    
    public function ListaClientes()
    {
        $query = $this->db->get('Estudiante');
        return $query->result_array();
    }
    
    public function ObtenerCliente($id)
    {
        $this->db->where('Id_Estudiante', $id);
        $query = $this->db->get('Estudiante');
        return $query->row();
    }
    
    public function Editar($id, $estudiante)
    {
        var_dump($id);
        $this->db->where('Id_Estudiante', $id);
        if ($this->db->update('Estudiante', $estudiante)) {
            return true;
        } else {
            return false;
        }
    }
    
    public function Eliminar($id)
    {
        var_dump($id);
        $this->db->where('Id_Estudiante', $id);
        if ($this->db->delete('Estudiante')) {
            return true;
        } else {
            return false;
        }
    }
}