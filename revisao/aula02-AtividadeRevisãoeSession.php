<?php
    session_start();
    class Usuario{
        private $nome;
        private $sobrenome;
        private $nota;
        private $dataNascimento;

        public function __construct($nome, $sobrenome, $nota, $dataNascimento){
            $this->nome = $nome;
            $this->sobrenome = $sobrenome;
            $this->nota = $nota;
            $this->dataNascimento = $dataNascimento;
        }

        public function calcularIdade() {
            $nascimento = new DateTime($this->dataNascimento);
            $hoje = new DateTime();
            return $hoje->diff($nascimento)->y;
        }
        
        public function salvar(){
            //criar array se ainda não existir
            if(!isset($_SESSION['usuarios'])){
                $SESSION['usuarios'] = [];
            }
            
        $_SESSION['usuarios'][] = [
            'nome' => $this->nome,
            'sobrenome' => $this->sobrenome,
            'nota' => $this->nota,
            'dataNascimento' => $this->dataNascimento,
            'idade' => $this->calcularIdade()

        ];
    }
    
 }
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $usuario = new Usuario($_POST['nome'], $_POST['sobrenome'], $_POST['nota'], $_POST['dataNascimento']);
        $usuario->salvar();
    }
    if(isset($_GET['reset'])){
        session_destroy();
    }
    //exibir session
    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";

?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Formulário</title>
    </head>
    <body>
        <h2 style="color:darkblue; font-family:Arial"> Cadastro Usuário</h2>
        <form action="" method="POST" style="background:#f2f2f2; padding:15px border-radius:8px; width: 300px">
            Nome:  <br>
            <input type="text" name="nome" value="" style="width:100%; margin-bottom:10px"><br>
            Sobrenome: <br>
            <input type="text" name="sobrenome" value="" style="width:100%; margin-bottom:10px"><br>
            Nota: <br>
            <input type="number" name="nota" value="" style="width:100%; margin-bottom:10px"><br>
            Data de nascimento: <br>
            <input type="date" name="dataNascimento" value="" style="width:100%; margin-bottom:10px"><br>
            <button type="submit" style="background:green; color:white; padding: 5px 10px;">Cadastrar</button>
            <button type="reset" style="background:red; color:white; padding: 5px 10px;">Limpar</button>
        </form>
        <?php if(isset($_SESSION['usuarios'])): ?> 
        <table border="1">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>Nota</th>
                    <th>Data de nascimento</th>
                    <th>Idade</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($_SESSION['usuarios'] as $usuario):
                    $totalNotas +=
                    
                    
                    ?>
                <tr>
                    <td><?= $usuario['nome'] ?></td>
                    <td><?= $usuario['sobrenome'] ?></td>
                    <td><?= $usuario['nota'] ?></td>
                    <td><?= $usuario['dataNascimento'] ?></td>
                    <td><?= date('d/m/Y', strtotime($usuario['dataNascimento'])) ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody> 
        </table>
        <?php endif; ?>
        <br>
        <h2>Média Dos Alunos:</h2>
    </body>
</html>

