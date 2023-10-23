-- Création de la table des aliments
CREATE TABLE aliments (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(255),
    type VARCHAR(50),
    glucide DECIMAL(10, 2),
    lipide DECIMAL(10, 2),
    proteine DECIMAL(10, 2),
    sel DECIMAL(10, 2),
    sucre DECIMAL(10, 2)
);

-- Création de la table du journal alimentaire
CREATE TABLE journal (
    id INT PRIMARY KEY AUTO_INCREMENT,
    id_utilisateur INT,
    id_aliment INT,
    date DATE,
    quantite DECIMAL(10, 2)
);

-- Insertion de données de test
INSERT INTO aliments (nom, type, glucide, lipide, proteine, sel, sucre) VALUES ('Pomme', 'Fruit', 19.0, 0.3, 0.5, 0.002, 19.0);
INSERT INTO aliments (nom, type, glucide, lipide, proteine, sel, sucre) VALUES ('Poulet', 'Viande', 0.0, 3.6, 31.0, 0.07, 0.0);

-- Insertion d'utilisateurs et de leurs entrées dans le journal alimentaire
-- (Pour des raisons de sécurité, les mots de passe devraient être hachés dans une application réelle)
INSERT INTO utilisateurs (login, mot_de_passe) VALUES ('utilisateur1', 'motdepasse1');
INSERT INTO utilisateurs (login, mot_de_passe) VALUES ('utilisateur2', 'motdepasse2');
INSERT INTO journal (id_utilisateur, id_aliment, date, quantite) VALUES (1, 1, '2023-10-23', 1.0);
INSERT INTO journal (id_utilisateur, id_aliment, date, quantite) VALUES (2, 2, '2023-10-23', 0.5);