CREATE TABLE Ecole (
    id int NOT NULL UNIQUE AUTO_INCREMENT,
    nom varchar(255) NOT NULL,
    domaine varchar(255),
    wilaya varchar(255) NOT NULL,
    commune varchar(255) NOT NULL,
    adresse varchar(255) NOT NULL,
    telephone varchar(255) NOT NULL,
    fax varchar(255) NOT NULL,
    enligne tinyint(1) default 1,
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

CREATE TABLE Commentaire (
    id int NOT NULL UNIQUE AUTO_INCREMENT,
    contenu varchar(255) NOT NULL,
    id_user int NOT NULL,
    id_ecole int NOT NULL,
    PRIMARY KEY (id),
    CONSTRAINT FOREIGN KEY (id_user) REFERENCES User(id) ON DELETE CASCADE,
    CONSTRAINT FOREIGN KEY (id_ecole) REFERENCES Ecole(id) ON DELETE CASCADE    
);

CREATE TABLE Reponse (
    id int NOT NULL UNIQUE AUTO_INCREMENT,
    contenu varchar(255) NOT NULL,
    id_user int NOT NULL,
    id_commentaire int,
    PRIMARY KEY (id),
    CONSTRAINT FOREIGN KEY (id_user) REFERENCES User(id) ON DELETE CASCADE,
    CONSTRAINT FOREIGN KEY (id_commentaire) REFERENCES Commentaire(id) ON DELETE CASCADE
);

CREATE TABLE User (
    id int NOT NULL UNIQUE AUTO_INCREMENT,
    nom varchar(255) NOT NULL,
    prenom varchar(255) NOT NULL,
    username varchar(255) NOT NULL,
    password varchar(255) NOT NULL,
    grade varchar(255) NOT NULL,
    permission tinyint(1) default 1,
    id_ecole int,
    PRIMARY KEY (id),
    CONSTRAINT FOREIGN KEY (id_ecole) REFERENCES Ecole(id) ON DELETE CASCADE
);
