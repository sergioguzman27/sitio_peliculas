<?php
  $parametro = $_GET['id'];
  $titulo = "Sin Titulo";
  $descripcion = "";
  $critica = array(5, 5, 5, 5);
  $imagen = "";
  if ($parametro == 1) {
    $titulo = "Bastardos sin gloria";
    $imagen = "../images/peliculas/bastardos2.jpg";
    $critica = array(5, 4.8, 4.2, 4.9);
    $descripcion = "Inglourious Basterds es una película de 2009 escrita y dirigida por Quentin Tarantino y protagonizada por Brad Pitt, Christoph Waltz y Mélanie Laurent. Titulada Malditos bastardos​ en España y Bastardos sin gloria​ en Hispanoamérica, la película es una ficción ucrónica sobre la Alemania nazi.
    El estilo recuerda al spaghetti western y al cine bélico italiano de los años 1960. Christoph Waltz, que interpretó al Standartenführer Hans Landa, recibió el premio al mejor actor en el Festival de Cannes, el premio al mejor actor de reparto del Sindicato de Actores, el Globo de Oro y Óscar en la misma categoría.
    Dos historias convergen. Una sigue a un grupo de soldados, cuya misión es matar nazis con la participación de una miembro de la resistencia alemana. La otra historia sigue a una joven judía que busca venganza por la muerte de su familia en manos de los nazis, y en cuyo cine va a reunirse la cúpula nazi en el estreno de una película.";
  } else if ($parametro == 2) {
    $titulo = "John Wick";
    $imagen = "../images/peliculas/john-wick2.png";
    $critica = array(4.5, 4.5, 4.1, 3.9);
    $descripcion = "John Wick es una película de acción estadounidense de 2014, dirigida por David Leitch y Chad Stahelski, escrita por Derek Kolstad y protagonizada por Keanu Reeves. Fue estrenada el 24 de octubre de 2014. John Wick es un exasesino a sueldo de la mafia rusa, más conocido como Baba Yagá (el hombre del saco). Viggo Tarazov, su antiguo socio, se refiere a él como un hombre enfocado, centrado, de voluntad pura y total compromiso, que trabaja como mercenario para cualquiera que pueda pagar por sus servicios para matar a otra persona.

    Días después de la muerte de su esposa, John recibe un perro que ella le había dejado. Relaciona al perro con esperanza en la vida, y lo cuida para hacer más llevadero su duelo. Pero el destino le da un vuelco: En una gasolinera, John tropieza con un pequeño grupo de mafiosos yonquis que insiste en comprarle su coche, pero les responde que no está en venta.
    
    Uno de ellos le dice: Todo tiene un precio. Después de eso Wick regresa a su casa, y esa misma noche es visitado sorpresivamente por los yonquis, que le dan una paliza y asesinan a su perro, y naturalmente se llevan el coche. Furioso y con ansias de venganza, se prepara y totalmente herido toma su arsenal, dispuesto a darle fin a la vida de Iosef Tarazov, hijo del mafioso ruso Viggo Tarazov.";
  } else if ($parametro == 3) {
    $titulo = "Interestelar";
    $imagen = "../images/peliculas/interestelar2.jpg";
    $descripcion = "Interstellar (Interestelar en Hispanoamérica) es una película épica de ciencia ficción estadounidense de 2014, dirigida por Christopher Nolan y protagonizada por Matthew McConaughey, Anne Hathaway, Jessica Chastain, Michael Caine y Matt Damon. La película presenta a un equipo de astronautas que viaja a través de un agujero de gusano en busca de un nuevo hogar para la humanidad.
    A mediados del siglo XXI, la destrucción de las cosechas en la Tierra ha hecho que la agricultura sea cada vez más difícil y se vea amenazada la supervivencia de la humanidad. Joseph Cooper, un viudo exingeniero y piloto de la NASA, dirige una granja con su suegro Donald, su hijo Tom, y su hija Murph, quien cree que su habitación está embrujada por un poltergeist.
    Cuando aparecen inexplicablemente extraños patrones de polvo en el suelo de la habitación de Murphy, Cooper se da cuenta de que la gravedad está detrás de su formación, no un fantasma. Interpreta el patrón como un conjunto de coordenadas geográficas formadas en código binario. Cooper y Murph siguen las coordenadas a una instalación secreta de la NASA, donde se encuentran con el exprofesor de Cooper, el Dr. Brand.";
    $critica = array(4.9, 4.3, 5, 5);
  } else if ($parametro == 4) {
    $titulo = "Animales Nocturnos";
    $imagen = "../images/peliculas/animales2.jpg";
    $critica = array(4, 4, 4.7, 3);
    $descripcion = "Nocturnal Animals es una película dirigida, escrita y coproducida por Tom Ford, y protagonizada por Amy Adams, Jake Gyllenhaal, Aaron Taylor-Johnson, Michael Shannon, Isla Fisher y Armie Hammer. Es la adaptación cinematográfica de la novela de suspense psicológico Tony and Susan (1993), escrita por Austin Wright.
    Animales nocturnos nos cuenta la historia de Susan, interpretada por la deliciosa Amy Adams. Susan vive en una especie de gran mentira de alta sociedad.
    A pesar de que intenta por todos los medios permanecer aferrada al autoengaño, su universo se descompone cuando llega a sus manos la primera novela, aún inédita, de su primer marido. Un relato duro, áspero y polvoriento, que remueve recuerdos en la conciencia de la mujer. Y es que Susan guarda secretos, pecados que todavía no ha expiado, y se clavan como agujas ardiendo en su alma. Las páginas de Animales nocturnos, la novela, reabren las heridas y, al mismo tiempo, fascinan a la protagonista, que descubre una imagen desconocida del hombre con el que compartió aquellos años de juventud.";
  } else if ($parametro == 5) {
    $titulo = "Ratatouille";
    $imagen = "../images/peliculas/ratatouille2.jpg";
    $critica = array(5, 5, 4.8, 4.9);
    $descripcion = "Ratatouille es una película estadounidense de animación por computadora producida por Pixar Animation Studios y estrenada el 16 de marzo de 2007.
    La película narra la historia de una rata que sueña con convertirse en chef y para realizar su objetivo, decide hacer una alianza con el hijo de uno de los cocineros más prestigiosos de Francia. Fue un éxito de taquilla y recibió críticas positivas, además de ganar el Premio Óscar a la mejor película de animación, entre otros premios.
    Remy es una rata que vive en el ático de una casa francesa con su hermano Emile y una colonia liderada por su padre Django. Dotado con un agudo sentido del olfato y gusto, Remy aspira a convertirse en un chef gourmet, inspirado por el reconocido y recientemente fallecido chef Auguste Gusteau (el cual veía en la televisión de la casa de la señora en la cual estaba instalada la colonia), pero en lugar de eso, su habilidad es utilizada para detectar el veneno en la comida, lo cual no lo hace nada feliz.
    Cuando la anciana que habita en la casa descubre la existencia de la colonia de ratas, huyen a las alcantarillas; Remy se separa de ellas por recuperar un libro de cocina escrito por Gusteau, titulado -Cualquiera puede cocinar-, por lo que se pierde, yéndose por la intersección equivocada de la alcantarilla (la izquierda, mientras que su colonia se fue por la de la derecha).";
  } else if ($parametro == 6) {
    $titulo = "Star Wars Episodio 3";
    $imagen = "../images/peliculas/starwar3-2.jpg";
    $critica = array(4.7, 4.3, 4.8, 4.5);
    $descripcion = "Star Wars: Episodio III - La venganza de los Sith (título original en inglés: Star Wars: Episode III - Revenge of the Sith) es una película de space operan estadounidense, escrita y dirigida por George Lucas. Fue la sexta película estrenada de la saga de Star Wars, siendo la tercera en la trilogía de precuelas.
    La trama describe una época en la que los Caballeros Jedi se han esparcido por toda la galaxia, dirigiendo un ejército clon masivo para enfrentar a los Separatistas Galácticos, tres años después del inicio de las Guerras Clon. El Canciller Palpatine fue secuestrado y el Maestro Jedi Obi-Wan Kenobi, acompañado de su aprendiz Anakin Skywalker, es enviado a rescatarlo en una misión, donde también debe eliminar a los Líderes Separatistas, el Conde Dooku y el General Grievous, para concluir el conflicto galáctico. Después de ser rescatado, el Canciller fortalece su amistad con Anakin, para poder convencerlo de que existen mayores beneficios en el Lado Oscuro de la Fuerza, que del Lado Luminoso.
    La Orden Jedi empieza a sospechar de la amistad entre el Canciller y Anakin, por lo que intenta averiguar los verdaderos objetivos de Palpatine. Cuando el Canciller se descubre, repentinamente, como el siniestro Lord Sith Darth Sidious, los destinos de la Orden Jedi y de la República Galáctica se encuentran expuestos ante un inminente peligro.";
  } else if ($parametro == 7) {
    $titulo = "Star Wars Episodio 5";
    $imagen = "../images/peliculas/starwar5-2.jpg";
    $critica = array(4.8, 4.5, 5, 4.6);
    $descripcion = "Star Wars: Episodio V - El Imperio contraataca (título original en inglés: Star Wars: Episode V - The Empire Strikes Back) es una película del género space opera dirigida por Irvin Kershner y estrenada por primera vez en Estados Unidos el 21 de mayo de 1980.
    La ficción de la película se sitúa tres años después de la destrucción de la estación espacial de combate conocida como la Estrella de la muerte, destrucción acaecida al final del episodio anterior, Una Nueva Esperanza, estrenada en el año 1977. En El Imperio contraataca Luke Skywalker, Han Solo, Leia Organa y el resto de la Alianza Rebelde son perseguidos por Darth Vader y las fuerzas de élite del Imperio Galáctico. En este episodio se desarrolla la historia de amor entre Han y Leia, mientras que Luke aprende más sobre los caminos de la Fuerza de la mano del maestro Yoda. Con Han y Leia capturados por el Imperio, Luke luchará contra Darth Vader en una confrontación sin igual, pero Vader esconde una terrible revelación.";
  } else if ($parametro == 8) {
    $titulo = "Star Wars Episodio 7";
    $imagen = "../images/peliculas/starwar7-2.jpg";
    $critica = array(4.6, 4.5, 4, 4);
    $descripcion = "Star Wars: Episodio VII - El despertar de la Fuerza (título original: Star Wars: Episode VII - The Force Awakens)4​ es una película estadounidense del género space opera, dirigida por J. J. Abrams, es la séptima entrega de la saga Star Wars, atendiendo tanto a la fecha de estreno​ como a la cronología interna de la serie, pues transcurre unos 30 años después del sexto episodio, Return of the Jedi (1983).
    Treinta años después de la Batalla de Endor, la Galaxia no ha podido acabar con la tiranía y la opresión. La Alianza Rebelde se ha transformado en la Resistencia, brazo militar de la Nueva República que combate a la Primera Orden, una agrupación marcial nacida e influenciada por los restos del Imperio Galáctico.
    Poe Dameron (Oscar Isaac) es el mejor piloto de la Galaxia y de la Resistencia, por lo que la ahora General Leia Organa (Carrie Fisher) le encomienda la misión de encontrar a su hermano Luke Skywalker (Mark Hamill), quien ha desaparecido desde hace algunos años. En el planeta Jakku, Poe obtiene de manos de Lor San Tekka (Max von Sydow) un fragmento de mapa estelar donde se traza una ruta hasta la ubicación de Luke. Sin embargo son atacados por fuerzas de asalto enemigas comandadas por Kylo Ren (Adam Driver), un alto mando de la Primera Orden que admira al difunto Lord Sith Darth Vader.";
  } else if ($parametro == 9) {
    $titulo = "The Help";
    $imagen = "../images/peliculas/thehelp2.jpg";
    $critica = array(4, 3.8, 3.4, 4);
    $descripcion = "The Help (Criadas y señoras en España, Historias cruzadas en Latinoamérica) es una película dramática estadounidense estrenada el 10 de agosto de 2011. Dirigida por Tate Taylor y protagonizada por Emma Stone, Viola Davis y Bryce Dallas Howard, está basada en la novela Criadas y señoras, de Kathryn Stockett.
    Eugenia -Skeeter- Phelan (Emma Stone) es una joven de 23 años que ha regresado a su casa en Jackson, Misisipi, al sur de Estados Unidos, tras terminar sus estudios en la universidad estatal. Con la idea de ser escritora, en plena década de los 60 comienza a ver a su entorno social con otros ojos, mientras su madre (Allison Janney) solo piensa en casarla.
    Aibileen Clark (Viola Davis) es una sirvienta negra que ha criado a diecisiete niños blancos. Tras perder a su hijo mientras sus jefes blancos miraban para otro lado, Aibileen siente que algo ha cambiado en su vida y se compromete con la educación de la niña que tiene a su cargo, aunque sabe que el paso del tiempo hará que se separen.
    Minny Jackson (Octavia Spencer) es la mejor amiga de Aibileen, una mujer bajita e irascible. Es conocida como la mejor cocinera de la ciudad, y luego de un acto de venganza con su ex jefa se queda desempleada, hasta que encuentra a una familia que la acoge como parte de ella.";
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

  <title>Pagina de Peliculas</title>

  <!-- Loading third party fonts -->
  <link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
  <link href="../fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

  <!-- Loading main css file -->
  <link rel="stylesheet" href="../style.css">
</head>

<head>
  <div id="site-content">
    <?php include "../components/header.php"?>
    <main class="main-content">
      <div class="container">
        <div class="page">
          <div class="breadcrumbs">
            <a href="../index.php">Home</a>
            <span><?php echo $titulo;?></span>
          </div>

          <div class="row">
            <div class="col-md-4">
              <figure><img src="<?php echo $imagen;?>" alt="figure image"></figure>
            </div>
            <div class="col-md-8">
              <p class="leading"><?php echo $titulo;?></p>
              <p class="descrip"><?php echo $descripcion;?></p>
              <ul class="movie-schedule">
                <li>
                  <div class="date"><?php echo $critica[0];?>/5</div>
                  <h2 class="entry-title"><a href="#">Crítico: Sergio Guzman</a></h2>
                </li>
                <li>
                  <div class="date"><?php echo $critica[1];?>/5</div>
                  <h2 class="entry-title"><a href="#">Crítico: Roberto Rodríguez</a></h2>
                </li>
                <li>
                  <div class="date"><?php echo $critica[2];?>/5</div>
                  <h2 class="entry-title"><a href="#">Crítico: Mauricio Tohom</a></h2>
                </li>
                <li>
                  <div class="date"><?php echo $critica[3];?>/5</div>
                  <h2 class="entry-title"><a href="#">Crítico: Jonathan Tzul</a></h2>
                </li>
              </ul> <!-- .movie-schedule -->
            </div>
          </div>
        </div>
      </div> <!-- .container -->
    </main>
    <?php include "../components/footer.php" ?>
  </div>
  <script src="../js/jquery-1.11.1.min.js"></script>
  <script src="../js/plugins.js"></script>
  <script src="../js/app.js"></script>
</head>