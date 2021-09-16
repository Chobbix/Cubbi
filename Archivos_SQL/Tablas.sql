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
    txt_Genero          VARCHAR(20),
    date_FchaNac        DATE,
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
    txt_Duracion        VARCHAR(10),
	f_Promedio			FLOAT,
    isPrecioGeneral		BOOL,
    f_Precio			FLOAT,
	blob_img			MEDIUMBLOB,
    blob_vid      		MEDIUMBLOB,
    isAcitvo			BOOL,
    isEdited            BOOL,
    
	CONSTRAINT pk_cur PRIMARY KEY (ID_Curso),
    CONSTRAINT fk_cur_usu FOREIGN KEY (ID_Usuario) REFERENCES Usuarios (ID_Usuario),
    CONSTRAINT fk_cur_cat FOREIGN KEY (ID_Categoria) REFERENCES Categorias (ID_Categoria)
);

CREATE TABLE Secciones (
	ID_Seccion			INT,
	ID_Curso			INT,
    
	CONSTRAINT pk_niv PRIMARY KEY (ID_Curso, ID_Seccion),
    CONSTRAINT fk_niv_cur FOREIGN KEY (ID_Curso) REFERENCES Cursos (ID_Curso)
);

CREATE TABLE Capitulos (
    ID_Capitulo         INT,
	ID_Seccion			INT,
	ID_Curso			INT,
    txt_Titulo  		VARCHAR(200),
    f_Precio			FLOAT,
	blob_vid			MEDIUMBLOB,
	blob_docs			MEDIUMBLOB,
    
	CONSTRAINT pk_niv PRIMARY KEY (ID_Curso, ID_Seccion, ID_Capitulo),
    CONSTRAINT fk_niv_cur FOREIGN KEY (ID_Curso) REFERENCES Cursos (ID_Curso),
    CONSTRAINT fk_niv_sec FOREIGN KEY (ID_Seccion) REFERENCES Secciones (ID_Seccion)
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

CREATE TABLE Cursos_Registrados (
	ID_Usuario			INT,
    ID_Curso			INT,
    int_SeccionActual	INT,
    isTerminado			BOOL,
    isBaja				BOOL,
    date_FchaTerm		DATE,
    
	CONSTRAINT pk_curreg PRIMARY KEY (ID_Usuario, ID_Curso),
    CONSTRAINT fk_curreg_usu FOREIGN KEY (ID_Usuario) REFERENCES Usuarios (ID_Usuario),
    CONSTRAINT fk_curreg_cur FOREIGN KEY (ID_Curso) REFERENCES Cursos (ID_Curso),
    CONSTRAINT fk_curreg_niv FOREIGN KEY (int_SeccionActual) REFERENCES Secciones (ID_Seccion)
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
    int_SeccionActual	INT,
    isTerminado			BOOL,
    isBaja				BOOL,
    date_FchaTerm		DATE,
    
	CONSTRAINT pk_curreg PRIMARY KEY (ID_Usuario, ID_Curso),
    CONSTRAINT fk_curreg_usu FOREIGN KEY (ID_Usuario) REFERENCES Usuarios (ID_Usuario),
    CONSTRAINT fk_curreg_cur FOREIGN KEY (ID_Curso) REFERENCES Cursos (ID_Curso),
    CONSTRAINT fk_curreg_niv FOREIGN KEY (int_SeccionActual) REFERENCES Secciones (ID_Seccion)
);