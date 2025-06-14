# 🐳 WordPress Docker Stack

Une stack pour exécuter WordPress en local avec :

- NGINX comme reverse proxy  
- WordPress via PHP-FPM  
- MariaDB comme base de données  
- Configuration NGINX personnalisée

---

## ✅ Prérequis

Avant de commencer, assure-toi d’avoir installé :

- [Docker](https://docs.docker.com/get-docker/)
- [Docker Compose](https://docs.docker.com/compose/install/)
- macOS, Linux ou WSL2 (Windows)

Vérifie avec :

```bash
docker --version
docker compose version
```

---

## 📦 Composition de la stack

![Architecture de la stack](./architecture.png)

| Service     | Rôle                                 | Port exposé |
|-------------|---------------------------------------|-------------|
| wordpress   | Application WordPress en PHP-FPM      | N/A         |
| db          | Base de données MariaDB               | 3306        |
| nginx       | Serveur web et reverse proxy          | 80          |

---

## 🚀 Lancer le projet

### 1. Cloner le dépôt

```bash
git clone https://github.com/abir-benelhadj/wordpress-docker-nginx.git
cd wordpress-docker-nginx
```

### 2. Démarrer les conteneurs

```docker compose up -d```

### 3. Accéder à l'installation

Ouvre ton navigateur sur : http://localhost

## 🛠️ Détails de configuration

### Base de données (MariaDB)

- Nom : `wordpress`  
- Utilisateur : `wp_user`  
- Mot de passe : `wp_pass`  
- Mot de passe root : `rootpass`  

Ces valeurs peuvent être modifiées dans le fichier `docker-compose.yml`.

---

## 🧾 Structure du projet

wordpress-docker/  
├── docker-compose.yml  
├── nginx/  
│   └── default.conf  
├── wordpress/  
│   └── wp-config.php (généré automatiquement)  
├── entrypoint.sh  
└── db-data/  (volume persistant MariaDB)

---

## 🔐 HTTPS

Pour utiliser un nom de domaine et le securiser, nous avons configurer `certbot` dans un conteneur dédié

---
