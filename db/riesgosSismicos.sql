create table tipoVialidad(
    idVialidad integer not null AUTO_INCREMENT,
    tipoVialidad char(25) not null,

    PRIMARY KEY(idVialidad)    
    );
LOAD DATA LOCAL INFILE '/var/www/riesgosSismicos/db/tipoVialidad.csv' INTO TABLE tipoVialidad CHARACTER SET UTF8 FIELDS TERMINATED BY ',' LINES TERMINATED BY '\n';


create table daño(
    idDaño integer not null AUTO_INCREMENT,
    tipoDaño char(35),
    
    PRIMARY KEY(idDaño)
);
LOAD DATA LOCAL INFILE '/var/www/riesgosSisimicos/db/daño.csv' INTO TABLE daño CHARACTER SET UTF8 FIELDS TERMINATED BY ',' LINES TERMINATED BY '\n';

create table Ubicacion(

    idUbicacion integer not null AUTO_INCREMENT,
    nombreVialidad char(25),
    numeroExterior char(10),
    idTipoVialidad integer not null,
    
    PRIMARY KEY(idUbicacion),
    FOREIGN KEY(idTipoVialidad) REFERENCES tipoVialidad(idVialidad)


);


create table Edificio(
    idEdificio integer not null AUTO_INCREMENT,
    nombreEdificio char(25),
    usoSuelo char(30) not null,
    ctaCatastral char(20),
    idUbicacionEdificio integer not null,

    PRIMARY KEY(idEdificio),
    FOREIGN KEY(idUbicacionEdificio) REFERENCES Ubicacion(idUbicacion)

);



create table edificioSufreDaño(
    idEdificioSufreDaño integer not null AUTO_INCREMENT,
    Edificio integer not null,
    Daño integer not null,

    PRIMARY KEY(idEdificioSufreDaño),
    FOREIGN KEY(Edificio) REFERENCES Edificio(idEdificio),
    FOREIGN KEY(Daño) REFERENCES daño(idDaño)
);




