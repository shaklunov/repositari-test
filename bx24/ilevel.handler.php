<?php


require_once($_SERVER['DOCUMENT_ROOT']."/bx24/ilevel.functions.php");

    $form ='test_test';
	
	//UF_CRM_1442926394
    $conf = array(
                'SOURCE_ID'          => 'UF_CRM_1442926394',
                				
				'SRC_DEFAULT'        => '435', // Прямое посещение сайта
				'SRC_YANDEX_SEO'     => '425',
				'SRC_YANDEX_DIRECT'  => '427',
				'SRC_GOOGLE_SEO'     => '424',
				'SRC_GOOGLE_ADWORDS' => '426',
				'SRC_VK'             => '429',
				'SRC_VK_SMM'         => '428',
				'SRC_FACEBOOK'       => '431',
				'SRC_FACEBOOK_SMM'   => '430',
				'SRC_YOUTUBE'        => '432',
				'SRC_TWITTER'        => '433',
				'SRC_INSTAGRAM'      => '434',     
				
				'AD_TYPE_DEFAULT'    => '437', // Не определено
				'AD_TYPE_SEARCH'     => '438', // Поиск
				'AD_TYPE_KMS'        => '439', // Контекстно медийная сеть
				
				
				
				'SOURCE'			 => 'UF_CRM_1442926394', //источник
				'UTM_SOURCE_FIELD'   => 'UF_CRM_1442926501',
				'CALL_CHANNEL'		 => 'UF_CRM_1443183021', //канал связи
				'UTM_MEDIUM_FIELD'   => 'UF_CRM_1442926512',
				'UTM_CAMPAIGN_FIELD' => 'UF_CRM_1442926522',
				'UTM_CONTENT_FIELD'  => 'UF_CRM_1442926541',
				'UTM_TERM_FIELD'     => 'UF_CRM_1442926531',
				'AD_TYPE'            => 'UF_CRM_1442926584', // Тип рекламной кампании
				'REMARKETING'        => 'UF_CRM_1442926606', // Галочка ремаркетинга
				'REFERER'            => 'UF_CRM_1442926634', // Реферальная ссылка
				'ORDER_URL'          => 'UF_CRM_1442926642', // Ccылка с которой произошел заказ
				'ENTER_URL'          => 'UF_CRM_1442926650', // Ссылка входа
				
				
                
                //'FIRST_APPEAL'       => 'UF_CRM_1442941673', //Дата первого обращения
                'FIRST_VISIT'        => 'UF_CRM_1442926616', // Время первого посещения
                'LAST_VISIT'         => 'UF_CRM_1442926626', //  Время создания
                
                // Отладочная информация
                'DEBUG'              => TRUE, // FALSE // Включить чтобы увидеть ответ сервера
                'FIRST_SRC'          => TRUE,  // FALSE // Подставлять в поле "источник" источник первого, а не текущего посещения (определяем из UTM меток) 
                'API_KEY'            => 'eb59d25282b7bf8174d1989a3d7546fe' // MD5 домен сайта без WWW (тут: ilevel.ws) 
                                     // Ссылка для генерации: http://www.md5.cz/
             );
    
    $consumer_fields = array(
                //'UF_CRM_1420457325' => $form_id,
                //'UF_CRM_1408022882' => $date_curr,
    );
    

