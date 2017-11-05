<?php 
class MuasamController extends Controller
{
	public function __construct($params)
	{
		parent::__construct($params);
		$this->_templateObj->setFolderTemplate('default/main');
		$this->_templateObj->setFileTemplate('index.php');
		$this->_templateObj->setFileConfig('template.ini');
		$this->_templateObj->load();
	}

	public function lazadaAction()
	{
		// $this->_view->list = $this->_model->dataLazada();
		$this->_view->render('muasam/lazada');
	}
}

?>