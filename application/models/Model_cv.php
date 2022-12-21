<?php
class Model_cv extends CI_Model
{
    public function getId($email)
    {
        return $this->db->where('email', $email)->get('tb_users')->result();
    }
    public function insert_cv($data)
    {
        $this->db->insert('tb_cv', $data);
    }
    public function getDataCv($id)
    {
        return $this->db->where('id_user', $id)->get('tb_cv')->result();
    }
    public function insert_we($data)
    {
        $this->db->insert('tb_work', $data);
    }
    public function insert_edu($data)
    {
        $this->db->insert('tb_edu', $data);
    }
    public function getIdUserByEmail($email)
    {
        return $this->db->where('email', $email)->get('tb_users')->result();
    }
    public function getBasicById($id)
    {
        return  $this->db->where('id', $id)->get('tb_users')->result();
    }
    public function update_basic($id, $data)
    {
        return $this->db->where('id_user', $id)->update('tb_cv', $data);
    }
}
