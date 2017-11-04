<?php 
$subject = file_get_contents('01.html');
		$pattern = '#<a href="." class="ng-binding"> TRAVEL and LEISURE </a>(.*)<div ng-if="seting.gird#imsU';
		preg_match_all($pattern, $subject, $matches);

		$pattern = '#<img ng-src="(.*)".*._id\)">(.*)<.*class="ng-binding">(.*)<#ismU';
		preg_match_all($pattern, $matches[0][0], $arr);
		array_shift($arr);

		$arr1 = [];
		foreach ($arr[0] as $key => $value) {
			$arr1[$key]['domain'] = $arr[2][$key];
			$arr1[$key]['title'] = $arr[1][$key];
			$arr1[$key]['logo'] = $arr[0][$key];
		}
		$result = $this->_model->insert($arr1,'travel');
		echo "<pre>";
		print_r($result);    
		echo "</pre>";

 ?>