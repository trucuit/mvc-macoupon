<?php
class StudyController extends Controller
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
		$this->_view->listStudy = $this->_model->showAll('study');
		$this->_view->listItem = $this->_model->kyna('https://kyna.vn');
		$this->_view->listItem['description'] = $this->_model->selectItem('study','domain','https://kyna.vn/')['description'];
		$this->_view->listItem['domain'] ='kyna';
		$this->_view->linkOpen = $this->_model->showAll('openlink');
		$this->_view->render('study/index');	
	}

	public function ajaxAction()
	{
		if(isset($this->_arrParam['id'])){
			if(method_exists($this->_model,$this->_arrParam['id'])){
				$id                    = $this->_arrParam['id'];
				$this->_view->listItem = $this->_model->$id($this->_arrParam['domain']);
				$this->_view->listItem['description'] = $this->_model->selectItem('study','domain',$this->_arrParam['domain'])['description'];
				$this->_view->listItem['domain'] = Helper::cutCharacter($this->_arrParam['domain'],'/','.');
				// echo 
			}
		}
		$this->_view->render('study/ajax',false);
	}
}