CREATE DATABASE structure DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

CREATE TABLE client (
    nb_question INT AUTO_INCREMENT,
    question VARCHAR(500),
    PRIMARY KEY(nb_question)
) ENGINE InnoDB;