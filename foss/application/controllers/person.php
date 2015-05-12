<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Person extends CI_Controller {

	// num of records per page
	private $limit = 10;
	
	function __construct()
	{
		parent::__construct();
		
		// load library
		$this->load->library(array('table','form_validation','session'));
		
		// load helper
		$this->load->helper('url');
		
		// load model
		$this->load->model('Person_model','',TRUE);
	}
	
	function index($offset = 0)
	{
		
		
		 $this->load->library('session');
        $this->load->helper('url');
        if($this->session->userdata('login'))
        {
            //mengambil nama dari session
            $session = $this->session->userdata('login');
            $data['nama'] = $session['nama'];
        }
		else{
            redirect('login','refresh');   
        }
		
		$this->load->model('person_model');
        $data['judul'] = 'Menampilkan Data dari Database Menggunakan Codeigniter';
        $data['daftar_user'] = $this->Person_model->get_user_all();
 

		
		// offset
		$uri_segment = 3;
		$offset = $this->uri->segment($uri_segment);
		
		// load data
		$persons = $this->Person_model->get_paged_list($this->limit, $offset)->result();
		
		// generate pagination
		$this->load->library('pagination');
		$config['base_url'] = site_url('person/index/');
 		$config['total_rows'] = $this->Person_model->count_all();
 		$config['per_page'] = $this->limit;
		$config['uri_segment'] = $uri_segment;
		$this->pagination->initialize($config);
		$data['pagination'] = $this->pagination->create_links();
		
		// generate table data
		$this->load->library('table');
		$tmpl = array ('table_open' => '<table border="2">');
		$this->table->set_template($tmpl);
		$this->table->set_empty("&nbsp;");
		$this->table->set_heading('  No  ', '  Nama  ', '  Jenis Kelamin  ', '  Tanggal Lahir  ', '  Actions  ');
		$i = 0 + $offset;
		foreach ($persons as $person)
		{
			$this->table->add_row(++$i, $person->name, strtoupper($person->gender)=='M'? 'Laki-Laki':'Perempuan', date('d-m-Y',strtotime($person->dob)), 
				anchor('person/view/'.$person->id,'view',array('class'=>'view')).' '.
				anchor('person/update/'.$person->id,'update',array('class'=>'update')).' '.
				anchor('person/delete/'.$person->id,'delete',array('class'=>'delete','onclick'=>"return confirm('Yakin akan menghapus?')"))
			);
		}
		$data['table'] = $this->table->generate();
		
		// load view
		$this->load->view('tabelmahasiswa', $data);
	}
	
	function add()
	{
		    if($this->session->userdata('login'))
        {
            //mengambil nama dari session
            $session = $this->session->userdata('login');
            $data['nama'] = $session['nama'];
        }
		else{
            redirect('login','refresh');   
        }
		// set empty default form field values
		$this->_set_fields();
		// set validation properties
		$this->_set_rules();
		
		// set common properties
		$data['title'] = 'Add new person';
		$data['message'] = '';
		$data['action'] = site_url('person/addPerson');
		$data['link_back'] = anchor('person/index/','Kembali ke lihat data',array('class'=>'back'));
	
		// load view
		$this->load->view('formmahasiswa', $data);
	}
	
	function addPerson()
	{
		  if($this->session->userdata('login'))
        {
            //mengambil nama dari session
            $session = $this->session->userdata('login');
            $data['nama'] = $session['nama'];
        }
		else{
            redirect('login','refresh');   
        }
		// set common properties
		$data['title'] = 'Tambah Data';
		$data['action'] = site_url('person/addPerson');
		$data['link_back'] = anchor('person/index/','Kembali ke lihat data',array('class'=>'back'));
		
		// set empty default form field values
		$this->_set_fields();
		// set validation properties
		$this->_set_rules();
		
		// run validation
		if ($this->form_validation->run() == FALSE)
		{
			$data['message'] = '';
		}
		else
		{
			// save data
			$person = array('name' => $this->input->post('name'),
							'gender' => $this->input->post('gender'),
							'dob' => date('Y-m-d', strtotime($this->input->post('dob'))));
			$id = $this->Person_model->save($person);
			
			// set user message
			$data['message'] = '<div class="success">Data berhasil ditambahkan</div>';
		}
		
		// load view
		$this->load->view('formmahasiswa', $data);
	}
	
	function view($id)
	{
		  if($this->session->userdata('login'))
        {
            //mengambil nama dari session
            $session = $this->session->userdata('login');
            $data['nama'] = $session['nama'];
        }
		else{
            redirect('login','refresh');   
        }
		// set common properties
		$data['title'] = 'Person Details';
		$data['link_back'] = anchor('person/index/','Kembali ke lihat data',array('class'=>'back'));
		
		// get person details
		$data['person'] = $this->Person_model->get_by_id($id)->row();
		
		// load view
		$this->load->view('cetak', $data);
	}
	
	function update($id)
	{
		  if($this->session->userdata('login'))
        {
            //mengambil nama dari session
            $session = $this->session->userdata('login');
            $data['nama'] = $session['nama'];
        }
		else{
            redirect('login','refresh');   
        }
		// set validation properties
		$this->_set_rules();
		
		// prefill form values
		$person = $this->Person_model->get_by_id($id)->row();
		$this->form_data->id = $id;
		$this->form_data->name = $person->name;
		$this->form_data->gender = strtoupper($person->gender);
		$this->form_data->dob = date('d-m-Y',strtotime($person->dob));
		
		// set common properties
		$data['title'] = 'Update person';
		$data['message'] = '';
		$data['action'] = site_url('person/updatePerson');
		$data['link_back'] = anchor('person/index/','Kembali ke lihat data',array('class'=>'back'));
	
		// load view
		$this->load->view('formmahasiswa', $data);
	}
	
	function updatePerson()
	{
		   if($this->session->userdata('login'))
        {
            //mengambil nama dari session
            $session = $this->session->userdata('login');
            $data['nama'] = $session['nama'];
        }
		else{
            redirect('login','refresh');   
        }
		// set common properties
		$data['title'] = 'Update person';
		$data['action'] = site_url('person/updatePerson');
		$data['link_back'] = anchor('person/index/','Kembali ke lihat data',array('class'=>'back'));
		
		// set empty default form field values
		$this->_set_fields();
		// set validation properties
		$this->_set_rules();
		
		// run validation
		if ($this->form_validation->run() == FALSE)
		{
			$data['message'] = '';
		}
		else
		{
			// save data
			$id = $this->input->post('id');
			$person = array('name' => $this->input->post('name'),
							'gender' => $this->input->post('gender'),
							'dob' => date('Y-m-d', strtotime($this->input->post('dob'))));
			$this->Person_model->update($id,$person);
			
			// set user message
			$data['message'] = '<div class="success">Update data berhasil</div>';
		}
		
		// load view
		$this->load->view('formmahasiswa', $data);
	}
	
	function delete($id)
	{
		// delete person
		$this->Person_model->delete($id);
		
		// redirect to person list page
		redirect('person/index/','refresh');
	}
	
	// set empty default form field values
	function _set_fields()
	{
		$this->form_data->id = '';
		$this->form_data->name = '';
		$this->form_data->gender = '';
		$this->form_data->dob = '';
	}
	
	// validation rules
	function _set_rules()
	{
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('gender', 'Gender', 'trim|required');
		$this->form_validation->set_rules('dob', 'DoB', 'trim|required|callback_valid_date');
		
		$this->form_validation->set_message('required', '* Field harus di isi');
		$this->form_validation->set_message('isset', '* required');
		$this->form_validation->set_message('valid_date', '* Format tanggal salah!! (dd-mm-yyyy)');
		$this->form_validation->set_error_delimiters('<p class="error">', '</p>');
	}
	
	// date_validation callback
	function valid_date($str)
	{
		//match the format of the date
		if (preg_match ("/^([0-9]{2})-([0-9]{2})-([0-9]{4})$/", $str, $parts))
		{
			//check weather the date is valid of not
			if(checkdate($parts[2],$parts[1],$parts[3]))
				return true;
			else
				return false;
		}
		else
			return false;
	}
	
	    public function logout(){
		
        $this->load->library('session');
        $this->load->helper('url');
        $this->session->unset_userdata('login');
        redirect('login','refresh');
    }
}

?>