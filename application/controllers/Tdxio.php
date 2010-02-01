<?php 

/**
 * Abstract controller
 *
 * 
 * @uses       Zend_Controller_Action
 * @package    Traduxio
 * @subpackage Controller
 */
class Controller_Tdxio extends Zend_Controller_Action
{
	protected $_model=null;
    protected $_modelname=null;

	
	 /**
     * _getModel() is a protected utility method for this controller. It is
     * responsible for creating the model object and returning it to the
     * calling action when needed. Depending on the depth and breadth of the
     * application, this may or may not be the best way of handling the loading
     * of models.  This concept will be visited in later tutorials, but for now
     * - in this application - this is the best technique.
     *
     * @return $_modelnameModel
     */
   protected function _getModel($classname=null)
    {
	Tdxio_Log::info('entra in Controller_Tdxio->_getModel()');
        if (null!=$classname) {
            $classname='Model_'.$classname;
            return new $classname();
        } else {
			$classname='Model_'.$this->_modelname;
			if (null === $this->_model) {
                Tdxio_Log::info($classname);
//				require_once 'Model_Work.php';
//				$this->_model = new $classname();
				
            }
            return $this->_model;
        }
    }
	
	protected function _getUser(){
	
	}
		
	protected function _getRole(){
	
	}
	
}