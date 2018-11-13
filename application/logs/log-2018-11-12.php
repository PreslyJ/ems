<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-11-12 00:42:57 --> 404 Page Not Found: reports/Reports/chedklist
ERROR - 2018-11-12 00:43:03 --> 404 Page Not Found: reports/Reports/chedklist
ERROR - 2018-11-12 00:43:22 --> 404 Page Not Found: reports/Reports/chedklist
ERROR - 2018-11-12 00:43:34 --> 404 Page Not Found: reports/Reports/mypdf
ERROR - 2018-11-12 00:43:40 --> Severity: Warning --> Missing argument 1 for Reports::checklist(), called in /var/www/html/ems/system/core/CodeIgniter.php on line 514 and defined /var/www/html/ems/application/controllers/reports/Reports.php 20
ERROR - 2018-11-12 00:43:40 --> Severity: Notice --> Undefined variable: event_id /var/www/html/ems/application/controllers/reports/Reports.php 25
ERROR - 2018-11-12 01:18:01 --> test
ERROR - 2018-11-12 01:18:43 --> Severity: Notice --> Array to string conversion /var/www/html/ems/system/core/Log.php 207
ERROR - 2018-11-12 01:18:43 --> Array
ERROR - 2018-11-12 01:19:12 --> 2
ERROR - 2018-11-12 01:34:35 --> tets.................
ERROR - 2018-11-12 01:34:35 --> tets.................
ERROR - 2018-11-12 01:35:37 --> tets.................
ERROR - 2018-11-12 01:35:37 --> tets.................
ERROR - 2018-11-12 01:38:16 --> tets.................
ERROR - 2018-11-12 01:38:16 --> tets.................
ERROR - 2018-11-12 01:39:18 --> tets.................
ERROR - 2018-11-12 01:39:18 --> tets.................
ERROR - 2018-11-12 01:40:07 --> tets.................
ERROR - 2018-11-12 01:40:07 --> tets.................
ERROR - 2018-11-12 01:40:10 --> tets.................
ERROR - 2018-11-12 01:40:10 --> tets.................
ERROR - 2018-11-12 01:41:14 --> tets.................
ERROR - 2018-11-12 01:41:14 --> tets.................
ERROR - 2018-11-12 01:41:42 --> tets.................
ERROR - 2018-11-12 01:41:42 --> tets.................
ERROR - 2018-11-12 01:45:30 --> 2
ERROR - 2018-11-12 01:46:15 --> 2
ERROR - 2018-11-12 01:47:30 --> 2
ERROR - 2018-11-12 01:49:03 --> 2
ERROR - 2018-11-12 01:49:03 --> 2
ERROR - 2018-11-12 01:49:33 --> 2
ERROR - 2018-11-12 01:49:33 --> 2erer
ERROR - 2018-11-12 01:50:13 --> 2
ERROR - 2018-11-12 01:50:13 --> 2erer
ERROR - 2018-11-12 01:51:05 --> 2
ERROR - 2018-11-12 01:51:05 --> 2erer
ERROR - 2018-11-12 01:52:25 --> 2
ERROR - 2018-11-12 01:52:25 --> 2erer
ERROR - 2018-11-12 11:32:29 --> 
  
  <!-- moment -->
   <script src="http://localhost/ems/assets/js/moment.js"></script>
    
    <!-- jQuery -->
    <script src="http://localhost/ems/assets/js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="http://localhost/ems/assets/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="http://localhost/ems/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="http://localhost/ems/vendor/datatables/js/jquery.dataTables.js"></script>
    <script src="http://localhost/ems/vendor/datatables-plugins/dataTables.bootstrap.js"></script>
    <script src="http://localhost/ems/vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- datetimepicker -->
    <script src="http://localhost/ems/vendor/bootstrap-datetimepicker-master/build/js/bootstrap-datetimepicker.min.js"></script>

    <!-- selectpicker -->
    <script src="http://localhost/ems/vendor/bootstrap-select-1.11.0/dist/js/bootstrap-select.js"></script>

    <!-- Morris Charts JavaScript -->
    <!-- <script src=""></script>
    <script src=""></script>
    <script src=""></script> -->

    <!-- Flot Charts JavaScript -->
    <!-- <script src=""></script>
    <script src=""></script>
    <script src=""></script>
    <script src=""></script>
    <script src=""></script>
    <script src=""></script>
    <script src=""></script> -->

    <!-- iCheck -->
    <script src="http://localhost/ems/vendor/iCheck/icheck.min.js"></script>

    <!-- switchery -->
    <script src="http://localhost/ems/vendor/switchery/switchery.js"></script>

    <!-- Toastr Notifications -->
    <script src="http://localhost/ems/vendor/toastr-master/build/toastr.min.js"></script>

    <!-- Slimscroll -->
    <!-- <script src=""></script> -->

    <!-- fromt-end Validation -->
    <script src="http://localhost/ems/vendor/jQuery-Form-Validator-master/form-validator/jquery.form-validator.min.js"></script>

    <!-- Full Calendar -->
    <script src="http://localhost/ems/vendor/fullcalendar-3.0.0/fullcalendar.js"></script>
    
    <!-- Custom Theme JavaScript -->
    <script src="http://localhost/ems/dist/js/sb-admin-2.js"></script>





