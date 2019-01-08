INSERT INTO CategorieEcole (id,designation) VALUES 
	(1,"Maternelle"),
	(2,"Primaire"),
	(3,"Moyenne"),
	(4,"Secondaire"),
	(5,"Formation professionnelle"),
	(6,"Formation universitaire");

INSERT INTO Ecole (id,nom,domaine,wilaya,commune,adresse,telephone,fax,id_categorie) VALUES 
	(1,"Ecole Supérieure de Commerce","Commerce et finance","Oran","Es-Senia","50 Rue des martyrs","031 56 25 70","031 56 30 50",6),
	(2,"Ecole Supérieure d’Electronique","Electronique","Boumerdes","Boumerdes-centre","3500 Rue de la liberté","035 56 25 70","035 56 30 50",6),
	(3,"Ecole Supérieure d’Informatique","Informatique","Alger","Oued Smar","68 rue de la gare","023 56 25 70","023 56 30 50",6),
	(4,"Ecole Supérieure d’Agronomie","Agronomie","El-Oued","Djamaa","30 Rue des dunes","026 56 25 70","026 56 30 50",6),
	(5,"Ecole Supérieure Vétérinaire","Vétérnaire","Tizi-ouzou","Freha","10 Rue des oliviers","025 56 25 70","025 56 30 50",6),
	(6,"Institue Supérieure de commerce","Commerce et finance","Béjaia","Akbou","20 Rue de la montagne","032 56 25 70","032 56 30 50",6),
	(7,"Institue d’hôtellerie et restauration","Hôtellerie","Tizi-Ouzou","Es-Senia","0 Rue des martyrs","021 56 25 70","021 56 30 50 / 56 51 54",5),
	(8,"Institue des métiers de plomberie et chauffage","Plomberie","Sétif","El-Eulma","50 Rue de la liberté","021 56 25 70","021 56 30 50 / 56 51 54",5),
	(9,"Institue de mécanique","Mécanique","Blida","Soûmaa","50 Rue de la gare","021 56 25 70","021 56 30 50 / 56 51 54",5),
	(10,"Institue d’hygiène et sécurité","Commerce et finance","Alger","Rouiba","50 Rue des dunes","021 56 25 70","021 56 30 50 / 56 51 54",5),
	(11,"Institue des métiers du bâtiments","Bâtiment","Bechar","Saoura","50 Rue des oliviers","021 56 25 70","021 56 30 50 / 56 51 54",5),
	(12,"Ecole El-Falah",NULL,"Mostaganem","Mansoura","50 Rue de la liberté","021 56 25 70","021 56 30 50 / 56 51 54",4),
	(13,"Ecole El-Nadjah",NULL,"Constantine","Ibn-Badis","50 Rue des martyrs","021 56 25 70","021 56 30 50 / 56 51 54",4),
	(14,"Ecole Les glycines",NULL,"Alger","Chéraga","50 Rue de la gare","021 56 25 70","021 56 30 50 / 56 51 54",4),
	(15,"Ecole Madrassati",NULL,"Alger","Hussein-Dey","50 Rue des oliviers","021 56 25 70","021 56 30 50 / 56 51 54",4),
	(16,"Ecole El-Fath",NULL,"Tlemcen","Hennaya","Hennaya","021 56 25 70","021 56 30 50 / 56 51 54",4),
	(17,"Ecole Madrassati",NULL,"Alger","Hussein-Dey","50 Rue de la gare","021 56 25 70","021 56 30 50 / 56 51 54",3),
	(18,"Ecole El-Nadjah",NULL,"Constantine","Ibn-Badis","50 Rue des oliviers","021 56 25 70","021 56 30 50 / 56 51 54",3),
	(19,"Ecole La réussite",NULL,"Bechar","Béni Abbès","50 Rue des dunes","021 56 25 70","021 56 30 50 / 56 51 54",3),
	(20,"Ecole Les écoliers",NULL,"Oran","Ain-El-Turk","50 Rue de la liberté","021 56 25 70","021 56 30 50 / 56 51 54",3),
	(21,"Ecole El-Moutafawikines",NULL,"Chlef","Tenès","50 Rue des martyrs","021 56 25 70","021 56 30 50 / 56 51 54",3),
	(22,"Ecole El-Nadjihine",NULL,"Bouira","Lakhdaria","50 Rue des dunes","021 56 25 70","021 56 30 50 / 56 51 54",2),
	(23,"Ecole Madrassati",NULL,"Alger","Hussein-Dey","50 Rue des oliviers","021 56 25 70","021 56 30 50 / 56 51 54",2),
	(24,"Ecole El-Nadjah",NULL,"Constantine","Ibn-Badis","50 Rue de la liberté","021 56 25 70","021 56 30 50 / 56 51 54",2),
	(25,"Ecole El-oumma",NULL,"Tipaza","Cherchell","50 Rue dses martyrs","021 56 25 70","021 56 30 50 / 56 51 54",2),
	(26,"Ecole El-Bayane",NULL,"Ghardaïa","El-Menia","50 Rue de la gare","021 56 25 70","021 56 30 50 / 56 51 54",2),
	(27,"Ecole Les Poussins",NULL,"Alger","Dar-El-Beida","50 Rue de la liberté","021 56 25 70","021 56 30 50 / 56 51 54",1),
	(28,"Ecole Madrassati",NULL,"Alger","Hussein-Dey","50 Rue des martyrs","021 56 25 70","021 56 30 50 / 56 51 54",1),
	(29,"Ecole El-Moustakbel",NULL,"Sidi-Bel-Abbès","Sidi Brahim","50 Rue de la gare","021 56 25 70","021 56 30 50 / 56 51 54",1),
	(30,"Ecole El-Nadjah",NULL,"Constantine","Ibn-Badis","50 Rue des oliviers","021 56 25 70","021 56 30 50 / 56 51 54",1),
	(31,"Ecole El-Oumma",NULL,"Tipaza","Cherchell","50 Rue des dunes","021 56 25 70","021 56 30 50 / 56 51 54",1);
	

INSERT INTO TypeFormation (id,designation,id_ecole) VALUES 
	(1,"Mathematiques",1),
	(2,"Business",1),
	(3,"Electricité",2),
	(4,"Bureautiques",3),
	(5,"Génie logiciel",3);

INSERT INTO Formation (id,designation,vol_hor,prix_ht,taxe,id_type) VALUES 
	(1,"Statistiques",10,1500,17,1),
	(2,"Probabilités",10,1500,17,1),
	(3,"Marketing",10,1500,17,1),
	(4,"Communications",10,1500,17,1),
	(5,"Equipements",10,1500,17,3),
	(6,"Energies renouvlables",10,1500,17,3),
	(7,"Microsoft office",10,1500,17,4),
	(8,"Adobe illustrator",10,1500,17,4),
	(9,"Adobe photoshop",10,1500,17,4),
	(10,"Méthodes agiles",10,1500,17,5),
	(11,"Outils",10,1500,17,5),
	(12,"Qualité logiciel",10,1500,17,5);

INSERT INTO Utilisateur (id,username,password,grade,id_ecole) VALUES 
	(1,"admin","admin","admin",NULL),
	(2,"employe1","employe1","employe",1),
	(3,"employe2","employe2","employe",2),
	(4,"employe3","employe3","employe",3),
	(5,"membre","membre","membre",NULL);
