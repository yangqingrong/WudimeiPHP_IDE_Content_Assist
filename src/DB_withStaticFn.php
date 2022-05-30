<?php

/**
 * Description of DB_NoStaticFn
 *
 * @author yangqingrong@wudimei.com
 */
trait DB_withStaticFn {

    public static function clearSqlArray() {
        
    }

    /**
     * 
     * @param string $select
     * @return \Wudimei\DB\Query\PDO_Abstract
     */
    public static function select($select = '*') {
        
    }

    /**
     * 
     * @param string $tableName
     * @return \Wudimei\DB\Query\PDO_Abstract
     */
    public static function from($tableName) {
        
    }

    /**
     * 
     * @param string $tableName
     * @return \Wudimei\DB\Query\PDO_Abstract
     */
    public static function table($tableName) {
        
    }

    /**
     * 
     * @param int $limit
     * @param int $offset
     * @return \Wudimei\DB\Query\PDO_Abstract
     */
    public static function limit($limit, $offset) {
        
    }

    /**
     * 
     * @param string $field
     * @param string $direction
     * @return \Wudimei\DB\Query\PDO_Abstract
     */
    public static function orderBy($field, $direction = 'asc') {
        
    }

    /**
     * 
     * @param string $field
     * @return \Wudimei\DB\Query\PDO_Abstract
     */
    public static function groupBy($field) {
        
    }

    /**
     * 
     * @param string $field
     * @param string $param2
     * @param string $param3
     * @param string $boolean
     * @return \Wudimei\DB\Query\PDO_Abstract
     */
    public static function where($field, $param2, $param3 = NULL, $boolean = 'and') {
        
    }

    /**
     * 
     * @param string $field
     * @param string $param2
     * @param string $param3
     * @return \Wudimei\DB\Query\PDO_Abstract
     */
    public static function orWhere($field, $param2, $param3 = NULL) {
        
    }

    /**
     * 
     * @param string $sql
     * @param array $bindings
     * @param string $boolean
     * @return \Wudimei\DB\Query\PDO_Abstract
     */
    public static function whereRaw($sql, $bindings = array(
            ), $boolean = 'and') {
        
    }

    /**
     * 
     * @param string $sql
     * @param array $bindings
     * @return \Wudimei\DB\Query\PDO_Abstract
     */
    public static function orWhereRaw($sql, $bindings = array(
            )) {
        
    }

    /**
     * 
     * @param string $field
     * @param array $values
     * @param string $boolean
     * @return \Wudimei\DB\Query\PDO_Abstract
     */
    public static function whereIn($field, $values = array(
            ), $boolean = 'and') {
        
    }

    /**
     * 
     * @param string $field
     * @param array $values
     * @return \Wudimei\DB\Query\PDO_Abstract
     */
    public static function orWhereIn($field, $values = array(
            )) {
        
    }

    /**
     * 
     * @param string $field
     * @param string $param2
     * @param string $param3
     * @param string $boolean
     * @return \Wudimei\DB\Query\PDO_Abstract
     */
    public static function having($field, $param2, $param3 = NULL, $boolean = 'and') {
        
    }

    /**
     * 
     * @param string $field
     * @param string $param2
     * @param string $param3
     * @return \Wudimei\DB\Query\PDO_Abstract
     */
    public static function orHaving($field, $param2, $param3 = NULL) {
        
    }

    /**
     * 
     * @param string $sql
     * @param array $bindings
     * @param string $boolean
     * @return \Wudimei\DB\Query\PDO_Abstract
     */
    public static function havingRaw($sql, $bindings = array(
            ), $boolean = 'and') {
        
    }

    /**
     * 
     * @param string $sql
     * @param array $bindings
     * @return \Wudimei\DB\Query\PDO_Abstract
     */
    public static function orHavingRaw($sql, $bindings = array(
            )) {
        
    }

    /**
     * 
     * @param string $name
     * @param string $default
     * @return string
     */
    public static function getSqlArrayItem($name, $default = NULL) {
        
    }

    public static function appendBindings($moreParams) {
        
    }

    public static function buildJoin() {
        
    }

    /**
     * $where = [
     *   [ where , id , =, ?, and ]
     *   [ whereIn , id, [1,2,3],and ]
     * ]
     * @return string
     */
    public static function buildWhere() {
        
    }

    /**
     * @return string
     */
    public static function buildHaving() {
        
    }

    /**
     * @return string
     */
    public static function toSql() {
        
    }

    public static function sql() {
        
    }

    /**
     * @return array
     */
    public static function get() {
        
    }

    /**
     * @return array
     */
    public static function all() {
        
    }

    /**
     * @return array|stdClass
     */
    public static function first() {
        
    }

    /**
     * 
     * @param number $perPage
     * @param int $page
     * @return Paginator
     */
    public static function paginate($perPage = 15, $page = NULL) {
        
    }

    /**
     * 
     * @param string $field
     * @return int
     */
    public static function count($field = '*') {
        
    }

    /**
     *
     * @param string $field
     * @return int|float|double
     */
    public static function max($field = '*') {
        
    }

    /**
     *
     * @param string $field
     * @return int|float|double
     */
    public static function min($field = '*') {
        
    }

    /**
     *
     * @param string $field
     * @return int|float|double
     */
    public static function sum($field = '*') {
        
    }

    /**
     *
     * @param string $field
     * @return int|float|double
     */
    public static function avg($field = '*') {
        
    }

    /**
     * @param string $function sql function name,eg. max,count
     * @param string $field
     * @return int|float|double
     */
    public static function _function($function, $field = '*') {
        
    }

    /**
     * @return \PDO
     */
    public static function getPDO() {
        
    }

    public static function getDSN() {
        
    }

    /**
     * 
     * @param unknown $sql
     * @param unknown $params
     * @return array
     */
    public static function executeQuery($sql, $params = NULL) {
        
    }

    /**
     * 
     * @param unknown $sql
     * @param unknown $params
     * @return PDOStatement
     */
    public static function executeUpdate($sql, $params = NULL) {
        
    }

    /**
     * 
     * @param \PDOStatement $sth
     */
    public static function errorInfo($sth, $sql, $params) {
        
    }

    /**
     * 
     * @param array|\stdClass $data
     * @return int last insert id
     */
    public static function insert($data) {
        
    }

    /**
     * 
     * @param array|\stdClass $data
     * @return int affected rows
     */
    public static function update($data) {
        
    }

    /**
     * @return int affected rows
     */
    public static function delete() {
        
    }

    protected static function _join($join_type, $table, $condition, $params = array(
            )) {
        
    }

    public static function leftJoin($table, $condition, $params = array(
            )) {
        
    }

    public static function rightJoin($table, $condition, $params = array(
            )) {
        
    }

    public static function innerJoin($table, $condition, $params = array(
            )) {
        
    }

    public static function outerJoin($table, $condition, $params = array(
            )) {
        
    }

    public static function naturalJoin($table, $condition, $params = array(
            )) {
        
    }

}
