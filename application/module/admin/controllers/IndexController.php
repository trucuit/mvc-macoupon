<?php
class IndexController extends Controller
{
	public function __construct($params)
	{
		parent::__construct($params);
		$this->_templateObj->setFolderTemplate('admin/main');
		$this->_templateObj->setFileTemplate('index.php');
		$this->_templateObj->setFileConfig('template.ini');
		$this->_templateObj->load();
	}

	public function indexAction()
	{
		$this->_view->listCampaigns = Helper::callAPI('https://api.accesstrade.vn/v1/campaigns',null);
		$this->_view->listTravel  = $this->_model->showAll('travel');
		$this->_view->render('index/index');
	}

}
