<h1>Informações do Cliente</h1>
<div class="jumbotron">
<?php

require_once "../pages/header.php";

require_once "db_cliente.php";

IF(isset($_GET)) {
    $key = $_GET["codigo"] - 1;   
		
		echo "<table class=\"table table-striped\">
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
                            <tbody>";		

        echo "<tr>
		        <td><strong>".$cliente[$key]->getId()."</strong></td>";
			echo "<td><strong>".$cliente[$key]->getNome()."</strong></td>";
			echo "<td><strong>".$cliente[$key]->getCpf()."</strong></td>";
			echo "<td><strong>".$cliente[$key]->getEmail()."</strong></td>";
			echo "<td><strong>".$cliente[$key]->getTelefone()."</strong></td>";
			echo "<td><strong>".$cliente[$key]->getEndereco()."</strong></td>";
			echo "<td><strong>".$cliente[$key]->getMunicipio()."</strong></td>";
			echo "<td><strong>".$cliente[$key]->getUf()."</strong></td>";
			echo "<td><strong>".$cliente[$key]->getCep()."</strong></td>";
		echo " </tr> </tbody>
                </table>";

}
?>
<a href="../index.php"><button class="btn btn-info" >Voltar</button></a>
</div><!-- /jumbotron -->

<?php require_once "../pages/footer.php"; ?>



