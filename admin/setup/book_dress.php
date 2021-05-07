<?php
include_once("../libs/dbfunctions.php");
$dbobject = new dbobject();
$sql2 = "SELECT * FROM branch";
$branches = $dbobject->db_query($sql2);

$sql3 = "SELECT * FROM package ";
$package = $dbobject->db_query($sql3);

if(isset($_GET['op']))
{
    $sql = "SELECT * FROM dress WHERE id = '$_REQUEST[id]'";
    $dress = $dbobject->db_query($sql);
    $operation = "edit";
}
else
{
    $operation ="new";
}
?>
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
	myCalendar.setInsensitiveRange(null,"<?php echo date("Y-m-d",strtotime("-1 days")); ?>");
	
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
<style>
    label{
        color:#000;
        font-weight: 500
    }
</style>
<div class="modal-header">
    <h4 class="modal-title" style="font-weight:bold">Book Dress</h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div>
<div class="modal-body m-3 ">
   
    <form action="" id="settings_forms" onsubmit="return false">
        <input type="hidden" name="op" value="Dress.bookDress">
       <input type="hidden" name="operation" value="<?php echo $operation; ?>">
       <fieldset>
           <legend style="padding:3px; padding-right:30px;padding-left:15px; width:auto; border:1px solid #eee; color:green; font-size:14px">Customer Details</legend>
           <div class="row">
               <div class="col-sm-4">
                   <div class="form-group">
                        <label for="">First Name</label>
                        <input type="text" value="<?php echo $dress[0]['name']; ?>"  class="form-control" name="first_name" />
                    </div>
               </div>
               <div class="col-sm-4">
                    <div class="form-group">
                         <label for="">Last Name</label>
                        <input type="text" value="<?php echo $dress[0]['last_name']; ?>"   class="form-control" name="last_name" />
                    </div>
               </div>
               <div class="col-sm-4">
                    <div class="form-group">
                         <label for="">Phone</label>
                        <input type="text" value="<?php echo $dress[0]['phone']; ?>"   class="form-control" name="phone" />
                    </div>
               </div>
           </div>
           <div class="row">
               
               <div class="col-sm-4">
                    <div class="form-group">
                         <label for="">Email</label>
                        <input type="text" value="<?php echo $dress[0]['price']; ?>"   class="form-control" name="source_acct" />
                    </div>
               </div>
               
               <div class="col-sm-4">
                   <div class="form-group">
                        <label for="">Bank Name</label>
                        <select name="bank_name" id="bank_name" class="form-control">
                        <?php
                            $sql = "SELECT * FROM banks WHERE bank_type='commercial' order by bank_name asc";
                            $result = $dbobject->db_query($sql);
                            foreach($result as $row)
                            {
//                                $selected = ($merchant[0]['bank_code'] == $row['code'])?"selected":"";
                                echo "<option $selected value='".$row['bank_code']."'>".$row['bank_name']."</option>";
                            }
                        ?>
                        </select>
                    </div>
               </div>
               <div class="col-sm-4">
                    <div class="form-group">
                         <label for="">Account Number</label>
                        <input type="number" min="0" id="account_no" name="account_no" onkeyup="fetchAccName(this.value)" class="form-control" value="<?php echo $merchant[0]['account_no']; ?>" placeholder="" />
                    </div>
                    <input type="hidden" id="account_name" name="account_name" />
                    <small id="acc_name" style="font-weight:bold"><?php echo $merchant[0]['account_name']; ?></small>
               </div>
               
           </div>
            <div class="row">
               <div class="col-sm-6">
                    <div class="form-group">
                         <label for="">Address</label>
                         <textarea name="address" class="form-control" id="" cols="30" rows="3"><?php echo $dress[0]['address']; ?></textarea>
                        
                    </div>
               </div>
               <div class="col-sm-6">
                    <div class="form-group">
                         <label for="">Additional Request</label>
                         <textarea name="additional_request" class="form-control" id="" cols="30" rows="3"><?php echo $dress[0]['additional_request']; ?></textarea>
                        
                    </div>
               </div>
           </div>
           <div class="row">
               <div class="col-sm-6">
                   <label for="phone_2">Phone 2</label><input type="text" name="phone_2" class="form-control">
               </div>
               <div class="col-sm-6">
                   <label for="payment_mode">Mode of payment</label>
                    <select id="payment_mode" class="form-control" name="payment_mode">
                        <option value="TRANSFER">TRANSFER</option>
                        <option value="CARD">CARD</option>
                        <option value="CASH">CASH</option>
                    </select>
               </div>
           </div>
       </fieldset>
       <fieldset>
           <legend style="padding:3px; padding-right:30px;padding-left:15px; width:auto; border:1px solid #eee; color:green; font-size:14px">Dress Information</legend>
           <div class="row">
               <div class="col-sm-4">
                   <div class="form-group">
                        <label for="">Pick up Date</label>
                        <input type="text" name="pickup_date"  class="form-control" id="start_date" autocomplete="off" />
                    </div>
               </div>
               
               <div class="col-sm-4">
                   <label for="">Select Dress</label>
                   <select name="dress_id" id="select_dress" onchange="display_info(this.value)" class="form-control">
                           
                   </select>
               </div>
               <div class="col-sm-4">
                    <div class="form-group">
                         <label for="">Return Date</label>
                        <input type="text" name="return_date" class="form-control" id="end_date" autocomplete="off" />
                    </div>
               </div>
           </div>
           <div class="row">
               
               <?php
               if($_SESSION['role_id_sess'] == "002")
               {
               ?>
               
                <div class="col-sm-6">
                   <label for="branch_id">Dress Location</label>
                   <select name="branch_id" id="branch_id" class="form-control">
                       <option value="">:: SELECT A BRANCH ::</option>
                       <?php
                       foreach($branches as $row)
                       {
                           echo "<option value='".$row['id']."'>".$row['name']."</option>";
                       }
                       ?>
                   </select>
               </div>
               <?php
               }
               ?>
               <div class="col-sm-6">
                   <label for="discount"><input type="checkbox" name="discount" id="discount"> Apply discount?</label>
                   <input type="text" class="form-control" id="discount_price" name="discount_price" autocomplete="off" placeholder="Enter discounted price" style="display:none" />
               </div>
           </div>
          
           <br>
           <div id="summary_div" style="border:dashed 1px #000; padding:10px;display:none">
              <div class="row">
                  <div class="col-sm-12" align="center">
                      <h1 id="dress_name_title"></h1>
                  </div>
              </div>
               <div class="row" >
                  <div class="col-sm-6">
                      &#8358; <span id="dress_price"></span> + &#8358; <span id="dress_caution_price"></span>
                      <br/>
                      <h2 style="font-weight:bold">Total: &#8358; <span id="dress_total"></span></h2>
                  </div>
                  <div class="col-sm-6">
                      <div><b style="color:#000">Current Status:</b> <span class="badge" id="status_message"></span></div>
                      <div><b style="color:#000">Return Date:</b> <span id="dress_return_date"></span> </div> 
                  </div>
              </div>
              <h3>Bonus</h3>
              <ol id="bonus" ></ol>
           </div>
           
       </fieldset>
       
    
        <div class="server_message" style="font-weight:bold"></div>
        <br>
        <div class="row">
            <div class="col-sm-6">
                <button class="btn btn-success btn-block" id="save_facility" onclick="saveRecord()">Proceed</button>
            </div>
            <div class="col-sm-6">
                <button class="btn btn-danger btn-block" id="wer" onclick="javascript:$('#defaultModalPrimary').modal('hide')" >Cancel</button>
            </div>
        </div>
          
    </form>
