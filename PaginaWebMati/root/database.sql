create database PalermoStyle;
use PalermoStyle;

create table Cliente(
    DNIC int primary key,
    NombreC varchar(45),
    ApellidoC varchar(45),
    TelefonoC int,
    MailC varchar(45),
    ContraseñaC varchar(45),
    ContraseñaC2 varchar(45)
);

create table Modelo (
    CodigoM VARCHAR(45) PRIMARY KEY,
    TipoM VARCHAR(45),
    MaterialM VARCHAR(45),
    PatronM VARCHAR(45)
);

create table Color(
    CodigoCo varchar(7) primary key, /* Hexadecimal */
    NombreCo varchar(45)
);

create table Talle(
    NombreT varchar(45) primary key,
    MedidaT varchar(45),
    TipoT varchar(45)
);

create table Ropa(
    CodigoR int primary key,
    PrecioR float,
    NombreR varchar(80),
    NombreArchivoR varchar(80),
    GeneroR varchar(45),
    TipoR varchar(45),
    SubtipoR varchar(45)
);

create table Ropa_has_Talle_has_Modelo_has_Color(
    Talle_NombreRTM varchar(45),
    Ropa_CodigoRTM int,
    Modelo_CodigoRTM varchar(45),
    Color_CodigoRTM varchar(7),
    foreign key (Talle_NombreRTM) references Talle (NombreT),
    foreign key (Ropa_CodigoRTM) references Ropa (CodigoR),
    foreign key (Modelo_CodigoRTM) references Modelo (CodigoM),
    foreign key (Color_CodigoRTM) references Color (CodigoCo)
);

create table Tarjeta(
    NumeroTa int primary key,
    TipoTa int, /* 1=Visa 2=Mastercad*/
    FechaVencimientoTa date,
    TitularTa varchar(45),
    CvCTa varchar(3),
    check (TipoTa in (1,2))
);

create table Pago(
    CodigoP int primary key,
    CantCuotasP int,
    De_CreP tinyint,
    FechaP date,
    HoraP time,
    CodigoPostalP varchar(4),
    DireccionP varchar(45),
    Tarjeta_NumeroP int,
    Cliente_DNIP int,
    foreign key (Tarjeta_NumeroP) references Tarjeta(NumeroTa),
    foreign key (Cliente_DNIP) references Cliente(DNIC),
    check (CantCuotasP>0 and CantCuotasP<13)
);

create table Ropa_Pago(
    CodigoPR int,
    CodigoRP int,
    CantidadRP int,
    NombreRP varchar(45),
    primary key (CodigoPR, CodigoRP),
    foreign key (CodigoPR) references Pago(CodigoP),
    foreign key (CodigoRP) references Ropa(CodigoR),
    foreign key (NombreRP) references Talle(NombreT)
);



insert into Talle values
    ("hXS", "P 97, CI 92, CA 97", "General"),
    ("hS", "P 104, CI 99, CA 104", "General"),
    ("hM", "P 112, CI 107, CA 112", "General"),
    ("hL", "P 120, CI 114, CA 120", "General"),
    ("hXL", "P 127, CI 122, CA 127", "General"),
    ("h2XL", "P 135, CI 130, CA 135", "General"),
    ("mXS","P 87, CI 74, CA 94", "General"),
    ("mS","P 94, CI 81, CA 102", "General"),
    ("mM","P 102, CI 89, CA 109", "General"),
    ("mL","P 109, CI 97, CA 117", "General"),
    ("mXL","P 117, CI 104, CA 125", "General"),
    ("m2XL","P 125, CI 112, CA 132", "General"),
    ("uS", "A 54.6, L 73.3", "Pantalones"),
    ("uM", "A 55.2, L 75.9", "Pantalones"),
    ("uL", "A 59.7, L 79.7", "Pantalones"),
    ("uXL", "A 63.5, L 82.2", "Pantalones"),
    ("u2XL", "A 66, L 84.8", "Pantalones"),
    ("m35-36", "A 22, L 27", "ZapatoMujer"),
    ("m37-38", "A 23, L 27.5", "ZapatoMujer"),
    ("m39-40", "A 24, L 28", "ZapatoMujer"),
    ("m41-42", "A 25, L 28.5", "ZapatoMujer"),
    ("h38-39", "A 24.5, L 28", "ZapatoHombre"),
    ("h40-41", "A 25.5, L 28.5", "ZapatoHombre"),
    ("h42-43", "A 26.5, L 29", "ZapatoHombre"),
    ("h44-45", "A 27.5, L 29.5", "ZapatoHombre");



insert into Color values
    ("#FFFFFF", "Blanco"),
    ("#000000", "Negro"),
    ("#6F6F6F", "Gris"),
    ("#CFCFCF", "Gris Claro"),
    ("#6F3B2A", "Marron"),
    ("#E8DCCA", "Beige"),
    ("#FFFFBF", "Crema"),
    ("#FF0000", "Rojo"),
    ("#723185", "Violeta Oscuro"),
    ("#78288C", "Violeta"),
    ("#001286", "Azul Oscuro"),
    ("#000FFF", "Azul"),
    ("#00FFFF", "Celeste"),
    ("#013220", "Verde Oscuro"),
    ("#0FFF00", "Verde");



