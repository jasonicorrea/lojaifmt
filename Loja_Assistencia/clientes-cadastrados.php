<?php
include 'cabecalho.php';
include './bancodao.php';

$bancodao = new bancodao($conexao);


$c = new Cliente();

$c->setId($_GET)['id'];
$c->setNome($_GET['nome']);
$c->setRg($_GET['rg']);
$c->setEndereço($_GET['endereço']);
$c->setDataCad($_GET['data de cadastro']);
$c->setCpf($_GET['cpf']);
$c->setFoneMovel($_GET['telefone movel']);
$c->setNumero($_GET['numero']);
$c->setCidade($_GET['cidade']);
$c->setUf($_GET['uf']);
$c->setFoneFixo($_GET['telefone fixo']);
$c->setEmail($_GET['email']);



?>

<div class="container">
    <div class="principal">

<?php if ($bancodao->insereCli($c)) { ?>
            <h2 class="text-success">Produto Cadastrado</h2>
        <?php } else { ?>
            <h2 class="text-danger">Erro ao Cadastrar</h2>
        <?php } ?>

        </p>
    </div>
</div>