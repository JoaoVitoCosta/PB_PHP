<?php

require_once "Controller/BibliotecaController.php";

$BibliotecaController = new BibliotecaController();
$route = $_GET["route"] ?? '';

switch ($route) {
    case 'Biblioteca/BibliotecaCadatrar':
        $BibliotecaController->BibliotecaCadastrar();
        break;
    
        case "Biblioteca/BibliotecaSalvar":
            $BibliotecaController->BibliotecaSalvar();
            break;
        
        case "Biblioteca/BibliotecaListar":
            $BibliotecaController->BibliotecaListar();
            break;
        
        case "Biblioteca/BibliotecaEditar":
            $BibliotecaController->BibliotecaEditar();
            break;
   
            case "Biblioteca/BibliotecaAtualizar":
                $BibliotecaController->BibliotecaAtualizar();
                break;
            
            case "Biblioteca/BibliotecaExcluir":
                $BibliotecaController->BibliotecaExcluir();
                break;

            default:
                echo "Página não encontrada";
                break;
}
