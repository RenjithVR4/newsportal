<?php
/*********************************************************
   Author:      Renjith VR
   Version:     1.0
   Date:        31-10-2016
   FileName:    User_model.php
   Description : Model for User routines
**********************************************************/


if (!defined('BASEPATH')) exit('No direct script access allowed');

class UserModel extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function adduser($fields = array())
	{
		$fields['created'] = isset($fields['created']) ? $fields['created'] : date('Y-m-d H:i:s');

		$this->db->set($fields);
		$this->db->insert('user');

		return $this->db->insert_id();
	}

}
