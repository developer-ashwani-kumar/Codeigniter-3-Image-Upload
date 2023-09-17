<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *  ImageUpload Controller
 */
class ImageUpload extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('crud');
	}

	public function index()
	{
		$data['data'] = $this->crud->get_records('posts');
		$this->load->view('post/list', $data);
	}


	public function create()
	{
		$this->load->view('post/create');
	}


	public function store()
	{

		$config = array(
			'upload_path' => "./uploads/",
			'allowed_types' => "jpg|png|jpeg|gif",
			'max_size' => "1024000", // file size , here it is 1 MB(1024 Kb)
		);
		$this->load->library('upload', $config);

		if ($this->upload->do_upload('image')) {

			$data['image'] = $this->upload->data('file_name');
			$this->crud->insert('posts', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success">Record has been saved successfully.</div>');			
		}else{
			$error = array('error' => $this->upload->display_errors());
			$this->session->set_flashdata('message', '<div class="alert alert-danger">'.implode("",$error).'</div>');
		}

		redirect(base_url());
	}





}