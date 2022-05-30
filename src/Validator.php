<?php

class Validator {

    /**
     * 
     * @param array $array
     * @param array $rules
     * @param array $messages
     */
    public static function validate($array, $rules, $messages = array(
            ), $attributes = array(
            )) {
        
    }

    /**
     * 
     * @param string $rules
     */
    public static function parseRule($rules) {
        
    }

    /**
     * 
     * @param string $fieldName
     * @param string $ruleName
     * @param array $messages
     * @param RuleValidator $ruleValidator
     */
    public static function addError($fieldName, $ruleName, $messages, $ruleValidator) {
        
    }

    public static function setError($fieldName, $errorMessage) {
        
    }

    /**
     * get error array
     * @return array errors
     */
    public static function getErrors() {
        
    }

    public static function prepareFieldLabels($langGroupName) {
        
    }

}
