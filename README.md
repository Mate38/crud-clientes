## Dependências

Sistema foi desenvolvido utilizando Lavavel 8, PHP 7.4 e MySql 8.

## Configuração

Após clonar o projeto, com o terminal aberto na pasta do projeto, execute o comando:

```composer install --no-scripts```

Renomeie então o arquivo:

```.env.example```

para

```.env```

Dentro do arquivo .env edite os campos para conexão com o seu banco.

Exemplo:

```DB_CONNECTION=mysql```

```DB_HOST=127.0.0.1```

```DB_PORT=3306```

```DB_DATABASE=crudclientes```

```DB_USERNAME=root```

```DB_PASSWORD=1234```

Obs: No lugar de "root" e "1234" coloque o usuário e a senha atribuidos na instalação do seu MySQL.

Rode então os comandos

```php artisan key:generate```

```php artisan storage:link```

Crie então no MySQL um banco chamado "crudclientes" (caso deseje utilizar outro nome modifique também no DB_DATABASE).

>Obs: O Laravel possui definido como codificação de caracteres padrão o formato ```utf8mb4_unicode_ci```

Em seguida execute o comando para criação das tabelas:

```php artisan migrate```

Caso queira começar o projeto com registros pré criados, rode:

```php artisan migrate --seed```
