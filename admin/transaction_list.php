<?php
include_once("libs/dbfunctions.php");
$dbobject = new dbobject();
$sql2 = "SELECT * FROM branch";
$branches = $dbobject->db_query($sql2);

$sql = "SELECT * FROM dress ";
    $dress = $dbobject->db_query($sql);
?>
  <style>
    fieldset 
    { 
    display: block;
    margin-left: 2px;
    margin-right: 2px;
    padding-top: 0.35em;
    padding-bottom: 0.625em;
    padding-left: 0.75em;
    padding-right: 0.75em;
    border: 1px solid #ccc;
    }
    
    legend
    {
        font-size: 14px;
        padding: 5px;
        font-weight: bold;
        padding:3px; padding-right:30px;padding-left:15px; width:auto; border:1px solid #eee; color:green; font-size:14px
    }
   
</style>
   <link rel="stylesheet" href="codebase/dhtmlxcalendar.css" />
<script src="codebase/dhtmlxcalendar.js"></script>
<script>
    doOnLoad();
    var myCalendar;
function doOnLoad()
{
    myCalendar = new dhtmlXCalendarObject(["start_date"]);
    myCalendar2 = new dhtmlXCalendarObject(["end_date"]);
    myCalendar.setDate("<?php echo date("Y-m-d"); ?>");
//	myCalendar.setInsensitiveRange(null,"<?php //echo date("Y-m-d",strtotime("-1 days")); ?>");
	
    myCalendar.hideTime();
    var myEvent = myCalendar.attachEvent("onClick", function(rr){
            console.log(rr);
                myCalendar2.setInsensitiveRange(null,$("#start_date").val());
//                myCalendar2.setDate($("#start_date").val());
                $("#end_date").val($("#start_date").val());
                myCalendar2.setDate($("#start_date").val());
                $("#select_dress").empty()
                $("#select_dress").html("<option>Loading..</option>")
                $.post("utilities.php",{op:"Dress.getAvailableDress",pickup_date:$("#start_date").val()},function(jj){
                    $("#select_dress").empty()
                    $("#select_dress").html(jj)
                })
        });
}
</script>

   <div class="card">
    <div class="card-header">
        <h5 class="card-title"><i data-feather="sliders"></i>Booking List</h5>
        <h6 class="card-subtitle text-muted">The report contains bookings that has been made.</h6>
    </div>
    <div class="card-body">
        <fieldset>
           <legend><i class="fa fa-filter"></i> filter result</legend>
       
            <div class="row">
                <div class="col-sm-2">
                    <label for="status">Status</label>
                    <select name="" id="status" class="form-control">
                        <option value="">All status</option>
                        <option value="1">Returned</option>
                        <option value="0">Not Returned</option>
                        <option value="2">Overdue</option>
                    </select>
                </div>
                <div class="col-sm-2">
                    <label for="branch">Branch</label>
                    <select name="" id="branch" class="form-control">
                      <option value="">All Branches</option>
                       <?php
                        foreach($branches as $row)
                        {
                        ?>
                            <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="col-sm-2">
                    <label for="dress">Dress Name</label>
                    <select name="" id="dress" class="form-control">
                       <option value="">All Dress</option>
                        <?php
                        foreach($dress as $row)
                        {
                            $dress_id = (isset($_REQUEST['dress_id']))?isset($_REQUEST['dress_id']):$row['id'];
                            if(isset($_REQUEST['dress_id']))
                            {
                                $selected = ($_REQUEST['dress_id'] == $row['id'])?"selected":"";
                            }else{
                                $selected = "";
                            }
                        ?>
                            <option <?php echo $selected; ?> value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="col-sm-2">
                    <label for="dress">Booking ID</label>
                    <input type="text" name="" id="booking_id" class="form-control">
                        
                </div>
                <div class="col-sm-2">
                    <label for="dress">Collection State</label>
                    <select name="is_collected" id="is_collected" class="form-control">
                        <option value="">All</option>
                        <option value="1">Collected</option>
                        <option value="0">Not Collected</option>
                    </select>
                        
                </div>
                <div class="col-sm-2">
                <label for="">&nbsp;</label>
                <button class="btn btn-block btn-primary" onclick="do_filter()">Search</button>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-6">
                    <label for="book_date">Book Date</label>
                    <input type="text" class="form-control" autocomplete="off" id="start_date"  style="display:inline-flex; width:auto"> <span style="display:inline-flex"> ---- </span> <input type="text" id="end_date" autocomplete="off" class="form-control" style="display:inline-flex; width:auto">
                </div>
                <div class="col-sm-6">
                    <label for="payment_mode">Mode of Payment</label>
                    <select id="payment_mode" class="form-control" name="payment_mode">
                        <option value="">ALL</option>
                        <option value="TRANSFER">TRANSFER</option>
                        <option value="CARD">CARD</option>
                        <option value="CASH">CASH</option>
                    </select>
                </div>
            </div>
        </fieldset>
        <br/>
     
<!--
       <div class="row" style="margin-bottom:20px">
             
             <div class="col-sm-2">
                 <label for="search">&nbsp;</label>
                 <button onclick="do_filter()" id="search" class="btn btn-info btn-block">Search</button>
             </div>
         </div>
-->
        <div id="datatables-basic_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
            <div class="row">
                <div class="col-sm-12 table-responsive">
                    <table id="page_list" class="table table-striped " >
                        <thead>
                            <tr role="row">
                                <th colspan="1">S/N</th>
                                <th style="min-width: 100px">Booking ID</th>
                                <th style="min-width: 100px">Total amount</th>
                                <th style="min-width: 100px">Payer Email</th>
                                <th style="min-width: 100px">Dress Name</th>
                                <th style="min-width: 100px">Dress Price</th>
                                <th style="min-width: 100px">Caution Fee</th>
                                <th>Status</th>
                                <th style="min-width: 100px">Branch</th>
                                <th style="min-width: 100px">Pickup date</th>
                                <th style="min-width: 100px">Return date</th>
                                <th style="min-width: 100px">Additional Request</th>
                                
                                <th style="min-width: 100px">Posted By</th>
                                <th style="min-width: 100px">Mode of Payment</th>
                                <th>Created</th>
                                <th style="min-width: 100px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!--<script src="../js/sweet_alerts.js"></script>-->
<!--<script src="../js/jquery.blockUI.js"></script>-->
<script>
  var table;
  var editor;
  var op = "Transaction.transactionList";
  $(document).ready(function() {
    table = $("#page_list").DataTable({
      processing: true,
      columnDefs: [{ width: "300px", targets: 4 }],
      serverSide: true,
      paging: true,
      oLanguage: {
        sEmptyTable: "No record was found, please try another query"
      },

      ajax: {
        url: "utilities.php",
        type: "POST",
        data: function(d, l) {
          d.op = op;
          d.li = Math.random();
//          d.trans_id    = "<?php //echo $_REQUEST['id']; ?>";
          d.status  = $("#status").val();
          d.branch   = $("#branch").val();
          d.dress = $("#dress").val();
          d.booking_id = $("#booking_id").val();
          d.end_date = $("#end_date").val();
          d.start_date = $("#start_date").val();
          d.is_collected = $("#is_collected").val();
          d.payment_mode = $("#payment_mode").val();
        }
      }
    });
  });

  function do_filter() {
    table.draw();
  }
    function hide_div(el)
    {
        if(el.id == "branch_filter")
        {
            $("#churches_div").show();
            $("#region_div").hide();
            $("#filter").val(el.value);
        }else{
            $("#churches_div").hide();
            $("#region_div").show();
            $("#filter").val(el.value);
        }
    }
    
    function getModal(url,div)
    {
//        alert('dfd');
        $('#'+div).html("<h2>Loading....</h2>");
//        $('#'+div).block({ message: null });
        $.post(url,{},function(re){
            $('#'+div).html(re);
        })
    }
    function fetchLga(el)
    {
        $("#lga-fd").html("<option>Loading Lga</option>");
        $.post("utilities.php",{op:'Church.getLga',state:el},function(re){
//            $("#lga-fd").empty();
            console.log(re);
            $("#lga-fd").html(re.state);
            $("#church_id").html(re.church);
            
        },'json');
    }
    function printer(id)
    {
        window.open("booking_receipt.php?g="+id, "_blank", "toolbar=no,scrollbars=yes,resizable=yes,top=300,left=500,width=800,height=500,titlebar=no")
    }
    function churchByState(el)
    {
        
        $.post("utilities.php",{op:'Church.churchByState',state:el},function(re){
//            $("#lga-fd").empty();
            console.log(re);
            $("#churches").empty();
            $("#churches").html(re);
            
        });
    }
</script>