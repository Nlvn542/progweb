CREATE DATABASE structure DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

CREATE TABLE question (
    nb_question INT AUTO_INCREMENT,
    question VARCHAR(500),
    reponse BOOLEAN (3),
    points INT NOT NULL,
    PRIMARY KEY(nb_question)
) ENGINE InnoDB;

INSERT INTO (question, reponse, points) VALUES 
    ("Les protéines sont-ils importants pour les muscles ?", 1 , 10)
    ("Les glucides sont-ils importants pour un sportif ?", 1, 10)
    ("Les lipides sont-ils important pour un sportif ?", 1, 10)
    ("Est ce que le poulet est rihes en glucides ?", 0, 25)
    ("Est ce que les oeufs sont riches en protéines ?", 1, 45)
    ("Les protéines servent-elles à réparer et construire les muscles après le sport ?", 1, 50)
    ("Les pates et le riz sont riches en glucides ?", 1, 50)
    ("l'huile d'olives contient des lipides bon pour la santé ?", 1, 50)
    ("Le chocolat noir est mauvais pour la santé ?", 0, 75)
    ("Un sportif doit enlever totalement les lipides pour être performant", 0, 75)
    ("Les bonbons et les fruit contiennent le même type de glucides à assimilation lente que les pâtes complêtes", 0, 100)


