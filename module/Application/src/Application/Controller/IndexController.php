<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController {
	public function indexAction() {

		/** @var $oRepositoryUser \Doctrine\Common\Persistence\ObjectRepository */

		$oRepositoryUser = $this->getServiceLocator()->get('doctrine.entitymanager.orm_sro_account')->getRepository('Application\Entity\SRO\Account\User');
		\Zend\Debug\Debug::dump($oRepositoryUser->findBy(array('StrUserID' => 'fantans')));
	//	\Zend\Debug\Debug::dump($oRepositoryUser->findBy(array()));



		$oObjectManager = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
/*
		$oEntityUser = new \Application\Entity\Frontend\User();
		$oEntityUser->setStrUserID('UserZend');


		$oObjectManager->persist($oEntityUser);
		$oObjectManager->flush();

		\Zend\Debug\Debug::dump($oEntityUser);
*/
		/** @var $oRepositoryUser \Doctrine\Common\Persistence\ObjectRepository */
		$oRepositoryUser = $oObjectManager->getRepository('Application\Entity\Frontend\User');

		//\Zend\Debug\Debug::dump($oRepositoryUser->findBy(array('StrUserID' => 'fantans')));
		\Zend\Debug\Debug::dump($oRepositoryUser->findBy(array()));

		return new ViewModel();
	}
}