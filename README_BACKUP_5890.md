<<<<<<< HEAD
<<<<<<< HEAD
Projet : findMyCoop

FindMyCoop est un site polyvalent de participation pour des projets, il vous permettra de trouver de l'aide,  ou si le coeur vous en dit, d'aider pour des projets interessant . Le site se divise en deux parties :

        => la partie projet 

Outils pour modifier et ajouter vos differents projets . Vous pouvez ajouter de nouveaux membres à vos   projet et leur permettre de participer. Vous pouvez aussi les rejoindre et contribuer à un projet intérressant qui n'aurait pas aboutis .

        => la partie forum

Un forum d'entre-aide et de détente,pour parler avec d'autres réalisateurs de projet et ainsi   finaliser le votre.

Caracteristique

FindMyCoop est un site pensé par Loïc Derrieux, puis repris par l'équipe de développement de l'école Beweb   à Béziers (Sidobre Morgane,Marty Bruno et Duban Rémi)en un mois .

Logiciels utilisés : Netbeans 8.2, Zend 2.5.1 avec Doctrine, Github, Trello, phpmyAdmin .

=======
**Projet : findMyCoop**
=======
ZendSkeletonApplication
=======================
>>>>>>> 565e5af13d893d3a4364b8b36613e15a2c16d360

Introduction
------------
This is a simple, skeleton application using the ZF2 MVC layer and module
systems. This application is meant to be used as a starting place for those
looking to get their feet wet with ZF2.

Installation
------------

Using Composer (recommended)
----------------------------
The recommended way to get a working copy of this project is to clone the repository
and use `composer` to install dependencies using the `create-project` command:

    curl -s https://getcomposer.org/installer | php --
    php composer.phar create-project -sdev --repository-url="https://packages.zendframework.com" zendframework/skeleton-application path/to/install

Alternately, clone the repository and manually invoke `composer` using the shipped
`composer.phar`:

    cd my/project/dir
    git clone git://github.com/zendframework/ZendSkeletonApplication.git
    cd ZendSkeletonApplication
    php composer.phar self-update
    php composer.phar install

(The `self-update` directive is to ensure you have an up-to-date `composer.phar`
available.)

Another alternative for downloading the project is to grab it via `curl`, and
then pass it to `tar`:

<<<<<<< HEAD
	Logiciels utilisés : Netbeans 8.2, Zend 2.5.1, Github, Trello, phpmyAdmin .
>>>>>>> 9e597b830b24a7ed49a96571d7cbd3e7c9354bbf
=======
    cd my/project/dir
    curl -#L https://github.com/zendframework/ZendSkeletonApplication/tarball/master | tar xz --strip-components=1
>>>>>>> 565e5af13d893d3a4364b8b36613e15a2c16d360

You would then invoke `composer` to install dependencies per the previous
example.

Using Git submodules
--------------------
Alternatively, you can install using native git submodules:

    git clone git://github.com/zendframework/ZendSkeletonApplication.git --recursive

Web Server Setup
----------------

### PHP CLI Server

The simplest way to get started if you are using PHP 5.4 or above is to start the internal PHP cli-server in the root directory:

    php -S 0.0.0.0:8080 -t public/ public/index.php

This will start the cli-server on port 8080, and bind it to all network
interfaces.

**Note: ** The built-in CLI server is *for development only*.

### Apache Setup

To setup apache, setup a virtual host to point to the public/ directory of the
project and you should be ready to go! It should look something like below:

    <VirtualHost *:80>
        ServerName zf2-tutorial.localhost
        DocumentRoot /path/to/zf2-tutorial/public
        SetEnv APPLICATION_ENV "development"
        <Directory /path/to/zf2-tutorial/public>
            DirectoryIndex index.php
            AllowOverride All
            Order allow,deny
            Allow from all
        </Directory>
    </VirtualHost>
