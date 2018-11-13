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

		$this->load->model('reports/event_summary_report_model'); //loading model

		// Load autoloader (using Composer)
		require APPPATH. '../vendor/autoload.php';
		$pdf = new TCPDF();                 // create TCPDF object with default constructor args
		$pdf->AddPage();                    // pretty self-explanatory
	 		$content = '';  
	 		$content .= '  
	 		<h3 align="center">EVENT ACTIVITY CHECKLIST</h3><br /><br />  
			 <link href='. base_url('assets/css/bootstrap.css').'rel="stylesheet" type="text/css">
	 		<table border="1" cellspacing="0" cellpadding="5">  
	 			 <tr>  
					<th class = "text-center">#</th>
					<th class = "text-center">Checklist Item</th>
					<th class = "text-center">Deadline</th>
					<th class = "text-center">Completed On</th>
					<th class = "text-center">Incharge</th>
					<th class = "text-center">Status</th>
	 			 </tr>  
			 ';

			 while($row = mysqli_fetch_array($result))  
			 {       
			 $content .= '<tr>  
								 <td>'.$row["id"].'</td>  
								 <td>'.$row["name"].'</td>  
								 <td>'.$row["gender"].'</td>  
								 <td>'.$row["designation"].'</td>  
								 <td>'.$row["age"].'</td>  
							</tr>  
								 ';  
			 }  
			 
	// 		//$content .= fetch_data();  
	 		$content .= '</table>';  
		$pdf->WriteHTML($content);      // 1 is line height

		$pdf->Output('hello_world.pdf');    // send the file inline to the browser (default).

	}



}    