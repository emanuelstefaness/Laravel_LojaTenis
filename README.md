# Projeto E-commerce de Tênis (Laravel)

## Sobre o Projeto
Este é um projeto feito com Laravel para gerenciar um e-commerce de tênis.  
Ele permite cadastrar clientes, endereços, marcas, produtos, pedidos e pagamentos, funcionando como a base de uma loja online.

## Como os Dados Foram Organizados
Pensamos nos dados de forma simples e prática:

- **Clientes**: Guarda informações como nome, e-mail, telefone e data de nascimento.
- **Endereços**: Cada cliente pode ter vários endereços.
- **Marcas**: Para organizar os produtos.
- **Produtos**: Ligados às marcas, representam os tênis vendidos.
- **Pedidos**: Registram as compras feitas pelos clientes.
- **Itens de Pedido**: Mostram quais produtos estão em cada pedido.
- **Pagamentos**: Informações sobre o pagamento de cada pedido, incluindo valor, método e status.

Os relacionamentos entre essas tabelas foram implementados usando **chaves estrangeiras** e os métodos **`hasMany`** e **`belongsTo`** do Laravel, garantindo que cada dado esteja conectado de forma correta e facilitando consultas no banco.

## Estrutura do Projeto
- **Controllers**: Responsáveis por processar as solicitações e devolver respostas.
- **Models**: Representam cada tipo de informação (clientes, produtos, etc.) e ajudam a trabalhar com o banco de dados.
- **Migrations**: Criam as tabelas do banco de dados.
- **Seeders**: Preenchem o banco com alguns dados de exemplo.
- **Rotas**: Definem os caminhos que a aplicação entende, como `/clientes` ou `/produtos`.

## Pré-requisitos
Para rodar o projeto você precisa ter instalado:

- PHP 8.1 ou superior
- Composer
- MySQL
- Laravel 12.x

## Testes

1. Inicie o servidor do Laravel:
php artisan serve

2. Abra o navegador e teste:
127.0.0.1:8000\teste
127.0.0.1:8000\clientes.