<div class = "row">
   
</div>
<!-- /.row -->

<div class = "wrapper animated fadeInRight">
    <div class="row">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <!-- <div class = "col-md-5"> -->
                    <!-- <h4 class="panel-title">
                        <a data-toggle="collapse" href="#ent_collapse">Event Checklist Lookup <small class = "text-white"> Showing all checklists of selected event</small></a>
                    </h4> -->
                <!-- </div> -->
                <!-- <div class = "col-md-7"> -->
            
                <!-- </div> -->
            </div>
            <div id="ent_collapse" class="panel-collapse collapse in">
                <div class="panel-body">
                    <form class = "form-inline" id = "sup_form">

                       
							<!-- <div class = "hr-line-dashed"></div> -->

                        <div >
                            <table id = "checklist_table" class = "table table-bordered table-hover table-striped compact">
                                <thead>
                                    <tr>
                                        <th class = "text-center">#</th>
                                        <th class = "text-center">Checklist Item</th>
                                        <th class = "text-center">Deadline</th>
                                        <th class = "text-center">Completed On</th>
                                        <th class = "text-center">Incharge</th>
                                        <th class = "text-center">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
</div>
<!-- /.wrapper -->

<script type="text/javascript">

var checklist_table = null;
var uri_ent_id      = "2";

$(document).ready(function()
{


    checklist_table = $('#checklist_table').dataTable( //datatable initialization
    {
        'dom': '<"top">rt<"bottom"p><"clear">', //setting up DOM elements. only the table and pagination is included here
        'bSort': false, //soritng turned off
        'iDisplayLength' : -1, //maximum display no. for one page
        'responsive' : false,
		'paging': false,
         'autoWidth' : false,
        'sAjaxSource': 'http://localhost/ems/index.php/transaction/checklist/fetch_lp_checklists', //url for fetching data for the table
        'fnServerData': function(sSource, aoData, fnCallback, oSettings){
        $.ajax({
            "dataType": 'json',
            "type": "POST",
            "url": sSource,
            "data": aoData,
            "success": fnCallback
        })},
        'fnServerParams' : function(aoData) //parameters that need to be passed
        {
            aoData.push({'name' : 'id', 'value' : uri_ent_id});
            aoData.push({'name' : 'from', 'value' : ''});
            aoData.push({'name' : 'to', 'value' : ''});
            aoData.push({'name' : 'employee', 'value' : ''});
        },
        'aoColumns': [ //assigned fetched data to columns
            { "mData": 'index', "sClass": "text-center"},
            { "mData": "item"},
            { "mData": "ckl_deadline"},
            { "mData": "completed"},
            { "mData": "assigned_name"},
            { "mData": "status", "sClass": "text-center"},
        ],
        "createdRow" : function(row, data, rowIndex, colIndex) //after rows created
        { 
            if(data.status == "On Progress")
                jQuery('td:eq(5)', row).css('background-color', '#ADF7F8');
            if(data.status == "Completed")
                jQuery('td:eq(5)', row).css('background-color', '#C7FFBC');
        },
        "drawCallback": function ( settings ) //after drawing table
        {
            //grouping is done activity wise
            var api   = this.api(); //getting current instance of datatable
            var group = null;
            var rows  = api.rows( {page:'current', order:'current'} ).nodes();


            api.rows({page:"current", order:'current'}).data().each(function(r,i) //looping through all rows
            {
                if(group !== r['activity']) //if new activity
                {
                    $(rows).eq(i).before('<tr class = "group info"><th colspan="6">Activity : '+r['activity']+' | Deadline : '+r['deadline']+'</th></tr>');

                    group =  r['activity'];
                }

            });

        }
    });


	checklist_table.api().ajax.reload();

});

