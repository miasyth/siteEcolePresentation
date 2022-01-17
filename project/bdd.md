# Commandes BDD

## Supprimer la base de donnees

*php bin/console doctrine:database:drop --force*

## Creer la base de donnees

*php bin/console doctrine:database:create*

## Supprimer les tables de la base de donnees

*php bin/console doctrine:schema:drop --force*

## Creer les tables de la base de donnees

*php bin/console doctrine:schema:update --force*

(equivalent des commandes "*php bin/console make:migration -n*" et "*php bin/console doctrine:migrations:migrate -n*")

## Charger les fixtures

*php bin/console doctrine:fixtures:load -n*
