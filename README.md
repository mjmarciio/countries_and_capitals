<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://www.linkedin.com/in/mjmarcio" target="_blank"><img src="https://img.shields.io/badge/-LinkedIn-%230077B5?style=for-the-badge&logo=linkedin&logoColor=white" target="_blank"></a>
<a href = "mailto:marciomsgj@gmail.com"><img src="https://img.shields.io/badge/-Gmail-%23333?style=for-the-badge&logo=gmail&logoColor=white" target="_blank"></a>
</p>

# Countries and Capitals Quiz

- [Descrição](#descrição)
- [Tecnologias Utilizadas](#tecnologias-utilizadas)
- [Instalação](#instalação)
    - [Pré-requisitos](#pré-requisitos)
    - [Passo a Passo](#passo-a-passo)
- [Estrutura do Código](#estrutura-do-código)
    - [Como Funciona](#como-funciona)
- [Contribuindo](#contribuindo)
    - [Passos para Contribuir](#passos-para-contribuir)

## Descrição

Countries and Capitals é um simples quiz de perguntas e respostas, onde o objetivo é acertar as capitais dos países. O usuário será apresentado a um número escolhido de perguntas sobre a capital de diversos países e, ao final, o sistema mostrará o desempenho do jogador, informando a porcentagem de acertos, o total de questões acertadas e erradas.

## Tecnologias Utilizadas

- **PHP** (com Laravel)

- **Laravel** (Framework MVC)

- **Array Associativo para armazenar as perguntas e respostas (sem utilização de banco de dados)**

## Funcionalidades

1. Exibição de perguntas sobre países e suas respectivas capitais.
2. O usuário escolhe a resposta correta.

Ao final, o sistema exibe:

- Percentual de acertos

- Quantidade de perguntas respondidas corretamente e incorretamente

## Instalação

Para rodar o projeto localmente, siga as instruções abaixo:

# Pré-requisitos
 - **PHP (versão recomendada: 8.0 ou superior)**

- **Composer**

- **Laravel (o projeto já vem configurado)**

# Passo a Passo

1. Clone o repositório:
   
Navegue até o diretório do projeto e instale as dependências com o Composer:

```bash 
git clone https://github.com/mjmarciio/countries-and-capitals.git
```

2. Instale as dependências do projeto:

Navegue até o diretório do projeto e instale as dependências com o Composer:

```bash
cd countries-and-capitals
composer install
```

3. Configuração do ambiente:

Crie o arquivo .env a partir do arquivo .env.example:

```bash 
cp .env.example .env
```

4. Gere a chave de aplicativo do Laravel:

```bash
php artisan key:generate
```

5. Rodando o servidor local:

Para rodar o servidor local e acessar o aplicativo, execute o seguinte comando:

```bash
php artisan serve
```
O servidor estará disponível em http://localhost:8000.


## Estrutura do Código

- ***routes/web.php: Contém as rotas do aplicativo, incluindo a rota principal que chama o quiz.***

- ***app/Http/Controllers/MainController.php: Controlador que gerencia a lógica do quiz.***

- ***resources/views/components/: Contém as views do Laravel para exibição das perguntas e resultados do quiz.***

 - ***app/app_data.php: Arquivo usado para extrair as perguntas e respostas do quiz.***

## Como Funciona

1. O usuário inicia o quiz acessando a página inicial do aplicativo e selecionando a quantidade de perguntas que desejar, com o mínimo de 3 e máximo de 30.

2. O sistema gera perguntas de uma lista sorteada de países e capitais.

3. O usuário seleciona a resposta e o sistema valida e mostra a resposta escolhida e a resposta correta.

4. Ao final do quiz, o sistema calcula a porcentagem de acertos e exibe o total de respostas corretas e erradas além da porcentagem geral de desempenho.

## Contribuindo

Se você quiser contribuir com o projeto, fique à vontade para abrir issues ou enviar pull requests! Algumas áreas em que você pode contribuir incluem:

- Adicionar mais funcionalidades ao quiz.

- Melhorar a interface do usuário.

- Corrigir bugs.

## Passos para Contribuir:
1. Fork este repositório.

2. Crie uma nova branch para sua feature (git checkout -b minha-feature).

3. Faça as alterações e commit-as (git commit -m 'Adicionei novas perguntas').

4. Push para a branch criada (git push origin minha-feature).

5. Abra um pull request para a branch principal.
