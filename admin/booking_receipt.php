<?php
include_once("libs/dbfunctions.php");
$dbobject = new dbobject();
$gt          = $_REQUEST['g'];
//$result      = $dbobject->getrecordsetArr("transaction_table","transaction_id",$gt);
$sql         = "SELECT * FROM transaction_table WHERE transaction_id = '$gt' LIMIT 1";
$result = $dbobject->db_query($sql);

$customer_email = $result[0]['source_acct'];
$dress_id = $result[0]['dress_id'];


$sql         = "SELECT * FROM customers WHERE email = '$customer_email' LIMIT 1";
$customer = $dbobject->db_query($sql);

$sql         = "SELECT * FROM dress WHERE id = '$dress_id' LIMIT 1";
$dress = $dbobject->db_query($sql);

$package_id = $dress[0]['package_id'];

$sql         = "SELECT * FROM package WHERE id = '$package_id' LIMIT 1";
$package = $dbobject->db_query($sql);
?>
<link rel="stylesheet" href="css/classic.css">
  <style>
      .bar{
          display: flex;
          justify-content: center;
          background: #fff;
      }
      .bold{
          font-weight: bold;
          color: black
      }
</style>
   <div class="bar" >
       <div style="width:600px;  ">
            <div id="printer">
           <table class="table table-striped dataTable no-footer table-bordered">
              <thead>
                  <tr>
<!--                      <th></th>-->
                      <th colspan="2"><h4 align="center">Rent a Dress Receipt</h4><div align="center"><small><?php echo $gt; ?></small></div></th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td class="bold">Booking ID</td>
                      <td><?php echo $gt; ?></td>
                  </tr>
                  <tr>
                      <td class="bold">Full Name</td>
                      <td><?php echo $customer[0]['first_name']." ".$customer[0]['last_name']; ?></td>
                  </tr>
<!--
                  <tr>
                      <td class="bold">Contact</td>
                      <td><?php //echo $gt; ?></td>
                  </tr>
-->
                  <tr>
                      <td class="bold">Dress Name</td>
                      <td><?php echo $dress[0]['name']; ?></td>
                  </tr>
                  <tr>
                      <td class="bold">Caution Fee</td>
                      <td>&#8358; <?php echo number_format($result[0]['caution_fee']); ?> <small>(refundable)</small></td>
                  </tr>
                  <tr>
                      <td class="bold">Dress Price</td>
                      <td>&#8358; <?php echo ($result[0]['is_discounted'] == "1")?number_format($result[0]['discount_price'])."<small> (discounted price)</small>":number_format($result[0]['dress_amount']); ?></td>
                  </tr>
                  <tr>
                      <td class="bold">Bonus Item(s)</td>
                      <td><?php echo implode(',',json_decode($package[0]['items'])); ?></td>
                  </tr>
                  <tr>
                      <td class="bold">Booking Date</td>
                      <td><?php echo date("jS F, Y",strtotime($result[0]['created'])); ?></td>
                  </tr>
                  <tr>
                      <td class="bold">Pick Up & Return Date</td>
                      <td><?php echo "<b>".date("jS F, Y",strtotime($result[0]['pickup_date']))."</b>"; ?> -- <?php echo "<b>".date("jS F, Y",strtotime($result[0]['return_date']))."</b>"; ?></td>
                  </tr>
                  <?php
                    if($result[0]['additional_request'] != "")
                    {
                  ?>
                        <tr>
                            <td class="bold">Additional Request</td>
                            <td><?php echo $result[0]['additional_request']; ?></td>
                        </tr>
                  <?php
                    }
                  ?>
                  <?php
//                  if($result[0]['return_date'])
                  ?>
              </tbody>
               
           </table>
           <h1>Total: &#8358; <?php echo number_format($result[0]['transaction_amount']); ?></h1>
            </div>
            <button onclick="printDiv('printer')"><i class="fa fa-print"></i> Print</button>
           <?php
            if($result[0]['is_collected'] == "0")
            {
            ?>
                    <div id="dispatch_btn">
                        <br/>
                        <button class="btn btn-success btn-block"  onclick="show_div()">DELIVER DRESS</button>
                    </div>
            <?php
            }
            ?>
            <div id="dispatch_div" style="display:none">
                <br/>
                <h2 align="center">DRESS COLLECTION</h2>
                <label for="">Collected by:</label>
                <input type="text" id="collected_by" value="<?php echo $customer[0]['first_name']." ".$customer[0]['last_name']; ?>" class="form-control" />
                <br/>
                <button class="btn btn-block btn-info" onclick="collect_dress()">SUBMIT</button>
                <button class="btn btn-block btn-danger" onclick="show_div()">CANCEL</button>
            </div>
       </div>
   </div>
   
   <script src="js/app.js"></script>
   <script src="js/main.js"></script>
<script src="js/sweet_alerts.js"></script>
<script src="js/jquery.blockUI.js"></script>


<script>
    function show_div()
    {
        $("#dispatch_div").toggle();
        $("#dispatch_btn").toggle();
    }
    
  var table;
  var editor;
  var op = "Menu.menuList";
  $(document).ready(function() {
    table = $("#page_list").DataTable({
      processing: true,
      columnDefs: [{
        orderable: false,
        targets: 0
      }],
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
    
    function deleteMenu(id)
    {
        let cnf = confirm("Are you sure you want to delete menu?");
        if(cnf == true)
            {
                $.blockUI();
                $.post("utilities.php",{op:"Menu.deleteMenu",menu_id:id},function(re){
                    $.unblockUI();
                    alert(re.response_message);
                    getpage('menu_list.php',"page");
                },'json')
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
    function collect_dress()
    {
        var conf = confirm('Are you sure?');
        if(conf)
        {
            $.blockUI();
            var t_id = "<?php echo $gt; ?>";
            $.post("utilities.php",{op:'Transaction.collectDress',collected_by:$("#collected_by").val(),trans_id:t_id},function(res)
            {
                $.unblockUI();
                swal({
                    icon:'success',
                    text:'Done'
                })
            })
        }
        
    }
</script>