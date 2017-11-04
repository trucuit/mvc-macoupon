<?php
class CouponModel extends Model
{
	public function __construct()
	{
		parent::__construct();
	}
	public function showAllCoupon()
	{
		$this->setTable('sanpham');
		return $this->showAll();
	}
}

?>