insert into Ropa values
(0, 50000.0, "Zapato Blanco Alto Mujer", "ZapatoBlancoAltoMujer.png", "mujer", "calzado", "alto"),
(1, 40000.0, "Zapato Blanco Bajo Mujer",  "ZapatoBlancoBajoMujer.png", "mujer", "calzado", "bajo"),
(2, 50000.0, "Zapato Crema Alto Mujer", "ZapatoCremaAltoMujer.png", "mujer", "calzado", "alto"),
(3, 40000.0, "Zapato Crema Bajo Mujer", "ZapatoCremaBajoMujer.png", "mujer", "calzado", "bajo"),
(4, 50000.0, "Zapato Negro Alto Mujer", "ZapatoNegroAltoMujer.png", "mujer", "calzado", "alto"),
(5, 40000.0, "Zapato Negro Bajo Mujer", "ZapatoNegroBajoMujer.png", "mujer", "calzado", "bajo"),
(6, 50000.0, "Zapato Rojo Alto Mujer", "ZapatoRojoAltoMujer.png", "mujer", "calzado", "alto"),
(7, 40000.0, "Zapato Rojo Bajo Mujer", "ZapatoRojoBajoMujer.png", "mujer", "calzado", "bajo"),
(8, 42000.0, "Zapato Negro Triangular Hombre", "ZapatoNegroTriangularHombre.png", "hombre", "calzado", "triangular"),
(9, 62000.0, "Zapato Negro Cuadrada Hombre", "ZapatoNegroCuadradaHombre.png", "hombre", "calzado", "cuadrada"),
(10, 42000.0, "Zapato Marrón Triangular Hombre", "ZapatoMarronTriangularHombre.png", "hombre", "calzado", "triangular"),
(11, 62000.0, "Zapato Marrón Cuadrada Hombre", "ZapatoMarronCuadradaHombre.png", "hombre", "calzado", "cuadrada"),
(12, 42000.0, "Zapato Blanco Triangular Hombre", "ZapatoBlancoTriangularHombre.png", "hombre", "calzado", "triangular"),
(13, 50000.0, "Camisa Azul", "CamisaAzul.png", null, "camisa", null),
(14, 50000.0, "Camisa Azul Oscuro", "CamisaAzulOscuro.png", null, "camisa", null),
(15, 50000.0, "Camisa Beige", "CamisaBeige.png", null, "camisa", null),
(16, 50000.0, "Camisa Blanca", "CamisaBlanca.png", null, "camisa", null),
(17, 50000.0, "Camisa Celeste", "CamisaCeleste.png", null, "camisa", null),
(18, 50000.0, "Camisa Crema", "CamisaCrema.png", null, "camisa", null),
(19, 50000.0, "Camisa Gris Rayas", "CamisaGrisRayas.png", null, "camisa", null),
(20, 50000.0, "Camisa Marrón Cuadros", "CamisaMarronCuadros.png", null, "camisa", null),
(21, 50000.0, "Camisa Negra", "CamisaNegra.png", null, "camisa", null),
(22, 50000.0, "Camisa Negra Botón Blanco", "CamisaNegraBotonBlanco.png", null, "camisa", null),
(23, 50000.0, "Camisa Niño Celeste Rayas", "CamisaNiñoCelesteRayas.png", "ninios", "camisa", null),
(24, 50000.0, "Camisa Niño Gris", "CamisaNiñoGris.png", "ninios", "camisa", null),
(25, 50000.0, "Camisa Niño Negra", "CamisaNiñoNegra.png", "ninios", "camisa", null),
(26, 50000.0, "Camisa Niño Negra Blanca", "CamisaNiñoNegraBlanca.png", "ninios", "camisa", null),
(27, 50000.0, "Camisa Niño Negra Puntos", "CamisaNiñoNegraPuntos.png", "ninios", "camisa", null),
(28, 50000.0, "Camisa Niño Violeta Cuadros", "CamisaNiñoVioletaCuadros.png", "ninios", "camisa", null),
(29, 50000.0, "Camisa Rojo Azul Cuadros", "CamisaRojoAzulCuadros.png", null, "camisa", null),
(30, 50000.0, "Camisa Verde Oscuro Cuadros", "CamisaVerdeOscuroCuadros.png", null, "camisa", null),
(31, 60000.0, "Cinturon Cuero Azul", "CinturonCueroAzul.png", "accesorios", "cinturon", null),
(32, 60000.0, "Cinturon Cuero Marron", "CinturonCueroMarron.png", "accesorios", "cinturon", null),
(33, 60000.0, "Cinturon Cuero Negro", "CinturonCueroNegro.png", "accesorios", "cinturon", null),
(34, 60000.0, "Cinturon Lona Marron", "CinturonLonaMarron.png", "accesorios", "cinturon", null),
(35, 60000.0, "Cinturon Marron Hebilla Dorada", "CinturonMarronHebillaDorada.png", "accesorios", "cinturon", null),
(36, 60000.0, "Cinturon Negro Hebilla Dorada", "CinturonNegroHebillaDorada.png", "accesorios", "cinturon", null),
(37, 60000.0, "Cinturon Negro Hebilla Personalizada", "CinturonNegroHebillaPersonalizada.png", "accesorios", "cinturon", null),
(38, 40000.0, "Cinturon Tela Negro", "CinturonTelaNegro.png", "accesorios", "cinturon", null),
(39, 30000.0, "Corbata Azul", "CorbataAzul.png", "accesorios", "corbata", null),
(40, 30000.0, "Corbata Azul Puntos", "CorbataAzulPuntos.png", "accesorios", "corbata", null),
(41, 30000.0, "Corbata Gris", "CorbataGris.png", "accesorios", "corbata", null),
(42, 30000.0, "Corbata Negra", "CorbataNegra.png", "accesorios", "corbata", null),
(43, 30000.0, "Corbata Negra Puntos", "CorbataNegraPuntos.png", "accesorios", "corbata", null),
(44, 30000.0, "Corbata Roja", "CorbataRoja.png", "accesorios", "corbata", null),
(45, 30000.0, "Corbatas Variadas", "Corbatas.png", "accesorios", "corbata", null),
(46, 25000.0, "Moño Negro", "MoñoNegro.png", "accesorios", "moño", null),
(47, 25000.0, "Moño Rojo", "MoñoRojo.png", "accesorios", "moño", null),
(48, 70000.0, "Pantalon Hombre Azul", "PantalonHombreAzul.png", "hombre", "pantalon", null),
(49, 70000.0, "Pantalon Hombre Blanco", "PantalonHombreBlanco.png", "hombre", "pantalon", null),
(50, 70000.0, "Pantalon Hombre Crema", "PantalonHombreCrema.png", "hombre", "pantalon", null),
(51, 70000.0, "Pantalon Hombre Gris", "PantalonHombreGris.png", "hombre", "pantalon", null),
(52, 70000.0, "Pantalon Hombre Marron", "PantalonHombreMarron.png", "hombre", "pantalon", null),
(53, 70000.0, "Pantalon Hombre Negro", "PantalonHombreNegro.png", "hombre", "pantalon", null),
(54, 70000.0, "Pantalon Hombre Rojo", "PantalonHombreRojo.png", "hombre", "pantalon", null),
(55, 65000.0, "Pantalon Mujer Azul", "PantalonMujerAzul.png", "mujer", "pantalon", null),
(56, 65000.0, "Pantalon Mujer Blanco", "PantalonMujerBlanco.png", "mujer", "pantalon", null),
(57, 65000.0, "Pantalon Mujer Crema", "PantalonMujerCrema.png", "mujer", "pantalon", null),
(58, 65000.0, "Pantalon Mujer Gris", "PantalonMujerGris.png", "mujer", "pantalon", null),
(59, 65000.0, "Pantalon Mujer Marron", "PantalonMujerMarron.png", "mujer", "pantalon", null),
(60, 65000.0, "Pantalon Mujer Negro", "PantalonMujerNegro.png", "mujer", "pantalon", null),
(61, 65000.0, "Pantalon Mujer Rojo", "PantalonMujerRojo.png", "mujer", "pantalon", null),
(62, 55000.0, "Pantalon Niño Beige", "PantalonNiñoBeige.png", "ninios", "pantalon", null),
(63, 55000.0, "Pantalon Niño Blanco", "PantalonNiñoBlanco.png", "ninios", "pantalon", null),
(64, 55000.0, "Pantalon Niño Crema", "PantalonNiñoCrema.png", "ninios", "pantalon", null),
(65, 55000.0, "Pantalon Niño Gris", "PantalonNiñoGris.png", "ninios", "pantalon", null),
(66, 55000.0, "Pantalon Niño Negro", "PantalonNiñoNegro.png", "ninios", "pantalon", null),
(67, 55000.0, "Pantalon Niño Rojo", "PantalonNiñoRojo.png", "ninios", "pantalon", null),
(68, 30000.0, "Tirante Azul", "TiranteAzul.png", "accesorios", "tirante", null),
(69, 30000.0, "Tirante Negro", "TiranteNegro.png", "accesorios", "tirante", null),
(70, 30000.0, "Tirante Rojo", "TiranteRojo.png", "accesorios", "tirante", null),
(71, 90000.0, "Traje Clasico Negro Cuadros", "Traje1.png", "hombre", "traje", "clasicos"),
(72, 90000.0, "Traje Clasico Negro", "Traje2.png", "hombre", "traje", "clasicos"),
(73, 90000.0, "Traje Clasico Azul Rayas", "Traje3.png", "hombre", "traje", "clasicos"),
(74, 90000.0, "Traje Clasico Marron Cuadros", "Traje4.png", "hombre", "traje", "clasicos"),
(75, 90000.0, "Traje Clasico Gris Claro Rayas", "Traje5.png", "hombre", "traje", "clasicos"),
(76, 100000.0, "Traje Epoca Imprerial", "TrajeE1.png", "hombre", "traje", "estilo"),
(77, 100000.0, "Traje Dorado", "TrajeE2.png", "hombre", "traje", "estilo"),
(78, 80000.0, "Traje Mujer Azul", "TrajeMujerAzul.png", "mujer", "traje", null),
(79, 80000.0, "Traje Mujer Beige Largo", "TrajeMujerBeigeLargo.png", "mujer", "traje", null),
(80, 80000.0, "Traje Mujer Blanco", "TrajeMujerBlanco.png", "mujer", "traje", null),
(81, 80000.0, "Traje Mujer Blanco Largo", "TrajeMujerBlancoLargo.png", "mujer", "traje", null),
(82, 80000.0, "Traje Mujer Celeste", "TrajeMujerCeleste.png", "mujer", "traje", null),
(83, 80000.0, "Traje Mujer Negro", "TrajeMujerNegro.png", "mujer", "traje", null),
(84, 80000.0, "Traje Mujer Rojo", "TrajeMujerRojo.png", "mujer", "traje", null),
(85, 80000.0, "Traje Mujer Rosa", "TrajeMujerRosa.png", "mujer", "traje", null),
(86, 70000.0, "Traje Niño Azul", "TrajeNiñoAzul.png", "ninios", "traje", null),
(87, 70000.0, "Traje Niño Blanco", "TrajeNiñoBlanco.png", "ninios", "traje", null),
(88, 70000.0, "Traje Niño Negro", "TrajeNiñoNegro.png", "ninios", "traje", null);



