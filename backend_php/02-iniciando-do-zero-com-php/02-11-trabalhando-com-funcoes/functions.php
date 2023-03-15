<?php 


function functionName($arg1, $arg2, $arg3, $arg4, $arg5, $arg6) {
    $body = [$arg1, $arg2, $arg3, $arg4, $arg5, $arg6];
    return $body;
}

function functionDEFAULT($arg1, $arg2 = 'default') {
    $body = [$arg1, $arg2];
    return $body;
}
function calcImc() {

}

function PayTotal($price) {
    static($total);
    $total += $price;
    return "<p> O total a pagaar é <span class='tag'> R$". number_format($total, 2, ',', '.') ."</span></p>"; 
}

function MyClass() {
    $studenNames = func_get_arg();
    $studenCounts = func_num_args();

    return [
        'alunos' => $studenNames,
        'presentes' => $studenCounts
    ];
}
?>