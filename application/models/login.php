<?php
class Model_name extends CI_Model {

        public function __construct()
        {
                parent::__construct();
        }
		
		public function get_id()
		{
				$this->db->select('email, password, locked, lastupdttm');
				$this->db->where('email', $email);
				$this->db->where('password', $password);
				$query = $this->db->get('login');

		}

}