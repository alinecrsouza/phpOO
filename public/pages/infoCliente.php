
<h1>Informações do Cliente</h1>
<div class="jumbotron">
<?php

require_once "../pages/header.php";

require_once "dbCliente.php";

IF(isset($_GET)) {
    $key = $_GET["codigo"] - 1;
}
?>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>CPF</th>
                <th>E-mail</th>
                <th>Telefone</th>
                <th>Endereço</th>
                <th>Municipio</th>
                <th>UF</th>
                <th>CEP</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><strong><?php echo $cliente[$key]->getId();?></strong></td>
			    <td><strong><?php echo $cliente[$key]->getNome();?></strong></td>
			    <td><strong><?php echo $cliente[$key]->getCpf();?></strong></td>
			    <td><strong><?php echo $cliente[$key]->getEmail();?></strong></td>
			    <td><strong><?php echo $cliente[$key]->getTelefone();?></strong></td>
			    <td><strong><?php echo $cliente[$key]->getEndereco();?></strong></td>
			    <td><strong><?php echo $cliente[$key]->getMunicipio();?></strong></td>
			    <td><strong><?php echo $cliente[$key]->getUf();?></strong></td>
			    <td><strong><?php echo $cliente[$key]->getCep();?></strong></td>
		    </tr>
        </tbody>
    </table>

<a href="../index.php"><button class="btn btn-info" >Voltar</button></a>
</div><!-- /jumbotron -->

<?php require_once "../pages/footer.php"; ?>