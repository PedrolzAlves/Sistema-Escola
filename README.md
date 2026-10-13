# Escola: Cadastro e Consulta de Alunos

Sistema web simples para cadastrar alunos e consultá-los por turma, feito em PHP com banco de dados MySQL.

Projeto de aprendizado desenvolvido durante o **Curso Técnico em Desenvolvimento de Sistemas** do **SENAI CTTI – Belo Horizonte**. O objetivo foi praticar a integração entre formulários HTML, PHP e banco de dados relacional.

## Funcionalidades

- **Cadastrar aluno:** nome, telefone (com máscara `#####-####`), e-mail e turma.
- **Consultar alunos por turma:** escolhe-se uma turma e o sistema lista os alunos dela em uma tabela.
- As turmas exibidas nos formulários vêm direto do banco de dados.

## Tecnologias

| Camada | Tecnologia |
|---|---|
| Back-end | PHP (extensão `mysqli`) |
| Banco de dados | MySQL / MariaDB |
| Front-end | HTML5, CSS3, JavaScript |
| Estilo | Bootstrap 5.0.2 e Boxicons 2.1.4 (via CDN) |
| Ambiente | XAMPP (Apache + MySQL) |

## Estrutura do projeto

```
Escola/
├── index.html           # Página inicial com menu de navegação
├── cadastro.php         # Formulário de cadastro de alunos
├── cadastro_feito.php   # Recebe o formulário e grava o aluno no banco
├── consulta.php         # Formulário para escolher a turma
├── consulta_feita.php   # Lista os alunos da turma escolhida
├── conexao.php          # Conexão com o banco de dados
├── bd_escola.sql        # Script de criação do banco
└── css/
    ├── style.css        # Estilo das páginas de resultado
    └── style2.css       # Estilo dos formulários
```

## Banco de dados

Banco `bd_escola`, com duas tabelas: cada **turma** tem vários **alunos**, e cada aluno pertence a uma turma.

```
turma                          aluno
─────────────────────          ─────────────────────
PK Cod_turma   INT     ◄──┐    PK Cod_aluno   INT
   Nome_turma  VARCHAR    └─── FK Cod_turma   INT
                                  Nome_aluno  VARCHAR
                                  Telefone    VARCHAR
                                  Email       VARCHAR
```

O script [`bd_escola.sql`](bd_escola.sql) cria o banco, as tabelas e algumas turmas de exemplo.

## Como executar

1. Instale o [XAMPP](https://www.apachefriends.org/) e inicie os módulos **Apache** e **MySQL**.
2. Copie a pasta `Escola` para `C:\xampp\htdocs\`.
3. Acesse `http://localhost/phpmyadmin`, abra a aba **Importar** e selecione o arquivo `bd_escola.sql`.
4. Abra no navegador: `http://localhost/Escola/`

A conexão usa as credenciais padrão do XAMPP (usuário `root`, sem senha). Se o seu MySQL for diferente, ajuste o arquivo `conexao.php`.

> O sistema não tem uma tela para cadastrar turmas. Elas precisam ser inseridas direto no banco (o script já traz algumas de exemplo).

## O que foi praticado

- Envio de formulários com o método `POST`
- Conexão do PHP com o MySQL usando `mysqli`
- Comandos `INSERT` e `SELECT` com `INNER JOIN`
- Relacionamento 1:N com chave estrangeira
- Preenchimento de um `<select>` com dados vindos do banco
- Uso do Bootstrap para layout e navegação

## Possíveis melhorias

Por ser um projeto de estudo, alguns pontos ficaram de fora e podem ser explorados depois:

- Usar *prepared statements* para evitar SQL Injection
- Validar os dados no servidor e tratar erros ao gravar no banco
- Criar telas para cadastrar, editar e excluir turmas e alunos
- Padronizar maiúsculas e minúsculas nos nomes das tabelas para rodar em servidores Linux
