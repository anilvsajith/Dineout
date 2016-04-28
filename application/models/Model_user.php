<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_user extends CI_Model {

	public function login()
    {
        $admin=0;
        $query = $this->db->get_where('admin', array('email' => $this->input->post('lg_username') , 'password' => $this->input->post('lg_password'), 'admin' => $admin));
        
        if($query->num_rows()==1){
            $row= $query->row();
            $sess = array( 'user_status' => true ,
                           'user_name' => $row->name ,
                            'user_id' => $row->id);
            $this->session->set_userdata($sess);
            return true;
        }
        return false;
    }
    
    
    public function signup() {
          $admin=0;
		  if($this->db->insert('admin', array('name' => $this->input->post('reg_fullname'),'password' => $this->input->post('reg_password'),'email' => $this->input->post('reg_email'),'phone' => $this->input->post('reg_mobile'),'admin' => $admin)))
            return true;
        return false;
	}

    public function distance()
    {
        $query = $this->db->get_where('hotel',array('type' => $this->input->post('type')));   
        $i=0;
        $data1=array();
        foreach ($query->result() as $row){
        $var="https://maps.googleapis.com/maps/api/distancematrix/json?units=metric&origins=".$this->input->post('Loclat').",".$this->input->post('Loclng')."&destinations=".$row->lat.",".$row->lng."&key=AIzaSyBKwGo0vPZC0HUDBMTB-FI-tHx-bc4cQ0U";
        $data = json_decode(file_get_contents("$var"));
        $data1[$i]=array( 'dist' => $data->rows[0]->elements[0]->distance->value);
        $rate_mark=($row->rating)*5.0;
        if($data1[$i]['dist']<=5000)
        {
            $x=$data1[$i]['dist']/1000.0;
            $dist_mark=(1025.0+995.0*($x-1.0)-$data1[$i]['dist']);
        }
        else
        {
        $rate_mark= ($row->rating)/2.0; 
        $dist_mark=75000.0/($data1[$i]['dist']);
        }
        $mark[$i]=array('id' => $row->id, 'value' => ($rate_mark + $dist_mark), 'rating' => $row->rating, 'dist' => $data1[$i]['dist']);
        $i++;
        }        
        $mark['size']=$i;     
        return $mark;
        
    }
    
    public function sort_best($mark)
    {
        $temp=array();
        for($i=0;$i<$mark['size'];$i++)
            for($j=0;$j<$mark['size']-1;$j++)
            {
                if($mark[$j]['value']<$mark[$j+1]['value'])
                {
                    
                    $temp=$mark[$j];
                    $mark[$j]=$mark[$j+1];
                    $mark[$j+1]=$temp;
                }
        }  
        return $mark;        
    }
    
    public function sort_dist($mark)
    {
        $temp=array();
        for($i=0;$i<$mark['size'];$i++)
            for($j=0;$j<$mark['size']-1;$j++)
            {
                if($mark[$j]['dist']>$mark[$j+1]['dist'])
                {
                    
                    $temp=$mark[$j];
                    $mark[$j]=$mark[$j+1];
                    $mark[$j+1]=$temp;
                }
        }  
        return $mark;
    }
    
    public function sort_rating($mark1)
    {
        $temp=array();
        for($i=0;$i<$mark1['size'];$i++)
            for($j=0;$j<$mark1['size']-1;$j++)
            {
                if($mark1[$j]['rating']<$mark1[$j+1]['rating'])
                {
                    $temp=$mark1[$j];
                    $mark1[$j]=$mark1[$j+1];
                    $mark1[$j+1]=$temp;
                }
        }  
        return $mark1;
    }
    
    public function get_all_hotel()
    {
        $query=$this->db->get('hotel');
        $data= array();
        $i=0;
        foreach ($query->result() as $row){
            $data[$i]['name']=$row->name;
            $data[$i]['image']=$row->image;
            $data[$i]['id']=$row->id;
            $i++;
        }
        $data['size']=$i;
        $data[$i]=NULL;
        return $data;
    }

    
    public function gethotel($d)
    {
        
        $data= array();
        $i=0;
        for($i=0;$i<$d['size'];$i++)
        {
            $query = $this->db->get_where('hotel',array('id' => $d[$i]['id']));
            foreach ($query->result() as $row){
                $data[$i]['name']=$row->name;
                $data[$i]['image']=$row->image;  
                $data[$i]['id']=$row->id;
            }
            
        }
        $data['size']=$i;
        $data[$i]=NULL;
        return $data;
    }
    
    public function get_hotel_spec($id)
    {
        $query = $this->db->get_where('hotel',array('id' => $id));
        $data= array();
        $row= $query->row();
        {
            $data['name']=$row->name;
            $data['image']=$row->image;
            $data['addr']=$row->address;
            $data['topen']=$row->topen;
            $data['tclose']=$row->tclose;
            $data['id']=$row->id;
        }
        return $data;
    }


}