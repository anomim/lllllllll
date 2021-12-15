<?php
defined('BASEPATH') or exit('No direct script access allowed');

class login_user_m extends CI_Model
{
    public function Getuser()
    {
        $data = $this->db->query("SELECT * FROM user");
        return $data->result_array();
    }

    public function cek_login($post)
    {
        $username = $post['username'];
        $password = $post['password'];
        $where = array(
            'username' => $username,
            'password' => $password
        );
        $cek = $this->db->get_where('user', $where)->row_array();
        if (!empty($cek)) {
            $data_session = array(
                'username' => $username
            );
            $this->session->set_userdata($data_session);
            redirect('data_rekap');
        } else {

            redirect('login');
        }
    }
}