insert into Modelo values
    ("M001", "Camisa", "Lana", "Lisa"),
    ("M002", "Camisa", "Algodon", "Lisa"),
    ("M003", "Camisa", "Lino", "Lisa"),
    ("M004", "Camisa", "Seda", "Lisa"),
    ("M005", "Camisa", "Lana", "Rayada"),
    ("M006", "Camisa", "Algodon", "Rayada"),
    ("M007", "Camisa", "Lino", "Rayada"),
    ("M008", "Camisa", "Seda", "Rayada"),
    ("M009", "Camisa", "Lana", "Cuadros"),
    ("M010", "Camisa", "Algodon", "Cuadros"),
    ("M011", "Camisa", "Lino", "Cuadros"),
    ("M012", "Camisa", "Seda", "Cuadros"),
    ("M013", "Pantalon", "Algodon", "Liso"),
    ("M014", "Pantalon", "Mezclilla", "Liso"),
    ("M015", "Pantalon", "Denim", "Liso"),
    ("M016", "Corbata", "Seda", "Lisa"),
    ("M017", "Corbata", "Lana", "Lisa"),
    ("M018", "Corbata", "Algodon", "Lisa"),
    ("M019", "Corbata", "Poliester", "Lisa"),
    ("M020", "Corbata", "Seda", "Puntos"),
    ("M021", "Corbata", "Lana", "Puntos"),
    ("M022", "Corbata", "Algodon", "Puntos"),
    ("M023", "Corbata", "Poliester", "Puntos"),
    ("M024", "Zapatos", "Cuero", "Liso"),
    ("M025", "Zapatos", "Tejido", "Liso"),
    ("M026", "Zapatos", "Cuero Sintetico", "Liso"),
    ("M027", "Zapatos", "Goma", "Liso"),
    ("M028", "Zapatos", "Espuma", "Liso"),
    ("M029", "Zapatos", "Plastico", "Liso"),
    ("M030", "Tirantes", "Cuero", "Liso"),
    ("M031", "Tirantes", "Seda", "Liso"),
    ("M032", "Tirantes", "Poliester", "Liso"),
    ("M033", "Tirantes", "Lona", "Liso"),
    ("M034", "Tirantes", "Algodon", "Liso"),
    ("M035", "Cinturon", "Cuero", "Liso"),
    ("M036", "Cinturon", "Poliester", "Liso"),
    ("M037", "Cinturon", "Lona", "Liso"),
    ("M038", "Cinturon", "Nailon", "Liso"),
    ("M039", "Cinturon", "Vinilo", "Liso"),
    ("M040", "Moño", "Orgaza", "Liso"),
    ("M041", "Moño", "Lona", "Liso"),
    ("M042", "Moño", "Tela", "Liso"),
    ("M043", "Traje", "Algodon", "Liso"),
    ("M044", "Traje", "Poliester", "Liso"),
    ("M045", "Traje", "Lino", "Liso"),
    ("M046", "Traje", "Lana", "Liso"),
    ("M047", "Traje", "Seda", "Liso"),
    ("M048", "Traje", "Nylon", "Liso"),
    ("M049", "Traje", "Lycra", "Liso"),
    ("M050", "Traje", "Algodon", "Cuadros"),
    ("M051", "Traje", "Poliester", "Cuadros"),
    ("M052", "Traje", "Lino", "Cuadros"),
    ("M053", "Traje", "Lana", "Cuadros"),
    ("M054", "Traje", "Seda", "Cuadros"),
    ("M055", "Traje", "Nylon", "Cuadros"),
    ("M056", "Traje", "Lycra", "Cuadros"),
    ("M057", "Traje", "Algodon", "Rayas"),
    ("M058", "Traje", "Poliester", "Rayas"),
    ("M059", "Traje", "Lino", "Rayas"),
    ("M060", "Traje", "Lana", "Rayas"),
    ("M061", "Traje", "Seda", "Rayas"),
    ("M062", "Traje", "Nylon", "Rayas"),
    ("M063", "Traje", "Lycra", "Rayas"),
    ("M064", "Traje", "Personalizado", "Personalizado");



