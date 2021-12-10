# Projet-final-Back-End
##Compte rendu du projet final back-end
######Mehdi SAOUD / GAMIETTE Teddy / Lucas GROUSSET

###1. Installation
`- git clone https://github.com/tgamiette/Projet-final-Back-End
- `Docker-compose up -d` depuis la racine du depot  
- Docker 


###2. Database import
`docker exec -i Projet-SQL mysql -uroot -pazerty mysql < /dump/faker.sql`

**Local URL**

Application : http://127.0.0.1:5555

PhpMyAdmin : http://127.0.0.1:8001

la partie back a été configuré
les api sont fonctionnelle et accéssible via localhost:5555/api{entity}
uniqumement les posts et les commentaires ont été configuré pour l'api


###défauts du site

 - La page d'administration n'a pas été configuré donc impossibilité de supprimer les post ou les commentaires
 - la verification des variable de session n'a pas été utilisé completement (uniquement pour la connexion )
 - Le bonus du projet a été abandonné par mes soins ayant voulu stocké l'image en BDD :-) et voyant qu'il manquait
 plusieurs choses sur le site