</script>

ERROR - 2018-11-12 11:58:48 --> 
  <!-- Bootstrap Core CSS -->
  <link href="http://localhost/ems/assets/css/bootstrap.css" rel="stylesheet" type="text/css">

<!-- animate -->
<link href="http://localhost/ems/assets/css/animate.css" rel="stylesheet" type="text/css">

<!-- MetisMenu CSS -->
<link href="http://localhost/ems/vendor/metisMenu/metisMenu.min.css" rel="stylesheet" type="text/css">

<!-- Custom Fonts -->
<link href="http://localhost/ems/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<!-- datetimepicker -->
<link href = "http://localhost/ems/vendor/bootstrap-datetimepicker-master/build/css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css">

<!-- selectpicker -->
<link href="http://localhost/ems/vendor/bootstrap-select-1.11.0/dist/css/bootstrap-select.min.css" rel="stylesheet" type="text/css">

<!-- DataTables CSS -->
<link href="http://localhost/ems/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet" type="text/css">
<link href="http://localhost/ems/vendor/datatables/css/jquery.dataTables.css" rel="stylesheet" type="text/css">

<!-- DataTables Responsive CSS -->
<link href="http://localhost/ems/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet" type="text/css">

<!-- Social Buttons CSS -->
<link href="http://localhost/ems/vendor/bootstrap-social/bootstrap-social.css" rel="stylesheet" type="text/css">

<!-- iCheck -->
<link href="http://localhost/ems/vendor/iCheck/_all.css" rel = "stylesheet" type="text/css">

<!-- Switchery -->
<link href="http://localhost/ems/vendor/switchery/switchery.css" rel = "stylesheet" type="text/css">

<!-- Toastr Notifications -->
<link href="http://localhost/ems/vendor/toastr-master/build/toastr.min.css" rel = "stylesheet" type="text/css">

<!-- front-end validation -->
<link href="http://localhost/ems/vendor/jQuery-Form-Validator-master/form-validator/theme-default.min.css" rel="stylesheet" type="text/css">

<!-- Full Calendar -->
<link href="http://localhost/ems/vendor/fullcalendar-3.0.0/fullcalendar.css" rel="stylesheet" type="text/css">

