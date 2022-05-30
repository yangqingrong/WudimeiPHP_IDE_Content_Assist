<?php

namespace Wudimei;

/**
 * Description of DB
 *
 * @author rong
 */
class DB {

    use DB_NoStaticFn;/**
     * 
     * @var array
     */

    protected $connections;
    protected $configs;
    protected $config_loaded;

    /**
     * Register a connection with the manager.
     *
     * @param  array   $config
     * @param  string  $name
     * @return void
     */
    public static function addConnection($config, $name = 'default') {
        
    }

    public static function loadConfig($configFile) {
        
    }

    /**
     * 
     * @param string $name
     * @return  \Wudimei\DB\Query\PDO_Abstract
     */
    public static function connection($name = 'default') {
        
    }

    public static function __call($method, $args) {
        
    }

}
