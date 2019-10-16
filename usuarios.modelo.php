<?php

/*
    Função que retorna true (verdadeiro)
    caso o usuário e senha sejam corretos,
    ou false (falso) se o usuário ou a senha
    estiverem incorretos.
*/
function usuarioExiste($usuario, $senha)
{
    // o ideal eh fazer uma conexao com o banco de dados
    // e usar uma SELECT para verificar se o usuario
    // esta cadastrado ou nao.

    // mas, por questões didáticas, vou apenas criar
    // um vetor de usuários

    $usuarios = [
        ['usuario' => 'thiago', 'senha' => '123'],
        ['usuario' => 'isabela', 'senha' => '321'],
        ['usuario' => 'liviacorlight', 'senha' => '456'],
        ['usuario' => 'jasson', 'senha' => '121'],
        ['usuario' => 'mariana', 'senha' => '789'],
        ['usuario' => 'daniel', 'senha' => '1010'],
        ['usuario' => 'liviareis', 'senha' => '2020'],
        ['usuario' => 'pedro', 'senha' => 'tafas'],
        ['usuario' => 'nathalia', 'senha' => '8888']
    ];

    // procurar pelo usuario e pela senha
    $encontrou = false;
    $i = 0;
    while (!$encontrou && $i < count($usuarios))
    {
        $u = $usuarios[$i];
        if (($u['usuario'] == $usuario) && ($u['senha'] == $senha))
        {
            $encontrou = true;
        }
        $i++;
    }

    return $encontrou;
}