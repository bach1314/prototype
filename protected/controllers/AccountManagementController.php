<?php
/* @var $form CActiveForm */
class AccountManagementController extends Controller
{
    public $layout='//layouts/column2';

	public function actionIndex()
	{
		$this->render('index');
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate()
    {
        $account_model=new Account;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if(isset($_POST['Account']))
        {
            $account_model->attributes=$_POST['Account'];
            if($account_model->save())
                $this->redirect(array('view','id'=>$account_model->account_number));
        }

        $this->render('create',array(
            'model'=>$account_model,
        ));
    }

    public function actionAddPerson()
    {
        $data = array();
        $data["myValue"] = 2;

        $this->renderPartial('_personForm', $data, false, true);
    }
}