<?php

function all($table, $fields = '*')
{
    try {
        $connect = Connect();
        $query = $connect->query("select {$fields} from {$table}");
        return $query->fetchAll();
    } catch (PDOException $e) {
        var_dump($e->getMessage());
    }
}
    function findBy($table, $field, $value, $fields = '*')
    {
        try {
            $connect = Connect();
            $prepare = $connect->prepare("select {$fields} from {$table} where {$field} = :{$field}");
            $prepare->execute([
              $field => $value
            ]);
            return $prepare->fetch();
        } catch (PDOException $e) {
            var_dump($e->getMessage());
        }
    }

