<?php
class ShoppingModel extends Model
{
	
    public function __construct()
    {
        parent::__construct();
        

        // echo "<pre>";
        // print_r($result);
        // echo "</pre>";	
    }
    // lazada
    public function dataLazadaCoupon(){
    	$token='dSGj0VnNM7OoDMKLZ52T2CWth9o4oWI9';
        $jsonurl='https://api.accesstrade.vn/v1/offers_informations?merchant=lazada&coupon=1';
        $opts = array (
        	'http' => array (
        		'method' => 'GET',
        		'header' => "Content-Type: application/json\r\n" . "Authorization: Token " . $token . "\r\n" 
        	) 
        );
        $context = stream_context_create ( $opts );
        $result = json_decode ( file_get_contents ( $jsonurl, false, $context ), true );
        $dataCoupon=[];
        $stt=0;
        foreach ($result as $key => $value) {
        	foreach ($value as $key1 => $value1) {


        		$dataCoupon[$stt]["aff_link"] = $value1["aff_link"];
        		$dataCoupon[$stt]["banners"] = $value1["banners"];
        		$dataCoupon[$stt]["categories"] = $value1["categories"];
        		$dataCoupon[$stt]["content"] = $value1["content"];
        		$dataCoupon[$stt]["coupons"] = $value1["coupons"];
        		$dataCoupon[$stt]["domain"] = $value1["domain"];
        		$dataCoupon[$stt]["end_time"] = $value1["end_time"];
        		$dataCoupon[$stt]["id"] = $value1["id"];
        		$dataCoupon[$stt]["image"] = $value1["image"];
        		$dataCoupon[$stt]["link"] = $value1["link"];
        		$dataCoupon[$stt]["merchant"] = $value1["merchant"];
        		$dataCoupon[$stt]["name"] = $value1["name"];
        		$dataCoupon[$stt]["start_time"]= $value1["start_time"];
        		$stt++;
        	}
        }
        return $dataCoupon;
    }
     public function dataLazadaNoCoupon(){
    	$token='dSGj0VnNM7OoDMKLZ52T2CWth9o4oWI9';
        $jsonurl='https://api.accesstrade.vn/v1/offers_informations?merchant=lazada&coupon=0';
        $opts = array (
        	'http' => array (
        		'method' => 'GET',
        		'header' => "Content-Type: application/json\r\n" . "Authorization: Token " . $token . "\r\n" 
        	) 
        );
        $context = stream_context_create ( $opts );
        $result = json_decode ( file_get_contents ( $jsonurl, false, $context ), true );
        $data=[];
        $stt=0;
        foreach ($result as $key => $value) {
        	foreach ($value as $key1 => $value1) {


        		$data[$stt]["aff_link"] = $value1["aff_link"];
        		$data[$stt]["banners"] = $value1["banners"];
        		$data[$stt]["categories"] = $value1["categories"];
        		$data[$stt]["content"] = $value1["content"];
        		$data[$stt]["coupons"] = $value1["coupons"];
        		$data[$stt]["domain"] = $value1["domain"];
        		$data[$stt]["end_time"] = $value1["end_time"];
        		$data[$stt]["id"] = $value1["id"];
        		$data[$stt]["image"] = $value1["image"];
        		$data[$stt]["link"] = $value1["link"];
        		$data[$stt]["merchant"] = $value1["merchant"];
        		$data[$stt]["name"] = $value1["name"];
        		$data[$stt]["start_time"]= $value1["start_time"];
        		$stt++;
        	}
        }
        return $data;
    } // end lazada
   
     public function dataAdayroiCoupon(){
    	$token='dSGj0VnNM7OoDMKLZ52T2CWth9o4oWI9';
        $jsonurl='https://api.accesstrade.vn/v1/offers_informations?merchant=adayroi&coupon=1';
        $opts = array (
        	'http' => array (
        		'method' => 'GET',
        		'header' => "Content-Type: application/json\r\n" . "Authorization: Token " . $token . "\r\n" 
        	) 
        );
        $context = stream_context_create ( $opts );
        $result = json_decode ( file_get_contents ( $jsonurl, false, $context ), true );
        $dataCoupon=[];
        $stt=0;
        foreach ($result as $key => $value) {
        	foreach ($value as $key1 => $value1) {


        		$dataCoupon[$stt]["aff_link"] = $value1["aff_link"];
        		$dataCoupon[$stt]["banners"] = $value1["banners"];
        		$dataCoupon[$stt]["categories"] = $value1["categories"];
        		$dataCoupon[$stt]["content"] = $value1["content"];
        		$dataCoupon[$stt]["coupons"] = $value1["coupons"];
        		$dataCoupon[$stt]["domain"] = $value1["domain"];
        		$dataCoupon[$stt]["end_time"] = $value1["end_time"];
        		$dataCoupon[$stt]["id"] = $value1["id"];
        		$dataCoupon[$stt]["image"] = $value1["image"];
        		$dataCoupon[$stt]["link"] = $value1["link"];
        		$dataCoupon[$stt]["merchant"] = $value1["merchant"];
        		$dataCoupon[$stt]["name"] = $value1["name"];
        		$dataCoupon[$stt]["start_time"]= $value1["start_time"];
        		$stt++;
        	}
        }
        return $dataCoupon;
    }
     public function dataAdayroiNoCoupon(){
    	$token='dSGj0VnNM7OoDMKLZ52T2CWth9o4oWI9';
        $jsonurl='https://api.accesstrade.vn/v1/offers_informations?merchant=adayroi&coupon=0';
        $opts = array (
        	'http' => array (
        		'method' => 'GET',
        		'header' => "Content-Type: application/json\r\n" . "Authorization: Token " . $token . "\r\n" 
        	) 
        );
        $context = stream_context_create ( $opts );
        $result = json_decode ( file_get_contents ( $jsonurl, false, $context ), true );
        $data=[];
        $stt=0;
        foreach ($result as $key => $value) {
        	foreach ($value as $key1 => $value1) {


        		$data[$stt]["aff_link"] = $value1["aff_link"];
        		$data[$stt]["banners"] = $value1["banners"];
        		$data[$stt]["categories"] = $value1["categories"];
        		$data[$stt]["content"] = $value1["content"];
        		$data[$stt]["coupons"] = $value1["coupons"];
        		$data[$stt]["domain"] = $value1["domain"];
        		$data[$stt]["end_time"] = $value1["end_time"];
        		$data[$stt]["id"] = $value1["id"];
        		$data[$stt]["image"] = $value1["image"];
        		$data[$stt]["link"] = $value1["link"];
        		$data[$stt]["merchant"] = $value1["merchant"];
        		$data[$stt]["name"] = $value1["name"];
        		$data[$stt]["start_time"]= $value1["start_time"];
        		$stt++;
        	}
        }
        return $data;
    }
}

