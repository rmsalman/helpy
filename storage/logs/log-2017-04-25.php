<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-04-25 08:16:44 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\helpy\application\controllers\student.php 229
ERROR - 2017-04-25 08:22:47 --> Severity: Parsing Error --> syntax error, unexpected ')' C:\xampp\htdocs\helpy\application\controllers\student.php 256
ERROR - 2017-04-25 08:23:30 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\helpy\application\controllers\student.php 229
ERROR - 2017-04-25 08:24:11 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\helpy\application\controllers\student.php 229
ERROR - 2017-04-25 08:38:42 --> Severity: Error --> Call to undefined function userdata() C:\xampp\htdocs\helpy\application\views\profiles\index.php 75
ERROR - 2017-04-25 09:20:55 --> Query error: Unknown column '3E' in 'where clause' - Invalid query: SELECT ea_appointments.*, ea_users.*, ea_appointments.notes as noter FROM ea_appointments LEFT JOIN ea_users on ea_users.id = ea_appointments.id_users_provider WHERE `id_users_customer` =98%3E
ERROR - 2017-04-25 12:04:26 --> Email could not been sent. Mailer Error (Line 137): Could not instantiate mail function.
ERROR - 2017-04-25 12:04:27 --> #0 C:\xampp\htdocs\helpy\application\controllers\Appointments.php(455): EA\Engine\Notifications\Email->sendAppointmentDetails(Array, Array, Array, Array, Array, Object(EA\Engine\Types\Text), Object(EA\Engine\Types\Text), Object(EA\Engine\Types\Url), Object(EA\Engine\Types\Email))
#1 [internal function]: Appointments->ajax_register_appointment()
#2 C:\xampp\htdocs\helpy\system\core\CodeIgniter.php(514): call_user_func_array(Array, Array)
#3 C:\xampp\htdocs\helpy\index.php(353): require_once('C:\\xampp\\htdocs...')
#4 {main}
ERROR - 2017-04-25 12:19:28 --> Email could not been sent. Mailer Error (Line 137): Could not instantiate mail function.
ERROR - 2017-04-25 12:19:28 --> #0 C:\xampp\htdocs\helpy\application\controllers\Appointments.php(455): EA\Engine\Notifications\Email->sendAppointmentDetails(Array, Array, Array, Array, Array, Object(EA\Engine\Types\Text), Object(EA\Engine\Types\Text), Object(EA\Engine\Types\Url), Object(EA\Engine\Types\Email))
#1 [internal function]: Appointments->ajax_register_appointment()
#2 C:\xampp\htdocs\helpy\system\core\CodeIgniter.php(514): call_user_func_array(Array, Array)
#3 C:\xampp\htdocs\helpy\index.php(353): require_once('C:\\xampp\\htdocs...')
#4 {main}
ERROR - 2017-04-25 15:31:34 --> Email could not been sent. Mailer Error (Line 137): Could not instantiate mail function.
ERROR - 2017-04-25 15:31:34 --> #0 C:\xampp\htdocs\helpy\application\controllers\Appointments.php(455): EA\Engine\Notifications\Email->sendAppointmentDetails(Array, Array, Array, Array, Array, Object(EA\Engine\Types\Text), Object(EA\Engine\Types\Text), Object(EA\Engine\Types\Url), Object(EA\Engine\Types\Email))
#1 [internal function]: Appointments->ajax_register_appointment()
#2 C:\xampp\htdocs\helpy\system\core\CodeIgniter.php(514): call_user_func_array(Array, Array)
#3 C:\xampp\htdocs\helpy\index.php(353): require_once('C:\\xampp\\htdocs...')
#4 {main}
ERROR - 2017-04-25 17:19:30 --> Severity: 4096 --> Argument 1 passed to EA\Engine\Api\V1\Parsers\Providers::decode() must be of the type array, null given, called in C:\xampp\htdocs\helpy\application\controllers\api\v1\Providers.php on line 80 and defined C:\xampp\htdocs\helpy\engine\Api\V1\Parsers\Providers.php 63
ERROR - 2017-04-25 17:22:55 --> Severity: 4096 --> Argument 1 passed to EA\Engine\Api\V1\Parsers\Providers::decode() must be of the type array, null given, called in C:\xampp\htdocs\helpy\application\controllers\api\v1\Providers.php on line 80 and defined C:\xampp\htdocs\helpy\engine\Api\V1\Parsers\Providers.php 63
ERROR - 2017-04-25 17:38:00 --> Severity: 4096 --> Argument 1 passed to EA\Engine\Api\V1\Parsers\Providers::decode() must be of the type array, null given, called in C:\xampp\htdocs\helpy\application\controllers\api\v1\Providers.php on line 80 and defined C:\xampp\htdocs\helpy\engine\Api\V1\Parsers\Providers.php 63
