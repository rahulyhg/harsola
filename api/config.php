<?php

use lib\Config;

// DB Config
Config::write('db.host', 'localhost');
Config::write('db.port', '');
Config::write('db.basename', 'harsola_samaj');
Config::write('db.user', 'root');
Config::write('db.password', '');

// Project Config
Config::write('path', 'http://localhost/hr-ng/api');