<!-- Custom CSS -->
<link href="http://localhost/ems/dist/css/sb-admin-2.css" rel="stylesheet" type="text/css">
<link href="http://localhost/ems/assets/css/custom_style.css" rel="stylesheet" type="text/css">

  <!-- moment -->
   <script src="http://localhost/ems/assets/js/moment.js"></script>
    
    <!-- jQuery -->
    <script src="http://localhost/ems/assets/js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="http://localhost/ems/assets/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="http://localhost/ems/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="http://localhost/ems/vendor/datatables/js/jquery.dataTables.js"></script>
    <script src="http://localhost/ems/vendor/datatables-plugins/dataTables.bootstrap.js"></script>
    <script src="http://localhost/ems/vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- datetimepicker -->
    <script src="http://localhost/ems/vendor/bootstrap-datetimepicker-master/build/js/bootstrap-datetimepicker.min.js"></script>

    <!-- selectpicker -->
    <script src="http://localhost/ems/vendor/bootstrap-select-1.11.0/dist/js/bootstrap-select.js"></script>

    <!-- Morris Charts JavaScript -->
    <!-- <script src=""></script>
    <script src=""></script>
    <script src=""></script> -->

    <!-- Flot Charts JavaScript -->
    <!-- <script src=""></script>
    <script src=""></script>
    <script src=""></script>
    <script src=""></script>
    <script src=""></script>
    <script src=""></script>
    <script src=""></script> -->

    <!-- iCheck -->
    <script src="http://localhost/ems/vendor/iCheck/icheck.min.js"></script>

    <!-- switchery -->
    <script src="http://localhost/ems/vendor/switchery/switchery.js"></script>

    <!-- Toastr Notifications -->
    <script src="http://localhost/ems/vendor/toastr-master/build/toastr.min.js"></script>

    <!-- Slimscroll -->
    <!-- <script src=""></script> -->

    <!-- fromt-end Validation -->
    <script src="http://localhost/ems/vendor/jQuery-Form-Validator-master/form-validator/jquery.form-validator.min.js"></script>

    <!-- Full Calendar -->
    <script src="http://localhost/ems/vendor/fullcalendar-3.0.0/fullcalendar.js"></script>
    
    <!-- Custom Theme JavaScript -->
    <script src="http://localhost/ems/dist/js/sb-admin-2.js"></script>





<div class = "row">
   
</div>
<!-- /.row -->

<div class = "wrapper animated fadeInRight">
    <div class="row">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <!-- <div class = "col-md-5"> -->
                    <!-- <h4 class="panel-title">
                        <a data-toggle="collapse" href="#ent_collapse">Event Checklist Lookup <small class = "text-white"> Showing all checklists of selected event</small></a>
                    </h4> -->
                <!-- </div> -->
                <!-- <div class = "col-md-7"> -->
            
                <!-- </div> -->
            </div>
            <div id="ent_collapse" class="panel-collapse collapse in">
                <div class="panel-body">
                    <form class = "form-inline" id = "sup_form">

                       
							<!-- <div class = "hr-line-dashed"></div> -->

                        <div >
                            <table id = "checklist_table" class = "table table-bordered table-hover table-striped compact">
                                <thead>
                                    <tr>
                                        <th class = "text-center">#</th>
                                        <th class = "text-center">Checklist Item</th>
                                        <th class = "text-center">Deadline</th>
                                        <th class = "text-center">Completed On</th>
                                        <th class = "text-center">Incharge</th>
                                        <th class = "text-center">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <tr>
                                        <th class = "text-center">1</th>
                                        <th class = "text-center">1</th>
                                        <th class = "text-center">2</th>
                                        <th class = "text-center">asd</th>
                                        <th class = "text-center">dasdas</th>
                                        <th class = "text-center">adsadsad</th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
</div>
<!-- /.wrapper -->

