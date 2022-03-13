CREATE TABLE USUARIOS (
    id              int (255) auto_increment not null,
    nombre          varchar(100) not null,
    apellidos       varchar(100) not null,
    email           varchar(255) not null,
    contraseña      varchar(255) not null,
    fecha_registro  date not null
    
    CONSTRAINT pk_usuarios PRIMARY KEY(id) /* INDICAR LA PK DE LA TABLA */
    
    CONSTRAINT uq_email UNIQUE (email); /*No ingresar un email ya existente*/
)

CREATE TABLE CATEGORIAS(
    id         int(255) auto_increment not null,
    nombre     varchar(100) not null
    
    CONSTRAINT pk_categorias PRIMARY KEY(id)
)

CREATE TABLE ENTRADAS(
    id              int(255) auto_increment null,
    usuario_id      int(255),
    categoria_id    int(255),
    titulo          varchar(255) not null,
    descripcion     MEDIUMTEXT,
    fecha           date not null

    CONSTRAINT pk_entradas PRIMARY KEY(id);
    CONSTRAINT fk_entrada_usuario FOREIGN KEY(usuario_id) REFERENCES usuarios(id) /* INDICAR LA FK DE LAS OTRAS TABLAS); */
    CONSTRAINT fk_entrada_categoria FOREIGN KEY(categoria_id) REFERENCES categorias(id)

)