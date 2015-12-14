
<?php

require_once "header.php";
require_once "dbCliente.php";

require_once "/src/App/Cliente/Tipos/ClientePessoaFisica.php";
use App\Cliente\Tipos\ClientePessoaFisica as ClientePessoaFisica;

IF(isset($_GET)) {
    $key = $_GET["codigo"] - 1;
}
?>
<h1>Informações do Cliente</h1>
<div class="jumbotron">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>CPF/CNPJ</th>
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
                <td><?php echo $cliente[$key]->getId();?></td>
			    <td><?php echo $cliente[$key]->getNome();?></td>
			    <td><?php
                    if($cliente[$key] instanceof ClientePessoaFisica){
                        echo $cliente[$key]->getCpf();
                    }
                    else{
                        echo $cliente[$key]->getCnpj();
                    }
                    ?>
                </td>
			    <td><?php echo $cliente[$key]->getEmail();?></td>
			    <td><?php echo $cliente[$key]->getTelefone();?></td>
			    <td><?php echo $cliente[$key]->getEndereco();?></td>
			    <td><?php echo $cliente[$key]->getMunicipio();?></td>
			    <td><?php echo $cliente[$key]->getUf();?></td>
			    <td><?php echo $cliente[$key]->getCep();?></td>
		    </tr>
        </tbody>
    </table>
    <?php
        if(!$cliente[$key]->getEnderecoCob()){
            echo "<strong>O cliente não tem endereço de cobrança cadastrado. </strong><br><br>";
        }
        else{
            ?>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Endereço de Cobrança</th>
                    <th>Municipio</th>
                    <th>UF</th>
                    <th>CEP</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><?php echo $cliente[$key]->getEnderecoCob();?></td>
                    <td><?php echo $cliente[$key]->getMunicipioCob();?></td>
                    <td><?php echo $cliente[$key]->getUfCob();?></td>
                    <td><?php echo $cliente[$key]->getCepCob();?></td>
                </tr>
                </tbody>
            </table>
            <?php
        }
    ?>

<a href="../index.php"><button class="btn btn-info" >Voltar</button></a>
</div><!-- /jumbotron -->

<?php require_once "../pages/footer.php"; ?>