</div>
<script src="js/sweet_alerts.js"></script>
<script src="js/jquery.uploadfile.min.js"></script>
        <link rel="stylesheet" href="css/uploadfile.css">
        <style>
            fieldset{
                display: block;
                margin-left: 2px;
                margin-right: 2px;
                padding-top: 0.35em;
                padding-bottom: 0.625em;
                padding-left: 0.75em;
                padding-right: 0.75em;
                border: 1px solid #ccc;
                
            }
        </style>
<script>
    $("#discount").click(()=>{
        if($("#discount").is(":checked"))
            {
                $("#discount_price").show();
            }
        else
            {
                $("#discount_price").hide();
            }
    })
    function display_info(val)
    {
        $("#summary_div").hide();
        $.post('utilities.php',{op:'Dress.getDress',dress_id:val},(rr)=>{
            console.log(rr);
//            var total = parseInt(rr.price,10) + parseInt(rr.caution_fee,10)
//            var total = 800.00 + 10.00
//            alert(parseInt(rr.price,10))
            $("#summary_div").slideDown();
            var readable_return_date = (rr.return_date != "")?new Date(rr.return_date).toDateString():"N/A";
            $("#dress_name_title").text(rr.name)
            $("#dress_price").text(rr.price)
            $("#dress_caution_price").text(rr.caution_fee)
            $("#dress_total").text(rr.total)
            $("#status_message").text(rr.status.message)
            $("#dress_return_date").text(readable_return_date);
            var mme = "";
            rr.packages.forEach((items)=>{
                console.log(items);
                mme = mme + "<li style=''>"+items+"<li>";
            })
            $("#bonus").html(rr.packages_formatted);
            if(rr.status.code == 1)
                {
                    $("#status_message").addClass("badge-danger");
                    $("#status_message").removeClass("badge-success");
                }else
                    {
                        $("#status_message").addClass("badge-success");
                    $("#status_message").removeClass("badge-danger");
                    }
            
        },'json')
    }
    function fetchAccName(acc_no)
    {
        if($("#bank_name").val() == "")
        {
           alert("Kindly select a bank");
           $("#account_no").val("");
        }else{
            if(acc_no.length == 10)
            {
                var account  = acc_no;
                var bnk_code = $("#bank_name").val();
                $("#acc_name").text("Verifying account number....");
                $("#account_name").val("");
                $.post("utilities.php",{op:"Dress.getAccountName",account_no:account,bank_code:bnk_code},function(res){
                    $("#acc_name").text(res);
                    $("#account_name").val(res);
                });
            }else{
                $("#acc_name").text("Account Number must be 10 digits");
            }
        }
        
    }
    
    function displayVal(v)
    {
        $("#showval").text(v);
    }
    
    var coverImg = $("#extraupload").uploadFile({
                    url:"utilities.php",
                    fileName:"upfile",
                    showPreview:true,
                    previewHeight: "100px",
                    previewWidth: "100px",
                    maxFileCount:1,
                    multiple:false,
                    allowedTypes:"jpg,png,jpeg",
                    maxFileSize:1000000,
                    autoSubmit:false,
                    returnType:"json",
                    onSubmit:function(files)
                    {
                        $.blockUI({message:"Saving Dress information. Kindly wait.."});
                    },
                    dynamicFormData: function()
                    {
                        
                        $("#save_facility").text("Loading......");
                        var dd = $("#settings_forms").serialize();
                        
                        return dd;
                    },
                    onSuccess:function(files,data,xhr,pd)
                    {
                        $.unblockUI();
                        console.log(data);
                         $("#save_facility").text("Save");
                               
                        if(data.response_code == 0)
                        {
                            $('.server_message').css('color','green');
                            $('.server_message').html(data.response_message);
                            $("#defaultModalPrimary").modal('hide');
                            getpage('dress_list.php','page');
                        }else
                        {
                            
                            $('.server_message').css('color','red');
                            $('.server_message').html(data.response_message);
                            coverImg.reset();
                            $('.ajax-file-upload-red').click();
                        }
//                        featureImg.startUpload();
                    }
                });
    
    function saveRecord()
    {
        var data  =  $("#settings_forms").serialize();
        $.post('utilities.php',data,function(rr){
            if(rr.response_code == 0)
                {
                    swal({
                        text:rr.response_message,
                        icon:"success"
                    }).then((rs)=>{
                        printer(rr.data.id);
//                        getpage('booking_receipt.php?id'+rr.data.id,'page');
                        $("#defaultModalPrimary").modal('hide');
                    })
                    
                }else{
                    swal({
                        text:rr.response_message,
                        icon:"error"
                    })
                }
        },'json')
    }
    function printer(id)
    {
        window.open("booking_receipt.php?g="+id, "_blank", "toolbar=no,scrollbars=yes,resizable=yes,top=300,left=500,width=800,height=500,titlebar=no")
    }
</script>
<style>
    .ajax-upload-dragdrop, .ajax-file-upload-filename, .ajax-file-upload-statusbar
    {
        width: auto !important;
    }
</style>