insert into Ropa_has_Talle_has_Modelo_has_Color values
-- Zapato Código 0
("m35-36", 0, "M002", "#FFFFFF"),
("m37-38", 0, "M002", "#FFFFFF"),
("m39-40", 0, "M002", "#FFFFFF"),
("m41-42", 0, "M002", "#FFFFFF"),

--  Zapato Código 1
("m35-36", 1, "M002", "#FFFFFF"),
("m37-38", 1, "M002", "#FFFFFF"),
("m39-40", 1, "M002", "#FFFFFF"),
("m41-42", 1, "M002", "#FFFFFF"),

-- Zapato Código 2
("m35-36", 2, "M002", "#000000"),
("m37-38", 2, "M002", "#000000"),
("m39-40", 2, "M002", "#000000"),
("m41-42", 2, "M002", "#000000"),

-- Zapato Código 3
("m35-36", 3, "M002", "#6F6F6F"),
("m37-38", 3, "M002", "#6F6F6F"),
("m39-40", 3, "M002", "#6F6F6F"),
("m41-42", 3, "M002", "#6F6F6F"),

-- Zapato Código 4
("m35-36", 4, "M002", "#CFCFCF"),
("m37-38", 4, "M002", "#CFCFCF"),
("m39-40", 4, "M002", "#CFCFCF"),
("m41-42", 4, "M002", "#CFCFCF"),

-- Zapato Código 5
("m35-36", 5, "M002", "#6F3B2A"),
("m37-38", 5, "M002", "#6F3B2A"),
("m39-40", 5, "M002", "#6F3B2A"),
("m41-42", 5, "M002", "#6F3B2A"),

-- Zapato Código 6
("m35-36", 6, "M002", "#E8DCCA"),
("m37-38", 6, "M002", "#E8DCCA"),
("m39-40", 6, "M002", "#E8DCCA"),
("m41-42", 6, "M002", "#E8DCCA"),

-- Zapato Código 7
("m35-36", 7, "M002", "#FFFFBF"),
("m37-38", 7, "M002", "#FFFFBF"),
("m39-40", 7, "M002", "#FFFFBF"),
("m41-42", 7, "M002", "#FFFFBF"),

-- Zapato Código 8
("h38-39", 8, "M002", "#FF0000"),
("h40-41", 8, "M002", "#FF0000"),
("h42-43", 8, "M002", "#FF0000"),
("h44-45", 8, "M002", "#FF0000"),

-- Zapato Código 9
("h38-39", 9, "M002", "#723185"),
("h40-41", 9, "M002", "#723185"),
("h42-43", 9, "M002", "#723185"),
("h44-45", 9, "M002", "#723185"),

-- Zapato Código 10
("h38-39", 10, "M002", "#78288C"),
("h40-41", 10, "M002", "#78288C"),
("h42-43", 10, "M002", "#78288C"),
("h44-45", 10, "M002", "#78288C"),

-- Zapato Código 11
("h38-39", 11, "M002", "#001286"),
("h40-41", 11, "M002", "#001286"),
("h42-43", 11, "M002", "#001286"),
("h44-45", 11, "M002", "#001286"),

