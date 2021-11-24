<?php


function validate(array $validations)
{

    $result = [];
    $params = '';
    foreach ($validations as $field => $validate) {
        if (!strpos($validate, '|')) {
            if (strpos($validate, ':')) {
                [$validate, $params] = explode(':', $validate);
            }
            $result[$field] = $validate($field, $params);
        } else {
            $explodePipeValidate = explode('|', $validate);
            foreach ($explodePipeValidate as $validate) {
                if(strpos($validate, ':')){
                    [$validate, $params] = explode(':', $validate);
                }
               $result[$field] = $validate($field,$params);
            }
        }
        die();
    }

    if (in_array(false, $result)) {
        return false;
    }

    return $result;
}

function required($field)
{
    if ($_POST[$field] === '') {
        setFlash($field, 'O campo é obrigatorio');
        return false;
    }
    return filter_input(INPUT_POST, $field, FILTER_SANITIZE_STRING);
}

function email($field){
    $emailIsValid = filter_input(INPUT_POST, $field, FILTER_VALIDATE_EMAIL);
    if(!$emailIsValid){
       setFlash($field, 'Email é invalido!');
       return false;
    }

    return filter_input(INPUT_POST, $field, FILTER_SANITIZE_STRING);
}

function unique($field, $params)
{
   $data = filter_input(INPUT_POST, $field, FILTER_SANITIZE_STRING);
   $user = findBy($params,$field,$data);

   if(!$user){
       setFlash($field, 'O campo está cadastrado');
       return false;
   }
   return $data;
}

function maxlen()
{
}