ERROR - 2018-11-12 11:59:04 --> 
 
  <!-- moment -->
   <script src="http://localhost/ems/assets/js/moment.js"></script>
    
    <!-- jQuery -->
    <script src="http://localhost/ems/assets/js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="http://localhost/ems/assets/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="http://localhost/ems/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="http://localhost/ems/vendor/datatables/js/jquery.dataTables.js"></script>
    <script src="http://localhost/ems/vendor/datatables-plugins/dataTables.bootstrap.js"></script>
    <script src="http://localhost/ems/vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- datetimepicker -->
    <script src="http://localhost/ems/vendor/bootstrap-datetimepicker-master/build/js/bootstrap-datetimepicker.min.js"></script>

    <!-- selectpicker -->
    <script src="http://localhost/ems/vendor/bootstrap-select-1.11.0/dist/js/bootstrap-select.js"></script>

    <!-- Morris Charts JavaScript -->
    <!-- <script src=""></script>
    <script src=""></script>
    <script src=""></script> -->

    <!-- Flot Charts JavaScript -->
    <!-- <script src=""></script>
    <script src=""></script>
    <script src=""></script>
    <script src=""></script>
    <script src=""></script>
    <script src=""></script>
    <script src=""></script> -->

    <!-- iCheck -->
    <script src="http://localhost/ems/vendor/iCheck/icheck.min.js"></script>

    <!-- switchery -->
    <script src="http://localhost/ems/vendor/switchery/switchery.js"></script>

    <!-- Toastr Notifications -->
    <script src="http://localhost/ems/vendor/toastr-master/build/toastr.min.js"></script>

    <!-- Slimscroll -->
    <!-- <script src=""></script> -->

    <!-- fromt-end Validation -->
    <script src="http://localhost/ems/vendor/jQuery-Form-Validator-master/form-validator/jquery.form-validator.min.js"></script>

    <!-- Full Calendar -->
    <script src="http://localhost/ems/vendor/fullcalendar-3.0.0/fullcalendar.js"></script>
    
    <!-- Custom Theme JavaScript -->
    <script src="http://localhost/ems/dist/js/sb-admin-2.js"></script>





<div class = "row">
   
</div>
<!-- /.row -->

<div class = "wrapper animated fadeInRight">
    <div class="row">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <!-- <div class = "col-md-5"> -->
                    <!-- <h4 class="panel-title">
                        <a data-toggle="collapse" href="#ent_collapse">Event Checklist Lookup <small class = "text-white"> Showing all checklists of selected event</small></a>
                    </h4> -->
                <!-- </div> -->
                <!-- <div class = "col-md-7"> -->
            
                <!-- </div> -->
            </div>
            <div id="ent_collapse" class="panel-collapse collapse in">
                <div class="panel-body">
                    <form class = "form-inline" id = "sup_form">

                       
							<!-- <div class = "hr-line-dashed"></div> -->

                        <div >
                            <table id = "checklist_table" class = "table table-bordered table-hover table-striped compact">
                                <thead>
                                    <tr>
                                        <th class = "text-center">#</th>
                                        <th class = "text-center">Checklist Item</th>
                                        <th class = "text-center">Deadline</th>
                                        <th class = "text-center">Completed On</th>
                                        <th class = "text-center">Incharge</th>
                                        <th class = "text-center">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <tr>
                                        <th class = "text-center">1</th>
                                        <th class = "text-center">1</th>
                                        <th class = "text-center">2</th>
                                        <th class = "text-center">asd</th>
                                        <th class = "text-center">dasdas</th>
                                        <th class = "text-center">adsadsad</th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
</div>
<!-- /.wrapper -->

