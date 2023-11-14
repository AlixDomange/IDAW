/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de cr�ation :  27/10/2023 11:20:50                      */
/*==============================================================*/


drop table if exists COMPOSITION;

drop table if exists ALIMENT;

drop table if exists JOURNAL;

drop table if exists UTILISATEUR;

drop table if exists NIVEAU_SPORT;

drop table if exists PLAT;

drop table if exists TYPE_ALIMENT;


/*==============================================================*/
/* Table : ALIMENT                                              */
/*==============================================================*/
create table ALIMENT
(
   ID_ALIMENT           int AUTO_INCREMENT not null,
   ID_TYPE              int not null,
   NOM                  varchar(50),
   CALORIES             decimal,
   GLUCIDES             decimal,
   LIPIDES              decimal,
   PROTEINES            decimal,
   SEL                  decimal,
   SUCRE                decimal,
   primary key (ID_ALIMENT)
);

/*==============================================================*/
/* Table : COMPOSITION                                          */
/*==============================================================*/
create table COMPOSITION
(
   ID_PLAT              int not null,
   ID_ALIMENT           int not null,
   POURCENTAGE          decimal,
   primary key (ID_PLAT, ID_ALIMENT)
);

/*==============================================================*/
/* Table : JOURNAL                                              */
/*==============================================================*/
create table JOURNAL
(
   ID_USER              int not null,
   ID_PLAT              int not null,
   DATE                 date,
   QUANTITE             decimal,
   primary key (ID_USER, ID_PLAT)
);

/*==============================================================*/
/* Table : NIVEAU_SPORT                                         */
/*==============================================================*/
create table NIVEAU_SPORT
(
   ID_NIVEAU            int AUTO_INCREMENT not null,
   NIVEAU_SPORT         varchar(10),
   primary key (ID_NIVEAU)
);

/*==============================================================*/
/* Table : PLAT                                                 */
/*==============================================================*/
create table PLAT
(
   ID_PLAT              int not null,
   NOM_PLAT             varchar(50),
   primary key (ID_PLAT)
);

/*==============================================================*/
/* Table : TYPE_ALIMENT                                         */
/*==============================================================*/
create table TYPE_ALIMENT
(
   ID_TYPE              int AUTO_INCREMENT not null,
   TYPE                 varchar(50),
   primary key (ID_TYPE)
);

/*==============================================================*/
/* Table : UTILISATEUR                                          */
/*==============================================================*/
create table UTILISATEUR
(
   ID_USER              int not null,
   ID_NIVEAU            int not null,
   LOGIN                varchar(50),
   PASSWORD             varchar(50),
   AGE                  int,
   SEXE                 varchar(1),
   primary key (ID_USER)
);

alter table ALIMENT add constraint FK_TYPE foreign key (ID_TYPE)
      references TYPE_ALIMENT (ID_TYPE) on delete restrict on update restrict;

alter table COMPOSITION add constraint FK_COMPOSITION foreign key (ID_PLAT)
      references PLAT (ID_PLAT) on delete restrict on update restrict;

alter table COMPOSITION add constraint FK_COMPOSITION2 foreign key (ID_ALIMENT)
      references ALIMENT (ID_ALIMENT) on delete restrict on update restrict;

alter table JOURNAL add constraint FK_JOURNAL foreign key (ID_USER)
      references UTILISATEUR (ID_USER) on delete restrict on update restrict;

alter table JOURNAL add constraint FK_JOURNAL2 foreign key (ID_PLAT)
      references PLAT (ID_PLAT) on delete restrict on update restrict;

alter table UTILISATEUR add constraint FK_NIVEAU_SPORT foreign key (ID_NIVEAU)
      references NIVEAU_SPORT (ID_NIVEAU) on delete restrict on update restrict;

