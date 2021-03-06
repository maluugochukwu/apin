<?php
include_once("../libs/dbfunctions.php");
$dbobject = new dbobject();


$sql3 = "SELECT * FROM package";
$package = $dbobject->db_query($sql3);

$sql = "SELECT DISTINCT State,state_code FROM lga";
$state_query = $dbobject->db_query($sql);

if(isset($_GET['op']))
{
    $sql = "SELECT * FROM branch WHERE id = '$_REQUEST[id]'";
    $branch = $dbobject->db_query($sql);
    $operation = "edit";
}
else
{
    $operation ="new";
}
?>
<div class="modal-header">
    <h4 class="modal-title" style="font-weight:bold"><?php echo ($operation == "new")?"Add a Branch":"Edit ".$branch[0]['name']; ?> </h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div>
<div class="modal-body m-3 ">
   
    <form action="" id="settings_forms" onsubmit="return false">
        <input type="hidden" name="op" value="Branch.saveBranch">
       <input type="hidden" name="operation" value="<?php echo $operation; ?>">
       <input type="hidden" name="id" value="<?php echo $_REQUEST['id']; ?>">
       <div class="row">
           <div class="col-sm-6">
               <div class="form-group">
                    <label for="">branch Name</label>
                    <input type="text" value="<?php echo $branch[0]['name']; ?>"  class="form-control" name="name" />
                </div>
           </div>
           <div class="col-sm-6">
                <div class="form-group">
                     <label for="">Location</label>
                    <select name="state_id" id="" class="form-control">
                        <?php
                            foreach($state_query as $row)
                            {
                                $selected = ($branch[0]['state_id'] == $row['state_code'])?"selected":"";
                                echo "<option $selected value='".$row['state_code']."'>$row[State]</option>";
                            }
                        ?>
                    </select>
                </div>
           </div>
       </div>
       <div class="row">
           <div class="col-sm-6">
               <div class="form-group">
                    <label for="">Address</label>
                    <input type="text" value="<?php echo $branch[0]['address']; ?>"  class="form-control" name="address" />
                </div>
           </div>
           <div class="col-sm-6"></div>
       </div>
       
    
        <div class="server_message" style="font-weight:bold;color:red"></div>
      <a class="btn btn-success" id="save_facility" onclick="saveRecord()">SAVE</a>
    </form>
</div>

<link rel="stylesheet" href="css/bootstrap-tagsinput.css" />
<script src="js/bootstrap-tagsinput.js"></script>
<script src="js/jquery.uploadfile.min.js"></script>
<script src="js/enjoyhint.js"></script>
<link rel="stylesheet" href="css/uploadfile.css">
<script>
//    var enjoyhint_script_steps1 = [
//        {
//            'click #modal_div' : 'Fill the form correctly and click the save button',
//        }
//    ];
     
    runTour(menuStates.branchSetup);
    
    function displayVal(v)
    {
        $("#showval").text(v);
    }
    
    
    
    function saveRecord()
    {
        

        $("#defaultModalPrimary").block();
        var wer = $("#settings_forms").serialize();
        console.log(wer)
//        return true;
        $.post('utilities.php',wer,function(rr){
             $("#defaultModalPrimary").unblock();
            
             if(rr.response_code == 0)
                {
                    menuStates.branch.isSaved = 1;
                    swal({
                        text:rr.response_message,
                        icon:"success"
                    }).then((rs)=>{
                        getpage('branch_list.php','page');
                        $("#defaultModalPrimary").modal('hide');
                        
                    })
                    
                }else{
                    $(".server_message").text(rr.response_message);
                }
        },'json')
    }
</script>
<style>
    .ajax-upload-dragdrop, .ajax-file-upload-filename, .ajax-file-upload-statusbar{
                width: auto !important;
            }
    .label-info {
                background-color: #5bc0de;
            }
            .label {
                display: inline;
                padding: .2em .6em .3em;
                font-size: 75%;
                font-weight: 700;
                line-height: 1;
                color: #fff;
                text-align: center;
                white-space: nowrap;
                vertical-align: baseline;
                border-radius: .25em;
            }
            .bootstrap-tagsinput{
              width:100%;  
            }
            .bootstrap-tagsinput input {
                width:inherit;  
            }s
</style>