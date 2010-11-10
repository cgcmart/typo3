<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2009 Jochen Rau <jochen.rau@typoplanet.de>
*  All rights reserved
*
*  This class is a backport of the corresponding class of FLOW3.
*  All credits go to the v5 team.
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

/**
 * Implementation of the default Extbase Object Manager
 *
 * @package Extbase
 * @subpackage Object
 */
class Tx_Extbase_Object_ObjectManager implements Tx_Extbase_Object_ObjectManagerInterface {

	/**
	 * @var Tx_Extbase_Object_Container_Container
	 */
	protected $objectContainer;

	/**
	 * Constructs a new Object Manager
	 */
	public function __construct() {
		$this->objectContainer = Tx_Extbase_Object_Container_Container::getContainer();
	}

	/**
	 * Returns a fresh or existing instance of the object specified by $objectName.
	 *
	 * Important:
	 *
	 * If possible, instances of Prototype objects should always be created with the
	 * Object Manager's create() method and Singleton objects should rather be
	 * injected by some type of Dependency Injection.
	 *
	 * @param string $objectName The name of the object to return an instance of
	 * @return object The object instance
	 * @api
	 */
	public function get($objectName) {
		$arguments = func_get_args();
		return call_user_func_array(array($this->objectContainer, 'getInstance'), $arguments);
	}

	/**
	 * Creates a fresh instance of the object specified by $objectName.
	 *
	 * This factory method can only create objects of the scope prototype.
	 * Singleton objects must be either injected by some type of Dependency Injection or
	 * if that is not possible, be retrieved by the get() method of the
	 * Object Manager
	 *
	 * @param string $objectName The name of the object to create
	 * @return object The new object instance
	 * @throws Tx_Extbase_Object_Exception_WrongScropeException if the created object is not of scope prototype
	 * @api
	 */
	public function create($objectName) {
		$arguments = func_get_args();
		$instance = call_user_func_array(array($this->objectContainer, 'getInstance'), $arguments);

		if ($instance instanceof t3lib_Singleton) {
			throw new Tx_Extbase_Object_Exception_WrongScope('Object "' . $objectName . '" is of not of scope prototype, but only prototype is supported by create()', 1265203124);
		}

		return $instance;
	}

	/**
	 * Registers a classname that should be used to resolve a given interface.
	 *
	 * Per default the interface's name stripped of "Interface" will be used.
	 * @param string $className
	 * @param string $alternativeClassName
	 */
	static public function registerImplementation($className, $alternativeClassName) {
		return Tx_Extbase_Object_Container_Container::getContainer()->registerImplementation($className, $alternativeClassName);
	}
}

?>