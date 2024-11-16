<?php
$num = $_POST['num'];
$op = $_POST['op'];
$limit = $_POST['limit'];

$operations = [];

switch ($op) {
    case 'sum':
        for ($i = 1; $i <= $limit; $i++) {
            $operation = [];
            $operation['num1'] = $num;
            $operation['symbol'] = '+';
            $operation['num2'] = $i;
            $operation['equal'] = '=';
            $operation['result'] = $num + $i;
            $operations[] = $operation;
        }
        break;
    case 'res':
        for ($i = 1; $i <= $limit; $i++) {
            $operation = [];
            $operation['num1'] = $num;
            $operation['symbol'] = '-';
            $operation['num2'] = $i;
            $operation['equal'] = '=';
            $operation['result'] = $num - $i;
            $operations[] = $operation;
        }
        break;
    case 'mul':
        for ($i = 1; $i <= $limit; $i++) {
            $operation = [];
            $operation['num1'] = $num;
            $operation['symbol'] = '*';
            $operation['num2'] = $i;
            $operation['equal'] = '=';
            $operation['result'] = $num * $i;
            $operations[] = $operation;
        }
        break;
    case 'div':
        for ($i = 1; $i <= $limit; $i++) {
            $operation = [];
            $operation['num1'] = $num;
            $operation['symbol'] = '/';
            $operation['num2'] = $i;
            $operation['equal'] = '=';
            $operation['result'] = $num / $i;
            $operations[] = $operation;
        }
        break;
    default:
        $result = 'Operación no válida';
}

echo json_encode($operations);
