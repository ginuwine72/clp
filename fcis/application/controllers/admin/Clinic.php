<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clinic extends Admin_Controller {

	function __construct()
	{
		parent::__construct();
		$this->allow_group_access(array('special','admin'));
		$this->load->model('Patient_model','patient');
		$this->load->model('Clinic_model','clinic');
		$this->load->model('Assets_model','assets');
		$this->data['page_header'] = 'clinic';
		$this->data['page_header_small'] = 'clinic details';
		$this->data['parent_menu'] = 'clinic';
	}

	function index()
	{
		$q = $this->input->get('q');
		$results = array();
		if ($q)
			$results = $this->patient->find_by_all($q);

		$this->data['results'] = $results;
		$this->render('admin/clinic/index');
	}

	function add_fap($id='')
	{
		if ( ! intval($id) > 0) :
			$this->session->set_flashdata('message',message_box('no record found, check your data','danger'));
			redirect('admin/labs');
		else:
			$this->form_validation->set_rules('patient_id','patient id','required');
			if ($this->form_validation->run() === FALSE) :
				$this->session->set_flashdata('message',message_box(validation_errors(),'danger'));
			else:
				$post = $this->input->post();
				$post['negative'] = $this->input->post('negative') ? $post['negative'] : '';
				print_data($post); die();
				$this->clinic->create_clinic($post,$id);
			endif;
		endif;
		$this->data['patient'] = $this->patient->search_id($id);
		$this->data['assets'] = $this->assets->find_gallery('fap',$id);
		$this->data['clinic'] = $this->clinic->find_id($id);
		$this->data['tab'] = 'fap';
		$this->render('admin/clinic/add');
	}

	function add_hnpcc($id='')
	{
		if ( ! intval($id) > 0) :
			$this->session->set_flashdata('message',message_box('no record found, check your data','danger'));
			redirect('admin/clinic');
		else:
			$this->form_validation->set_rules('patient_id','patient id','required');
			if ($this->form_validation->run() === FALSE) :
				$this->session->set_flashdata('message',message_box(validation_errors(),'danger'));
			else:
				$post = $this->input->post();
				$post['negative'] = $this->input->post('negative') ? $post['negative'] : '';
				print_data($post); die();
				$this->clinic->create_clinic($post,$id);
			endif;
		endif;
		$this->data['patient'] = $this->patient->search_id($id);
		$this->data['assets'] = $this->assets->find_gallery('fap',$id);
		$this->data['clinic'] = $this->clinic->find_id($id);
		$this->data['tab'] = 'hnpcc';
		$this->render('admin/clinic/add');
	}

	function add_pjsjps($id='')
	{
		if ( ! intval($id) > 0) :
			$this->session->set_flashdata('message',message_box('no record found, check your data','danger'));
			redirect('admin/clinic');
		else:
			$this->form_validation->set_rules('patient_id','patient id','required');
			if ($this->form_validation->run() === FALSE) :
				$this->session->set_flashdata('message',message_box(validation_errors(),'danger'));
			else:
				$post = $this->input->post();
				$post['negative'] = $this->input->post('negative') ? $post['negative'] : '';
				print_data($post); die();
				$this->clinic->create_clinic($post,$id);
			endif;
		endif;
		$this->data['patient'] = $this->patient->search_id($id);
		$this->data['assets'] = $this->assets->find_gallery('fap',$id);
		$this->data['clinic'] = $this->clinic->find_id($id);
		$this->data['tab'] = 'pjsjps';
		$this->render('admin/clinic/add');
	}

}
