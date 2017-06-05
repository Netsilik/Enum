<?php
namespace Netsilik\Lib;

/**
 * @package Scepino\Lib
 * @copyright (c) 2010-2016 Scepino (http://scepino.com)
 * @license EUPL-1.1 (European Union Public Licence, v1.1)
 *
 * Example of usage:
 * 
 *   // Object creation
 *   final class Species extends Enum {
 *       protected $enum = array('human','monkey','alien');
 *   }
 *
 *   // Use Enum
 *   function checkSpecies(Species $enum) {
 *       return ($enum <> 'alien') ? 'Hello' : 'Waaah!';
 *   }
 *   checkSpecies(new Species('monkey'));
 */
 
 
/**
 * Create list with set number of possible values
 */
abstract class Enum {
	protected $enum = array();
	private $index;
	
	final public function __construct($value) {
		$index = array_search($value, $this->enum);
		if ($index === false) {
			trigger_error('Provided value is not part of this enumerated list', E_USER_WARNING);
		}
		$this->index = $index;
	}
	
	final public function __toString() {
		if ($this->index === false) {
			return '';
		}
		return $this->enum[ $this->index ];
	}
}
