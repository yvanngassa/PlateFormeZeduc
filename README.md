# Plateforme Zeduc

Bienvenue sur la plateforme Zeduc, une application web développée avec Laravel pour gérer une expérience de restauration et d'accompagnement autour d'un espace de vie et de services. Ce projet a été pensé comme une base solide pour un système de gestion simple, moderne et orienté utilisateur.

Ce projet ne représente pas seulement une application technique : il reflète aussi un parcours d'apprentissage. Il a été élaboré en collaboration avec d'autres personnes, puis retravaillé et repris dans un objectif personnel de compréhension et de progression. J'ai refait certaines parties, consolidé les idées et approfondi chaque aspect du développement web : architecture, backend, base de données, interface, logique métier et organisation du code. C'est donc un projet à la fois collectif dans son origine, personnel dans son évolution, et pédagogique dans son usage.

## 1. Présentation du projet

Cette application permet de :

- afficher une page d'accueil moderne et professionnelle ;
- permettre l'inscription et la connexion des utilisateurs (via Laravel Breeze) ;
- gérer différents profils selon le rôle de l'utilisateur (admin, gérant, employé) ;
- administrer des menus, promotions et réclamations (interface statique en l'état) ;
- offrir une base de gestion pour un restaurant ou un espace de restauration.

Le projet est actuellement à un stade fonctionnel de base, avec une architecture Laravel claire et des vues Blade personnalisées.

## 2. Ce que fait ce code

Le projet comprend plusieurs parties principales :

- **Front office** : page d'accueil, inscription, connexion, page "À propos", aide, contact et navigation générale.
- **Authentification** : gestion de la connexion via Laravel Breeze (sessions Laravel) avec pages d'inscription, connexion, mot de passe oublié, confirmation par email.
- **Pages statiques** : administration, espace gérant, espace employé, menu, panier, profil.
- **Gestion de contenu** : les pages sont pour l'instant des vues statiques en attendant l'implémentation de la logique CRUD complète.

Les routes principales sont définies dans le fichier `routes/web.php` et pointent vers des vues Blade.

## 3. Technologies utilisées

- **PHP 8.0+**
- **Laravel 9**
- Composer
- MySQL / base de données relationnelle
- Blade templates
- Eloquent ORM
- **Bootstrap 5** (via CDN) pour les vues principales (accueil, admin, employés, etc.)
- **Tailwind CSS** pour les vues d'authentification (Breeze)
- Vite pour l'assets frontend
- Laravel Breeze (starter kit d'authentification)
- Laravel Sanctum (API tokens)
- Artisan pour les migrations, seeders et gestion du projet

## 4. Fonctionnalités principales

### Utilisateurs
- inscription avec validation des données (via Breeze) ;
- connexion sécurisée par mot de passe hashé ;
- gestion de mot de passe oublié ;
- confirmation d'email ;
- modification du profil utilisateur.

### Pages disponibles
- accueil (`/`)
- inscription (`/inscription`)
- connexion (`/connexion`)
- à propos (`/aboutus`)
- aide (`/help`)
- contact (`/contact`)
- menu (`/menu`)
- panier (`/panier`)
- tableau de bord administrateur (`/admin`)
- espace gérant (`/pageaccueilgérant` et `/pagegénéralegérant`)
- espace employé (`/employes`)
- profil utilisateur (`/profile`)
- blog (`/blog`)

## 5. Structure du projet

Quelques dossiers clés du projet :

- `app/Http/Controllers` : logique métier et traitement des formulaires
- `app/Http/Controllers/Auth` : contrôleurs d'authentification (Breeze)
- `app/Models` : modèles Eloquent (User actuellement)
- `database/migrations` : structure de la base de données
- `database/seeders` : données de test et initialisation
- `resources/views` : pages Blade du projet pour affichage
- `resources/views/auth` : vues d'authentification (Breeze)
- `resources/views/layouts` : layouts Blade (app, guest, navigation)
- `resources/views/profile` : vues de gestion du profil
- `routes/web.php` : définition des routes principales
- `public` : fichiers et assets publics
- `image` : dossier pour les images du projet

## 6. Installation et lancement

### Prérequis
Avant de lancer le projet, assurez-vous d'avoir installé :

- PHP 8.0 ou plus
- Composer
- Node.js et npm
- MySQL

### Étapes de configuration

1. Clonez le projet :
   ```bash
   git clone https://github.com/yvanngassa/PlateFormeZeduc
   cd FinalZeduc
   ```

2. Installez les dépendances PHP :
   ```bash
   composer install
   ```

3. Copiez le fichier d'environnement :
   ```bash
   copy .env.example .env
   ```
   Sur Linux/macOS, vous pouvez utiliser :
   ```bash
   cp .env.example .env
   ```

4. Générez la clé Laravel :
   ```bash
   php artisan key:generate
   ```

5. Configurez votre base de données dans le fichier `.env` :
   - `DB_CONNECTION=mysql`
   - `DB_HOST=127.0.0.1`
   - `DB_PORT=3306`
   - `DB_DATABASE=nom_de_votre_base`
   - `DB_USERNAME=votre_utilisateur`
   - `DB_PASSWORD=votre_mot_de_passe`

6. Exécutez les migrations :
   ```bash
   php artisan migrate
   ```

7. Ajoutez des données de test (si disponible) :
   ```bash
   php artisan db:seed
   ```

8. Installez les dépendances frontend :
   ```bash
   npm install
   ```

9. Démarrez le serveur de développement :
   ```bash
   npm run dev
   ```
   Puis dans un autre terminal :
   ```bash
   php artisan serve
   ```

L'application sera alors disponible à l'adresse :

```text
http://127.0.0.1:8000
```

### Ports alternatifs
- Si le port `8000` est déjà utilisé, démarrez Laravel sur un autre port :
  ```bash
  php artisan serve --port=8080
  ```
- Si Vite refuse le port `5173`, il passera à `5174` automatiquement, ou vous pouvez forcer un port :
  ```bash
  npm run dev -- --port 5174
  ```
- Pour exposer le serveur sur le réseau local :
  ```bash
  php artisan serve --host=0.0.0.0 --port=8080
  npm run dev -- --host 0.0.0.0 --port=5174
  ```

## 6.1. Routes principales du projet

Voici les routes principales implémentées dans `routes/web.php` :

- `GET /` : page d'accueil (`home`) → vue `home.blade.php`
- `GET /welcome` : page d'accueil alternative → vue `welcome.blade.php`
- `GET /inscription` : formulaire d'inscription → vue `inscription.blade.php`
- `GET /connexion` : page de connexion → vue `connexion.blade.php`
- `GET /aboutus` : page À propos → vue `aboutus.blade.php`
- `GET /help` : page d'aide → vue `help.blade.php`
- `GET /contact` : page de contact → vue `contact.blade.php`
- `GET /menu` : page menu → vue `menu.blade.php`
- `GET /panier` : page panier → vue `panier.blade.php`
- `GET /admin` : tableau de bord administrateur → vue `admin.blade.php`
- `GET /employes` : espace employé → vue `employes.blade.php`
- `GET /pageaccueilgérant` : page d'accueil gérant → vue `pageaccueilgérant.blade.php`
- `GET /pagegénéralegérant` : page générale gérant → vue `pagegénéralegérant.blade.php`
- `GET /profile` : page de profil → vue `profile.blade.php`
- `GET /blog` : page blog (retourne un texte simple)
- Routes d'authentification Laravel Breeze (login, register, password reset, email verification, etc.)

## 6.2. Structure de la base de données

Les tables actuellement disponibles via les migrations sont :

- `users` : comptes utilisateurs avec `id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`
- `password_resets` : gestion des réinitialisations de mot de passe
- `failed_jobs` : file d'attente des jobs échoués
- `personal_access_tokens` : tokens d'API (Sanctum)

> **Note :** Les tables `menu`, `promotions` et `complaints` ne sont pas encore créées via des migrations. Elles sont prévues pour une version future.

## 6.3. Configuration importante

Assurez-vous que votre fichier `.env` contient les bonnes valeurs :

- `APP_URL=http://localhost`
- `DB_CONNECTION=mysql`
- `DB_HOST=127.0.0.1`
- `DB_PORT=3306`
- `DB_DATABASE=laravel`
- `DB_USERNAME=root`
- `DB_PASSWORD=`

Si vous modifiez `.env`, exécutez :

```bash
php artisan config:clear
php artisan cache:clear
php artisan route:clear
php artisan view:clear
```

## 6.4. Versions et dépendances

- **Laravel 9**
- PHP 8.0+
- Vite 4
- Bootstrap 5 (via CDN) pour les vues principales
- Tailwind CSS pour les vues d'authentification (Breeze)
- MySQL pour la base de données
- Laravel Sanctum installé
- Laravel Breeze installé

## 7. Ce qui reste à faire pour le rendre plus complet

Le projet est déjà fonctionnel sur la base, mais plusieurs améliorations sont encore possibles pour le rendre vraiment "pro" :

- créer les modèles, migrations et contrôleurs pour les entités `Menu`, `Promotion` et `Complaint` ;
- implémenter les routes CRUD (POST, PUT, DELETE) pour la gestion des employés, menus, promotions et réclamations ;
- finaliser proprement les tableaux de bord selon chaque rôle (admin, gérant, employé) ;
- ajouter les champs personnalisés à la table `users` (rôle, téléphone, ville, adresse, etc.) ;
- corriger et uniformiser certains noms de routes et liens internes ;
- améliorer la sécurité avec des middlewares plus stricts pour les zones réservées ;
- ajouter la gestion des mots de passe oubliés (déjà partiellement via Breeze) ;
- développer des vues plus modernes et responsives ;
- ajouter des tests automatisés ;
- intégrer une vraie logique de panier et de commande ;
- améliorer l'interface d'administration avec tableaux, filtres et statistiques ;
- ajouter une API REST pour une future version mobile ou progressive web app.

## 8. Problèmes que ce projet résout

Ce projet répond à plusieurs besoins concrets :

- centraliser la gestion d'un espace de restauration ou de service ;
- réduire les tâches manuelles de gestion des menus, promotions et réclamations ;
- fournir un accès structuré selon les profils utilisateurs ;
- offrir une base claire pour un système de gestion moderne et extensible ;
- rendre l'expérience plus simple pour les utilisateurs finaux et les administrateurs.

## 9. Pour les contributeurs

Si vous souhaitez contribuer, vous pouvez :

- corriger des bugs ;
- améliorer l'interface utilisateur ;
- ajouter des fonctionnalités ;
- proposer des idées d'évolution.

N'hésitez pas à ouvrir une pull request ou à partager vos améliorations.

## 10. Licence

Ce projet est fourni à des fins de démonstration et de partage communautaire. Vous pouvez l'adapter selon vos besoins.