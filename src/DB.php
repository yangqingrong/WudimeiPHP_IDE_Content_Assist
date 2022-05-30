<?php

 

/**
 * Description of DB
 *
 * @author rong
 */

namespace {

    class DB {

        use DB_withStaticFn;/**
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

}