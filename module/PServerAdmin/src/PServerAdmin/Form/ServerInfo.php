<?php
/**
 * Created by PhpStorm.
 * User: †KôKšPfLâÑzè®
 * Date: 22.08.14
 * Time: 22:09
 */

namespace PServerAdmin\Form;

use Zend\Form\Element;
use ZfcBase\Form\ProvidesEventsForm;

class ServerInfo extends ProvidesEventsForm {

	public function __construct() {
		parent::__construct();

		$this->add(array(
			'name' => 'icon',
			'options' => array(
				'label' => 'Icon-Class',
			),
			'attributes' => array(
				'placeholder' => 'Icon-Class',
				'class' => 'form-control',
			),
		));

		$this->add(array(
			'name' => 'label',
			'options' => array(
				'label' => 'label',
			),
			'attributes' => array(
				'placeholder' => 'Link',
				'class' => 'form-control',
			),
		));

		$this->add(array(
			'name' => 'memo',
			'options' => array(
				'label' => 'Memo',
			),
			'attributes' => array(
				'placeholder' => 'Memo',
				'class' => 'form-control',
			),
		));

		$this->add(array(
			'name' => 'sortkey',
			'options' => array(
				'label' => 'Sortkey',
			),
			'attributes' => array(
				'placeholder' => 'Sortkey',
				'class' => 'form-control',
				'type' => 'number'
			),
		));


		$this->add(array(
			'name' => 'active',
			'type' => 'Zend\Form\Element\Select',
			'options' => array(
				'label' => 'Active',
				'value_options' => array(
					0 => 'deactive',
					1 => 'active',
				),
			),
			'attributes' => array(
				'placeholder' => 'Active',
				'class' => 'form-control',
			),
		));

		/*
		$this->add(array(
			'name' => 'security',
			'type' => 'Zend\Form\Element\Csrf'
		));
		*/

		$submitElement = new Element\Button('submit');
		$submitElement
			->setLabel('Submit')
			->setAttributes(array(
				'class' => 'btn btn-default',
				'type'  => 'submit',
			));

		$this->add($submitElement, array(
			'priority' => -100,
		));
		/**
		$csrf = new Element\Csrf('csrf');
		$this->add($csrf->getCsrfValidator());
		 */
	}
}