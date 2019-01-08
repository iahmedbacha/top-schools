CREATE TABLE Ecole (
    id int NOT NULL UNIQUE AUTO_INCREMENT,
    nom varchar(255) NOT NULL,
    domaine varchar(255),
    wilaya varchar(255) NOT NULL,
    commune varchar(255) NOT NULL,
    adresse varchar(255) NOT NULL,
    telephone varchar(255) NOT NULL,
    fax varchar(255) NOT NULL,
    id_categorie int NOT NULL,
    PRIMARY KEY (id),
    CONSTRAINT FOREIGN KEY (id_categorie) REFERENCES CategorieEcole(id) ON DELETE CASCADE
);

CREATE TABLE CategorieEcole (
    id int NOT NULL UNIQUE AUTO_INCREMENT,
    designation varchar(255) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE TypeFormation (
    id int NOT NULL UNIQUE AUTO_INCREMENT,
    designation varchar(255) NOT NULL,
    id_ecole int NOT NULL,
    PRIMARY KEY (id),
    CONSTRAINT FOREIGN KEY (id_ecole) REFERENCES Ecole(id) ON DELETE CASCADE
);

CREATE TABLE Formation (
    id int NOT NULL UNIQUE AUTO_INCREMENT,
    designation varchar(255) NOT NULL,
    vol_hor int NOT NULL,
    prix_ht int NOT NULL,
    taxe int NOT NULL,
    id_type int NOT NULL,
    PRIMARY KEY (id),
    CONSTRAINT FOREIGN KEY (id_type) REFERENCES TypeFormation(id) ON DELETE CASCADE
);

CREATE TABLE Utilisateur (
    id int NOT NULL UNIQUE AUTO_INCREMENT,
    username varchar(255) NOT NULL,
    password varchar(255) NOT NULL,
    grade varchar(255) NOT NULL,
    id_ecole int,
    PRIMARY KEY (id),
    CONSTRAINT FOREIGN KEY (id_ecole) REFERENCES Ecole(id) ON DELETE CASCADE
);
