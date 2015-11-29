<?php
include($_SERVER['DOCUMENT_ROOT']."/bx24/ilevel.handler.php");
$clientId = (isset($_COOKIE['clientID']))? $_COOKIE['clientID'] : ''; 
    

    // CRM fields config
    global $conf;
    $postData = array(

            'TITLE'                => "Лид с септиков",
            'NAME'                 => $name_inp, 
            'PHONE_WORK'           => $phone_inp,
            'EMAIL_WORK'           => $mail_inp,
            'SOURCE_DESCRIPTION'   => "Форма с сайта",
			
			$conf['UTM_SOURCE_FIELD']   => $utm_source,
    		$conf['UTM_MEDIUM_FIELD']   => $utm_medium,
            $conf['UTM_CAMPAIGN_FIELD'] => $utm_campaign,
    		$conf['UTM_CONTENT_FIELD']  => $utm_content,
            $conf['UTM_TERM_FIELD']     => $utm_term,
            $conf['AD_TYPE']            => $ad_type,
            $conf['SOURCE_ID']          => $src,
            $conf['REMARKETING']        => $remarketing,
            $conf['REFERER']            => $referer,
            $conf['ORDER_URL']          => $order_url,
            $conf['ENTER_URL']          => $enter_url,
            
            $conf['FIRST_APPEAL']       => $last_visit,
            $conf['FIRST_VISIT']        => $first_visit,
            $conf['LAST_VISIT']         => $last_visit,
            
            'COMMENTS'                  => $client_form_info, 
            'UF_CRM_1442223086'         => $contact_id, //UF_CRM_1438614899
			'UF_CRM_1431597949'         => $clientId,
			
			
        );  
    // Adding new lead to bitrix24
	
    

?>