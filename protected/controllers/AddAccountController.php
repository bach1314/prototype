<?php
/**
 * Created by PhpStorm.
 * User: Christian
 * Date: 01.03.14
 * Time: 20:02
 */

class AddAccountController extends Controller
{
    public function actionIndex()
    {
        $dataProvider=new CActiveDataProvider('Account');
        $this->render('index',array(
            'dataProvider'=>$dataProvider,
        ));

    }

    public function actionAnyAction()
    {

    }

    public function getAccounts()
    {

        $dataProvider=new CActiveDataProvider('Account');
        $this->render('index',array(
            'dataProvider'=>$dataProvider,
        ));

    }

    public function makeForms()
    {

    }
}