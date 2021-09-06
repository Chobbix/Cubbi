USE db_bdmm_pwci;

CREATE TABLE Roles(
    ID_Rol				INT AUTO_INCREMENT,
    txt_Nombre			VARCHAR(20),
    
    CONSTRAINT pk_rol PRIMARY KEY (ID_Rol)
);

CREATE TABLE Categorias (
	ID_Categoria		INT AUTO_INCREMENT,
    txt_Nombre			VARCHAR(30),
    txt_Descrpcion		VARCHAR(200),
    
    CONSTRAINT pk_cat PRIMARY KEY (ID_Categoria)
);

CREATE TABLE Usuarios (
	ID_Usuario			INT AUTO_INCREMENT,
    ID_Rol				INT,
    txt_NomUser			VARCHAR(20),
	txt_Contra			VARCHAR(20),
	txt_Nom				VARCHAR(30),
	txt_ApePat			VARCHAR(30),
	txt_Email			VARCHAR(40),
	date_FchaRegistro	DATE,
	date_FchaUltiCambio	DATE,
	blob_img			MEDIUMBLOB NULL,

	CONSTRAINT pk_us PRIMARY KEY (ID_Usuario),
    CONSTRAINT fk_us_rol FOREIGN KEY (ID_Rol) REFERENCES Roles (ID_Rol)
);

CREATE TABLE Cursos (
	ID_Curso			INT AUTO_INCREMENT,
	ID_Usuario			INT,
    ID_Categoria		INT,
    int_Niveles			INT,
    txt_Descripcion		VARCHAR(200),
	f_Promedio			FLOAT,
    isPrecioGeneral		BOOL,
    f_Precio			FLOAT,
	blob_img			MEDIUMBLOB,
    isAcitvo			BOOL,
    
	CONSTRAINT pk_cur PRIMARY KEY (ID_Curso),
    CONSTRAINT fk_cur_usu FOREIGN KEY (ID_Usuario) REFERENCES Usuarios (ID_Usuario),
    CONSTRAINT fk_cur_cat FOREIGN KEY (ID_Categoria) REFERENCES Categorias (ID_Categoria)
);

CREATE TABLE Promedios (
	ID_Promedio			INT AUTO_INCREMENT,
    ID_Curso			INT,
    ID_Usuario			INT,
    int_Calificacion    INT,
    
    CONSTRAINT pk_pro PRIMARY KEY (ID_Promedio),
    CONSTRAINT fk_pro_cur FOREIGN KEY (ID_Curso) REFERENCES Cursos (ID_Curso),
    CONSTRAINT fk_pro_usu FOREIGN KEY (ID_Usuario) REFERENCES Usuarios (ID_Usuario)
);

CREATE TABLE Niveles (
	ID_Nivel			INT AUTO_INCREMENT,
	ID_Curso			INT,
    int_Nivel			INT,
    txt_Descripcion		VARCHAR(200),
    f_Precio			FLOAT,
	blob_img1			MEDIUMBLOB,
	blob_img2			MEDIUMBLOB,
	blob_img3			MEDIUMBLOB,
    blob_img4			MEDIUMBLOB,
	blob_img5			MEDIUMBLOB,
	blob_vid1			MEDIUMBLOB,
	blob_vid2			MEDIUMBLOB,
    
	CONSTRAINT pk_niv PRIMARY KEY (ID_Nivel),
    CONSTRAINT fk_niv_cur FOREIGN KEY (ID_Curso) REFERENCES Cursos (ID_Curso)
);

CREATE TABLE Cursos_Registrados (
	ID_Usuario			INT,
    ID_Curso			INT,
    int_NivelActual		INT,
    isTerminado			BOOL,
    isBaja				BOOL,
    date_FchaTerm		DATE,
    
	CONSTRAINT pk_curreg PRIMARY KEY (ID_Usuario, ID_Curso),
    CONSTRAINT fk_curreg_usu FOREIGN KEY (ID_Usuario) REFERENCES Usuarios (ID_Usuario),
    CONSTRAINT fk_curreg_cur FOREIGN KEY (ID_Curso) REFERENCES Cursos (ID_Curso),
    CONSTRAINT fk_curreg_niv FOREIGN KEY (int_NivelActual) REFERENCES Niveles (int_Nivel)
);


CREATE TABLE Mensajes_Cursos (
    ID_Curso            INT,
    ID_Usuario          INT,
    txt_Mensaje         VARCHAR(500),
    isFromEscuela       BOOL,
    date_FchaEnvio      DATE,

    CONSTRAINT pk_mencur PRIMARY KEY (ID_Usuario, ID_Curso),
    CONSTRAINT fk_mencur_cur FOREIGN KEY (ID_Curso) REFERENCES Cursos (ID_Curso),
    CONSTRAINT fk_mencur_usu FOREIGN KEY (ID_Usuario) REFERENCES Usuarios (ID_Usuario)
);

CREATE TABLE Comentarios_Cursos (
    ID_Curso            INT,
    ID_Usuario          INT,
    txt_Comentario      VARCHAR(500),
    date_FchaEnvio      DATE,

    CONSTRAINT pk_comcur PRIMARY KEY (ID_Usuario, ID_Curso),
    CONSTRAINT fk_comcur_cur FOREIGN KEY (ID_Curso) REFERENCES Cursos (ID_Curso),
    CONSTRAINT fk_comcur_usu FOREIGN KEY (ID_Usuario) REFERENCES Usuarios (ID_Usuario)
);

CREATE TABLE Carrito (
	ID_Usuario			INT,
    ID_Curso			INT,
    int_NivelActual		INT,
    isTerminado			BOOL,
    isBaja				BOOL,
    date_FchaTerm		DATE,
    
	CONSTRAINT pk_curreg PRIMARY KEY (ID_Usuario, ID_Curso),
    CONSTRAINT fk_curreg_usu FOREIGN KEY (ID_Usuario) REFERENCES Usuarios (ID_Usuario),
    CONSTRAINT fk_curreg_cur FOREIGN KEY (ID_Curso) REFERENCES Cursos (ID_Curso),
    CONSTRAINT fk_curreg_niv FOREIGN KEY (int_NivelActual) REFERENCES Niveles (int_Nivel)
);