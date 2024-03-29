<?php

namespace Wepesi\Core\Orm;
    class QueryTransactions
    {
        private \PDO $_pdo;
        private string $table;
        private $_where, $_fields;
        private  $_error,$_results = false,$_count = 0;
        function __construct(\PDO $pdo, string $table)
        {
            $this->table = $table;
            $this->_pdo = $pdo;
        }
        /**
         * TODO make where function more expressive and easy to use with a better structure. on v3
         * be able to make a where with field name as a kye
         * [
         * "field"=>"field_name",
         * "Op"=>"or,and,=,>,<,<>,.."
         * "value"=>"field_value"
         * ]
        **/
        function where(array $where = [])
        {
            /**
             * select WHERE format
             * [
             *  [field,comparisonOperator,value,logicOperator]
             * ]
             * eg:[
             *  ["name","=","john","and"]
             * ]
             */
            if (count($where)) {
                $params = [];
                /**
                 * defined comparion operator to avoid error while assing operation witch does not exist
                 */
                $logicalOperator = ["or", "not"];
                // chech if the array is multidimensional array
                $where = is_array($where[0]) ? $where : [$where];
                $whereLen = count($where);
                //
                $jointure_Where_Condition = null;
                $defaultComparison = "=";
                $lastIndexWhere = 1;
                $fieldValue = [];
                //
                foreach ($where as $WhereField) {
                    $default_logical_operator = " and ";
                    $notComparison = null;
                    // check if there is a logical operator `or`||`and`
                    if (isset($WhereField[3])) {
                        // check id the defined operation exist in our defined tables
                        $default_logical_operator = in_array(strtolower($WhereField[3]), $logicalOperator) ? $WhereField[3] : " and ";
                        if ($default_logical_operator === "not") {
                            $notComparison = " not ";
                        }
                    }
                    // check the field exist and defined by default one
                    $where_field_name = strlen(trim($WhereField[0])) > 0 ? trim($WhereField[0]) : "id";
                    $jointure_Where_Condition .=  $notComparison.$where_field_name.$defaultComparison." ? ";
                    $where_field_value = $WhereField[2] ?? null;
                    array_push($fieldValue, $where_field_value);
//
                        $params[$where_field_name]=$where_field_value;
                    if ($lastIndexWhere < $whereLen) {
                        if ($default_logical_operator != "not") {
                            $jointure_Where_Condition .= $default_logical_operator;
                        }
                    }
                    $lastIndexWhere++;
                }
                $this->_where = [
                    "field" => "WHERE ".$jointure_Where_Condition,
                    "value" => $fieldValue,
                    "params" => $params
                ];
            } else {
                $this->_where = [];
            }
            return $this;

        }
        // 
        function field(array $fields = [])
        {
            if (count($fields) && !$this->_fields) {
                $keys = $fields;
//                $values = null;
                $params = $keys;
                $x = 1;
                $keys = array_keys($fields);
                $values = null;
                $_trim_key=[];
                foreach ($fields as $field) {
                    $values .= "? ";
                    if ($x < count($fields)) {
                        $values .= ', ';
                    }
                    //remove white space around the collum name
                    $_trim_key[]=trim($keys[($x-1)]);
                    $x++;
                }
                $keys=$_trim_key;
                //
                $implode_keys= "`" . implode('`= ?,`', $keys) . "`";
                $implode_keys.="=?";
                //
                $this->_fields = [
                    "keys" => $implode_keys,
                    "values" => $values,
                    "params" => $params
                ];
            }
            return $this;
        }

        /**
         * @param $sql
         * @param array $params
         * @return $this
         * this module is use to execute sql request
         */
        private function query($sql, array $params = [])
        {
            $q = $this->executeQuery($this->_pdo, $sql, $params);
            $this->_results = $q['result'];
            $this->_count = $q['count'];
            $this->_error = $q['error'];
        }

        // update module
        private function update(){
            $where = $this->_where['field'] ?? null;
            $where_params = $this->_where['params'] ?? [];
            $fields = $this->_fields['keys'];
            $field_params= $this->_fields['params'] ?? [];
            $params=array_merge($field_params, $where_params);
            //generate the sql query to be execute
            $sql = "UPDATE $this->table SET $fields  $where";
            return $this->query($sql, $params);
        }

        /**
         * @return bool
         * return result after a request select
         */
        function result()
        {
            $this->update();
            return $this->_results;
        }
        // return an error status when an error occure while doing an querry
        function error()
        {
            return $this->_error;
        }

        /**
         * @return int
         * return counted rows of a select query
         */
        function count()
        {
            return $this->_count;
        }
    }