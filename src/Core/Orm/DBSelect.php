<?php

namespace Wepesi\Core\Orm;
class DBSelect
{
    private \PDO $_pdo;
    private string $table, $action;
    private array $_where ,$_fields ,$_results ,$_join_comparison_sign;
    private ?string $_leftJoin,$_rightJoin,$_join,$orderBy,$groupBY,$_dsc,$_asc,$_error;
    private int $_count;
    private ?int $_limit ,$_offset;
    use BuildQuery;

    /**
     *
     * @param type $pdo
     * @param string $table
     * @param string $action
     */
    function __construct(\PDO $pdo, string $table, string $action = null)
    {
        $this->table = $table;
        $this->_pdo = $pdo;
        $this->action = $action;
        $this->_where = $this->_fields = $this->_results = [];
        $this->_leftJoin = $this->_rightJoin = $this->_join = null;
        $this->orderBy = $this->groupBY = $this->_error=null;
        $this->_count = 0;
        $this->_limit = $this->_offset = $this->_dsc = $this->_asc = null;
        $this->_join_comparison_sign = ['=', '>', '<', '!=', '<>'];
    }

    /**
     * @param array $params
     * @return $this
     * @throws \Exception
     */
    function where(array $params = []): DBSelect
    {
        if (count($params)) {
            $comparisonOperator = ['<', '<=', '>', '>=', '<>', '!=', 'like'];
            // defined logical operator
            $logicalOperator = ['or', 'not'];
            // chech if the array is multidimensional array
            $key = array_keys($params);
            $key_exist = is_string($key[0]);
            if ($key_exist) {
                throw new \Exception('bad format, for where data');
            }
            $where = is_array($params[0]) ? $params : [$params];
            $whereLen = count($where);
            //
            $jointuresWhereCondition = '';
            $defaultComparison = '=';
            $lastIndexWhere = 1;
            $fieldValue = [];
            //
            foreach ($where as $WhereField) {
                $defaultLogical = ' AND ';
                $notComparison = null;
                // check if there is a logical operator `or`||`and`
                if (isset($WhereField[3])) {
                    // check id the defined operation exist in our defined tables
                    $defaultLogical = in_array(strtolower($WhereField[3]), $logicalOperator) ? $WhereField[3] : ' and ';
                    if ($defaultLogical === 'not') {
                        $notComparison = ' not ';
                    }
                }
                // check the field exist and defined by default one
                $_WhereField = strlen($WhereField[0]) > 0 ? $WhereField[0] : 'id';
                // check if comparison  exist on the array
                $defaultComparison = in_array($WhereField[1], $comparisonOperator) ? $WhereField[1] : '=';
                $jointuresWhereCondition .= " {$notComparison} {$_WhereField} {$defaultComparison}  ? ";
                $valueTopush = isset($WhereField[2]) ? $WhereField[2] : null;
                array_push($fieldValue, $valueTopush);
                if ($lastIndexWhere < $whereLen) {
                    if ($defaultLogical != 'not') {
                        $jointuresWhereCondition .= $defaultLogical;
                    }
                }
                $lastIndexWhere++;
            }
            $this->_where = [
                'field' => " WHERE {$jointuresWhereCondition} ",
                'value' => $fieldValue
            ];
        }
        return $this;
    }

    /**
     *
     * @param array $fields
     * @return $this
     */
    function field(array $fields = []): DBSelect
    {
        if (count($fields)) {
            $keys = $fields;
            $values = null;
            $this->_fields = [
                'keys' => '' . implode(',', $keys) . '',
                'values' => $values
            ];
        } else {
            $this->_fields = '*';
        }
        return $this;
    }

    /**
     *
     * @param array $group
     * @return $this
     */
    function groupBY(array $group = []): DBSelect
    {
        if (count($group)) $this->groupBY = 'group by field';
        return $this;
    }

    /**
     *
     * @param string $order
     * @return $this
     */
    function orderBy(string $order = null): DBSelect
    {
        if ($order) $this->orderBy = " order by ($order)";
        return $this;
    }

    function random(): DBSelect
    {
        $this->orderBy = ' order by RAND()';
        return $this;
    }

    /**
     *
     * @return $this
     */
    function ASC(): DBSelect
    {
        if ($this->orderBy) {
            $this->_asc = ' ASC';
            $this->_dsc = null;
        }
        return $this;
    }

