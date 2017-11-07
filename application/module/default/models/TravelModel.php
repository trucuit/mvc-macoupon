<?php
class TravelModel extends Model
{
	public function __construct()
	{
		parent::__construct(); 
		include LIBRARY_PATH . '/SimpleHtmlDom.php';
	}
	
	public function travel($domain = null)
	{
		$html = file_get_html('https://travel.com.vn/du-lich-gio-chot.aspx');
		foreach($html->find('.giacu') as $element)
			$listItem['giacu'][] = $element->innertext;
		foreach($html->find('.giamoi') as $element)
			$listItem['price'][] = $element->innertext;
		foreach($html->find('.tour-title-new h3 a') as $element)
			$listItem['title'][] = $element->title;
		foreach($html->find('.tour-info') as $element)
			$listItem['time'][] = $element->innertext;
		foreach($html->find('.item-tour-main img.img-responsive') as $element)
			$listItem['image'][] = $element->src;
		foreach($html->find('.item-tour-main mg-bot10 h3 a') as $element)
			$listItem['link'][] = $element->href;
		$html = file_get_html('https://travel.com.vn/tour-giam-gia-soc.aspx');
		foreach($html->find('.item-listtour .tour-name a') as $element)
			$listItem['title'][] = $element->title;
		foreach($html->find('.item-listtour .price-new') as $element)
			$listItem['price'][] = $element->innertext;
		foreach($html->find('.item-listtour .mg-listtour') as $element)
			$listItem['time'][] = $element->children(1)->innertext;		
		foreach($html->find('.item-listtour .mg-pic img') as $element)
			$listItem['image'][] = $element->src;
		foreach($html->find('.item-listtour .tour-name a') as $element)
			$listItem['link'][] = $domain.$element->href;
		return $listItem;
	}

	public function fiditour($domain = null)
	{
		$html = file_get_html('https://fiditour.com/');
		foreach($html->find('#fix-blog-768 #tit-tour-0 a') as $element)
			$listItem['title'][] = $element->innertext;
		foreach($html->find('#fix-blog-768 #blog-det-0') as $element)
			$listItem['price'][] = $element->children(1)->innertext;
		foreach($html->find('#fix-blog-768 #blog-tour-0 a img') as $element)
			$listItem['image'][] = $element->src;
		foreach($html->find('#fix-blog-768 #blog-tour-0 a') as $element)
			$listItem['link'][] = $domain.$element->href;
		foreach($html->find('#fix-blog-768 #blog-det-0') as $element){
			foreach($element->childNodes(2)->find('text') as $ele){
				if(trim($ele->innertext) != null){
					$listItem['time'][] = $ele->innertext;
				}
			}
		}
		return $listItem;
	}
	public function divui($domain = null)
	{
		$html = file_get_html('http://divui.com/');
		foreach($html->find('.image-box img') as $element)
			$listItem['image'][] = $element->src;
		foreach($html->find('.image-box .image-box-label-title') as $element)
			$listItem['title'][] = $element->innertext;
		foreach($html->find('.image-box .image-box-counter-title') as $element)
			$listItem['price'][] = $element->innertext;
		foreach($html->find('.image-box a') as $element)
			$listItem['link'][] = $domain.$element->href;
		return $listItem;
	}

	public function gotadi($domain = null)
	{
		$html = file_get_html('https://www.gotadi.com/Tours.aspx');
		foreach($html->find('.checkhasclass a.title') as $element)
			$listItem['title'][] = $element->innertext;
		foreach($html->find('.checkhasclass .detail') as $element)
			$listItem['time'][] = $element->children(1)->children(1)->innertext;
		foreach($html->find('.checkhasclass .thumbnail a') as $element)
			$listItem['link'][] = $domain.$element->href;
		foreach($html->find('.checkhasclass .price') as $element)
			$listItem['price'][] = $element->innertext;
		foreach($html->find('.checkhasclass .thumbnail img') as $element)
			$listItem['image'][] = 'https://www.gotadi.com'.$element->src;
		return $listItem;
	}

	public function bookin($domain = null)
	{
		$i=0;
		$html = file_get_html('http://www.bookin.vn/tour-du-lich');
		foreach($html->find('.pager .individual-page a') as $element){
			$i++;
			$html = file_get_html("http://www.bookin.vn".$element->href);
			foreach($html->find('.tour-box .name a h2') as $element)
				$listItem['title'][] = $element->innertext;
			foreach($html->find('.tour-box .duration i') as $element)
				$listItem['time'][] = $element->innertext;
			foreach($html->find('.tour-box .name a') as $element)
				$listItem['link'][] = $domain.$element->href;
			foreach($html->find('.tour-box .picture img') as $element)
				$listItem['image'][] = $element->src;
			foreach($html->find('.tour-box .price') as $element)
				$listItem['price'][] = $element->innertext;
			if($i==2)
				break;
		}
		return $listItem;
	}

	public function ivivu($domain = null)
	{
		$html = file_get_html('https://www.ivivu.com');
		foreach($html->find('.cap-bot .popularLocationName') as $element)
			$listItem['title'][] = $element->innertext;
		foreach($html->find('.cap-bot a') as $element)
			$listItem['link'][] = $element->href;
		foreach($html->find('.cap-bot picture img') as $element)
			$listItem['image'][] = $element->src;
		foreach($html->find('.cap-bot .popularLocationHotelQuantity') as $element)
			$listItem['price'][] = $element->innertext;
		return $listItem;
	}
	public function showCol($table,$col)
	{
		$stmt = $this->conn->prepare("SELECT `$col` FROM `$table`");
		$stmt->execute();
		return $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

	}
}
?>
