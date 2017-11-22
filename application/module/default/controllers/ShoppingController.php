<?php
class ShoppingController extends Controller
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
        $this->_view->arr=$this->_model->dataLazadaCoupon();
        $this->_view->arr1=$this->_model->dataLazadaNoCoupon();
        $this->_view->render('lazadashopping/lazada');

    }

    public function ajaxLazadaAction(){
        $this->_view->arr=$this->_model->dataLazadaCoupon();
        $this->_view->render('lazadashopping/a',false);


    }
    public function adayroiAction()
    {
        $this->_view->arrAdayroi=$this->_model->dataAdayroiCoupon();
        $this->_view->arrAdayroi1=$this->_model->dataAdayroiNoCoupon();
        $this->_view->render('adayroishopping/adayroi');

        // echo "<pre>";
        // print_r($this->_view);
        // echo "</pre>";
    }
    public function ajaxAdayroiAction(){
        $this->_view->arrAdayroi=$this->_model->dataAdayroiCoupon();
        $this->_view->render('adayroishopping/ajaxadayroi',false);


    }
}

?>