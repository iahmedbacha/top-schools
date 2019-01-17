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
	(1,"Sciences appliquées",1),
	(2,"Commerce",1),
	(3,"Electronique",2),
	(4,"Bureautiques",3),
	(5,"Développement logiciel",3);

INSERT INTO Formation (id,designation,vol_hor,prix_ht,taxe,id_type) VALUES 
	(1,"Probabilités",10,2000,19,1),
	(2,"Mathématiques",10,2000,19,1),
	(3,"Marketing digitale",10,2000,19,1),
	(4,"Public speaking",10,2000,19,1),
	(5,"Outils",10,2000,19,3),
	(6,"Nature",10,2000,19,3),
	(7,"Microsoft azzure",10,2000,19,4),
	(8,"Adobe XD",10,2000,19,4),
	(9,"Adobe Illustrator",10,2000,19,4),
	(10,"Scrum",10,2000,19,5),
	(11,"Jenkins",10,2000,19,5),
	(12,"Architecture logiciel",10,2000,19,5);

INSERT INTO Commentaire (id,contenu,id_user,id_ecole) VALUES 
	(1,"Je recommande vivement cette école",5,1),
	(2,"J'ai adoré cette école à cause de son très bon niveau.",4,1),
	(3,"C'est une école d'excellence",3,2);

INSERT INTO Reponse (id,contenu,id_user,id_commentaire) VALUES 
	(1,"Je vous en pris!",2,1),
	(2,"Merci beaucoup.",1,1),
	(3,"C'est gentil. Merci.",2,2);

INSERT INTO User (id,nom,prenom,username,password,grade,id_ecole) VALUES 
	(1,"AHMED BACHA","Ibrahim","admin","admin","admin",NULL),
	(2,"KHODJA","Mehdi Nassim","emp1","emp1","employe",1),
	(3,"SI-MOHAMMED","Samir M'hamed","emp2","emp2","employe",2),
	(4,"BORSALI","Fayçal","emp3","emp3","employe",3),
	(5,"BOUMADANE","Abdelmoumene","emp4","emp4","employe",3),
	(6,"DELLYS","Hachemi","membre","membre","membre",NULL);
