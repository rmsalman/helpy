<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed.');

class Wallet_model extends CI_Model
{
    public function send_now($mes_by, $mes_to)
    {
        $data = array(
            'wal_by' => $mes_by,
            'wal_of' => $mes_to,
            'wal_currency' => $this->input->post('message')
        );
        if($this->db->insert('wallet', $data)) {
            return true;
        }else {
            return false;
        }
    }

    public function get_mes()
    {
          $resultz = $this->db->query( "SELECT * FROM wallet as wal LEFT JOIN ea_users u on wal.wal_of = u.id WHERE wal.wal_by =". $this->session->userdata('user_id'));
        if ($resultz->num_rows() > 0) {
            return $resultz->result_array();
        } else {
            return false;
        }
    }

    public function get_cur()
    {
        $currency = $this->db->query( "SELECT SUM(wal_currency) AS currency FROM wallet where wal_by = ". $this->session->userdata('user_id'));

        if ($currency->num_rows() > 0) {
            return $currency->row(0);
        } else {
            return false;
        }

    }


    public function cur_rec_total($id= null)
    {

if($id == "") {
    $id = $this->session->userdata('user_id');
}

        $currency = $this->db->query( "SELECT SUM(wal_currency) AS currency FROM wallet where wal_of = ". $id);
        if ($currency->num_rows() > 0) {
            return $currency->row(0);
        } else {
            return false;
        }
    }


    public function sent()
    {
        $results =  $this->db->query( "SELECT * FROM messages as mes LEFT JOIN  ea_users u on  mes.mes_by= u.id WHERE mes.mes_to = ". $this->session->userdata('user_id'));
        if ($results->num_rows() > 0) {
            return $results->result_array();
        } else {
            return false;
        }

    }


    public function cur_rec()
    {
        $results =  $this->db->query( "SELECT * FROM wallet as wal LEFT JOIN ea_users u on wal.wal_by = u.id WHERE wal.wal_of =".  $this->session->userdata('user_id'));
        if ($results->num_rows() > 0) {
            return $results->result_array();
        } else {
            return false;
        }

    }


    public function all_sent()
    {
        $results =  $this->db->query("SELECT * FROM messages as mes LEFT JOIN  ea_users u on  mes.mes_by= u.id");
        if ($results->num_rows() > 0) {
            return $results->result_array();
        } else {
            return false;
        }

    }




    public function all_wallet($id)
    {

        if($id) {
            $status = " where w.wal_of = " . $id;
        }else {
            $status = "";
        }


        $results =  $this->db->query("SELECT w.*, u.*, z.first_name as by_first_name, z.last_name as by_last_name, z.id as by_id FROM wallet w LEFT JOIN ea_users u on w.wal_of = u.id LEFT JOIN ea_users z on w.wal_by = z.id ". $status);
        if ($results->num_rows() > 0) {
            return $results->result_array();
        } else {
            return false;
        }

    }



    public function all_rec()
    {
        $results =  $this->db->query("SELECT * FROM messages as mes LEFT JOIN  ea_users u on  mes.mes_to= u.id");
        if ($results->num_rows() > 0) {
            return $results->result_array();
        } else {
            return false;
        }

    }



    public function add_success($data)
    {

$percent =  $data['payment_gross'] * 15/100 ;
$ammount = $data['payment_gross'] - $percent;

        if($this->db->insert('paypal', $data)) {

            $data1 = array(
                "wal_currency" => $percent,
                "wal_of"       => "84",
                "wal_by"       => $data['item_number']
                );

            $data2 = array(
                "wal_currency" => $ammount,
                "wal_of"       => $data['item_number'],
                "wal_by"       => "84"
                );

            $this->db->insert('wallet', $data1);
            $this->db->insert('wallet', $data2);

            return true;

        }else {
            return false;
        }
    }


}