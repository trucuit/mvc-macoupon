<?php
function excelToArray(){
	$arrItem = [];
	$path='E:/datxampp/htdocs/do-an/mvc-macoupon/application/module/admin/models/Report.xlsx';
	require_once 'PHPExcel/IOFactory.php';
$objPHPExcel = PHPExcel_IOFactory::load($path);
foreach ($objPHPExcel->getWorksheetIterator() as $worksheet)
{
    $worksheetTitle     = $worksheet->getTitle();
$highestRow         = $worksheet->getHighestRow(); // e.g. 10
$highestColumn      = $worksheet->getHighestColumn(); // e.g 'F'
$highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn);
$nrColumns = ord($highestColumn) - 64;
// echo "<br>The worksheet ".$worksheetTitle . ' ';
// echo $nrColumns . ' columns (A-' . $highestColumn . ') ';
// echo ' and ' . $highestRow . ' row.';
// echo '<br>Data: <table border="1"><tr>';
for ($row = 1; $row <= $highestRow; ++ $row) {
    for ($col = 0; $col < $highestColumnIndex; ++ $col) {
        $cell = $worksheet->getCellByColumnAndRow($col, $row);
        $val = $cell->getValue();

        $arrItem[$row][]= $val;       
    }
}

}

$arrFirst = array_shift($arrItem);

$arr = [];
$i=0;
foreach ($arrItem as $key => $value) {
    if($value[0] != null){
      $arr[$i]["name_sale"]  = $value[0];
      $arr[$i]["start"]  = $value[1];
      $arr[$i]["finish"]  = $value[2];
      $arr[$i]["campaign"]  = $value[3];
      $arr[$i]["nganhhang"]  = $value[4];
      $arr[$i]["description"]  = $value[5];
      $arr[$i]["ma_coupon"]  = $value[6];
      $arr[$i]["intro_coupon"]  = $value[7];
      $arr[$i]["link_banner"]  = $value[8];
      $arr[$i]["banner_html"]  = $value[9];
      $arr[$i]["size"] = $value[10];
      $arr[$i]["link_original"] = $value[11];
      $arr[$i]["link_distribution"] = $value[12];
      $i++;
  }
}
return $arr;
}
class IndexModel extends Model
{

	public function __construct()
	{
		$data_build=excelToArray();
		parent::__construct();
		 for($i=0;$i<count($data_build);$i++){
		 	parent::insert($data_build,$i);
		 }
		
	}

	
}
$b =new IndexModel();
