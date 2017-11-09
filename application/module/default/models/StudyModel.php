<?php
class StudyModel extends Model
{
	public function __construct()
	{
		parent::__construct();
		include LIBRARY_PATH . '/SimpleHtmlDom.php';
	}

	public function selectItem($table, $name, $val)
	{
		$stmt = $this->conn->prepare("SELECT * FROM `$table` WHERE $name=:$name");
		$stmt->bindParam(":$name", $val, PDO::PARAM_STR);
		$stmt->execute();
		return $data = $stmt->fetch(PDO::FETCH_ASSOC);

	}

	public function kyna($domain = null)
	{
		$html = file_get_html('https://kyna.vn/khuyen-mai/nhom-khoa-hoc');
		foreach($html->find('.pagination a') as $element){
			$html = file_get_html('https://kyna.vn'.$element->href);
			foreach($html->find('.k-box-card .content h4') as $element)
				$listItem['title'][] = $element->innertext;
			foreach($html->find('.k-box-card .view-price .sale span') as $element)
				$listItem['giacu'][] = $element->innertext;
			foreach($html->find('.k-box-card .view-price .price strong') as $element)
				$listItem['price'][] = $element->innertext;
			foreach($html->find('.k-box-card a.view-detail') as $element)
				$listItem['link'][] = $domain.$element->href."/192317";
			foreach($html->find('.k-box-card .content') as $element)
				$listItem['time'][] = $element->children(2)->innertext;
			foreach($html->find('.k-box-card .img-fluid') as $element)
				$listItem['image'][] = $element->src;
		}
		return $listItem;
	}

	public function unica($domain = null)
	{
		$html = file_get_html('https://unica.vn/combo');
		foreach($html->find('.pagination a') as $element){
			$html = file_get_html('https://unica.vn'.$element->href);
			foreach($html->find('.item_course .title b') as $element)
				$listItem['title'][] = $element->innertext;
			foreach($html->find('.item_course .price .old-price') as $element)
				$listItem['giacu'][] = $element->innertext;
			foreach($html->find('.item_course .price .sell-price') as $element)
				$listItem['price'][] = $element->innertext;
			foreach($html->find('.item_course .images a') as $element)
				$listItem['link'][] = $element->href."?aff=33133";
			foreach($html->find('.item_course .teacher') as $element)
				$listItem['time'][] = $element->children(0)->innertext;
			foreach($html->find('.item_course .image') as $element)
				$listItem['image'][] = $element->src;
		}
		return $listItem;
	}
}
?>
