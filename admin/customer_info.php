<?php
include_once("libs/dbfunctions.php");
//var_dump($_SESSION);
?>
  <style>
    
    </style>
   <div class="card">
    <div class="card-header">
        <h5 class="card-title">Customer List</h5>
        <h6 class="card-subtitle text-muted">The report contains Customers that have booked a dress in the system.</h6>
    </div>
    <div class="card-body">
     
      
        <div id="datatables-basic_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
            <div class="row">
                <div class="col-sm-3">
                    <label for=""></label>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 table-responsive">
                    <table id="page_list" class="table table-striped" style="width:100%" >
                        <thead>
                            <tr role="row">
                                <th>S/N</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Address</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Bank Name</th>
                                <th>Account Number</th>
                                <th>Account Name</th>
<!--                                <th>Action</th>-->
                                
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
  var op = "Customer.customerList";
  $(document).ready(function() {
    table = $("#page_list").DataTable({
      processing: true,
      columnDefs: [{
            orderable: false,
            targets: 0
          },
         { width: "3100", targets: "3" }
      ],
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
//          d.start_date = $("#start_date").val();
//          d.end_date = $("#end_date").val();
        }
      }
    });
  });

  function do_filter() {
    table.draw();
  }
    
    function trigUser(user,status)
    {
        var r_status = (status == 1)?"Unlock this user":"Lock this user";
        var cnf = confirm("Are you sure you want to "+r_status+" this user ?");
        if(cnf)
           {
                $.blockUI();
               $.post('utilities.php',{op:'Users.changeUserStatus',current_status:status,username:user},function(resp)
               {
                   $.unblockUI();
                   if(resp.response_code == 0)
                       {
//                           alert(resp.response_message);
                          getpage('user_list.php','page'); 
                       }
                   
               },'json')
           }
    }
    function resetpassword(user)
    {
        var tts = confirm("Are you sure you want to perform this action");
        if(tts)
            {
                $.blockUI();
                $.post("utilities.php",{op:"Users.resetPassword",username:user},function(rr){
                    $.unblockUI();
                    alert(rr.response_message+"\nPassword is: "+rr.data.password);
                    getpage('user_list.php','page');
                },'json');
            }
    }
    function sackUser(username_1,status_1)
    {
        let tt = confirm("Are you sure you want to perform this action");
        if(tt)
            {
                $.post("utilities.php",{op:"Users.sackUser",username:username_1,status:status_1},function(rr){
                    alert(rr.response_message);
                    getpage('user_list.php','page');
                },'json');
            }
    }
    function getModal(url,div)
    {
        $('#'+div).html("<h2>Loading....</h2>");
//        $('#'+div).block({ message: null });
        $.post(url,{},function(re){
            $('#'+div).html(re);
        })
    }
</script>

