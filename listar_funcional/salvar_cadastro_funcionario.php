<?php
include "conectar.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$rg = $_POST['rg'];
$cpf = $_POST['cpf'];
$senha = $_POST['senha'];
$endereco = $_POST['endereco'];
$materia = $_POST['materia'];
$confirme_senha = $_POST['confirme_senha'];

function validaCPF($cpf = null) {

    // Verifica se um número foi informado
    if(empty($cpf)) {
        return false;
    }
    
    // Elimina possivel mascara
    $cpf = preg_replace("/[^0-9]/", "", $cpf);
    $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
    
    // Verifica se o numero de digitos informados é igual a 11 
    if (strlen($cpf) != 11) {
        return false;
    }
    // Verifica se nenhuma das sequências invalidas abaixo 
    // foi digitada. Caso afirmativo, retorna falso
    else if ($cpf == '00000000000' || 
        $cpf == '11111111111' || 
        $cpf == '22222222222' || 
        $cpf == '33333333333' || 
        $cpf == '44444444444' || 
        $cpf == '55555555555' || 
        $cpf == '66666666666' || 
        $cpf == '77777777777' || 
        $cpf == '88888888888' || 
        $cpf == '99999999999') {
        return false;
     // Calcula os digitos verificadores para verificar se o
     // CPF é válido
     } else {   
        
        for ($t = 9; $t < 11; $t++) {
            
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf{$c} * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf{$c} != $d) {
                return false;
            }
        }
    
        return true;
    }
    }

if($nome == null or $email == null or $rg == null or $senha == null or $endereco == null or $materia == null or $confirme_senha == null or $cpf == null){
    header('location: ../adm/cadastro_funcionario.php?msg=3');
}
else if ($senha == $confirme_senha && validaCPF($cpf)==true){
    $sql->query("INSERT INTO funcionario(nome_funcionario,email_funcionario,rg_funcionario,cpf_funcionario, materia_funcionario,endereco_funcionario,senha)
    VALUES ('$nome','$email','$rg','$cpf','$materia','$endereco','$senha')");
    header('location: ../adm/cadastro_funcionario.php?msg=1');
}
else{
    header('location: ../adm/cadastro_funcionario.php?msg=2');
}
?>