    /**
     *
     * @return $this
     */
    function DESC(): DBSelect
    {
        if ($this->orderBy) {
            $this->_asc = null;
            $this->_dsc = ' DESC';
        }
        return $this;
    }

    /**
     *
     * @param int $limit
     * @return $this
     */
    function limit(int $limit): DBSelect
    {
        $this->_limit = " LIMIT {$limit}";
        return $this;
    }

    /**
     * @param int $offset
     * @return $this
     */
    function offset(int $offset): DBSelect
    {
        $this->_offset = " OFFSET {$offset}";
        return $this;
    }

    /**
     * @param string $table_name
     * @param array $onParameters : this represent the field
     * @return $this|false
     * this module allow to do a single left join, in case of multiple join, it's recommend use to use the `query` method with is better
     */
    private function leftJoin(string $table_name, array $onParameters = [])
    {
        $on = null;
        if (count($onParameters) == 3) {
            $_field1 = $onParameters[0];
            $_operator = $onParameters[1];
            $_field2 = $onParameters[2];
            if (in_array($_operator, $this->_join_comparison_sign)) $on = " ON {$_field1}{$_operator}{$_field2} ";
        }
        if (!$table_name) return false;
        $this->_leftJoin = " LEFT {$table_name} {$on} ";
        return $this;
    }

    /**
     * @param string $table_name
     * @param array $onParameters
     * @return $this|false
     */
    private function rightJoin(string $table_name, array $onParameters = [])
    {
        try {
            $on = null;
            if (count($onParameters) == 3) {
                $_field1 = $onParameters[0];
                $_operator = $onParameters[1];
                $_field2 = $onParameters[2];
                if (in_array($_operator, $this->_join_comparison_sign)) $on = " ON {$_field1}{$_operator}{$_field2} ";
            }
            if (!$table_name) return false;
            $this->_leftJoin = " RIGHT {$table_name} {$on} ";
            return $this;
        } catch (\Exception $ex) {
            $this->_error = true;
        }
    }

    /**
     * @param string $table_name
     * @param array $onParameters
     * @return $this|false
     * this module wil help only join single(one) table
     * for multiple join better to use query method for better perfomances
     */
    private function join(string $table_name, array $onParameters = [])
    {
        try {
            $on = null;
            if (count($onParameters) == 3) {
                $_field1 = $onParameters[0];
                $_operator = $onParameters[1];
                $_field2 = $onParameters[2];
                if (in_array($_operator, $this->_join_comparison_sign)) $on = " ON {$_field1}{$_operator}{$_field2} ";
            }
            if (!$table_name) return false;
            $this->_leftJoin = " JOIN {$table_name} {$on} ";
            return $this;
        } catch (\Exception $ex) {
            $this->_error = true;
        }
    }

    /**
     *
     */
    private function select()
    {
        $fields = $this->_fields['keys'] ?? '*';
        //
        $WHERE = $this->_where['field'] ?? '';
        $params = $this->_where['value'] ?? [];
        //
        $sortedASC_DESC = $this->_asc || $this->_dsc ?( $this->_asc??$this->_dsc) :  null;
        $_jointure = '';
        //
        $sql = "SELECT {$fields} FROM {$this->table} {$_jointure} " . $WHERE . $this->groupBY . $this->orderBy . $sortedASC_DESC . $this->_limit . $this->_offset;
        $this->query($sql, $params);
    }

    /**
     *
     */
    private function Totalcount():void
    {
        $WHERE = $this->_where['field'] ?? '';
        $params = $this->_where['value'] ?? [];
        $sql = "SELECT COUNT(*) as count FROM {$this->table} " . $WHERE;
        $this->query($sql, $params);
    }

    /**
     *
     * @param string $sql
     * @param array $params
     */
    private function query(string $sql, array $params = [])
    {
        $q = $this->executeQuery($this->_pdo, $sql, $params);
        $this->_results = $q['result'];
        $this->_count = $q['count'];
        $this->_error = $q['error'];
    }

    /**
     *
     */
    private function build()
    {
        if ($this->action && $this->action == 'count') {
            $this->Totalcount();
        } else {
            $this->select();
        }
    }

    /**
     *
     * @return object
     * execute query to get result
     */
    function result()
    {
        $this->build();
        return $this->action == 'count' ? count($this->_results) : $this->_results;
    }

    /**
     *
     * @return type
     * return an error status when an error occur while doing an query
     */
    function error()
    {
        return $this->_error;
    }
}