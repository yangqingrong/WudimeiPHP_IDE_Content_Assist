<?php

/**
 * Description of DB_NoStaticFn
 *
 * @author yangqingrong@wudimei.com
 */
trait DB_NoStaticFn {

    public function clearSqlArray() {
        
    }

    /**
     * 
     * @param string $select
     * @return \Wudimei\DB\Query\PDO_Abstract
     */
    public function select($select = '*') {
        
    }

    /**
     * 
     * @param string $tableName
     * @return \Wudimei\DB\Query\PDO_Abstract
     */
    public function from($tableName) {
        
    }

    /**
     * 
     * @param string $tableName
     * @return \Wudimei\DB\Query\PDO_Abstract
     */
    public function table($tableName) {
        
    }

    /**
     * 
     * @param int $limit
     * @param int $offset
     * @return \Wudimei\DB\Query\PDO_Abstract
     */
    public function limit($limit, $offset) {
        
    }

    /**
     * 
     * @param string $field
     * @param string $direction
     * @return \Wudimei\DB\Query\PDO_Abstract
     */
    public function orderBy($field, $direction = 'asc') {
        
    }

    /**
     * 
     * @param string $field
     * @return \Wudimei\DB\Query\PDO_Abstract
     */
    public function groupBy($field) {
        
    }

    /**
     * 
     * @param string $field
     * @param string $param2
     * @param string $param3
     * @param string $boolean
     * @return \Wudimei\DB\Query\PDO_Abstract
     */
    public function where($field, $param2, $param3 = NULL, $boolean = 'and') {
        
    }

    /**
     * 
     * @param string $field
     * @param string $param2
     * @param string $param3
     * @return \Wudimei\DB\Query\PDO_Abstract
     */
    public function orWhere($field, $param2, $param3 = NULL) {
        
    }

    /**
     * 
     * @param string $sql
     * @param array $bindings
     * @param string $boolean
     * @return \Wudimei\DB\Query\PDO_Abstract
     */
    public function whereRaw($sql, $bindings = array(
            ), $boolean = 'and') {
        
    }

    /**
     * 
     * @param string $sql
     * @param array $bindings
     * @return \Wudimei\DB\Query\PDO_Abstract
     */
    public function orWhereRaw($sql, $bindings = array(
            )) {
        
    }

    /**
     * 
     * @param string $field
     * @param array $values
     * @param string $boolean
     * @return \Wudimei\DB\Query\PDO_Abstract
     */
    public function whereIn($field, $values = array(
            ), $boolean = 'and') {
        
    }

    /**
     * 
     * @param string $field
     * @param array $values
     * @return \Wudimei\DB\Query\PDO_Abstract
     */
    public function orWhereIn($field, $values = array(
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
    public function having($field, $param2, $param3 = NULL, $boolean = 'and') {
        
    }

    /**
     * 
     * @param string $field
     * @param string $param2
     * @param string $param3
     * @return \Wudimei\DB\Query\PDO_Abstract
     */
    public function orHaving($field, $param2, $param3 = NULL) {
        
    }

    /**
     * 
     * @param string $sql
     * @param array $bindings
     * @param string $boolean
     * @return \Wudimei\DB\Query\PDO_Abstract
     */
    public function havingRaw($sql, $bindings = array(
            ), $boolean = 'and') {
        
    }

    /**
     * 
     * @param string $sql
     * @param array $bindings
     * @return \Wudimei\DB\Query\PDO_Abstract
     */
    public function orHavingRaw($sql, $bindings = array(
            )) {
        
    }

    /**
     * 
     * @param string $name
     * @param string $default
     * @return string
     */
    public function getSqlArrayItem($name, $default = NULL) {
        
    }

    public function appendBindings($moreParams) {
        
    }

    public function buildJoin() {
        
    }

    /**
     * $where = [
     *   [ where , id , =, ?, and ]
     *   [ whereIn , id, [1,2,3],and ]
     * ]
     * @return string
     */
    public function buildWhere() {
        
    }

    /**
     * @return string
     */
    public function buildHaving() {
        
    }

    /**
     * @return string
     */
    public function toSql() {
        
    }

    public function sql() {
        
    }

    /**
     * @return array
     */
    public function get() {
        
    }

    /**
     * @return array
     */
    public function all() {
        
    }

    /**
     * @return array|stdClass
     */
    public function first() {
        
    }

    /**
     * 
     * @param number $perPage
     * @param int $page
     * @return Paginator
     */
    public function paginate($perPage = 15, $page = NULL) {
        
    }

    /**
     * 
     * @param string $field
     * @return int
     */
    public function count($field = '*') {
        
    }

    /**
     *
     * @param string $field
     * @return int|float|double
     */
    public function max($field = '*') {
        
    }

    /**
     *
     * @param string $field
     * @return int|float|double
     */
    public function min($field = '*') {
        
    }

    /**
     *
     * @param string $field
     * @return int|float|double
     */
    public function sum($field = '*') {
        
    }

    /**
     *
     * @param string $field
     * @return int|float|double
     */
    public function avg($field = '*') {
        
    }

    /**
     * @param string $function sql function name,eg. max,count
     * @param string $field
     * @return int|float|double
     */
    public function _function($function, $field = '*') {
        
    }

    /**
     * @return \PDO
     */
    public function getPDO() {
        
    }

    public function getDSN() {
        
    }

    /**
     * 
     * @param unknown $sql
     * @param unknown $params
     * @return array
     */
    public function executeQuery($sql, $params = NULL) {
        
    }

    /**
     * 
     * @param unknown $sql
     * @param unknown $params
     * @return PDOStatement
     */
    public function executeUpdate($sql, $params = NULL) {
        
    }

    /**
     * 
     * @param \PDOStatement $sth
     */
    public function errorInfo($sth, $sql, $params) {
        
    }

    /**
     * 
     * @param array|\stdClass $data
     * @return int last insert id
     */
    public function insert($data) {
        
    }

    /**
     * 
     * @param array|\stdClass $data
     * @return int affected rows
     */
    public function update($data) {
        
    }

    /**
     * @return int affected rows
     */
    public function delete() {
        
    }

    protected function _join($join_type, $table, $condition, $params = array(
            )) {
        
    }

    public function leftJoin($table, $condition, $params = array(
            )) {
        
    }

    public function rightJoin($table, $condition, $params = array(
            )) {
        
    }

    public function innerJoin($table, $condition, $params = array(
            )) {
        
    }

    public function outerJoin($table, $condition, $params = array(
            )) {
        
    }

    public function naturalJoin($table, $condition, $params = array(
            )) {
        
    }

}
