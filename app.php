<?php

use ArtikuloUno\Person;
use ArtikuloUno\Staff;
use ArtikuloUno\Business;

$juan = new Person('Juan dela Cruz');
$staff = new Staff([$juan]);
$artikulo = new Business($staff);

$artikulo->hire(new Person('Emilio Aguinaldo'));

var_dump($artikulo->getStaffMembers());

?>