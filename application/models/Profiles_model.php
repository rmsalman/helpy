<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed.');

class Profiles_model extends CI_Model
{
    public function teachers()
    {
        $query = $this->db->select('*, 
(SELECT COUNT(r.rating_id) FROM rating r where r.rating_to = u.id ) as rater, 
(SELECT  AVG(r.rating_value) FROM rating r where r.rating_to = u.id ) as rating')->from('ea_users u')->where('id_roles', 2)->get();
        if($query->num_rows() > 0){
            return $query->result();
        } else {
            return false;
        }
    }

    public function students()
    {
        $query = $this->db->get_where('ea_users', array('id_roles' => '3'));
        if($query->num_rows() > 0){
            return $query->result();
        } else {
            return false;
        }
    }


    public function admins()
    {
        $query = $this->db->get_where('ea_users', array('id_roles' => '1'));
        if($query->num_rows() > 0){
            return $query->result();
        } else {
            return false;
        }
    }



    public function status($id, $status)
    {

        $this->db->update('ea_users', array('user_status' => $status), "id = ".$id);
        if($this->db->affected_rows() > 0){
            return true;
        }else {
            return false;
        }

    }



}