<?php

class User_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function create($name,$email,$password)
    {
        $this->db->insert('employee',[
                'name'=>$name,
                'email'=>$email,
                'password'=>sha1($password)
             ]);
    }

    public function login($email,$password)
    {
        $condition = "email =" . "'" . $email . "' AND " . "password =" . "'" . $password . "'";
        $this->db->select('*');
        $this->db->from('employee');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() == 1)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function read_user_information($email) {

        $condition = "email =" . "'" . $email . "'";
        $this->db->select('*');
        $this->db->from('employee');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    public function attendance($email)
    {
        $this->db->select('*');
        $this->db->from('employee');
        $this->db->where('email',$email);
        $this->db->order_by("id","desc");
        $this->db->limit(1);
        $query = $this->db->get();
        foreach ($query->result_array() as $row)
        {
            $id = $row['id'];

        }


        $condition = "employee_id =" . "'" . $id . "'";
        $this->db->select('*');
        $this->db->from('user_attandance');
        $this->db->where($condition);
        $this->db->order_by("id","desc");
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            foreach ($query->result_array() as $row)
            {
                $last_id = $row['id'];
                $last_time = $row['create_time'];
                $count = $row['count'];
            }
        } else {
            $last_time = 0;
        }
        if($last_time !=0) {
            $count=$count+1;
            $last_time = strtotime($last_time);
            $last_time = date('d', $last_time);
            date_default_timezone_set('Asia/Kolkata');
            $cur_time = date('Y-m-d H:i:s');
            $cur_time = strtotime($cur_time);
            $cur_time = date('d', $cur_time);
            if ($cur_time > $last_time) {
                $this->db->insert('user_attandance', [
                    'employee_id' => $id,
                    'count' => $count
                ]);
                $condition = "employee_id =" . "'" . $id . "'";
                $this->db->select('*');
                $this->db->from('user_attandance');
                $this->db->where($condition);
                $this->db->order_by("id","desc");
                $this->db->limit(1);
                $query = $this->db->get();
                return $query->result_array();
            } else {
                return false;
            }
        }
        else{
            $this->db->insert('user_attandance', [
                'employee_id' => $id
            ]);
            $condition = "employee_id =" . "'" . $id . "'";
            $this->db->select('*');
            $this->db->from('user_attandance');
            $this->db->where($condition);
            $this->db->order_by("id","desc");
            $this->db->limit(1);
            $query = $this->db->get();
            return $query->result_array();
        }
    }

    public function logout($id){
        date_default_timezone_set('Asia/Kolkata');
        $cur_time = date('Y-m-d H:i:s');
        $data = array(
            'logout_time' => $cur_time
        );
        $condition = "id =" . "'" . $id . "'";
        $this->db->where($condition);
        $this->db->update('user_attandance' , $data);
    }

}
