# Cadastro de Clientes

## Sobre o Projeto 🐘

Este projeto é uma aplicação para gestão de clientes, desenvolvido utilizando o Laravel, um framework PHP. A aplicação permite a criação, listagem, edição e exclusão de registros de clientes. Também inclui a capacidade de upload de fotos de perfil dos clientes, com pré-visualização das imagens.

A aplicação adota conceitos de **Orientação a Objetos**, **DRY** e **S.O.L.I.D.** para garantir um código limpo e manutenível. Utiliza a arquitetura **MVC - Model, View, Controller** para organizar a estrutura da aplicação e garantir a separação de responsabilidades.

## Tecnologias Utilizadas 📝

- [PHP 7.0+](https://www.php.net/)
- [Laravel](https://laravel.com/)
- [MySQL](https://www.mysql.com/)
- [Bootstrap](https://getbootstrap.com/)
- [JavaScript](https://developer.mozilla.org/en-US/docs/Web/JavaScript)
- [Composer](https://getcomposer.org/)

## Como Utilizar 🤔

Siga os passos abaixo para configurar e executar o projeto em sua máquina local.

1. **Clone o Repositório**

   Clone este repositório usando o comando `git clone`.

   ```bash
   git clone https://github.com/seu-usuario/cadastro-clientes.git

2. **Entre na Pasta do Projeto**

   Navegue até o diretório do projeto.

   ```bash
   cd cadastro-clientes

3. **Instale as Dependências**

   Use o Composer para instalar as dependências do projeto.

   ```bash
   composer install
   
4. **Configure as Variáveis de Ambiente**

   Renomeie o arquivo .env.example para .env e ajuste as configurações conforme necessário. Este arquivo contém as configurações de ambiente, como detalhes de conexão com o banco de dados.

   ```bash
   cp .env.example .env

5. **Gere a Chave de Aplicativo**

   Gere a chave de aplicativo do Laravel. Esta chave é usada para criptografia e deve ser única para cada instalação.

   ```bash
   php artisan key:generate

6. **Execute as Migrações**

   Crie as tabelas no banco de dados usando as migrações fornecidas pelo Laravel.

   ```bash
   php artisan migrate

7. **Inicie o Servidor Embutido**

   Inicie o servidor embutido do Laravel para servir a aplicação localmente.

   ```bash
   php artisan serve

8. **Acesse a Aplicação**

   Abra seu navegador e acesse a aplicação no endereço http://localhost:8000.

Agora é só testar 😄