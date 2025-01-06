# Module de gestion des fournisseurs pour Sylius

Ce module permet de gérer les fournisseurs et les rendez-vous associés dans une application Sylius.

## Fonctionnalités

- Gestion des fournisseurs (ajout, modification, suppression)
- Gestion des rendez-vous avec les fournisseurs
- Alerte pour les fournisseurs non rencontrés depuis longtemps

## Installation

1. Clonez ce dépôt dans votre projet Sylius
2. Ajoutez les entités et les contrôleurs à votre application
3. Configurez les routes dans votre fichier `config/routes.yaml`
4. Mettez à jour votre base de données : `php bin/console doctrine:schema:update --force`

## Utilisation

- Accédez à `/admin/fournisseur` pour gérer les fournisseurs
- Accédez à `/admin/rendez-vous` pour gérer les rendez-vous

## Contribution

Les contributions sont les bienvenues ! N'hésitez pas à ouvrir une issue ou à soumettre une pull request.

## Licence

Ce projet est sous licence MIT. Voir le fichier LICENSE pour plus de détails.