<?php
App::uses('AppController','Controller');

/**
 * HomesController.php Controller
 *
 * @author Chris Pierce <cpierce@csdurant.com>
 */
class HomesController extends AppController {
	
	/**
	 * Before Filter Method
	 */
	public function beforeFilter() {
		parent::beforeFilter();
	}
	
	/**
 	 * Admin Index Method
	 * 
	 * @params void
	 * @return void
	 */
	public function index() {
        $this->loadModel('SoftwareKey');
        $this->SoftwareKey->Behaviors->load('Containable');
        $this->Paginator->settings = array(
            'limit' => 5,
            'contain' => array(
                    'Customer' => [
                        'fields' => [
                        'Company_Name',
                        'Customer_Address',  
                        ],  
                    ],                
            ),
        );
        $test = $this->Paginator->paginate('SoftwareKey');

        $this->set(compact('test'));
	}

}