-- Zapato Código 12
("h38-39", 12, "M002", "#000FFF"),
("h40-41", 12, "M002", "#000FFF"),
("h42-43", 12, "M002", "#000FFF"),
("h44-45", 12, "M002", "#000FFF"),

("mXS", 13, "M002", "#00FFFF"),
("mS", 13, "M002", "#00FFFF"),
("mL", 13, "M002", "#00FFFF"),
("mM", 13, "M002", "#00FFFF"),
("mXL", 13, "M002", "#00FFFF"),
("m2XL", 13, "M002", "#00FFFF"),


("mXS", 14, "M002", "#013220"),
("mS", 14, "M002", "#013220"),
("mM", 14, "M002", "#013220"),
("mL", 14, "M002", "#013220"),
("mXL", 14, "M002", "#013220"),
("m2XL", 14, "M002", "#013220"),


("mXS", 14, "M002", "#013220"),
("mS", 14, "M002", "#013220"),
("mM", 14, "M002", "#013220"),
("mL", 14, "M002", "#013220"),
("mXL", 14, "M002", "#013220"),
("m2XL", 14, "M002", "#013220"),

("mXS", 15, "M002", "#0FFF00"),
("mS", 15, "M002", "#0FFF00"),
("mM", 15, "M002", "#0FFF00"),
("mL", 15, "M002", "#0FFF00"),
("mXL", 15, "M002", "#0FFF00"),
("m2XL", 15, "M002", "#0FFF00"),

("mXS", 16, "M002", "#FFFFFF"),
("mS", 16, "M002", "#FFFFFF"),
("mM", 16, "M002", "#FFFFFF"),
("mL", 16, "M002", "#FFFFFF"),
("mXL", 16, "M002", "#FFFFFF"),
("m2XL", 16, "M002", "#FFFFFF"),

("mXS", 17, "M002", "#000000"),
("mS", 17, "M002", "#000000"),
("mM", 17, "M002", "#000000"),
("mL", 17, "M002", "#000000"),
("mXL", 17, "M002", "#000000"),
("m2XL", 17, "M002", "#000000"),

("mXS", 18, "M002", "#6F6F6F"),
("mS", 18, "M002", "#6F6F6F"),
("mM", 18, "M002", "#6F6F6F"),
("mL", 18, "M002", "#6F6F6F"),
("mXL", 18, "M002", "#6F6F6F"),
("m2XL", 18, "M002", "#6F6F6F"),

("mXS", 19, "M006", "#CFCFCF"),
("mS", 19, "M006", "#CFCFCF"),
("mM", 19, "M006", "#CFCFCF"),
("mL", 19, "M006", "#CFCFCF"),
("mXL", 19, "M006", "#CFCFCF"),
("m2XL", 19, "M006", "#CFCFCF"),

("mXS", 20, "M010", "#6F3B2A"),
("mS", 20, "M010", "#6F3B2A"),
("mM", 20, "M010", "#6F3B2A"),
("mL", 20, "M010", "#6F3B2A"),
("mXL", 20, "M010", "#6F3B2A"),
("m2XL", 20, "M010", "#6F3B2A"),

("uS", 21, "M002", "#E8DCCA"),
("uM", 21, "M002", "#E8DCCA"),
("uL", 21, "M002", "#E8DCCA"),
("uXL", 21, "M002", "#E8DCCA"),
("u2XL", 21, "M002", "#E8DCCA"),

("uS", 22, "M002", "#FFFFBF"),
("uM", 22, "M002", "#FFFFBF"),
("uL", 22, "M002", "#FFFFBF"),
("uXL", 22, "M002", "#FFFFBF"),
("u2XL", 22, "M002", "#FFFFBF"),

("uS", 23, "M006", "#FF0000"),
("uM", 23, "M006", "#FF0000"),
("uL", 23, "M006", "#FF0000"),
("uXL", 23, "M006", "#FF0000"),
("u2XL", 23, "M006", "#FF0000"),

("uS", 24, "M002", "#723185"),
("uM", 24, "M002", "#723185"),
("uL", 24, "M002", "#723185"),
("uXL", 24, "M002", "#723185"),
("u2XL", 24, "M002", "#723185"),

("uS", 25, "M002", "#78288C"),
("uM", 25, "M002", "#78288C"),
("uL", 25, "M002", "#78288C"),
("uXL", 25, "M002", "#78288C"),
("u2XL", 25, "M002", "#78288C"),

("hXS", 26, "M002", "#001286"),
("hS", 26, "M002", "#001286"),
("hM", 26, "M002", "#001286"),
("hL", 26, "M002", "#001286"),
("hXL", 26, "M002", "#001286"),
("h2XL", 26, "M002", "#001286"),

("hXS", 27, "M002", "#000FFF"),
("hS", 27, "M002", "#000FFF"),
("hM", 27, "M002", "#000FFF"),
("hL", 27, "M002", "#000FFF"),
("hXL", 27, "M002", "#000FFF"),
("h2XL", 27, "M002", "#000FFF"),

("hXS", 28, "M010", "#00FFFF"),
("hS", 28, "M010", "#00FFFF"),
("hM", 28, "M010", "#00FFFF"),
("hL", 28, "M010", "#00FFFF"),
("hXL", 28, "M010", "#00FFFF"),
("h2XL", 28, "M010", "#00FFFF"),

("hXS", 29, "M010", "#013220"),
("hS", 29, "M010", "#013220"),
("hM", 29, "M010", "#013220"),
("hL", 29, "M010", "#013220"),
("hXL", 29, "M010", "#013220"),
("h2XL", 29, "M010", "#013220"),

("hXS", 30, "M010", "#0FFF00"),
("hS", 30, "M010", "#0FFF00"),
("hM", 30, "M010", "#0FFF00"),
("hL", 30, "M010", "#0FFF00"),
("hXL", 30, "M010", "#0FFF00"),
("h2XL", 30, "M010", "#0FFF00"),

