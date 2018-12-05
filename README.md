# Sistema de Apostas

## Aplicação em PDO para disciplina de Linguagem de Programação Orientada a Objetos

### Clone o projeto:
git clone https://github.com/MathewsCoelho/sistema-apostas

O script para o Banco de Dados está na pasta raíz do projeto, com o nome: script_banco.sql (Feito em POSTGRES)

Configure o arquivo sistema-apostas/pdo/ConexaoDB.php com o User e Senha do seu Banco de Dados.

Abra o navegador com o Apache e o Postgres ligados e acesse: http://localhost/sistema-apostas/view/ para acessar a aplicação.

Para efetuar login como administrador acesse: http://localhost/sistema-apostas/view/loginAdmin.php com as credenciais
- E-mail: admin@gmail.com
- Senha: admin

O Administrador pode:
- Efetuar Login
- Visualizar/Cadastrar/Deletar Cavalos
- Visualizar/Cadastrar/Deletar Etapas
- Visualizar/Deletar Usuários
- Visualizar Ranking

O usuário apostador pode:
- Visualizar etapas
- Visualizar ranking
- Realizar Cadastro
- Realizar Login
