<?php


namespace Wepesi\Core\Orm;


trait BuildQuery
{
    protected function executeQuery(\PDO $pdo, string $sql, array $params = []): array
    {
        try {
            $data_result = [
                'result' => [],
                'lastID' => -1,
                'count' => null,
                'error' => null,
            ];
            $query = $pdo->prepare($sql);
            $x = 1;
            if (count($params)) {
                foreach ($params as $param) {
                    $query->bindValue($x, $param);
                    $x++;
                }
            }
            $query->execute();

            if (strchr(strtolower($sql), 'update') || strchr(strtolower($sql), 'select')) {
                $data_result['result'] = $query->fetchAll(\PDO::FETCH_OBJ);
                $data_result['count'] = $query->rowCount();
            } else if (strchr(strtolower($sql), 'insert into')) {
                $data_result['lastID'] = $pdo->lastInsertId();
            }
            return $data_result;
        } catch (\PDOException $ex) {
            $data_result['error'] = $ex->getmessage();
            return $data_result;
        }
    }
}