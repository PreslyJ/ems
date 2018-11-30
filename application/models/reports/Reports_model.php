<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reports_model extends CI_Model
{
	function __construct()
	{
		parent:: __Construct();
    }
    
    function fetch_predata()
	{
		$data = array(); 

		$this->db->select('ENT_ID as "id", ENT_Code as "code", ENT_Complete as "status"');
		$event = $this->db->get('EVENT')->result_array();

		$data['ent_select'] = '<option value = "">Select Event</option>';

		foreach($event as $row)
		{
			$data['ent_select'] .= '<option data-status = "'.$row['status'].'" value = "'.$row['id'].'">' . $row['code'] . '</option>';
		}

		return $data;
	}

	function fetch_lp_checklists(){

		$CI =& get_instance();
		$CI->load->model('transaction/checklist_model'); //loading model

		return $CI->checklist_model->fetch_lp_checklists();

	}

	function fetch_agenda(){

		$CI =& get_instance();
		$CI->load->model('transaction/agenda_model'); //loading model

		return $CI->agenda_model->fetch_agenda();

	}

	function fetch_event_by_id(){

		$r = array();

		if($_POST['id'] != "")
		{
			$this->db->select('ENT_ID as "id", ENT_Code as "code", ENT_CUS_ID as "cus_id", ENT_EVT_ID as "type", DATE(ENT_Date) as "date", ENT_Starttime as "start", ENT_Endtime as "end", ENT_VEN_ID as "ven_id", ENT_HALL_ID as "hall_id", ENT_Initial_budget as "ini_budget", ENT_Budget as "budget", ENT_Total_charge as "fee", ENT_Complete as "status", ENT_Requirement as "req", ENT_Remarks as "remarks"');
			$this->db->where('ENT_ID', $_POST['id']);
			$r = $this->db->get('EVENT')->row_array();

			
		}

		return $r;
	}

}