-- Insertion de données
INSERT INTO TYPE_ALIMENT(type) VALUES ('Fruit'); 
INSERT INTO TYPE_ALIMENT(type) VALUES ('Viande'); 
INSERT INTO TYPE_ALIMENT(type) VALUES ('Céréale'); 
INSERT INTO TYPE_ALIMENT(type) VALUES ('Légume'); 
INSERT INTO TYPE_ALIMENT(type) VALUES ('Produit laitier'); 
INSERT INTO TYPE_ALIMENT(type) VALUES ('Oeuf');
INSERT INTO TYPE_ALIMENT(type) VALUES ('Poisson');
INSERT INTO TYPE_ALIMENT(type) VALUES ('Noix');
INSERT INTO TYPE_ALIMENT(type) VALUES ('Fromage');
INSERT INTO TYPE_ALIMENT(type) VALUES ('Dessert');
INSERT INTO TYPE_ALIMENT(type) VALUES ('Matière grasse');

INSERT INTO ALIMENT (nom, id_type, calories, glucides, lipides, proteines, sel, sucre) VALUES ('Pomme', 1, 52, 14.0, 0.2, 0.3, 0.0, 10.0);
INSERT INTO ALIMENT (nom, id_type, calories, glucides, lipides, proteines, sel, sucre) VALUES ('Poulet grillé', 2, 165, 0, 3.6, 31, 0.8, 0);
INSERT INTO ALIMENT (nom, id_type, calories, glucides, lipides, proteines, sel, sucre) VALUES ('Riz cuit', 3, 130, 28, 0.2, 2.7, 0.01, 0);
INSERT INTO ALIMENT (nom, id_type, calories, glucides, lipides, proteines, sel, sucre) VALUES ('Brocoli cuit', 4, 55, 11, 0.6, 3.7, 0.1, 2.2);
INSERT INTO ALIMENT (nom, id_type, calories, glucides, lipides, proteines, sel, sucre) VALUES ('Lait écrémé', 5, 83, 12, 0.2, 8.4, 0.1, 12);
INSERT INTO ALIMENT (nom, id_type, calories, glucides, lipides, proteines, sel, sucre) VALUES ('Oeuf à la coque', 6, 68, 0.6, 5.5, 5.5, 0.2, 0.6);
INSERT INTO ALIMENT (nom, id_type, calories, glucides, lipides, proteines, sel, sucre) VALUES ('Saumon grillé', 7, 206, 0, 13, 22, 0.6, 0);
INSERT INTO ALIMENT (nom, id_type, calories, glucides, lipides, proteines, sel, sucre) VALUES ('Pâtes cuites', 3, 131, 26, 1.3, 5, 0, 0);
INSERT INTO ALIMENT (nom, id_type, calories, glucides, lipides, proteines, sel, sucre) VALUES ('Banane', 1, 105, 27, 0.3, 1.3, 0.01, 14);
INSERT INTO ALIMENT (nom, id_type, calories, glucides, lipides, proteines, sel, sucre) VALUES ('Carottes', 4, 41, 10, 0.2, 0.9, 0.06, 5);
INSERT INTO ALIMENT (nom, id_type, calories, glucides, lipides, proteines, sel, sucre) VALUES ('Yaourt', 5, 61, 4.7, 3.3, 3.5, 0.07, 4.7);
INSERT INTO ALIMENT (nom, id_type, calories, glucides, lipides, proteines, sel, sucre) VALUES ('Poitrine de dinde', 2, 135, 0, 1, 30, 0.9, 0);
INSERT INTO ALIMENT (nom, id_type, calories, glucides, lipides, proteines, sel, sucre) VALUES ('Pain complet', 3, 247, 47, 2, 8.5, 1, 4);
INSERT INTO ALIMENT (nom, id_type, calories, glucides, lipides, proteines, sel, sucre) VALUES ('Pomme de terre cuite', 4, 130, 30, 0.2, 2, 0.02, 1);
INSERT INTO ALIMENT (nom, id_type, calories, glucides, lipides, proteines, sel, sucre) VALUES ('Avocat', 1, 160, 9, 14.7, 2, 0.01, 0.7);
INSERT INTO ALIMENT (nom, id_type, calories, glucides, lipides, proteines, sel, sucre) VALUES ('Quinoa cuit', 3, 120, 21, 1.9, 4.1, 0.01, 0.9);
INSERT INTO ALIMENT (nom, id_type, calories, glucides, lipides, proteines, sel, sucre) VALUES ('Orange', 1, 62, 15, 0.2, 1.2, 0, 12);
INSERT INTO ALIMENT (nom, id_type, calories, glucides, lipides, proteines, sel, sucre) VALUES ('Pois chiches cuits', 4, 164, 27, 2.6, 8.9, 0.03, 4.8);
INSERT INTO ALIMENT (nom, id_type, calories, glucides, lipides, proteines, sel, sucre) VALUES ('Chou-fleur cuit', 4, 25, 5, 0.3, 2, 0.3, 2);
INSERT INTO ALIMENT (nom, id_type, calories, glucides, lipides, proteines, sel, sucre) VALUES ('Cabillaud', 7, 82, 0, 0.7, 18, 0.06, 0);
INSERT INTO ALIMENT (nom, id_type, calories, glucides, lipides, proteines, sel, sucre) VALUES ('Noix de cajou', 8, 553, 30, 44, 18, 0.03, 6);
INSERT INTO ALIMENT (nom, id_type, calories, glucides, lipides, proteines, sel, sucre) VALUES ('Poire', 1, 57, 15, 0.1, 0.4, 0, 9);
INSERT INTO ALIMENT (nom, id_type, calories, glucides, lipides, proteines, sel, sucre) VALUES ('Thon en conserve', 7, 122, 0, 0.5, 29, 1, 0);
INSERT INTO ALIMENT (nom, id_type, calories, glucides, lipides, proteines, sel, sucre) VALUES ('Aubergine', 4, 25, 6, 0.2, 1, 0, 3.5);
INSERT INTO ALIMENT (nom, id_type, calories, glucides, lipides, proteines, sel, sucre) VALUES ('Emmental', 9, 392, 0, 32, 28, 0.7, 0.1);
INSERT INTO ALIMENT (nom, id_type, calories, glucides, lipides, proteines, sel, sucre) VALUES ('Chocolat', 10, 546, 60, 31, 7, 0.01, 51);
INSERT INTO ALIMENT (nom, id_type, calories, glucides, lipides, proteines, sel, sucre) VALUES ('Tomate', 4, 18, 4, 0.2, 1, 0.02, 2.6);
INSERT INTO ALIMENT (nom, id_type, calories, glucides, lipides, proteines, sel, sucre) VALUES ('Steak', 2, 250, 0, 26, 26, 0.07, 0);
INSERT INTO ALIMENT (nom, id_type, calories, glucides, lipides, proteines, sel, sucre) VALUES ('Camembert', 9, 299, 0.5, 24, 19, 1.7, 0.5);
INSERT INTO ALIMENT (nom, id_type, calories, glucides, lipides, proteines, sel, sucre) VALUES ('Huile', 11, 884, 0, 100, 0, 0, 0);
INSERT INTO ALIMENT (nom, id_type, calories, glucides, lipides, proteines, sel, sucre) VALUES ('Oignon', 4, 40, 10, 0.1, 1.1, 0.01, 4.7);
INSERT INTO ALIMENT (nom, id_type, calories, glucides, lipides, proteines, sel, sucre) VALUES ('Saucisse', 2, 301, 2, 26, 14, 1.7, 0);
INSERT INTO ALIMENT (nom, id_type, calories, glucides, lipides, proteines, sel, sucre) VALUES ('Poivron', 4, 31, 6, 0.3, 1.2, 0.01, 4.2);


-- Insertion d'utilisateurs et de leurs entrées dans le journal alimentaire
INSERT INTO NIVEAU_SPORT (NIVEAU_SPORT) VALUES ('bas');
INSERT INTO NIVEAU_SPORT (NIVEAU_SPORT) VALUES ('moyen');
INSERT INTO NIVEAU_SPORT (NIVEAU_SPORT) VALUES ('élevé');

INSERT INTO UTILISATEUR (id_user, id_niveau, login, password, age, sexe) VALUES (1, 3, 'alixdomange', 'passwordalix', 20, 'F');
INSERT INTO UTILISATEUR (id_user, id_niveau, login, password, age, sexe) VALUES (2, 1, 'user1', 'password', 40, 'M');

INSERT INTO journal (id_user, id_plat, date, quantite) VALUES (1, 1, '2023-10-23', 1.0);
INSERT INTO journal (id_user, id_plat, date, quantite) VALUES (2, 2, '2023-10-23', 0.5);