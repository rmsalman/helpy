<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed.');

	class Student_model extends CI_Model{
        public function register($enc_password){
            // User data array
            $data = array(
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'email' => $this->input->post('email'),
                'address' => $this->input->post('address'),
                'phone_number' => $this->input->post('phone_number'),
                'password	' => $enc_password,
                'zip_code' => $this->input->post('zipcode'),
                'id_roles' => '3',
                'notes' => $this->input->post('notes')
            );

            // Insert user
            if($this->db->insert('ea_users', $data)) {
                $this->db->where('email', $this->input->post('email'));
                $this->db->where('password', $enc_password);
                $result = $this->db->get('ea_users');
                if ($result->num_rows() == 1) {
                    return $result->row(0)->id;
                } else {
                    return false;
                }
            }else {
                return false;
            }
        }

        // Log user in
        public function login($username, $password){
            // Validate
            $this->db->where('email', $username);
            $this->db->where('password', $password);

            $result = $this->db->get('ea_users');

            if($result->num_rows() == 1){
                return $result->row();
            } else {
                return false;
            }
        }

        // Check username exists
        public function check_username_exists($username){
            $query = $this->db->get_where('ea_users', array('email' => $username));
            if(empty($query->row_array())){
                return true;
            } else {
                return false;
            }
        }

        // Check email exists
        public function check_email_exists($email){
            $query = $this->db->get_where('ea_users', array('email' => $email));
            if(empty($query->row_array())){
                return true;
            } else {
                return false;
            }
        }

        public function profile($id){
            $query = $this->db->get_where('ea_users', array('id' => $id))->row();
            if(!empty($query)){
                return $query;
            } else {
                return false;
            }
        }


        public function updated($id, $password){

            $data = array(
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'email' => $this->input->post('email'),
                'address' => $this->input->post('address'),
                'phone_number' => $this->input->post('phone_number'),
                'password	' => $password,
                'zip_code' => $this->input->post('zipcode'),
                'id_roles' => '3',
                'notes' => $this->input->post('notes'),
                'education' => $this->input->post('education'),
                'work' => $this->input->post('work')
            );

            if($this->db->update('ea_users', $data, "id =".$id)){
               return true;
            } else {                return false;
            }
        }

        public function rating_num($id = null){

            $result = $this->db
                           ->select('*')
                           ->from('rating')
                           ->where('rating_to', $id)->get();

            return $result->num_rows();

        }
        public function rating($id = null){
//             $query = "SELECT *
// FROM rating r
// LEFT JOIN ea_users u
// on r.rating_to = u.id 
// LEFT JOIN ea_users u2
// on r.rating_by = u2.id 
// WHERE r.rating_to = ". $id;
//             return  $this->db->query($query)->result();       



     // $query = $this->db
     //                            ->select('r.*, u.*, u2.first_name as u2_first_name, u2.last_name as u2_last_name, u2.id as u2_id')
     //                            ->from('rating r')
     //                            ->join('ea_users u', 'r.rating_to = u.id')
     //                            ->join('ea_users u2', 'r.rating_by = u2.id')
     //                            ->where('r.rating_to', $id)
     //                            ->get()->row_array();



     // $query = $this->db
     //                            ->select('r.*, u.*, u2.first_name as u2_first_name, u2.last_name as u2_last_name, u2.id as u2_id')
     //                            ->from('rating r')
     //                            ->join('ea_users u', 'r.rating_to = u.id')
     //                            ->join('ea_users u2', 'r.rating_by = u2.id')
     //                            ->where('r.rating_to', $id)
     //                            ->get()->row_array();


            $query = $this->db->select('AVG(`rating_value`) as avg_rating')->from('rating')->where('rating_to', $id)->get()->row();
            return ($query) ? $query : NULL;
        }

        public function rating_add($id = null, $by_id = null, $rating_value = null){
                $data = array(
                            'rating_to' => $id,
                            'rating_by' => $by_id,
                            'rating_value' => $rating_value
                        );

                $query = $this->db->select('*')->from('rating')->where('rating_to', $id)->where('rating_by', $by_id)->get();

                if($query->num_rows() == 0) {

                                    $this->session->set_flashdata('user_loggedin', 'Profile Rating Added');
                    return $this->db->insert('rating', $data);
                }else {
                    $data2 = $query->row();

                                    $this->session->set_flashdata('user_loggedin', 'Profile Rating Updated');
                   return   $this->db->update('rating', $data, array("rating_id" => $data2->rating_id));
                      // echo $this->db->last_query();
                }

        }



        public function appointments($id){
            $query = "SELECT ea_appointments.*, ea_users.*, ea_appointments.notes as noter FROM ea_appointments LEFT JOIN ea_users on ea_users.id = ea_appointments.id_users_provider WHERE `id_users_customer` =".$id;
            return $result = $this->db->query($query)->result();
        }

    }