("hXS", 31, "M035", "#FFFFFF"),
("hS", 31, "M035", "#FFFFFF"),
("hM", 31, "M035", "#FFFFFF"),
("hL", 31, "M035", "#FFFFFF"),
("hXL", 31, "M035", "#FFFFFF"),
("h2XL", 31, "M035", "#FFFFFF"),

("hXS", 32, "M035", "#000000"),
("hS", 32, "M035", "#000000"),
("hM", 32, "M035", "#000000"),
("hL", 32, "M035", "#000000"),
("hXL", 32, "M035", "#000000"),
("h2XL", 32, "M035", "#000000"),

("hXS", 33, "M035", "#6F6F6F"),
("hS", 33, "M035", "#6F6F6F"),
("hM", 33, "M035", "#6F6F6F"),
("hL", 33, "M035", "#6F6F6F"),
("hXL", 33, "M035", "#6F6F6F"),
("h2XL", 33, "M035", "#6F6F6F"),

("hXS", 34, "M035", "#CFCFCF"),
("hS", 34, "M035", "#CFCFCF"),
("hM", 34, "M035", "#CFCFCF"),
("hL", 34, "M035", "#CFCFCF"),
("hXL", 34, "M035", "#CFCFCF"),
("h2XL", 34, "M035", "#CFCFCF"),

("hXS", 35, "M035", "#6F3B2A"),
("hS", 35, "M035", "#6F3B2A"),
("hM", 35, "M035", "#6F3B2A"),
("hL", 35, "M035", "#6F3B2A"),
("hXL", 35, "M035", "#6F3B2A"),
("h2XL", 35, "M035", "#6F3B2A"),

("mXS", 36, "M036", "#E8DCCA"),
("mS", 36, "M036", "#E8DCCA"),
("mM", 36, "M036", "#E8DCCA"),
("mL", 36, "M036", "#E8DCCA"),
("mXL", 36, "M036", "#E8DCCA"),
("m2XL", 36, "M036", "#E8DCCA"),

("mXS", 37, "M035", "#FFFFBF"),
("mS", 37, "M035", "#FFFFBF"),
("mM", 37, "M035", "#FFFFBF"),
("mL", 37, "M035", "#FFFFBF"),
("mXL", 37, "M035", "#FFFFBF"),
("m2XL", 37, "M035", "#FFFFBF"),

("mXS", 38, "M037", "#FF0000"),
("mS", 38, "M037", "#FF0000"),
("mM", 38, "M037", "#FF0000"),
("mL", 38, "M037", "#FF0000"),
("mXL", 38, "M037", "#FF0000"),
("m2XL", 38, "M037", "#FF0000"),

("mXS", 39, "M016", "#723185"),
("mS", 39, "M016", "#723185"),
("mM", 39, "M016", "#723185"),
("mL", 39, "M016", "#723185"),
("mXL", 39, "M016", "#723185"),
("m2XL", 39, "M016", "#723185"),

("mXS", 40, "M020", "#78288C"),
("mS", 40, "M020", "#78288C"),
("mM", 40, "M020", "#78288C"),
("mL", 40, "M020", "#78288C"),
("mXL", 40, "M020", "#78288C"),
("m2XL", 40, "M020", "#78288C"),

("uS", 41, "M016", "#001286"),
("uM", 41, "M016", "#001286"),
("uL", 41, "M016", "#001286"),
("uXL", 41, "M016", "#001286"),
("u2XL", 41, "M016", "#001286"),

("uS", 42, "M016", "#000FFF"),
("uM", 42, "M016", "#000FFF"),
("uL", 42, "M016", "#000FFF"),
("uXL", 42, "M016", "#000FFF"),
("u2XL", 42, "M016", "#000FFF"),

("uS", 43, "M020", "#00FFFF"),
("uM", 43, "M020", "#00FFFF"),
("uL", 43, "M020", "#00FFFF"),
("uXL", 43, "M020", "#00FFFF"),
("u2XL", 43, "M020", "#00FFFF"),

("mXS", 44, "M016", "#013220"),
("mS", 44, "M016", "#013220"),
("mM", 44, "M016", "#013220"),
("mL", 44, "M016", "#013220"),
("mXL", 44, "M016", "#013220"),
("m2XL", 44, "M016", "#013220"),

("mXS", 45, "M016", "#0FFF00"),
("mS", 45, "M016", "#0FFF00"),
("mM", 45, "M016", "#0FFF00"),
("mL", 45, "M016", "#0FFF00"),
("mXL", 45, "M016", "#0FFF00"),
("m2XL", 45, "M016", "#0FFF00"),

("uS", 46, "M040", "#FFFFFF"),
("uM", 46, "M040", "#FFFFFF"),
("uL", 46, "M040", "#FFFFFF"),
("uXL", 46, "M040", "#FFFFFF"),
("u2XL", 46, "M040", "#FFFFFF"),

("uS", 47, "M040", "#000000"),
("uM", 47, "M040", "#000000"),
("uL", 47, "M040", "#000000"),
("uXL", 47, "M040", "#000000"),
("u2XL", 47, "M040", "#000000"),

("uS", 48, "M013", "#6F6F6F"),
("uM", 48, "M013", "#6F6F6F"),
("uL", 48, "M013", "#6F6F6F"),
("uXL", 48, "M013", "#6F6F6F"),
("u2XL", 48, "M013", "#6F6F6F"),

("uS", 49, "M013", "#CFCFCF"),
("uM", 49, "M013", "#CFCFCF"),
("uL", 49, "M013", "#CFCFCF"),
("uXL", 49, "M013", "#CFCFCF"),
("u2XL", 49, "M013", "#CFCFCF"),

("uS", 50, "M013", "#6F3B2A"),
("uM", 50, "M013", "#6F3B2A"),
("uL", 50, "M013", "#6F3B2A"),
("uXL", 50, "M013", "#6F3B2A"),
("u2XL", 50, "M013", "#6F3B2A"),

