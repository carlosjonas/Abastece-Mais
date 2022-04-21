# Abastece Mais

Sistema em laravel(8) para abastecimento de carros, com interação entre usuários, carros e abastecimentos

## Instalação:

Muitas duvidas podem ser tiradas na documentação do  [laravel](https://laravel.com/docs/8.x/).

- Na raiz do projeto execute os seguintes comandos a principio:


```bash
composer update
```

```bash
php artisan key:generate
```

- após isso confugure o arquivo ".env" com as configurações do banco de dados e então rode as migrates:

```bash
php artisan migrate
```
- o banco de dados está na pasta bd, após a inserção do banco faça a alimentação

## Alimetação do banco de teste

- Ainda com algum SGBD, execute os scripts de alimentação do banco de testes, na seguinte ordem:

/database/users.sql

/database/cars.sql

/database/suplly.sql

/database/sessions.sql

/database/password_resets.sql

/database/personal_access_tokens.sql

/database/failed_jobs.sql


