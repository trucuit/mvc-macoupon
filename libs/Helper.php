<?php 
class Helper
{

	//demo ở public/default/main/html/header.php
	public static function createUL($class, $arrLI)
	{
		$xhtml =  '<ul class="'.$class.'">';
		foreach ($arrLI as $li) {
			$xhtml .= self::createLI_A($li['classLi'], $li['classA'], $li['link'], $li['content']);
		}
		$xhtml .=  '</ul>';
		return $xhtml;
	}

	public static function createLI_A($classLI, $classA, $link, $content)
	{
		$xhtml  = '<li class="'.$classLI.'">';		
		$xhtml .= '<a class="'.$classA.'" href="'.$link.'">'.$content.'</a>';
		$xhtml .='</li>';
		return $xhtml;
	}

	public static function callAPI($link, $params)
	{
		if($params != null){
			$link  .= "?" . http_build_query($params);
		}
		$ch = curl_init(); 
		curl_setopt($ch, CURLOPT_URL, $link);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
			'Content-Type: application/json',                                                                                
			'Authorization: Token dSGj0VnNM7OoDMKLZ52T2CWth9o4oWI9'                                                                        
		));                                                                                                                   

		$result = curl_exec($ch);
		$result = json_decode($result);
		return $result;
	}

	public static function pregMatchAll($pattern, $subject)
	{		
		preg_match_all($pattern, file_get_contents($subject), $matches);
		array_shift($matches);	
		return $matches;
	}

	public static function pregDOM($subject)
	{		
		$doc	   = new DOMDocument();
		libxml_use_internal_errors(true);
		$doc->loadHTML(file_get_contents($subject));
		libxml_use_internal_errors(false);
		$xpath	 = new DOMXPath($doc);
		return $xpath;
	}


	// public static function callAPI()
	// {
		// $data = array("domain" => "lazada.vn");
		// $link = 'https://api.accesstrade.vn/v1/campaigns';                                                              ;
		// $ch = curl_init();
		// if(!empty($data)){
		// 	$link .= "?". http_build_query($data);
		// }
		// curl_setopt($ch,CURLOPT_URL,$link);
		// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		// curl_setopt($ch, CURLOPT_HTTPHEADER, array(
		// 	'Content-Type: application/json',
		// 	'Authorization: Token dSGj0VnNM7OoDMKLZ52T2CWth9o4oWI9'
		// ));
		// $result = curl_exec($ch);
		// $result = json_decode($result);
		// foreach ($result->data as $value) {
		// 	echo "<pre>";
		// 	print_r($result);    
		// 	echo "</pre>";die();  
		// }
	// }
}
?>