("hXS", 51, "M013", "#E8DCCA"),
("hM", 51, "M013", "#E8DCCA"),
("hL", 51, "M013", "#E8DCCA"),
("hXL", 51, "M013", "#E8DCCA"),
("h2XL", 51, "M013", "#E8DCCA"),

("hXS", 52, "M013", "#FFFFBF"),
("hS", 52, "M013", "#FFFFBF"),
("hM", 52, "M013", "#FFFFBF"),
("hL", 52, "M013", "#FFFFBF"),
("hXL", 52, "M013", "#FFFFBF"),
("h2XL", 52, "M013", "#FFFFBF"),

("hXS", 53, "M013", "#FF0000"),
("hS", 53, "M013", "#FF0000"),
("hM", 53, "M013", "#FF0000"),
("hL", 53, "M013", "#FF0000"),
("hXL", 53, "M013", "#FF0000"),
("h2XL", 53, "M013", "#FF0000"),

("hXS", 54, "M013", "#723185"),
("hS", 54, "M013", "#723185"),
("hM", 54, "M013", "#723185"),
("hL", 54, "M013", "#723185"),
("hXL", 54, "M013", "#723185"),
("h2XL", 54, "M013", "#723185"),

("hXS", 55, "M013", "#78288C"),
("hS", 55, "M013", "#78288C"),
("hM", 55, "M013", "#78288C"),
("hL", 55, "M013", "#78288C"),
("hXL", 55, "M013", "#78288C"),
("h2XL", 55, "M013", "#78288C"),

("hXS", 56, "M013", "#001286"),
("hS", 56, "M013", "#001286"),
("hM", 56, "M013", "#001286"),
("hL", 56, "M013", "#001286"),
("hXL", 56, "M013", "#001286"),
("h2XL", 56, "M013", "#001286"),

("hXS", 57, "M013", "#000FFF"),
("hS", 57, "M013", "#000FFF"),
("hM", 57, "M013", "#000FFF"),
("hL", 57, "M013", "#000FFF"),
("hXL", 57, "M013", "#000FFF"),
("h2XL", 57, "M013", "#000FFF"),

("hXS", 58, "M013", "#00FFFF"),
("hS", 58, "M013", "#00FFFF"),
("hM", 58, "M013", "#00FFFF"),
("hL", 58, "M013", "#00FFFF"),
("hXL", 58, "M013", "#00FFFF"),
("h2XL", 58, "M013", "#00FFFF"),

("hXS", 59, "M013", "#013220"),
("hS", 59, "M013", "#013220"),
("hM", 59, "M013", "#013220"),
("hL", 59, "M013", "#013220"),
("hXL", 59, "M013", "#013220"),
("h2XL", 59, "M013", "#013220"),

("hXS", 60, "M013", "#0FFF00"),
("hS", 60, "M013", "#0FFF00"),
("hM", 60, "M013", "#0FFF00"),
("hL", 60, "M013", "#0FFF00"),
("hXL", 60, "M013", "#0FFF00"),
("h2XL", 60, "M013", "#0FFF00"),

("hXS", 61, "M013", "#FFFFFF"),
("hS", 61, "M013", "#FFFFFF"),
("hM", 61, "M013", "#FFFFFF"),
("hL", 61, "M013", "#FFFFFF"),
("hXL", 61, "M013", "#FFFFFF"),
("h2XL", 61, "M013", "#FFFFFF"),

("hXS", 62, "M013", "#000000"),
("hS", 62, "M013", "#000000"),
("hM", 62, "M013", "#000000"),
("hL", 62, "M013", "#000000"),
("hXL", 62, "M013", "#000000"),
("h2XL", 62, "M013", "#000000"),

("hXS", 63, "M013", "#6F6F6F"),
("hS", 63, "M013", "#6F6F6F"),
("hM", 63, "M013", "#6F6F6F"),
("hL", 63, "M013", "#6F6F6F"),
("hXL", 63, "M013", "#6F6F6F"),
("h2XL", 63, "M013", "#6F6F6F"),

("hXS", 64, "M013", "#CFCFCF"),
("hS", 64, "M013", "#CFCFCF"),
("hM", 64, "M013", "#CFCFCF"),
("hL", 64, "M013", "#CFCFCF"),
("hXL", 64, "M013", "#CFCFCF"),
("h2XL", 64, "M013", "#CFCFCF"),

("hXS", 65, "M013", "#6F3B2A"),
("hS", 65, "M013", "#6F3B2A"),
("hM", 65, "M013", "#6F3B2A"),
("hL", 65, "M013", "#6F3B2A"),
("hXL", 65, "M013", "#6F3B2A"),
("h2XL", 65, "M013", "#6F3B2A"),

("hXS", 66, "M013", "#E8DCCA"),
("hS", 66, "M013", "#E8DCCA"),
("hM", 66, "M013", "#E8DCCA"),
("hL", 66, "M013", "#E8DCCA"),
("hXL", 66, "M013", "#E8DCCA"),
("h2XL", 66, "M013", "#E8DCCA"),

("hXS", 67, "M013", "#FFFFBF"),
("hS", 67, "M013", "#FFFFBF"),
("hM", 67, "M013", "#FFFFBF"),
("hL", 67, "M013", "#FFFFBF"),
("hXL", 67, "M013", "#FFFFBF"),
("h2XL", 67, "M013", "#FFFFBF"),

("hXS", 68, "M034", "#FF0000"),
("hS", 68, "M034", "#FF0000"),
("hM", 68, "M034", "#FF0000"),
("hL", 68, "M034", "#FF0000"),
("hXL", 68, "M034", "#FF0000"),
("h2XL", 68, "M034", "#FF0000"),

("hXS", 69, "M034", "#723185"),
("hS", 69, "M034", "#723185"),
("hM", 69, "M034", "#723185"),
("hL", 69, "M034", "#723185"),
("hXL", 69, "M034", "#723185"),
("h2XL", 69, "M034", "#723185"),

