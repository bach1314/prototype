<?php
/* @var $this AccountManagementController */
/* @var $modelAccount Account */


$this->breadcrumbs=array(
    'People'=>array('index'),
    $modelAccount->account_number,
);

$this->menu=array(
    array('label'=>'List Person', 'url'=>array('index')),
    array('label'=>'Create Person', 'url'=>array('create')),
    array('label'=>'Update Person', 'url'=>array('update', 'id'=>$modelAccount->account_number)),
    array('label'=>'Delete Person', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$modelAccount->id_person),'confirm'=>'Are you sure you want to delete this item?')),
    array('label'=>'Manage Person', 'url'=>array('admin')),
);
?>

<h1>View Person #<?php echo $modelAccount->account_number; ?></h1>

<?php
//Person and Address
$accountPerson = Person::model()->findByPk($modelAccount->id_person);
$personAddress = Address::model()-> findByPk($accountPerson->address);

//Company and Address
$accountCompany = Company::model()->findByPk($modelAccount->id_company);
$companyAddress = Address::model()->findByPk($accountCompany->address);

//Correspondence Address
$accountCorAddress = Address::model()->findByPk($modelAccount->correspondence_address);

//Correspondence Person and Address
$accountCorPerson = Person::model()->findByPk($modelAccount->correspondence_person);
$corPersonAddress = Address::model()->findByPk($accountCorPerson->address);

$this->widget('zii.widgets.CDetailView', array(
    'data'=>$modelAccount,
    'attributes'=>array(
        'account_number',
        'id_person',
        'id_company',
        'correspondence_language',
        'correspondence_desired',
        'correspondence_address',
        'correspondence_person',

        //Person
        array(
            'label' => 'id_person',
            'value' => $accountPerson->id_person,
        ),
        array(
            'label' => 'title',
            'value' => $accountPerson->title,
        ),
        array(
            'label' => 'family_name',
            'value' => $accountPerson->family_name,
        ),
        array(
            'label' => 'surname',
            'value' => $accountPerson->surname,
        ),
        array(
            'label' => 'phone',
            'value' => $accountPerson->phone,
        ),
        array(
            'label' => 'email',
            'value' => $accountPerson->email,
        ),
        array(
            'label' => 'fax',
            'value' => $accountPerson->fax,
        ),
        array(
            'label' => 'address',
            'value' => $accountPerson->address,
        ),

        //Address zu Person
        array(
            'label' => 'address_id',
            'value' => $personAddress->address_id,
        ),
        array(
            'label' => 'street',
            'value' => $personAddress->street,
        ),
        array(
            'label' => 'house_number',
            'value' => $personAddress->house_number,
        ),
        array(
            'label' => 'post_box',
            'value' => $personAddress->post_box,
        ),
        array(
            'label' => 'town',
            'value' => $personAddress->town,
        ),
        array(
            'label' => 'post_code',
            'value' => $personAddress->post_code,
        ),
        array(
            'label' => 'country',
            'value' => $personAddress->country,
        ),
        array(
            'label' => 'c_o',
            'value' => $personAddress->c_o,
        ),

        //Company
        array(
            'label' => 'id_company',
            'value' => $accountCompany->id_company,
        ),
        array(
            'label' => 'name',
            'value' => $accountCompany->name,
        ),
        array(
            'label' => 'legal_form',
            'value' => $accountCompany->legal_form,
        ),
        array(
            'label' => 'phone',
            'value' => $accountCompany->phone,
        ),
        array(
            'label' => 'email',
            'value' => $accountCompany->email,
        ),
        array(
            'label' => 'fax',
            'value' => $accountCompany->fax,
        ),
        array(
            'label' => 'website',
            'value' => $accountCompany->website,
        ),
        array(
            'label' => 'address',
            'value' => $accountCompany->address,
        ),

        //Address zu Company
        array(
            'label' => 'address_id',
            'value' => $companyAddress->address_id,
        ),
        array(
            'label' => 'street',
            'value' => $companyAddress->street,
        ),
        array(
            'label' => 'house_number',
            'value' => $companyAddress->house_number,
        ),
        array(
            'label' => 'post_box',
            'value' => $companyAddress->post_box,
        ),
        array(
            'label' => 'town',
            'value' => $companyAddress->town,
        ),
        array(
            'label' => 'post_code',
            'value' => $companyAddress->post_code,
        ),
        array(
            'label' => 'country',
            'value' => $companyAddress->country,
        ),
        array(
            'label' => 'c_o',
            'value' => $companyAddress->c_o,
        ),

        //CorAddress
        array(
            'label' => 'address_id',
            'value' => $accountCorAddress->address_id,
        ),
        array(
            'label' => 'street',
            'value' => $accountCorAddress->street,
        ),
        array(
            'label' => 'house_number',
            'value' => $accountCorAddress->house_number,
        ),
        array(
            'label' => 'post_box',
            'value' => $accountCorAddress->post_box,
        ),
        array(
            'label' => 'town',
            'value' => $accountCorAddress->town,
        ),
        array(
            'label' => 'post_code',
            'value' => $accountCorAddress->post_code,
        ),
        array(
            'label' => 'country',
            'value' => $accountCorAddress->country,
        ),
        array(
            'label' => 'c_o',
            'value' => $accountCorAddress->c_o,
        ),

        //CorPerson
        array(
            'label' => 'id_person',
            'value' => $accountPerson->id_person,
        ),
        array(
            'label' => 'title',
            'value' => $accountPerson->title,
        ),
        array(
            'label' => 'family_name',
            'value' => $accountPerson->family_name,
        ),
        array(
            'label' => 'surname',
            'value' => $accountPerson->surname,
        ),
        array(
            'label' => 'phone',
            'value' => $accountPerson->phone,
        ),
        array(
            'label' => 'email',
            'value' => $accountPerson->email,
        ),
        array(
            'label' => 'fax',
            'value' => $accountPerson->fax,
        ),
        array(
            'label' => 'address',
            'value' => $accountPerson->address,
        ),

        //Address zu CorPerson
        array(
            'label' => 'address_id',
            'value' => $corPersonAddress->address_id,
        ),
        array(
            'label' => 'street',
            'value' => $corPersonAddress->street,
        ),
        array(
            'label' => 'house_number',
            'value' => $corPersonAddress->house_number,
        ),
        array(
            'label' => 'post_box',
            'value' => $corPersonAddress->post_box,
        ),
        array(
            'label' => 'town',
            'value' => $corPersonAddress->town,
        ),
        array(
            'label' => 'post_code',
            'value' => $corPersonAddress->post_code,
        ),
        array(
            'label' => 'country',
            'value' => $corPersonAddress->country,
        ),
        array(
            'label' => 'c_o',
            'value' => $corPersonAddress->c_o,
        ),
    ),

)); ?>

