<?php
namespace Netsilik\Lib;

/**
 * @package       v\Lib
 * @copyright (c) 2010-2018 Netsilik (http://netsilik.nl)
 * @license       MIT
 */

/**
 * Create list with set number of possible values
 */
abstract class Enum
{
	/**
	 * @var array $_enum The list of allowed enum values
	 */
	protected $_enum = [];
	
	/**
	 * @var int $_index The index of the current enum value
	 */
	private $_index = -1;
	
	/**
	 * Constructor
	 *
	 * @param mixed $value The enum value to set
	 */
	final public function __construct($value)
	{
		$index = array_search($value, $this->_enum);
		if (false === $index) {
			trigger_error('Provided value is not part of this enumerated list', E_USER_ERROR);
		}
		$this->_index = $index;
	}
	
	/**
	 * @return mixed The value set through the constructor
	 */
	final public function __toString()
	{
		if ($this->_index === -1) {
			return null;
		}
		
		return $this->_enum[ $this->_index ];
	}
}