("hXS", 70, "M034", "#78288C"),
("hS", 70, "M034", "#78288C"),
("hM", 70, "M034", "#78288C"),
("hL", 70, "M034", "#78288C"),
("hXL", 70, "M034", "#78288C"),
("h2XL", 70, "M034", "#78288C"),

("hXS", 71, "M050", "#E8DCCA"),
("hS", 71, "M050", "#E8DCCA"),
("hM", 71, "M050", "#E8DCCA"),
("hL", 71, "M050", "#E8DCCA"),
("hXL", 71, "M050", "#E8DCCA"),
("h2XL", 71, "M050", "#E8DCCA"),

("hXS", 72, "M043", "#FFFFBF"),
("hS", 72, "M043", "#FFFFBF"),
("hM", 72, "M043", "#FFFFBF"),
("hL", 72, "M043", "#FFFFBF"),
("hXL", 72, "M043", "#FFFFBF"),
("h2XL", 72, "M043", "#FFFFBF"),

("hXS", 73, "M057", "#FF0000"),
("hS", 73, "M057", "#FF0000"),
("hM", 73, "M057", "#FF0000"),
("hL", 73, "M057", "#FF0000"),
("hXL", 73, "M057", "#FF0000"),
("h2XL", 73, "M057", "#FF0000"),

("hXS", 74, "M050", "#723185"),
("hS", 74, "M050", "#723185"),
("hM", 74, "M050", "#723185"),
("hL", 74, "M050", "#723185"),
("hXL", 74, "M050", "#723185"),
("h2XL", 74, "M050", "#723185"),

("hXS", 75, "M057", "#78288C"),
("hS", 75, "M057", "#78288C"),
("hM", 75, "M057", "#78288C"),
("hL", 75, "M057", "#78288C"),
("hXL", 75, "M057", "#78288C"),
("h2XL", 75, "M057", "#78288C"),

("hXS", 76, "M064", "#001286"),
("hS", 76, "M064", "#001286"),
("hM", 76, "M064", "#001286"),
("hL", 76, "M064", "#001286"),
("hXL", 76, "M064", "#001286"),
("h2XL", 76, "M064", "#001286"),

("hXS", 77, "M064", "#000FFF"),
("hS", 77, "M064", "#000FFF"),
("hM", 77, "M064", "#000FFF"),
("hL", 77, "M064", "#000FFF"),
("hXL", 77, "M064", "#000FFF"),
("h2XL", 77, "M064", "#000FFF"),

("hXS", 78, "M043", "#00FFFF"),
("hS", 78, "M043", "#00FFFF"),
("hM", 78, "M043", "#00FFFF"),
("hL", 78, "M043", "#00FFFF"),
("hXL", 78, "M043", "#00FFFF"),
("h2XL", 78, "M043", "#00FFFF"),

("hXS", 79, "M043", "#013220"),
("hS", 79, "M043", "#013220"),
("hM", 79, "M043", "#013220"),
("hL", 79, "M043", "#013220"),
("hXL", 79, "M043", "#013220"),
("h2XL", 79, "M043", "#013220"),

("hXS", 80, "M043", "#0FFF00"),
("hS", 80, "M043", "#0FFF00"),
("hM", 80, "M043", "#0FFF00"),
("hL", 80, "M043", "#0FFF00"),
("hXL", 80, "M043", "#0FFF00"),
("h2XL", 80, "M043", "#0FFF00"),

("hXS", 81, "M043", "#FFFFFF"),
("hS", 81, "M043", "#FFFFFF"),
("hM", 81, "M043", "#FFFFFF"),
("hL", 81, "M043", "#FFFFFF"),
("hXL", 81, "M043", "#FFFFFF"),
("h2XL", 81, "M043", "#FFFFFF"),

("hXS", 82, "M043", "#000000"),
("hS", 82, "M043", "#000000"),
("hM", 82, "M043", "#000000"),
("hL", 82, "M043", "#000000"),
("hXL", 82, "M043", "#000000"),
("h2XL", 82, "M043", "#000000"),

("hXS", 83, "M043", "#6F6F6F"),
("hS", 83, "M043", "#6F6F6F"),
("hM", 83, "M043", "#6F6F6F"),
("hL", 83, "M043", "#6F6F6F"),
("hXL", 83, "M043", "#6F6F6F"),
("h2XL", 83, "M043", "#6F6F6F"),

("hXS", 84, "M043", "#CFCFCF"),
("hS", 84, "M043", "#CFCFCF"),
("hM", 84, "M043", "#CFCFCF"),
("hL", 84, "M043", "#CFCFCF"),
("hXL", 84, "M043", "#CFCFCF"),
("h2XL", 84, "M043", "#CFCFCF"),

("hXS", 85, "M043", "#6F3B2A"),
("hS", 85, "M043", "#6F3B2A"),
("hM", 85, "M043", "#6F3B2A"),
("hL", 85, "M043", "#6F3B2A"),
("hXL", 85, "M043", "#6F3B2A"),
("h2XL", 85, "M043", "#6F3B2A"),

("hXS", 86, "M043", "#E8DCCA"),
("hS", 86, "M043", "#E8DCCA"),
("hM", 86, "M043", "#E8DCCA"),
("hL", 86, "M043", "#E8DCCA"),
("hXL", 86, "M043", "#E8DCCA"),
("h2XL", 86, "M043", "#E8DCCA"),

("hXS", 87, "M043", "#FFFFBF"),
("hS", 87, "M043", "#FFFFBF"),
("hM", 87, "M043", "#FFFFBF"),
("hL", 87, "M043", "#FFFFBF"),
("hXL", 87, "M043", "#FFFFBF"),
("h2XL", 87, "M043", "#FFFFBF"),

("hXS", 88, "M043", "#FF0000"),
("hS", 88, "M043", "#FF0000"),
("hM", 88, "M043", "#FF0000"),
("hL", 88, "M043", "#FF0000"),
("hXL", 88, "M043", "#FF0000"),
("h2XL", 88, "M043", "#FF0000");