// --- --- iLEVEL function body --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- ---         
  
    // Init variables
    $link       = NULL;
    $country    = NULL;
    $address    = NULL;
    $utm_arr    = (isset($_COOKIE['utm']))          ? json_decode($_COOKIE['utm'], TRUE)        : array(); // Parse UTM data from COOKIE to ARRAY
    $link_arr   = (isset($_COOKIE['link']))         ? json_decode($_COOKIE['link'], TRUE)       : array(); // Parse Links data from COOKIE to ARRAY  
    $enter_data = (isset($_COOKIE['enter_data']))   ? json_decode($_COOKIE['enter_data'], TRUE) : array(); // Parse enter_data data from COOKIE to ARRAY
    $referer    = (isset($enter_data['referer']))   ? urldecode($enter_data['referer'])         : NULL;
    $enter_url  = (isset($enter_data['enter_url'])) ? urldecode($enter_data['enter_url'])       : NULL;
    $order_url  = (isset($link_arr['order_url']))   ? urldecode($link_arr['order_url'])         : NULL;
    
    // Depends from type of form and declared in 'addmi/addmi.module'
    //  if($referer_order_url)
    //      $order_url = (isset($link_arr['referer_order_url'])) ? urldecode($link_arr['referer_order_url']) : NULL;
    //  else
    //      $order_url = (isset($link_arr['order_url'])) ? urldecode($link_arr['order_url']) : NULL;

    // Setting UTM data
    $utm_source   = (isset($utm_arr['utm_source']))   ? urldecode($utm_arr['utm_source'])   : NULL;
    $utm_medium   = (isset($utm_arr['utm_medium']))   ? urldecode($utm_arr['utm_medium'])   : NULL;
    $utm_campaign = (isset($utm_arr['utm_campaign'])) ? urldecode($utm_arr['utm_campaign']) : NULL;
    $utm_content  = (isset($utm_arr['utm_content']))  ? urldecode($utm_arr['utm_content'])  : NULL;
    $utm_term     = (isset($utm_arr['utm_term']))     ? urldecode($utm_arr['utm_term'] )    : NULL;
    $src          = $conf['SRC_DEFAULT'];
    $ad_type      = $conf['AD_TYPE_DEFAULT'];
    $ad           = FALSE;
    $remarketing  = '0';
    // Setting visit data
    $first_visit  = (isset($_COOKIE['first_visit'])) ? $_COOKIE['first_visit'] : NULL;
    $last_visit   = date("d.m.Y H:i:s");
    /*    
        if (isset($order_url)) 
        {
            $link = (isset($conf['COMMENTS']) && !empty($conf['COMMENTS'])) 
                ? '</br></br>Страница заказа:</br>'.$order_url
                : 'Страница заказа:</br>'.$order_url;
        }
    */    

    // Checking for AD
    if (isset($utm_source) || isset($utm_medium) || isset($utm_campaign) || isset($utm_term) || isset($utm_content))
        $ad = TRUE;
    
    // Set refefer and navive ad type
    if ($conf['FIRST_SRC'] || isset($referer))
    {
        // Find most populars referers
        if (stristr($referer, 'yandex.') || stristr($utm_source, 'yandex') && isset($conf['SRC_YANDEX_SEO']))
            $src = ($ad) ? $conf['SRC_YANDEX_DIRECT']  : $conf['SRC_YANDEX_SEO']; // Yandex
        if (stristr($referer, 'google.') || stristr($utm_source, 'google') && isset($conf['SRC_GOOGLE_SEO'])) 
            $src = ($ad) ? $conf['SRC_GOOGLE_ADWORDS'] : $conf['SRC_GOOGLE_SEO']; // Google
        
        if ((stristr($referer, 'vk.com') || stristr($utm_source, 'vk')) && isset($conf['SRC_VK'])) // Вконтакте
            $src = ($ad) ? $conf['SRC_VK_SMM'] : $conf['SRC_VK'];
        if ((stristr($referer, 'facebook.com') || stristr($utm_source, 'facebook')) && isset($conf['SRC_FACEBOOK'])) // Facebook
            $src = ($ad) ? $conf['SRC_FACEBOOK_SMM'] : $conf['SRC_FACEBOOK'];
            
        if ((stristr($referer, 'twitter.com') || stristr($utm_source, 'twitter')) && isset($conf['SRC_TWITTER']))
            $src = $conf['SRC_TWITTER']; // Twitter
        if ((stristr($referer, 'youtube.com') || stristr($utm_source, 'youtube')) && isset($conf['SRC_YOUTUBE'])) 
            $src = $conf['SRC_YOUTUBE']; // Youtube
        if ((stristr($referer, 'instagram.com') || stristr($utm_source, 'instagram')) && isset($conf['SRC_INSTAGRAM']))
            $src = $conf['SRC_INSTAGRAM']; // Instagram
        if ((stristr($referer, 'linkedin.com') || stristr($utm_source, 'linkedin')) && isset($conf['SRC_LINKEDIN']))
            $src = $conf['SRC_LINKEDIN']; // LinkedIn
        
        if ((stristr($referer, 'ok.ru') || stristr($utm_source, 'ok')) && isset($conf['SRC_ODNOKLASNIKI']))
            $src = ($ad) ? $conf['SRC_ODNOKLASNIKI_SMM'] : $conf['SRC_ODNOKLASNIKI']; // Однокласники
    }
     
    // Remarketing ad type
    if (isset($utm_arr['remarketing'])) {
        if ($utm_arr['remarketing'] == 1) { $remarketing = '1'; }
    }
    // KMS ad type
    if (isset($utm_arr['kms'])) {
        $ad_type = ($utm_arr['kms'] == 1)
            ? $conf['AD_TYPE_KMS']
            : $conf['AD_TYPE_SEARCH'];
    }
    // Additional marketing data
    $ad_domain_name = (isset($utm_arr['domain_name'])) ? $utm_arr['domain_name'] : NULL;
    $ad_position    = (isset($utm_arr['position']))    ? $utm_arr['position']    : NULL;
    $ad_keyword     = (isset($utm_arr['keyword']))     ? $utm_arr['keyword']     : NULL;
    $ad_block       = (isset($utm_arr['block']))       ? $utm_arr['block']       : NULL;
    /*
    // Геотаргетинг 
    // Get the country
    include_once(PATH."bx24/SxGeo.php");
    $SxGeo = new SxGeo(PATH.'bx24/SxGeoCity.dat');
        
    $cntr = $SxGeo->getCountry(GetRealIp());
    $city = $SxGeo->getCity(GetRealIp());
        
    // Rename ISO code to country name
    if ($cntr == 'UA') $country = 'Украина';
    if ($cntr == 'RU') $country = 'Россия';
    if ($cntr == 'BE') $country = 'Беларусь';
    if ($cntr == 'KZ') $country = 'Казахстан';    
    
    $country = (isset($country)) ? $country : $cntr;
    
    $city  = $city['city']['name_ru'];       
    $address = $country.', '.$city; // $city['country']['iso']
*/
    // CRM fields config
	/*
    $postData = array(
//            'TITLE'                => $conf['TITLE'],
//            'NAME'                 => $conf['NAME'], 
//            'LAST_NAME'            => $conf['LAST_NAME'],
//            'PHONE_WORK'           => $conf['PHONE_WORK'],
//            'EMAIL_WORK'           => ($conf['EMAIL_WORK'] == NULL) ? '' : $conf['EMAIL_WORK'],
//            'SOURCE_DESCRIPTION'   => $conf['SOURCE_DESCRIPTION'], 
//            'OPPORTUNITY'          => $conf['PRICE'], 
//            'CURRENCY_ID'          => $conf['CURRENCY_ID'], 

//            'ADDRESS_COUNTRY_CODE' => $country,
//            'ADDRESS_CITY'         => $city,
            'SOURCE_ID'            => $src,  // Источник
            'ADDRESS'              => $address, 
            
            $conf['UTM_SOURCE_FIELD']   => $utm_source,
            $conf['UTM_MEDIUM_FIELD']   => $utm_medium,
            $conf['UTM_CAMPAIGN_FIELD'] => $utm_campaign,
            $conf['UTM_CONTENT_FIELD']  => $utm_content,
            $conf['UTM_TERM_FIELD']     => $utm_term,
            $conf['AD_TYPE']            => $ad_type,
            
//          $conf['AD_DOMAIN_NAME']     => $ad_domain_name,
//          $conf['AD_POSITION']        => $ad_position,
//          $conf['AD_KEYWORD']         => $ad_keyword,
//          $conf['AD_BLOCK']           => $ad_block,
            
            $conf['REMARKETING']        => $remarketing,
            $conf['REFERER']            => $referer,
            $conf['ORDER_URL']          => $order_url,
            $conf['ENTER_URL']          => $enter_url,
            
            $conf['FIRST_VISIT']        => $first_visit,
            $conf['LAST_VISIT']         => $last_visit,
            
            //'COMMENTS'                  => $config['COMMENTS'], 
        );   
   
   $postData = array_merge($postData, $config);
   */
   //print_r($postData);
   
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

?>