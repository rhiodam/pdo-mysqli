<?php
//$dsn = 'mysql:host=localhost;dbname=oophp';
//$dsn = 'mysql:host=localhost;dbname=oophp;port=8889';
//$dsn = 'sqlite:C:/xampp/htdocs/oophp/sqlite/oophp.db';

//changed to
$dsn = 'sqlite:D:/Apps/xampp/htdocs/projects/phpStorm/pdo-mysqli/sqlite/oophp.db';
//$dsn = 'sqlite:/Applications/MAMP/htdocs/oophp/sqlite/oophp.db';

$db = new PDO($dsn, 'oophp', 'lynda');