<?php
class TravelModel extends Model
{
	public function __construct()
	{
		parent::__construct(); 
		include LIBRARY_PATH . '/SimpleHtmlDom.php';
	}
	
	public function travel()
	{
		$html = file_get_html('https://travel.com.vn/du-lich-gio-chot.aspx');
		foreach($html->find('.giacu') as $element)
			$listItem['giacu'][] = $element->innertext;
		foreach($html->find('.giamoi') as $element)
			$listItem['giamoi'][] = $element->innertext;
		foreach($html->find('.tour-title-new h3 a') as $element)
			$listItem['title'][] = $element->title;
		foreach($html->find('.tour-info') as $element)
			$listItem['time'][] = $element->innertext;
		foreach($html->find('.item-tour-main img.img-responsive') as $element)
			$listItem['link'][] = $element->src;
		$html = file_get_html('https://travel.com.vn/tour-giam-gia-soc.aspx');
		foreach($html->find('.item-listtour .tour-name a') as $element)
			$listItem['title'][] = $element->title;
		foreach($html->find('.item-listtour .price-new') as $element)
			$listItem['giamoi'][] = $element->innertext;
		foreach($html->find('.item-listtour .mg-listtour') as $element)
			$listItem['time'][] = $element->children(1)->innertext;		
		foreach($html->find('.item-listtour .mg-pic img') as $element)
			$listItem['link'][] = $element->src;
		return $listItem;
	}
}
?>

