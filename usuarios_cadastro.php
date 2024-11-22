<?php include 'header.php'; ?>

<?php
include 'usuarios_controller.php';
include 'principal_controller.php';

//Pega todos os usuários para preencher os dados da tabela
$users = getUsers();

//Variável que guarda o ID do usuário que será editado
$userToEdit = null;

// Verifica se existe o parâmetro edit pelo método GET
// e sé há um ID para edição de usuário
if (isset($_GET['edit'])) {
    $userToEdit = getUser($_GET['edit']);
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD de Usuários</title>
    <script>
        function clearForm() {
            document.getElementById('nome').value = '';
            document.getElementById('telefone').value = '';
            document.getElementById('email').value = '';
            document.getElementById('senha').value = '';
            document.getElementById('id').value = '';
        }
    </script>
</head>
<body>
    <div class="container mt-3">
    <h2>Cadastro de Usuários</h2>
    <form method="POST" action="">
        <input type="hidden" id="id" name="id" value="<?php echo $userToEdit['id'] ?? ''; ?>">
        
        <label for="nome">Nome:</label>
        <input class="form-control" type="text" id="nome" name="nome" value="<?php echo $userToEdit['nome'] ?? ''; ?>" required><br>
        
        <label for="telefone">Telefone:</label>
        <input class="form-control" placeholder="(00) 0 0000-0000" type="text" id="telefone" name="telefone" value="<?php echo $userToEdit['telefone'] ?? ''; ?>" required><br>
        
        <label for="email">Email:</label>
        <input class="form-control" placeholder="example@gmail.com" type="email" id="email" name="email" value="<?php echo $userToEdit['email'] ?? ''; ?>" required><br>
        
        <label for="senha">Senha:</label>
        <input class="form-control" type="password" id="senha" name="senha" required><br><br>
        
        <div class="btn-group">
        <button type="submit" class="btn btn-info" name="save">Salvar</button>
        <button type="submit" class="btn btn-info" name="update">Atualizar</button>
        <button type="button" class="btn btn-info" onclick="clearForm()">Novo</button>
        </div>
    </form>
    </div>

    <div class="container mt-3">
    <h2>Usuários Cadastrados</h2><br>
    <table class="table table-hover" border="1">
        <tr class="table-info">
            <th>ID</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Email</th>
            <th>Ações</th>
        </tr>
        <!--Faz um loop FOR no resultset de usuários e preenche a tabela-->
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?php echo $user['id']; ?></td>
                <td><?php echo $user['nome']; ?></td>
                <td><?php echo $user['telefone']; ?></td>
                <td><?php echo $user['email']; ?></td>
                <td>
                    <a href="?edit=<?php echo $user['id']; ?>">Editar</a>
                    <a href="?delete=<?php echo $user['id']; ?>" onclick="return confirm('Tem certeza que deseja excluir?');">Excluir</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>