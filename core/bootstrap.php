<?php

use App\Core\App;
use App\Core\Database\{QueryBuilder, Connection};

App::bind('config', require 'config.php');

App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));

App::bind('CsmbBoard', new CsmbBoard( new JsonFormat()
    
));

App::bind('CsmBoard', new CsmBoard( new XmlFormat()
    
));