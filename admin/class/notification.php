<?php
use Mailgun\Mailgun;

class Notification extends dbobject
{
    public $table    = "notification";
    public $table_pk = "id";
    public function sendNotification($data)
    {
        $method = $data['method'];
        if($method == "email")
        {
            return new EmailNotification();
        }
    }
    public function editNotification($data)
    {
        $data['merchant_id'] = $_SESSION['merchant_sess_id'];
        $result              = $this->doUpdate($this->table, $data, array('operation', 'op', 'id', '_files'),array('id' => $data['id'],'merchant_id'=>$data['merchant_id']));
        if($result > 0)
        {
            return json_encode(array('response_code' => 0, 'response_message' => 'notification updated Successfully'));
        }
        else
        {
            return json_encode(array('response_code' => 88, 'response_message' => 'nothing was updated'));
        }
    }
    public function changeNotificationStatus($data)
    {
        $status = ($data['status'] == "1")?0:1;
        $id     = $data['id'];
        $sql    = "UPDATE $this->table SET status = '$status' WHERE id = '$id' LIMIT 1";
        $result = $this->db_query($sql,false);
        if($result > 0)
        {
            return json_encode(array('response_code' => 0, 'response_message' => 'notification status updated Successfully'));
        }
        else
        {
            return json_encode(array('response_code' => 88, 'response_message' => 'nothing was updated'));
        }
    }
    public function notificationList($data)
    {
        $table_name    = $this->table;
		$primary_key   = $this->table_pk;
		$columner = array(
			array( 'db' => 'id', 'dt' => 0 ),
			array( 'db' => 'address', 'dt' => 1 ),
			array( 'db' => 'type',  'dt' => 2 ),
			array( 'db' => 'purpose',  'dt' => 3 ),
			array( 'db' => 'status',  'dt' => 4, 'formatter' => function( $d,$row ) {
                $status = ($d == "1")?array("Active","success"):array("Not active","danger");
						return "<span class='badge badge-".$status[1]."'>".$status[0]."</span>";
					} ),
			array( 'db' => 'id',  'dt' => 5,'formatter'=>function($d,$row){
                return "<button class='btn btn-primary' onclick=\"getModal('setup/notification_setup.php?id=$d&op=edit','modal_div')\" href='javascript:void(0)' data-toggle='modal' data-target='#defaultModalPrimary' >Edit</button>";
            } ),
			array( 'db' => 'created', 'dt' => 6, 'formatter' => function( $d,$row ) {
						return $d;
					}
				)
			);
		$filter = "";
		$filter = " AND merchant_id='$_SESSION[merchant_sess_id]'";
		$datatableEngine = new engine();
	
		echo $datatableEngine->generic_table($data,$table_name,$columner,$filter,$primary_key);
    }
    
}
class EmailNotification
{
    public function sendText($data)
    {
        $subject = $data['subject'];
        $to      = $data['to'];
        $message = $data['message'];
        
        mail($to, $subject, $message);
        return json_encode(array('response_code'=>0,'response_message'=>'done'));
    }
    public function sendHtml($data)
    {

        $subject      = $data['subject'];
        $to           = $data['to'];
        $message      = $data['message'];
        $data['from'] = $_ENV['APPLICATION_NAME'];
        
       $headers = $this->setEmailHeaders($data);
       mail($to, $subject, $message, $headers);
//        
        // $domain = "mg.store200.com";
        // // $domain = "sandboxea9fe5ca9ffb41a6814b1cbcc292ed80.mailgun.org";
        // $mgClient = Mailgun::create('3db02b318065c74819b5e302abe38e94-ba042922-5fdecadf');
        
        // $params = array(
        //   'from'    => 'STORE 200 <no-reply@store200.com>',
        //   'to'      => $to,
        //   'subject' => $subject,
        //   'html'    => $message
        // );
        // try{
        //     $mgClient->messages()->send($domain, $params);
        // }
        // catch(Exception $e){
        //     echo 'Message: ' .$e->getMessage();
        // }
    }
    public function setEmailHeaders($headers)
    {
		$output  = "MIME-Version: 1.0\r\n";
        $output .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
        $output .= (isset($headers['from']))?"From: " . strip_tags($headers['from']) . "<no-reply@rentdress.com>\r\n":"";
        $output .= (isset($headers['reply_to']))?"Reply-To: ". strip_tags($headers['reply_to']) . "\r\n":"";
        $output .= (isset($headers['copy']))?"CC: ".$headers['copy']."\r\n":"";
        
        return $output;
    }
}
class SmsNotification{
    
}
    
class EmailTemplate
{
    public $application_name = "";
    public $application_url  = "";
    public $footer_banner    = "";
    public $header_banner    = "";
    public $logo             = "";
    
    public function __construct()
    {
        $this->application_name = $_ENV['APPLICATION_NAME'];
        $this->application_url  = $_ENV['FRONTEND_BASE_URL'];
        $this->footer_banner    = "https://vuvaashop.accessng.com/admin/img/footer_banner.png";
        $this->header_banner    = "https://vuvaashop.accessng.com/admin/img/header_banner.png";
        $this->logo             = $_ENV['ADMIN_BASE_URL']."img/logo_1.png";
    }
    
    public function emailVerificationAPI($data)
    {
        $email_template_string = file_get_contents('../../admin/email-template/verification_new.html', true);
        $body    = $data['body'];
        $title   = $data['title'];
        $message = str_replace(
			array('%application_name%', '%logo%', '%footer_banner%','%header_banner%','%body%','%title%'),
			array($this->application_name, $this->logo,$this->footer_banner,$this->header_banner,$body,$title), $email_template_string
		  );
        return $message;
    }
    public function emailVerificationNew($data)
    {
        $email_template_string = file_get_contents('email-template/verification_new.html', true);
        $body    = $data['body'];
        $title   = $data['title'];
        $message = str_replace(
			array('%application_name%', '%application_url%', '%footer_banner%','%header_banner%','%body%','%title%','%logo%'),
			array($this->application_name, $this->application_url,$this->footer_banner,$this->header_banner,$body,$title,$this->logo), $email_template_string
		  );
        return $message;
    }
}