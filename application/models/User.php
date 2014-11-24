<?php
class User extends CI_Model {

        public function __construct()
        {
                parent::__construct();
        }
		
		function login($username, $password)
		{
		   $this -> db -> select('id, email, password');
		   $this -> db -> from('users');
		   $this -> db -> where('email', $username);
		   $this -> db -> where('password', MD5($password));
		   $this -> db -> limit(1);
		 
		   $query = $this -> db -> get();
		 
		   if($query -> num_rows() == 1)
		   {
			 return $query->result();
		   }
		   else
		   {
			 return false;
		   }
 		}
}