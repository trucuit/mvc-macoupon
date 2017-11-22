<?php 
$linkHome     = URL::createLink('default','index','index');
$linkTravel   = URL::createLink('default','travel','test');
$linkShopping = URL::createLink('default','shopping','index');
$linkTaxi     = URL::createLink('default','taxi','index');
$linkStudy    = URL::createLink('default','study','index');

$arrLink      = array(
  array('classLi'=>'nav-item','classA'=>'nav-link index', 'link'=>$linkHome, 'content'=>'COUPON TODAY'),
  array('classLi'=>'nav-item','classA'=>'nav-link travel', 'link'=>$linkTravel, 'content'=>'coupon du lịch'),
  array('classLi'=>'nav-item','classA'=>'nav-link shopping', 'link'=>$linkShopping, 'content'=>'coupon mua sắm'),
  array('classLi'=>'nav-item','classA'=>'nav-link taxi', 'link'=>$linkTaxi, 'content'=>'coupon taxi'),
  array('classLi'=>'nav-item','classA'=>'nav-link study', 'link'=>$linkStudy, 'content'=>'coupon học tập'),
);
$listHeader = Helper::createUL('navbar-nav mr-auto', $arrLink);
?>
<div id="header">
  <div class="container">
    <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
      <div class="btn-toggle">
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-header" aria-controls="navbar-header" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>

      <div class="collapse navbar-collapse" id="navbar-header">
        <a class="navbar-brand" href="#"><i class="fa fa-home" aria-hidden="true"></i></a>
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">COUPON TODAY <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            
              <li><a class="nav-link" href="index.php?module=default&controller=coupon&action=dulich">coupon du lịch</a></li>
            
          </li>
          <li class="nav-item">
            <a class="nav-link musam" href="#">coupon mua sắm</a>
            <ul class="submenu">
              
               <li class="item-shopping"><a class="nav-link" href="index.php?module=default&controller=shopping&action=lazada">Lazada</a></li>
                <li class="item-shopping"><a class="nav-link" href="index.php?module=default&controller=shopping&action=tiki">Tiki</a></li>
                 <li class="item-shopping"><a class="nav-link" href="index.php?module=default&controller=shopping&action=adayroi">adayroi</a></li>
            </ul>
            
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">coupon taxi</a>
          </li>
        </ul>
        
      </div>
    </nav>    
  </div>
</div>
