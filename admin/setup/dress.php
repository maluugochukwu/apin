<?php
include_once("../libs/dbfunctions.php");
$dbobject = new dbobject();
$sql2 = "SELECT * FROM branch";
$branches = $dbobject->db_query($sql2);

$sql3 = "SELECT * FROM package";
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
<div class="modal-header">
    <h4 class="modal-title" style="font-weight:bold">Add a Dress</h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div>
<div class="modal-body m-3 ">
   
    <form action="" id="settings_forms" onsubmit="return false">
        <input type="hidden" name="op" value="Dress.saveDress">
        <input type="hidden" name="id" value="<?php echo $_REQUEST[id]; ?>">
       <input type="hidden" name="operation" value="<?php echo $operation; ?>">
       <div class="row">
           <div class="col-sm-6">
               <div class="form-group">
                    <label for="">Name/Code</label>
                    <input type="text" value="<?php echo $dress[0]['name']; ?>"  class="form-control" name="name" />
                </div>
           </div>
           <div class="col-sm-6">
                <div class="form-group">
                     <label for="">Price</label>
                    <input type="text" value="<?php echo $dress[0]['price']; ?>"   class="form-control" name="price" />
                </div>
           </div>
       </div>
       <div class="row">
           <div class="col-sm-6">
               <div class="form-group">
                     <label for="">Caution Fee</label>
                    <input type="text" value="<?php echo $dress[0]['caution_fee']; ?>"  class="form-control" name="caution_fee" />
                </div>
           </div>

       <div class="col-sm-6">
                <div class="form-group">
                     <label for="">Location</label>
                     <select name="location" class="form-control" id="location">
                        <option value="">:: SELECT A LOCATION ::</option>
                         <?php
                         foreach($branches as $row)
                         {
                             $selected = ($dress[0]['location'] == $row['id'])?"selected":"";
                             echo "<option $selected value='".$row['id']."'>".$row['name']."</option>";
                         }
                         ?>
                     </select>
                </div>
           </div>
       </div>
       
       <div class="row">
           <div class="col-sm-6">
                <div class="form-group">
                     <label for="sh_display">Included Package 
                     
                     
                    </label>
                    <select name="package_id" class="form-control" id="package_id">
                        <option value="">:: SELECT A PACKAGE ::</option>
                         <?php
                         foreach($package as $row)
                         {
                             $selected = ($dress[0]['package_id'] == $row['id'])?"selected":"";
                             echo "<option $selected value='".$row['id']."'>".$row['name']."</option>";
                         }
                         ?>
                     </select>
                    
                </div>
           </div>
            <?php
                if($operation == "new")
                {
              ?>
           <div class="col-sm-6">
               <div class="form-group">
                   <label for="">Dress Image</label>
                   <div id="extraupload"></div>
               </div>
           </div>
           <?php
                }
           ?>
       </div>
    
        <div class="server_message" style="font-weight:bold;color:red"></div>
      
      <?php
        if($operation == "edit")
        {
      ?>
          <button class="btn btn-success" id="edit_dress" onclick="editRecord()">EDIT</button>
      <?php
        }
        else
        {
       ?>
            <button class="btn btn-success" id="save_facility" onclick="saveRecord()">SAVE</button>
      <?php
        }
      ?>
    </form>
</div>
<script src="js/jquery.uploadfile.min.js"></script>
        <link rel="stylesheet" href="css/uploadfile.css">
<script>
    
    
    
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
                    allowedTypes:"jpg,png",
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
        if(coverImg.selectedFiles == 0)
            {
                alert("kindly select an image file for Dress.")
            }
        else{
                coverImg.startUpload();
            }
    }
    function editRecord()
    {
        $("#defaultModalPrimary").block();
        var ddd = $("#settings_forms").serialize();
        $.post('utilities.php',ddd,function(rr){
            $("#defaultModalPrimary").unblock();
             if(rr.response_code == 0)
                {
                    swal({
                        text:rr.response_message,
                        icon:"success"
                    }).then((rs)=>{
                        getpage('dress_list.php','page');
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
</style>