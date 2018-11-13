<div class = "wrapper animated fadeInRight">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    Reports <small> pdf of selected reports</small>
                    <a style = "cursor:pointer">
                        <i class="fa fa-cog pull-right" data-toggle="modal" data-target="#report_config_modal"></i>
                    </a>
                </h4>
            </div>
            
            <div class="panel-body">
                <div class = "row"> <!-- Report header -->
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4">
                        <h3 class = "text-center">Reports</h3>
                    </div>
                    <div class="col-md-4">
                        <dl class = "dl-horizontal">
                          <dt>User</dt>
                          <dd id = "user_holder" class="header_holders"><?php echo $this->session->userdata('username'); ?></dd>
                          <dt>Date</dt>
                          <dd id = "datetime_holder" class="header_holders"><?php echo date('Y-m-d'); ?></dd>  
                        </dl>
                    </div>
                </div>
                <div class = "row">
                    <div class = "col-md-12" id = "info_holder" style = "display:none"></div><br><br><br>

                    <div class = "col-md-12">

                        <div id = "event_count_tbl_div">

                            <table id = "event_count_table" class = "table table-bordered table-hover table-striped compact">
                                <thead>
                                    <tr>
                                        <th class = "text-center">#</th>
                                        <th class = "text-center">Report Name</th>
                                        <th class = "text-center">Action</th>
                                    </tr>
                                </thead>    
                                <tbody>
                                    <tr>
                                        <td class = "text-center">1</td>
                                        <td class = "text-center">Event Checklist</td>
                                        <td class = "text-center"><button class="btn" onclick="genEventCheckList()"><i class="fa fa-download"></i> Download pdf</button></td>
                                    </tr>                                
                                    <tr>
                                        <td class = "text-center">2</td>
                                        <td class = "text-center">Event Agenda</td>
                                        <td class = "text-center"><button class="btn"><i class="fa fa-download"></i> Download pdf</button></td>
                                    </tr>                                
                                </tbody>
                            </table>
                        </div>
                    </div>

                    
                </div>
            </div>
            </div>
        </div> 
    </div> <!-- Row -->
</div> <!-- Wrapper -->


<!-- Start of Modal-->
<div class="modal fade" id="report_config_modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Factory Report Configuration</h4>
                <small>Showing Options to configure current report.</small>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" id="modal_form">
                    <div class = "row">
                        <div class = "col-md-12">
                            <label class="col-md-2 control-label" for  = "ent_select">Event</label>
                            <div class = "col-md-8">
                                <select name = "ent_select" id = "ent_select" class = "form-control selectpicker" data-container = "body" data-live-search = "true" data-size = "5">
                                    <?php echo $ent_select; ?>
                                </select>
                            </div>
                        </div>
                    </div> <!-- end of row -->
                </form>     
            </div><!-- end of modal body -->
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick = "fetchData();">Filter</button>
                <button type="button" data-dismiss="modal" class="btn btn-default">Close</button>
            </div>
        </div>
    </div>
</div> <!-- End of modal -->

<link href="<?php echo base_url('vendor/novus/nv.d3.css'); ?>" rel = "stylesheet">  
<script src="<?php echo base_url('vendor/novus/d3.min.js');?>" type="text/javascript"></script>
<script src="<?php echo base_url('vendor/novus/nv.d3.js');?>" type="text/javascript"></script>
    

<script type="text/javascript">

var variance_table = null;

$(document).ready(function()
{
    $('.selectpicker').selectpicker();

    if($('#ent_select').selectpicker('val') == "")
    {
        $('#info_holder').show();
        $('#info_holder').html("<p class = 'text-center text-danger'>Please Select An Event By Clicking the Configuration Icon Above to Generate Report.</p>");
    }

    variance_table = $('#variance_table').dataTable(
    {
        'dom': '<"top">rt<"bottom"><"clear">',
        'bSort': false,
        'iDisplayLength' : -1,
        'responsive' : false,
        'autoWidth' : false,
        'sAjaxSource' : '<?php echo site_url("reports/event_summary_report/fetch_buget_info") ?>',
        'fnServerData' : function(sSource, aoData, fnCallback, oSettigns){
        $.ajax({
            "dataType" : 'json',
            "type" : 'POST',
            "url" : sSource,
            "data" : aoData,
            "success" : fnCallback
        })},
        'fnServerParams' : function(aoData)
        {
            aoData.push({'name' : 'ent_id', 'value' : $('#ent_select').selectpicker('val')});
        },
        'aoColumns' : [
            { 'mData' : 'ent_code'},
            { 'mData' : 'ini_budget', 'sClass' : 'text-right'},
            { 'mData' : 'act_budget', 'sClass' : 'text-right'},
            { 'mData' : 'var_plus', 'sClass' : 'text-right'},
            { 'mData' : 'var_minus', 'sClass' : 'text-right'}
        ]
    });
});

function fetchData()
{
    if($('#ent_select').selectpicker('val') != "")
    {
        $('#info_holder').hide();
        $('#info_holder').html("");

        fetchBasicInfo();
        fetchEventProgress();
        variance_table.api().ajax.reload();
        loadProgressRate();
        loadActivityBudget();
    }
    else
    {
        $('#info_holder').show();
        $('#info_holder').html("<p class = 'text-center text-danger'>Please Select An Event By Clicking the Configuration Icon Above to Generate Report.</p>");
        $('.holders').html("....");
        $('#event_progress_holder').find('div[data-cap="20"]').attr('style','width:0%; min-width:2em');
        $('#event_progress_holder').find('div[data-cap="40"]').attr('style','width: 0%');
        $('#event_progress_holder').find('div[data-cap="60"]').attr('style','width: 0%');
        $('#event_progress_holder').find('div[data-cap="80"]').attr('style','width: 0%');
        $('#event_progress_holder').find('div[data-cap="100"]').attr('style','width: 0%');
        $('#event_progress_holder').find('div[data-cap="20"]').find('span').html('0%');
        $('#variance_table_body').empty();
        d3.selectAll("svg > *").remove();
    }

    $('#report_config_modal').modal('hide');
}



</script>