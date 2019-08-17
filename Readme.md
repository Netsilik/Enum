Enum
====

Strict Enumeration class.

---

MIT Licence

Unless required by applicable law or agreed to in writing, software
distributed under the Licence is distributed on an "AS IS" basis,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.

Contact: info@netsilik.nl  
Latest version available at: https://gitlab.com/Netsilik/Enum

---

Example of usage
```
// Object creation
final class Species extends Enum {
    protected $enum = array('human','monkey','alien');
}

// Use Enum
function checkSpecies(Species $enum) {
    return ($enum <> 'alien') ? 'Hello' : 'Waaah!';
}
checkSpecies(new Species('monkey')); // returns 'Hello'


// Use Enum with invalid value
function checkSpecies(Species $enum) {
    return ($enum <> 'alien') ? 'Hello' : 'Waaah!';
}
checkSpecies(new Species('lion')); // triggers Fatal Error: 'Provided value is not part of this enumerated list'

```


Installation
------------

```
composer require netsilik/enum
```
