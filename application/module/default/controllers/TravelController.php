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
  public function selectItem($table, $name, $val)
  {
    $stmt = $this->conn->prepare("SELECT * FROM `$table` WHERE $name=:$name");
    $stmt->bindParam(":$name", $val, PDO::PARAM_STR);
    $stmt->execute();
    return $data = $stmt->fetch(PDO::FETCH_ASSOC);

  }

  public function indexAction()
  {
    $this->_view->listTravel = $this->_model->showAll('travel');
    $this->_view->render('travel/test');
  }

  public function detailAction()
  {
    $this->_view->travelItem = $this->_model->showID('travel',$this->_arrParam['id']);
    $this->_view->render('travel/travel');
  }

  public function testAction()
  {
    $this->_view->listItem   = $this->_model->travel('https://travel.com.vn/');
    $this->_view->listItem['description'] = $this->_model->selectItem('travel','domain','https://travel.com.vn/')['description'];
    $this->_view->listItem['domain'] = "travel";
    $this->_view->linkOpen   = $this->_model->showCol('openlink','name');
    $this->_view->listTravel = $this->_model->showAll('travel');
    $this->_view->render('travel/1');
  }

  public function ajaxAction()
  {
    if(isset($this->_arrParam['id'])){
      if(method_exists($this->_model,$this->_arrParam['id'])){
        $id                    = $this->_arrParam['id'];
        $this->_view->listItem = $this->_model->$id($this->_arrParam['domain']);
        $this->_view->listItem['description'] = $this->_model->selectItem('travel','domain',$this->_arrParam['domain'])['description'];
        $this->_view->listItem['domain'] = Helper::cutCharacter($this->_arrParam['domain'],'/','.');
      }
    }
    $this->_view->render('travel/test',false);
  }
}
?>