# Projet-final-Back-End
##Compte rendu du projet final back-end
######Mehdi SAOUD / GAMIETTE Teddy / Lucas GROUSSET

###1. Installation
`- git clone https://github.com/tgamiette/Projet-final-Back-End
- `Docker-compose up -d` depuis la racine du depot  
- Docker 


###2. Database import
`docker exec -i Projet-SQL mysql -uroot -pazerty mysql < dump/projet.sql`

###3.Local URL

Application : http://127.0.0.1:5555

PhpMyAdmin : http://127.0.0.1:8001

###4.Identifiant de connexion

**email** : teddy971@gmail.com

**mdp**: teddy

##CR Projet Back-end
la partie back a été configuré
les api sont fonctionnelle et accéssible via localhost:5555/api{entity}
uniqumement les posts et les commentaires ont été configuré pour l'api


###défaut du site
ATTENTION si il y a la suppresion d'un post l'hydratation ne marche plus car j'instancie constaement une classe 
 - La page d'administration n'a pas été configuré donc impossibilité de supprimer les post ou les commentaires ou les user
 - la verification des variables de session n'a pas été utilisé completement (uniquement pour la connexion )
 - Le bonus du projet a été abandonné par mes soins ayant voulu stocké l'image en BDD :-) et voyant qu'il manquait
 plusieurs choses sur le site j'ai préféré m'y consacrer