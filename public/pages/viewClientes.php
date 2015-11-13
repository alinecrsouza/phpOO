<?php
require_once "header.php";
?>
                <h1>Clientes</h1>
                    <div class="jumbotron">
                        <?php
                        if(isset($_POST['asc'])){
                            ksort($cliente);
                        }elseif(isset($_POST['desc'])){
                            krsort($cliente);
                        }else{
                            ksort($cliente);
                        }
                        ?>
                        <form method="post">
                            <button class="btn btn-primary" type="submit" value="asc" name="asc">
                                <span class="glyphicon glyphicon-sort-by-alphabet"></span>
                            </button>
                            <button class="btn btn-primary" type="submit" value="desc" name="desc">
                                <span class="glyphicon glyphicon-sort-by-alphabet-alt"></span>
                            </button>
                        </form>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Código</th>
                                    <th>Nome</th>
                                    <th>CPF</th>
                                    <th>E-mail</th>
                                    <th>Telefone</th>
                                    <th>Mais Informações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($cliente as $key => $value) {
                                ?>
                                <tr>
                                <td><?php echo $value->getId();?></td>
                                <td><?php echo $value->getNome();?></td>
                                <td><?php echo $value->getCPF();?></td>
                                <td><?php echo $value->getEmail();?></td>
                                <td><?php echo $value->getTelefone();?></td>
                                <td>
                                    <a href="./pages/infoCliente.php?codigo=<?php echo $value->getId();?>">
                                        <button class="btn btn-info" type="submit" name="info">
                                            <span class="glyphicon glyphicon-plus-sign"></span> Informações
                                        </button>
                                    </a>
                                </td>
                                </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>