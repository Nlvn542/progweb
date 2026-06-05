CREATE DATABASE structure DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

CREATE TABLE client (
    nb_question INT AUTO_INCREMENT,
    question VARCHAR(500),
    PRIMARY KEY(nb_question)
) ENGINE InnoDB;

INSERT INTO (question) VALUES 
    ("Les protéines sont-ils importants pour les muscles ?")
    ("Les glucides sont-ils importants pour un sportif ?")
    ("Les lipides sont-ils important pour un sportif ?")
    ("Est ce que le poulet est rihes en glucides ?")
    ("Est ce que les oeufs sont riches en protéines ?")
    ("Les protéines servent-elles à réparer et construire les muscles après le sport ?")
    ("Les pates et le riz sont riches en glucides ?")
    ("l'huile d'olives contient des lipides bon pour la santé ?")
    ("Le chocolat noir est mauvais pour la santé ?")
    ("Un sportif doit enlever totalement les lipides pour être performant")
    ("Les bonbons et les fruit contiennent le même type de glucides à assimilation lente que les pâtes complêtes")


