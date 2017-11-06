<?php
class TravelController extends Controller
{
  public function __construct($params)
  {
    parent::__construct($params);
    $this->_templateObj->setFolderTemplate('default/main');
    $this->_templateObj->setFileTemplate('index.php');
    $this->_templateObj->setFileConfig('template.ini');
    $this->_templateObj->load();
  }
  public function indexAction()
  {
// $result = Helper::callAPI('https://api.accesstrade.vn/v1/campaigns',null);
  // echo "<pre>";
          // print_r($result);    
// echo "</pre>";
    $this->_view->listTravel = $this->_model->showAll('travel');
    $this->_view->render('travel/index');
  }
  public function detailAction()
  {
    $this->_view->travelItem = $this->_model->showID('travel',$this->_arrParam['id']);
    $this->_view->render('travel/travel');
  }
  public function testAction()
  {

    if(isset($this->_arrParam['id'])){
      if(method_exists($this->_model,$this->_arrParam['id'])){
        $id = $this->_arrParam['id'];
        $this->_view->listItem = $this->_model->$id();
      }
    }

    // $this->_view->listItem = $this->_model->travel();
    $this->_view->listTravel = $this->_model->showAll('travel');
    $this->_view->render('travel/1');
  }

  public function ajaxTravelAction()
  {
   
   echo "<pre>";
   print_r($this);    
   echo "</pre>";
    //$this->_view->render('travel/1');
  }
}
?>