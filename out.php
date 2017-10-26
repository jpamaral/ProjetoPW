<?php require "modelo.php"; ?>

    <div style="margin-left:33%;padding:70px 0">
        <div class="logo">Listagem de Bens</div>

        <div class="login-form-1">
            <form id="login-form" class="text-left" action="T03out.php" method="get">
                <div style="width:500px" class="main-login-form">
                    <div class="login-group">
                        <div class="form-group">
                            <label for="nome" class="sr-only">Nome</label>
                            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
                        </div>
                    </div>
                    <button type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
                </div>
                <div class="etc-login-form">
                    <a href="T06.php">Incluir Bem</a>
                </div>
            </form>
        </div>
    </div>
    </div>
    <div id="main" class="container-fluid">
    </div>
    <div class='table-responsive col-md-12'>
        <table class='table table-striped'>
            <thead>
                <tr>
                    <th>Bem</th>
                    <th>Nome</th>
                    <th>Descricão</th>
                    <th>Sala</th>
                    <th>Fornecedor</th>
                    <th class='actions text-center'>Ação</th>
                </tr>
            </thead>
    </div>
    <tbody>
    <tr>
        <td>1</td>
        <td><b>Exemplo</b></td>
        <td><b>Departamento 1</b></td>
        <td><b>Sala 1</b></td>
        <td><b>Fornecedor 1</b></td>
        <td class='actions text-center'><a href="#">Editar</a> <a href="#">Apagar</a>
    </tr>
    <tr>
        <td>2</td>
        <td><b>Exemplo 2</b></td>
        <td><b>Departamento 2</b></td>
        <td><b>Sala 2</b></td>
        <td><b>Fornecedor 2</b></td>
        <td class='actions text-center'><a href="#">Editar</a> <a href="#">Apagar</a>
    </tr>
    <tr>
        <td>3</td>
        <td><b>Exemplo 3</b></td>
        <td><b>Departamento 3</b></td>
        <td><b>Sala 3</b></td>
        <td><b>Fornecedor 3</b></td>
        <td class='actions text-center'><a href="#">Editar</a> <a href="#">Apagar</a>
    </tr>
    <tr>
        <td>4</td>
        <td><b>Exemplo 4</b></td>
        <td><b>Departamento 4</b></td>
        <td><b>Sala 4</b></td>
        <td><b>Fornecedor 4</b></td>
        <td class='actions text-center'><a href="#">Editar</a> <a href="#">Apagar</a>
    </tr>
    <tr>
        <td>5</td>
        <td><b>Exemplo 5</b></td>
        <td><b>Departamento 5</b></td>
        <td><b>Sala 5</b></td>
        <td><b>Fornecedor 5</b></td>
        <td class='actions text-center'><a href="#">Editar</a> <a href="#">Apagar</a>
    </tr>
</tbody>
    </table>
    </div>
    <div class="etc-login-form">
        <a href="index.php">Voltar</a>
            
        <a href="out.php">Listar novamente</a>
    </div>

</body>

</html>