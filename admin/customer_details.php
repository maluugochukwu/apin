<?php
include_once("libs/dbfunctions.php");
//var_dump($_SESSION);
$id = $_REQUEST['id'];
$sql = "SELECT * FROM customers WHERE email = '$id' LIMIT 1";
$dbobject = new dbobject();
$customer = $dbobject->db_query($sql);
?>
  <style>
    
    </style>
   <div class="card">
   <div class="modal-header">
        <h4 class="modal-title" style="font-weight:bold">Customer List</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
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
                    <table id="page_listyuee" class="table table-striped" style="width:100%" >
                        <thead>
                            <tr role="row">
                                
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Address</th>
                                <th>Phone</th>
                                <th>Alternate Phone </th>
                                <th>Email</th>
                                <th>Bank Name</th>
                                <th>Account Number</th>
                                <th>Account Name</th>
<!--                                <th>Action</th>-->
                                
                            </tr>
                        </thead>
                        <tbody>
                            <th><?php echo $customer[0]['first_name'] ?></th>
                                <th><?php echo $customer[0]['last_name'] ?></th>
                                <th><?php echo $customer[0]['address'] ?></th>
                                <th><?php echo $customer[0]['phone'] ?></th>
                                <th><?php echo $customer[0]['phone_2'] ?></th>
                                <th><?php echo $customer[0]['email'] ?></th>
                                <th><?php echo $dbobject->getitemlabel('banks','bank_code',$customer[0]['bank_name'],'bank_name'); ?></th>
                                <th><?php echo $customer[0]['account_no'] ?></th>
                                <th><?php echo $customer[0]['account_name'] ?></th>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!--<script src="../js/sweet_alerts.js"></script>-->
<!--<script src="../js/jquery.blockUI.js"></script>-->


