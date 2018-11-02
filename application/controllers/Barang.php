<?php 
/**
 * 
 */
class Barang extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	function index(){
		$this->load->view('barang/barang_view');
	}

}
 ?>