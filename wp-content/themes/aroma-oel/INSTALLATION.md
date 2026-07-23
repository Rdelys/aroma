# AROMA OËL — Thème WordPress sur-mesure — Guide d'installation

## 1. Ce qu'il faut installer AVANT d'ajouter ce thème

| # | À installer | Où | Pourquoi |
|---|---|---|---|
| 1 | **WordPress** (déjà fait d'après votre capture) | — | Base du site |
| 2 | **WooCommerce** | Extensions > Ajouter | Boutique, panier, fiches produits |
| 3 | **Polylang** (gratuit) ou WPML (payant) | Extensions > Ajouter | Site bilingue FR/EN — recommandé : Polylang, gratuit et léger |
| 4 | **Yoast SEO** ou **Rank Math** | Extensions > Ajouter | Meta title, meta description, sitemap — vous avez déjà tout le contenu SEO du Document 04 à copier dedans |
| 5 | **WP Rocket** ou **W3 Total Cache** (facultatif au démarrage) | Extensions > Ajouter | Cache, vitesse mobile |
| 6 | **UpdraftPlus** | Extensions > Ajouter | Sauvegardes automatiques |

Le thème lui-même ne nécessite AUCUN page builder (pas d'Elementor, pas de Divi) : tout est déjà codé dans les fichiers `.php`.

## 2. Installer le thème via votre connexion SSH FS (VS Code)

1. Dans votre explorateur VS Code (celui de votre capture d'écran), naviguez vers `wp-content/themes/`
2. Créez un nouveau dossier nommé exactement : `aroma-oel`
3. Copiez-y TOUS les fichiers fournis dans le zip, en conservant la structure :
```
wp-content/themes/aroma-oel/
├── style.css
├── functions.php
├── header.php
├── footer.php
├── front-page.php
├── index.php
├── page.php
├── single.php
├── inc/
│   └── nav-walker.php
└── assets/
    └── js/
        └── main.js
```
4. Dans l'administration WordPress : **Apparence > Thèmes** → activer **AROMA OËL**

## 3. Configuration après activation

1. **Apparence > Menus** : créer un menu, lui donner les entrées Rituels (avec sous-menus RESET/FLOW/BOOST/GLOW/ROOTS/BLOOM), Boutique, Journal, Notre histoire, Contact → l'assigner à l'emplacement "Menu principal"
2. **Réglages > Lecture** : définir "Une page statique" pas nécessaire — `front-page.php` s'affiche automatiquement comme page d'accueil dans ce thème
3. **WooCommerce** : lancer l'assistant de configuration (devise EUR, zones de livraison France/Europe/International selon le Catalogue officiel)
4. **Polylang** : configurer FR (langue par défaut) et EN, puis dupliquer chaque page

## 4. Prochaines étapes de développement

Ce premier livrable couvre : header, footer, page d'accueil complète (11 blocs).
Restent à construire selon le même principe (fichiers `.php` + classes CSS déjà prêtes dans `style.css`) :
- Page Rituels (hub) + 6 pages rituels individuelles
- Templates WooCommerce (archive boutique, fiche produit) — `woocommerce/single-product.php`
- Pages de service et pages légales (simples `page.php`, contenu copié depuis le Document 04)

## 5. Aucune image n'est encore intégrée
Les blocs Hero, Philosophie, Notre histoire affichent des icônes de substitution (📷). Remplacez-les par vos vraies photos produits dès qu'elles sont prêtes, en respectant les noms de fichiers et textes ALT du Document 04 (ex. `accueil-hero-rituels-aroma-oel.webp`).
