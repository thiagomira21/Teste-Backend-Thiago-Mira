<?php

require 'bootstrap.php';

try {
    $data = Router();

    if (!isset($data['data'])) {
        throw new Exception("O indice data não existe");
    }

    if (!isset($data['data']['title'])) {
        throw new Exception("O indice title está faltando");
    }

    if (!isset($data['view'])) {
        throw new Exception('O indice da view está faltando');
    }

    if (!file_exists(VIEWS . $data['view'])) {
        throw new Exception("Essa view {$data['view']} não existe");
    }

    extract($data['data']);

    $view = $data['view'];

    require VIEWS . 'layouts/app_view.php';
} catch (Exception $e) {
    var_dump($e->getMessage());
}
