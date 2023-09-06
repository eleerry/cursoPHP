<?php
    session_start();
    if(!$_SESSION['usuario']){
        header('Location: login.php');
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta
        charset="UTF-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0">
    <link
        rel="preconnect"
        href="https://fonts.googleapis.com">
    <link
        rel="preconnect"
        href="https://fonts.gstatic.com"
        crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link
        rel="stylesheet"
        href="recursos\css\estilo.css">
    <title>Curso PHP</title>
</head>
<body>

    <header
        class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Índice dos Exercicios!!!</h2>
    </header>

    <nav class="navegacao">
        <span class="usuario">Usuário: <?= $_SESSION['usuario'] ?></span>
        <a href="logout.php" class="vermelho">Sair</a>
    </nav>

    <main
        class="principal">
            <div
                class="conteudo">
                <nav
                    class="modulos">
                    
                    <div
                        class="modulo verde">
                            <h3>Módulo 01 - Básico</h3>
                            <ul>
                                <li>
                                    <a href="exercicio.php?dir=basico&file=ola">
                                        Olá PHP
                                    </a>
                                </li>
                                <li>
                                    <a href="exercicio.php?dir=basico&file=html">
                                        Integração HTML
                                    </a>
                                </li>
                                <li>
                                    <a href="exercicio.php?dir=basico&file=css">
                                        Integração CSS
                                    </a>
                                </li>
                                <li>
                                    <a href="exercicio.php?dir=basico&file=comentarios">
                                        Comentários
                                    </a>
                                </li>
                                <li>
                                    <a href="exercicio.php?dir=basico&file=desafio">
                                        Desafio
                                    </a>
                                </li>
                            </ul>
                    </div>
                    <div
                        class="modulo vermelho">
                            <h3>Módulo 02 - Típos</h3>
                            <ul>
                                <li>
                                    <a href="exercicio.php?dir=tipos&file=int">
                                       Int
                                    </a>
                                </li>
                                <li>
                                    <a href="exercicio.php?dir=tipos&file=float">
                                       Float
                                    </a>
                                </li>
                                <li>
                                    <a href="exercicio.php?dir=tipos&file=aritmeticas">
                                       Operações Aritméticas
                                    </a>
                                </li>
                                </li>
                                <li>
                                    <a href="exercicio.php?dir=tipos&file=desafio_precedencia">
                                       Desafio Precedência
                                    </a>
                                </li>
                                <li>
                                    <a href="exercicio.php?dir=tipos&file=conversoes">
                                       Conversões
                                    </a>
                                </li>
                            </ul>
                    </div>
                    <div
                        class="modulo azul">
                            <h3>Módulo 03 - Variáveis</h3>
                            <ul>
                                <li>
                                    <a href="exercicio.php?dir=variaveis&file=basico">
                                       Variáveis
                                    </a>
                                </li>
                                <li>
                                    <a href="exercicio.php?dir=variaveis&file=desafio_equacao">
                                       Desafio Equação
                                    </a>
                                </li>
                            </ul>
                    </div>
                    <div
                        class="modulo roxo">
                            <h3>Módulo 04 - Controle</h3>
                            <ul>
                                <li>
                                    <a href="exercicio.php?dir=controle&file=if_else">
                                       If Else
                                    </a>
                                </li>
                                <li>
                                    <a href="exercicio.php?dir=controle&file=desafio_logico">
                                       Desafio Operadores Lógicos
                                    </a>
                                </li>
                            </ul>
                    </div>
                    <div
                        class="modulo laranja">
                            <h3>Módulo 05 - Array</h3>
                            <ul>
                                <li>
                                    <a href="exercicio.php?dir=array&file=basico">
                                       Básico
                                    </a>
                                </li>
                                <li>
                                    <a href="exercicio.php?dir=array&file=desafio_sorteio">
                                       Desafio Sorteio
                                    </a>
                                </li>
                                <li>
                                    <a href="exercicio.php?dir=array&file=get">
                                       GET
                                    </a>
                                </li>
                            </ul>
                    </div>
                    <div
                        class="modulo verde-escuro">
                            <h3>Módulo 06 - Repetições</h3>
                            <ul>
                                <li>
                                    <a href="exercicio.php?dir=repeticoes&file=for">
                                       Laço For
                                    </a>
                                </li>
                                <li>
                                    <a href="exercicio.php?dir=repeticoes&file=desafio_for">
                                       Desafio Laço For
                                    </a>
                                </li>
                                <li>
                                    <a href="exercicio.php?dir=repeticoes&file=desafio_matriz">
                                       Desafio Matriz
                                    </a>
                                </li>
                                <li>
                                    <a href="exercicio.php?dir=repeticoes&file=desafio_tabela">
                                       Desafio tabela 2
                                    </a>
                                </li>
                            </ul>
                    </div>
                    <div
                        class="modulo vermelho-escuro">
                            <h3>Módulo 07 - Funções</h3>
                            <ul>
                                <li>
                                    <a href="exercicio.php?dir=funcoes&file=escopo">
                                       Função e Escopo
                                    </a>
                                </li>
                            </ul>
                    </div>
                    <div
                        class="modulo azul-escuro">
                            <h3>Módulo 08 - Orientação Obj</h3>
                            <ul>
                                <li>
                                    <a href="exercicio.php?dir=opp&file=classe">
                                       Classe
                                    </a>
                                </li>
                                <li>
                                    <a href="exercicio.php?dir=opp&file=desafio_data">
                                       Desafio Data
                                    </a>
                                </li>
                                <li>
                                    <a href="exercicio.php?dir=opp&file=interface">
                                       Interface
                                    </a>
                                </li>
                                <li>
                                    <a href="exercicio.php?dir=opp&file=desafio_erros">
                                       Encontre Erros
                                    </a>
                                </li>
                                <li>
                                    <a href="exercicio.php?dir=opp&file=traits">
                                       Traits
                                    </a>
                                </li>
                            </ul>
                    </div>
                    <div
                        class="modulo roxo-escuro">
                            <h3>Módulo 09 - Includes</h3>
                            <ul>
                                <li>
                                    <a href="exercicio.php?dir=includes&file=include">
                                       Includes
                                    </a>
                                </li>
                            </ul>
                    </div>
                    <div
                        class="modulo azul">
                            <h3>Módulo 13 - API</h3>
                            <ul>
                                <li>
                                    <a href="exercicio.php?dir=api&file=datas_01">
                                       Includes
                                    </a>
                                </li>
                            </ul>
                    </div>
                    <div
                        class="modulo verde">
                            <h3>Módulo 14 - Banco de dados</h3>
                            <ul>
                                <li>
                                    <a href="exercicio.php?dir=db&file=criar_banco">
                                       Criar Banco
                                    </a>
                                </li>
                                <li>
                                    <a href="exercicio.php?dir=db&file=criar_tabela">
                                       Criar Tabela
                                    </a>
                                </li>
                                <li>
                                    <a href="exercicio.php?dir=db&file=inserir_1">
                                       Inserir 01
                                    </a>
                                </li>
                                <li>
                                    <a href="exercicio.php?dir=db&file=consultar">
                                       Consultar
                                    </a>
                                </li>
                                <li>
                                    <a href="exercicio.php?dir=db&file=excluir_1">
                                       Excluir Registro #01
                                    </a>
                                </li>
                                <li>
                                    <a href="exercicio.php?dir=db&file=excluir_2">
                                       Excluir Registro #02
                                    </a>
                                </li>
                                <li>
                                    <a href="exercicio.php?dir=db&file=inserir_2">
                                       Inserir 02
                                    </a>
                                </li>
                                <li>
                                    <a href="exercicio.php?dir=db&file=alterar">
                                       Alterar Dados
                                    </a>
                                </li>
                                <li>
                                    <a href="exercicio.php?dir=db&file=inserir_pdo">
                                       PDO: Inserir
                                    </a>
                                </li>
                                <li>
                                    <a href="exercicio.php?dir=db&file=consultar_pdo">
                                       PDO: consultar
                                    </a>
                                </li>
                                <li>
                                    <a href="exercicio.php?dir=db&file=excluir_pdo">
                                       PDO: Excluir
                                    </a>
                                </li>
                                <li>
                                    <a href="exercicio.php?dir=db&file=alterar_pdo">
                                       PDO: Alterar
                                    </a>
                                </li>
                            </ul>
                    </div>
                </nav>
            </div>

    </main>

    <footer
        class="rodape">
        COD3R & ALUNOS &COPY; <?= date('Y'); ?>
    </footer>

</body>
</html>