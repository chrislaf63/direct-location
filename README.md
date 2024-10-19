<p align="center"><img src="public/images/logo1.png"></p>

<h1 align="center">Site Web - Location de Matériel</h1>


<p>Bienvenue dans le repository du site de location de matériel, développé avec Laravel 11. Ce projet a pour objectif de permettre aux utilisateurs de louer et de publier des annonces pour des équipements, facilitant ainsi l’accès à des biens matériels utilisés de manière ponctuelle.</p>


<h2>Table des matières</h2>
<ul>
<li>Pré-requis</li>
<li>Installation</li>
<li>Configuration</li>
<li>Commandes Artisan</li>
<li>Migrations et seeders</li>
<li>Tests</li>
<li>Fonctionnalités principales</li>
<li>Contribuer</li>
<li>Licences</li>
</ul>

<h2>Pré-requis</h2>
<p>Assurez-vous d’avoir les éléments suivants installés avant de démarrer :</p>

<ul>
<li>PHP >= 8.3</li>
<li>Composer</li>
<li>Node.js & npm</li>
<li>MySQL ou tout autre base de données compatible avec Laravel</li>
<li>Un serveur web (ex. : Apache, Nginx) ou local (wamp, lamp)</li>
</ul>

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<h2>Installation</h2>
<ol>
    <li><h3>Cloner le repository :</h3>
    <pre><code>git clone https://github.com/username/location-materiel.git
    cd location-materiel</code></pre>
    </li>
    <li><h3>Configurer les variables d’environnement dans le fichier .env :</h3>
    <p>Modifiez les sections suivantes avec vos paramètres :</p>
        <pre><code>APP_NAME=LocationMateriel
    APP_URL=http://localhost
            
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=nom_de_la_base_de_données
    DB_USERNAME=utilisateur
    DB_PASSWORD=mot_de_passe

    MAIL_MAILER=smtp
    MAIL_HOST=smtp.exemple.com
    MAIL_PORT=587
    MAIL_USERNAME=votre_email
    MAIL_PASSWORD=mot_de_passe
    MAIL_ENCRYPTION=tls
    MAIL_FROM_ADDRESS="noreply@location-materiel.com"
</code></pre>
    </li>
</ol>
