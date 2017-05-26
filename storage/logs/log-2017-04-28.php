<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-04-28 08:22:11 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\helpy\application\views\student\profile.php 20
ERROR - 2017-04-28 09:56:39 --> Severity: Parsing Error --> syntax error, unexpected '}' C:\xampp\htdocs\helpy\application\views\profiles\index.php 49
ERROR - 2017-04-28 14:36:18 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\helpy\system\database\DB_query_builder.php 669
ERROR - 2017-04-28 14:36:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE `ea_users` = `Array`' at line 4 - Invalid query: SELECT *, (SELECT COUNT(r.rating_id) 
        FROM rating r 
            where r.rating_to = u.id)
WHERE `ea_users` = `Array`
ERROR - 2017-04-28 14:37:52 --> Severity: Parsing Error --> syntax error, unexpected 'where' (T_STRING) C:\xampp\htdocs\helpy\application\models\Profiles_model.php 10
ERROR - 2017-04-28 14:38:01 --> Severity: Parsing Error --> syntax error, unexpected 'where' (T_STRING) C:\xampp\htdocs\helpy\application\models\Profiles_model.php 10
ERROR - 2017-04-28 14:38:11 --> Query error: Unknown column 'u.id' in 'where clause' - Invalid query: SELECT *, (SELECT COUNT(r.rating_id) 
        FROM rating r 
            where r.rating_to = u.id)
FROM `ea_users`
WHERE `id_roles` = 2
ERROR - 2017-04-28 14:46:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ' (SELECT COUNT(r.rating_id) FROM rating r where r.rating_to = u.id ) as rater, (' at line 1 - Invalid query: SELECT `*SELECT` *, (SELECT COUNT(r.rating_id) FROM rating r where r.rating_to = u.id ) as rater, (SELECT  AVG(r.rating_value) FROM rating r where r.rating_to = u.id ) as rating
FROM `ea_users` `u`
WHERE `id_roles` = 2
ERROR - 2017-04-28 14:47:55 --> Severity: Notice --> Undefined property: stdClass::$rater C:\xampp\htdocs\helpy\application\views\profiles\index.php 40
ERROR - 2017-04-28 14:47:55 --> Severity: Notice --> Undefined property: stdClass::$rating C:\xampp\htdocs\helpy\application\views\profiles\index.php 41
