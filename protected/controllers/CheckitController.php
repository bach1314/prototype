<?php

class CheckitController extends Controller
{
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

    public function actionCreate()
    {
        $person=new Person;
        $address=new Address;
        if(isset($_POST['Person'], $_POST['Address']))
        {
            // populate input data to $a and $b
            $person->attributes=$_POST['Person'];
            $address->attributes=$_POST['Address'];

            // validate BOTH $a and $b
            $valid=$person->validate();
            $valid=$address->validate() && $valid;

            if($valid)
            {
                // use false parameter to disable validation
                $person->save();
                $address->save();
                // ...redirect to another page
            }
        }

        $this->render('create', array(
            'person'=>$person,
            'address'=>$address,
        ));
    }
}