<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		//$this->load->view('welcome_message');
		echo "Welcome toptal";
	}

	public function create()
	{
		//$this->load->view('welcome_message');
		echo "Welcome";
	}

	public function getOne()
	{
		//$this->load->view('welcome_message');
		echo "Welcome";
	}

	public function getAll()
	{
		//$this->load->view('welcome_message');
		//filter,
		//sort,
		//format,
		//version,
		//search/q search terms key val
		///resource?filters[status_id]=1&filters[city]=Sydney&page=2&include=relatedResource
		//restrict no of fields - using  restriction code-(fields of restriction code will be defined at backend config)
		//http codes in response with message 
		//Authentication
		//pagination-curr,next page
		//cache
		echo "Welcome";
	}

	public function update()
	{
		//$this->load->view('welcome_message');
		echo "Welcome";
	}

	public function delete()
	{
		//$this->load->view('welcome_message');
		echo "Welcome";
	}


}
