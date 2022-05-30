<?php

namespace Wudimei\DB;

class Model {

    use DB_NoStaticFn,
        DB_withStaticFn;

    public $table;
    public $primaryKey;
    public $connection;

    /**
     * 
     * @var PDO_MYSQL
     */
    public $select;

    public function __callstatic($method, $args) {
        
    }

    public static function _find($id) {
        
    }

    public function __call($name, $args) {
        
    }

}
