<?php

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
            <tr>
                <td>Cristian</td>
                <td> Bernardino</td>
                <td>cristianbernardinodev@gamil.com</td>
                <td>24</td>
                <td><a href="" class="btn-floating orange"><i class="material-icons">edit</i></a></td>
                <td><a href="" class="btn-floating red"><i class="material-icons">delete </i></a></td>
            </tr>
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