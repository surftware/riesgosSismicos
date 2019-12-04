create table sisEstruc(
    idSisEstruc integer not null AUTO_INCREMENT,
    tipoSistema char(25) not null,

    PRIMARY KEY(idSisEstruc)
    );

create table usoSuelo(
    idUsoSuelo integer not null AUTO_INCREMENT,
    tipoUsoSuelo char(25) not null,

    PRIMARY KEY(idUsoSuelo)
    );
create table conFach(
    idConFach integer not null AUTO_INCREMENT,
    tipoCOnFach char(25) not null,

    PRIMARY KEY(idConFach)
    );

create table matPrinCons(
    idMatPrinCons integer not null AUTO_INCREMENT,
    tipoMatPrinCon char(25) not null,

    PRIMARY KEY(idMatPrinCons)
    );

create table cimentacion(
    idCimentacion integer not null AUTO_INCREMENT,
    tipoCimen char(25) not null,

    PRIMARY KEY(idCimentacion)
  );

create table reparacion(
    idReparacion integer not null AUTO_INCREMENT,
    tipoReparacion char(25) not null,

    PRIMARY KEY(idReparacion)
    );

create table agravante(
    idAgravante integer not null AUTO_INCREMENT,
    tipoAgravante char(25) not null,

    PRIMARY KEY(idAgravante)
    );

create table estado(
    idEstado integer not null AUTO_INCREMENT,
    nombreEstado char(40) not null,

    PRIMARY KEY(idEstado)
    );

create table municipio(
      idMunicipio integer not null AUTO_INCREMENT,
      tnombreMuni char(35) not null,

      PRIMARY KEY(idMunicipio)
      );

create table tipoReferencia(
      idTipoReferencia integer not null AUTO_INCREMENT,
      tipoReferencia char(25) not null,

      PRIMARY KEY(idTipoReferencia)
      );

create table referencia(
        idReferencia integer not null AUTO_INCREMENT,
        nombreReferencia char(25) ,
        tipoReferencia integer not null,,
        aledaña boolean,
        PRIMARY KEY(idReferencia),
        FOREIGN KEY(tipoReferencia) REFERENCES tipoReferencia(idTipoReferencia)
        );

create table coordenadas(
        idCoordenada integer not null AUTO_INCREMENT,
        coorX float not null,
        coorY float not null,
        PRIMARY KEY(idcoordenada),
        );

create table ubicacion(
        idUbicacion integer not null AUTO_INCREMENT,
        numeroExt char(25),
        numeroInt char(25),
        CP integer,
        coordenadas integer not null,
        estado integer not null,
        PRIMARY KEY(idUbicacion),
        FOREIGN KEY(coordenadas) REFERENCES coordenadas(idCoordenada),
        FOREIGN KEY(estado) REFERENCES estado(idEstado)
        );
create table ubicacionTieneReferencia(
        idUbicacionTieneReferencia integer not null AUTO_INCREMENT,
        nombreReferencia char(25),
        ubicacion integer not null,
        referencia integer not null,
        PRIMARY KEY(idUbicacionTieneReferencia),
        FOREIGN KEY(ubicacion) REFERENCES ubicacion(idUbicacion),
        FOREIGN KEY(referencia) REFERENCES referencia(idReferencia)
        );
create table edificio(
        idEdificio integer not null AUTO_INCREMENT,
        nombreEdificio char(25),
        cuentaCatastral char(10),
        ubicacion integer not null,
        fechaCons date,
        noNivel integer(2),
        sisEstruc integer not null,
        usoSuelo integer not null,
        matPrinCons integer not null,
        cimentacion integer not null,
        conFach integer not null,

        PRIMARY KEY(idEdificio),
        FOREIGN KEY(ubicacion) REFERENCES ubicacion(idUbicacion),
        FOREIGN KEY(sisEstruc) REFERENCES sisEstruc(idSisEstruc),
        FOREIGN KEY(usoSuelo) REFERENCES usoSuelo(idUsoSuelo),
        FOREIGN KEY(matPrinCons) REFERENCES matPrinCons(idMatPrinCons),
        FOREIGN KEY(cimentacion) REFERENCES cimentacion(idCimentacion),
        FOREIGN KEY(conFach) REFERENCES conFach(idConFach)
        );

create table sismo(
        idSismo integer not null AUTO_INCREMENT,
        coorSismo integer not null,
        magnitud float not null,
        poblacionCerca CHARACTER(45),

        PRIMARY KEY(idSismo),
        FOREIGN KEY(coorSismo) REFERENCES coordenadas(idCoordenada)
        );
create table tipoDano(
        idTipoDano integer not null AUTO_INCREMENT,
        tipoAfect CHARACTER(25),

        PRIMARY KEY(idTipoDano)
        );
create table nivelDano(
        idNivelDano integer not null AUTO_INCREMENT,
        tipoNivel CHARACTER(20),

        PRIMARY KEY(idNivelDano)
        );
create table parametro(
        idParametro integer not null AUTO_INCREMENT,
        periEst float,
        periSue float,
        cociente float,
        acelMaxSue float,
        acelEsp float,
        disEstructuraEpicentro float,
        PRIMARY KEY(idParametro)
        );
create table afectacion(
        idAfectacion integer not null AUTO_INCREMENT,
        tipoDano integer not null,
        nivelDano integer not null,
        parametro integer not null,
        sismo integer not null,

        PRIMARY KEY(idAfectacion),
        FOREIGN KEY(tipoDano) REFERENCES tipoDano(idTipoDano),
        FOREIGN KEY(nivelDano) REFERENCES nivelDano(idNivelDano),
        FOREIGN KEY(parametro) REFERENCES parametro(idParametro),
        FOREIGN KEY(sismo) REFERENCES sismo(idSismo)
        );
create table edificioSufreAfectacion(
        idEdificioSufreAfectacion integer not null AUTO_INCREMENT,
        afectacion integer not null,
        edificio integer not null,
        fechaSismo date,

        PRIMARY KEY(idEdificioSufreAfectacion),
        FOREIGN KEY(afectacion) REFERENCES afectacion(idAfectacion),
        FOREIGN KEY(edificio) REFERENCES edificio(idEdificio)
        );
