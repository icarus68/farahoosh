<?php
namespace backend\components;
use yii\helpers\Html;
use yii\base\Component;
class SmsComponent extends Component{
    

    public function init(){
            parent::init();
    }

    public function send($SmsApi,$Domain,$SmsUsername,$SmsPassword,$SmsNumber,$To,$Text){
        
        ini_set('soap.wsdl_cache_enabled', '0');
        
        try {
            
            $soapClient = new SoapClient($SmsApi);
            $parameters = array(
            	'domain'=> $Domain,
                'username'=> $SmsUsername,
                'password'=> $SmsPassword,
                'srcNumber'=> $SmsNumber,
                'body' => iconv('UTF-8', 'UTF-8//TRANSLIT', $Text),
                'recipientNumbers' => $To,
            );
            
            $results = $soapClient->Send($parameters);
			
			$results = $results->SendResult;
			
			$results = $results->long;
			
            if($results->SendSmsResult ==1 ) {
               if(!is_array($results->recId->long)){
                   return array($results->recId->long);
               }
               else
               {
                   $return = array();
                   foreach($results->recId->long as $item){
                       $return[] = $item;
                   }
                   return $return;
               }
            }
            return false;
        }
        catch(Exception $e) {
        	print_r($e);
            return false;
        }
    }
	
}