ERROR - 2018-11-12 17:06:26 --> Severity: Warning --> require_once(tcpdf/tcpdf.php): failed to open stream: No such file or directory /var/www/html/ems/application/controllers/reports/Reports.php 50
ERROR - 2018-11-12 17:06:27 --> Severity: Compile Error --> require_once(): Failed opening required 'tcpdf/tcpdf.php' (include_path='.:/usr/share/php') /var/www/html/ems/application/controllers/reports/Reports.php 50
ERROR - 2018-11-12 17:07:34 --> Severity: error --> Exception: Call to undefined method Com\Tecnick\Pdf\Tcpdf::SetCreator() /var/www/html/ems/application/controllers/reports/Reports.php 53
ERROR - 2018-11-12 17:07:51 --> Severity: error --> Exception: Call to undefined method Com\Tecnick\Pdf\Tcpdf::SetTitle() /var/www/html/ems/application/controllers/reports/Reports.php 53
ERROR - 2018-11-12 17:08:23 --> Severity: Notice --> Undefined variable: pdf /var/www/html/ems/application/controllers/reports/Reports.php 53
ERROR - 2018-11-12 17:08:23 --> Severity: Notice --> Trying to get property of non-object /var/www/html/ems/application/controllers/reports/Reports.php 53
ERROR - 2018-11-12 17:08:23 --> Severity: error --> Exception: Call to a member function add() on null /var/www/html/ems/application/controllers/reports/Reports.php 53
ERROR - 2018-11-12 17:08:44 --> Severity: Notice --> Undefined property: Com\Tecnick\Pdf\Tcpdf::$page /var/www/html/ems/application/controllers/reports/Reports.php 53
ERROR - 2018-11-12 17:08:44 --> Severity: error --> Exception: Call to a member function add() on null /var/www/html/ems/application/controllers/reports/Reports.php 53
ERROR - 2018-11-12 17:11:16 --> Severity: Notice --> Use of undefined constant PDF_PAGE_ORIENTATION - assumed 'PDF_PAGE_ORIENTATION' /var/www/html/ems/application/controllers/reports/Reports.php 51
ERROR - 2018-11-12 17:11:16 --> Severity: Notice --> Use of undefined constant PDF_UNIT - assumed 'PDF_UNIT' /var/www/html/ems/application/controllers/reports/Reports.php 51
ERROR - 2018-11-12 17:11:16 --> Severity: Notice --> Use of undefined constant PDF_PAGE_FORMAT - assumed 'PDF_PAGE_FORMAT' /var/www/html/ems/application/controllers/reports/Reports.php 51
ERROR - 2018-11-12 17:11:16 --> Severity: error --> Exception: Call to undefined method Com\Tecnick\Pdf\Tcpdf::AddPage() /var/www/html/ems/application/controllers/reports/Reports.php 53
ERROR - 2018-11-12 17:11:51 --> Severity: error --> Exception: Call to undefined method Com\Tecnick\Pdf\Tcpdf::AddPage() /var/www/html/ems/application/controllers/reports/Reports.php 53
ERROR - 2018-11-12 17:13:35 --> Severity: Warning --> require_once(tcpdf_include.php): failed to open stream: No such file or directory /var/www/html/ems/application/controllers/reports/Reports.php 49
ERROR - 2018-11-12 17:13:35 --> Severity: Compile Error --> require_once(): Failed opening required 'tcpdf_include.php' (include_path='.:/usr/share/php') /var/www/html/ems/application/controllers/reports/Reports.php 49
ERROR - 2018-11-12 17:13:42 --> Severity: Warning --> require_once(tcpdf_include.php): failed to open stream: No such file or directory /var/www/html/ems/application/controllers/reports/Reports.php 49
ERROR - 2018-11-12 17:13:42 --> Severity: Compile Error --> require_once(): Failed opening required 'tcpdf_include.php' (include_path='.:/usr/share/php') /var/www/html/ems/application/controllers/reports/Reports.php 49
ERROR - 2018-11-12 17:16:23 --> Severity: Warning --> require(/var/www/html/ems/application/controllers/reports/vendor/autoload.php): failed to open stream: No such file or directory /var/www/html/ems/application/controllers/reports/Reports.php 74
ERROR - 2018-11-12 17:16:23 --> Severity: Compile Error --> require(): Failed opening required '/var/www/html/ems/application/controllers/reports/vendor/autoload.php' (include_path='.:/usr/share/php') /var/www/html/ems/application/controllers/reports/Reports.php 74
ERROR - 2018-11-12 17:16:26 --> Severity: Warning --> require(/var/www/html/ems/application/controllers/reports/vendor/autoload.php): failed to open stream: No such file or directory /var/www/html/ems/application/controllers/reports/Reports.php 74
ERROR - 2018-11-12 17:16:26 --> Severity: Compile Error --> require(): Failed opening required '/var/www/html/ems/application/controllers/reports/vendor/autoload.php' (include_path='.:/usr/share/php') /var/www/html/ems/application/controllers/reports/Reports.php 74
ERROR - 2018-11-12 17:16:36 --> Severity: Warning --> require(/var/www/html/ems/application/controllers/reports/vendor/autoload.php): failed to open stream: No such file or directory /var/www/html/ems/application/controllers/reports/Reports.php 74
ERROR - 2018-11-12 17:16:36 --> Severity: Compile Error --> require(): Failed opening required '/var/www/html/ems/application/controllers/reports/vendor/autoload.php' (include_path='.:/usr/share/php') /var/www/html/ems/application/controllers/reports/Reports.php 74
ERROR - 2018-11-12 17:16:40 --> Severity: Warning --> require(/var/www/html/ems/application/controllers/reports/vendor/autoload.php): failed to open stream: No such file or directory /var/www/html/ems/application/controllers/reports/Reports.php 74
ERROR - 2018-11-12 17:16:40 --> Severity: Compile Error --> require(): Failed opening required '/var/www/html/ems/application/controllers/reports/vendor/autoload.php' (include_path='.:/usr/share/php') /var/www/html/ems/application/controllers/reports/Reports.php 74
ERROR - 2018-11-12 17:17:03 --> Severity: error --> Exception: Class 'TCPDF' not found /var/www/html/ems/application/controllers/reports/Reports.php 75
ERROR - 2018-11-12 17:22:51 --> Severity: Notice --> Undefined index: rows /var/www/html/ems/vendor/tecnickcom/tcpdf/tcpdf.php 16923
ERROR - 2018-11-12 17:22:51 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given /var/www/html/ems/vendor/tecnickcom/tcpdf/tcpdf.php 16925
ERROR - 2018-11-12 17:22:51 --> Severity: Notice --> Undefined variable: cellspacingx /var/www/html/ems/vendor/tecnickcom/tcpdf/tcpdf.php 18121
ERROR - 2018-11-12 17:22:51 --> Severity: Notice --> Undefined variable: cellspacing /var/www/html/ems/vendor/tecnickcom/tcpdf/tcpdf.php 18188
ERROR - 2018-11-12 17:22:51 --> Severity: Notice --> Undefined variable: cellspacing /var/www/html/ems/vendor/tecnickcom/tcpdf/tcpdf.php 18214
ERROR - 2018-11-12 17:22:51 --> Severity: Notice --> Undefined variable: cellspacingx /var/www/html/ems/vendor/tecnickcom/tcpdf/tcpdf.php 18269
ERROR - 2018-11-12 17:23:28 --> Severity: Notice --> Undefined index: rows /var/www/html/ems/vendor/tecnickcom/tcpdf/tcpdf.php 16923
ERROR - 2018-11-12 17:23:28 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given /var/www/html/ems/vendor/tecnickcom/tcpdf/tcpdf.php 16925
ERROR - 2018-11-12 17:23:28 --> Severity: Notice --> Undefined variable: cellspacingx /var/www/html/ems/vendor/tecnickcom/tcpdf/tcpdf.php 18121
ERROR - 2018-11-12 17:23:28 --> Severity: Notice --> Undefined variable: cellspacing /var/www/html/ems/vendor/tecnickcom/tcpdf/tcpdf.php 18188
ERROR - 2018-11-12 17:23:28 --> Severity: Notice --> Undefined variable: cellspacing /var/www/html/ems/vendor/tecnickcom/tcpdf/tcpdf.php 18214
ERROR - 2018-11-12 17:23:28 --> Severity: Notice --> Undefined variable: cellspacingx /var/www/html/ems/vendor/tecnickcom/tcpdf/tcpdf.php 18269
ERROR - 2018-11-12 17:25:04 --> Severity: Notice --> Undefined variable: html /var/www/html/ems/application/controllers/reports/Reports.php 92
