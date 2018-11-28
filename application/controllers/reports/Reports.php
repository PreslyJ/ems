<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//require_once APPPATH.'../vendor/autoload.php';
class Reports extends CI_Controller 
{

    function __construct()
   	{
        parent::__construct();
		$this->load->model('reports/reports_model');
   	}


	function reports_view(){
		$data = $this->reports_model->fetch_predata(); //fetch initial data
		$this->load->view('reports/reports_view',$data); 
	}   



	function test($event_id = 0){

		$data['event_id'] = $event_id;

		 $this->load->view('reports/test',$data); 

	}   



	function checklist($event_id = 0){

		$_POST['id']=$event_id;
		$_POST['from']=NULL;
		$_POST['to']=NULL;
		$_POST['customer'] = NULL;
		$_POST['venue'] = NULL;
		$_POST['type'] = NULL ;
		$_POST['employee'] = NULL;

		// Load autoloader (using Composer)
		require APPPATH. '../vendor/autoload.php';
		$pdf = new TCPDF();                 // create TCPDF object with default constructor args
		$pdf->AddPage();                    // pretty self-explanatory
		$content = '';  
		$content .= '  
		<h3 align="center">EVENT ACTIVITY CHECKLIST</h3><br /> 
		<p>Test</p>
		<br /> <br /> 
		<table border="1" cellspacing="0" cellpadding="5">  
				<tr>  
				<th class = "text-center">#</th>
				<th class = "text-center">Checklist Item</th>
				<th class = "text-center">Deadline</th>
				<th class = "text-center">Completed On</th>
				<th colspan="2"  class = "text-center">Incharge</th>
				<th class = "text-center">Status</th>
				</tr>  
			';
		
			$x=0;
			
			foreach(($this->reports_model-> fetch_lp_checklists())['aaData'] as $r)   
			{      
					$x++;
					$content .= '<tr>  
								<td>'.$x.'</td>  
								<td>'.$r["item"].'</td>  
								<td>'.$r["ckl_deadline"].'</td>  
								<td>'.$r["completed"].'</td>  
								<td colspan="2">'.$r["assigned_name"].'</td>  
								<td>'.$r["status"].'</td>  
						</tr>  
								';  
			

			}  
		$content .= '</table>';  
		$pdf->WriteHTML($content);      
		$pdf->Output('checklist.pdf');  

	}

	function eventAgenda($event_id=0){
		
		$_GET['id']=$event_id;

		// Load autoloader (using Composer)
		require APPPATH. '../vendor/autoload.php';
		$pdf = new TCPDF();                 // create TCPDF object with default constructor args
		$pdf->AddPage();                    // pretty self-explanatory
		$content = '';  
		$content .= '  
		<h3 align="center">EVENT AGENDA</h3><br /><br />  
		<table border="1" cellspacing="0" cellpadding="5">  
				<tr>  
				<th class = "text-center">#</th>
				<th colspan="2"  class = "text-center">Agenda Item</th>
				<th class = "text-center">Start Time</th>
				<th class = "text-center">End Time</th>
				<th colspan="2"  class = "text-center">Comments</th>
				</tr>  
			';
		
			$x=0;
			
			foreach(($this->reports_model-> fetch_agenda()) as $r)   
			{      
					$x++;
					$content .= '<tr>  
								<td>'.$x.'</td>  
								<td colspan="2" >'.$r["agenda_item"].'</td>  
								<td>'.$r["start_time"].'</td>  
								<td>'.$r["end_time"].'</td>  
								<td colspan="2" ></td>  
						</tr>  
								';  
			

			}  
		$content .= '</table>';  
		$pdf->WriteHTML($content);      
		$pdf->Output('agenda.pdf');  


	}	

}    