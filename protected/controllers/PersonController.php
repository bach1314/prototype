<?php

class PersonController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
//		$this->render('view',array(
//			'model1'=>$this->loadModel($id),
//		));
//        $this->render('view',array(
//            'model2'=>$this->loadModel($id),
//        ));
        $model =  $this->loadModel($id);
        $this->render('view',array(
            'model1'=>$model,
            'model2'=> array(Address::model()->findByPk($model->address)),
//            'model2'=> array($model->address=>Address::model()->findByPk($model->address)),
        ));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model1=new Person;
        $model2=new Address;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

        if(!empty($_POST))
		{
			$model1->attributes=$_POST['Person'];
//            echo CVarDumper::dump($model1);
            $model2->attributes=$_POST['Address'];
//            echo CVarDumper::dump($model2);


            $valid=$model2->validate();
            $valid=$model1->validate() && $valid;

            if($valid)
            {
                $model2->save();
                //$address = $model2->address_id;

                //$model1->address = $model2;
                $model1->save();
                $this->redirect(array('view','id'=>$model1->id_person));
            }
        }

		$this->render('create',array(
			'model1'=>$model1,
            'model2'=>$model2,
		));

 	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
    {
        // Load user data in model1
        $model1=Person::model1()->findByPk($id);
        // Load address data in model2
        $model2=Address::model2()->findByPk($model1->address);


        if(!empty($_POST))
        {

            $model2->attributes=$_POST['Address'];
            $model1->attributes=$_POST['Person'];

            // Validate all two model
//            $valid=$model2->validate();
//            $valid=$model1->validate() && $valid;
//
//            if($valid)
//            {
//                $model2->save();
//                $model1->save();
//            }

            if($model1->validate() & $model2->validate())
            {
                 $model2->save();
                 $model1->save();
            }
        }
        $this->render('update',array(
            'model1'=>$model1,
            'model2'=>$model2,
        ));
    }

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Person');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Person('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Person']))
			$model->attributes=$_GET['Person'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Person the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Person::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Person $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='person-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
