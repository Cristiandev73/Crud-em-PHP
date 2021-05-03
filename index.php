<?php

// Sessao
session_start();
if (isset($_SESSION['mensagem'])):
  echo $_SESSION ['mensagem']; 

endif;
session_unset();

// Conexão
include_once 'php_action/db_connect.php';
// Cabeça
include_once 'includes/header.php';

?>

<div class="row">
    <div class="col s12 m6 push-m3 ">
        <h3 class="light">Clientes</h3>
        <table class="striped">
            <thead>
                <tr>
                    <th>nome:</th>
                    <th>sobrenome:</th>
                    <th>email:</th>
                    <th>idade:</th>

                </tr>

            </thead>
            <tbody>
                <?php
    
 
                $sql = "SELECT * FROM  clientes";
                $resultado = mysqli_query($connect, $sql);
                 
                while ($dados = mysqli_fetch_array($resultado)) :




                ?>
                
                    <tr>
                        <td><?php echo $dados['nome']; ?></td>
                
                        <td><?php echo $dados['sobrenome']; ?></td>
                        <td><?php echo $dados['email']; ?></td>
                        <td><?php echo $dados['idade']; ?></td>
                        <td><a href="editar.php?id=<?php echo $dados['id']; ?>" class="btn-floating orange"><i class="material-icons">edit</i></a></td>
                        <td><a href="" class="btn-floating red"><i class="material-icons">delete </i></a></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <br>
        <a href="adicionar.php" class="btn">Adicionar Clientes</a>
    </div>
</div>




<?php
//  Rodapé
include_once 'includes/footer.php';

?>