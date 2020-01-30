# Configurações de Desenvolvimento


## Instalação
Abrir pasta de destino e clonar o respositório:
> git clone https://daroucha@bitbucket.org/daroucha/casalit-symfony.git

Instalar pacotes do Composer:
> composer install

Instalar pacotes do Node:
> npm i

Rodar o Webpack Encore:
> npm run watch

E, finalmente, rodar a aplicação:
> symfony server:start


## Banco de dados
Criar esquema de dados:
> php bin/console doctrine:database:create

Criar tabelas:
> php bin/console make:migration
> php bin/console doctrine:migrations:migrate