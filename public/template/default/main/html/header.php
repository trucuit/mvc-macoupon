<?php 
$linkHome     = URL::createLink('default','index','index');
$linkTravel   = URL::createLink('default','travel','index');
$linkShopping = URL::createLink('default','shopping','index');
$linkTaxi     = URL::createLink('default','taxi','index');
$linkStudy    = URL::createLink('default','study','index');

$arrLink      = array(
  array('classLi'=>'nav-item','classA'=>'nav-link', 'link'=>$linkHome, 'content'=>'COUPON TODAY'),
  array('classLi'=>'nav-item','classA'=>'nav-link', 'link'=>$linkTravel, 'content'=>'coupon du lịch'),
  array('classLi'=>'nav-item','classA'=>'nav-link', 'link'=>$linkShopping, 'content'=>'coupon mua sắm'),
  array('classLi'=>'nav-item','classA'=>'nav-link', 'link'=>$linkTaxi, 'content'=>'coupon taxi'),
  array('classLi'=>'nav-item','classA'=>'nav-link', 'link'=>$linkStudy, 'content'=>'coupon học tập'),
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
        <a class="navbar-brand" href="<?php echo $linkHome ?>"><i class="fa fa-home" aria-hidden="true"></i></a>
        <?php echo $listHeader ?>
      </div>
    </nav>    
  </div>
</div>
