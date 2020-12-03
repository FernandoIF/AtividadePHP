<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Atividade 03 - Cadastro de Alunos</title>
</head>
<body>
    <div class="my-5 container">
        <form action="controls.php" method="POST">
            <div class="row">
                <div class="col-8 form-group">
                    <label for="name">Nome:</label>
                    <input type="text" name="name" id="name" class="form-control" maxlength="100">
                </div>
                <div class="col-4 form-group">
                    <label for="birth">Data de Nascimento:</label>
                    <input type="date" name="birth" id="birth"  class="form-control">
                </div>
                <div class="col-4 form-group">
                    <label for="date">Ano:</label>
                    <input type="number" name="date" id="date"  class="form-control" max="2020">
                </div>
                <div class="col-8 form-group">
                    <label for="matter">Matéria Preferida:</label>
                    <input type="text" name="matter" id="matter"  class="form-control" maxlength="50">
                </div>
                <div class="col-6 form-group">
                    <input type="hidden" id="id" name="id"  class="form-control">
                    <button type="submit" class="btn btn-success">Salvar</button> 
                    <button type="reset" class="btn btn-danger">Limpar</button>
                </div>
                <div class="col-6"></div>
            </div>
        </form>

        <div class="my-5 row table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr class="col-12">
                        <th>Nome</th>
                        <th>Matéria Preferida</th>
                        <th>Excluir</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $connection = new mysqli("localhost", "root", "vertrigo", "atividade03");
                        $table = $connection->query("SELECT id, nome, materia_preferida FROM cadastro");

                        while($linha = $table->fetch_assoc()){
                    ?>
                        <tr>
                            <td><?= $linha["nome"];?></td>
                            <td><?= $linha["materia_preferida"];?></td>
                            <td>
                               <a href="excluir.php?id=<?=$linha["id"];?>" onclick="return confirm('Tem certeza que deseja excluir?');">Excluir</a> 
                            </td>
                        </tr>
                    <?php    
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="js/script.js"></script>
</body>
</html>