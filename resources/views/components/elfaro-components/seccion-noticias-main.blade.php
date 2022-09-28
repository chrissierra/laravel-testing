<div class="row row-cols-1 row-cols-lg-3" id="contenedorPrincipalNoticias">
    <!--Limite de 3 articulos en linea horizontal-->
    <div class="card col-sm">
        <img class="img-fluid" src="1.jpg">
        <div class="card-body">
            <h2>Tres heridos con armas de fuego deja ataque incendiario a histórico molino de Contulmo</h2>
            <h5 class="card-title">Sección Politica</h5>

            <p class="card-text">
                Carabineros informó que un grupo de encapuchados atacó a tiros la casa patronal del molino Grollmus,
                para luego prender fuego a dos estructuras y a vehículos que se encontraban en el lugar. El dueño del lugar,
                Carlos Grollmus, fue el más afectado, al resultar con una fractura expuesta y con lesiones de perdigones en su
                rostro y cuerpo. El subsecretario del Interior, Manuel Monsalve, repudió el acto y anunció acciones legales contra los responsables.
            </p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            <audio controls>
                <source src="2.4.mp3" type="audio/mp3">
                <p>Your browser doesn't support HTML5 audio</p>
            </audio>

        </div>
    </div>

    <div class="card col-sm">
        <img class="img-fluid" src="2.jpeg">
        <div class="card-body">
            <h2 class="card-title">Colombia y Venezuela avanzan en normalización de relaciones diplomáticas tras reconocimiento a gobierno de Maduro</h2>
            <h5>Sección Mundo</h5>
            <p class="card-text">
                La relación bilateral entre ambas naciones se renovó con el gobierno de Gustavo Petro, el primer mandatario de izquierda en la historia de
                Colombia, quien ha dado un giro al reconocer a Nicolás Maduro como presidente legítimo de Venezuela y no al líder opositor Juan Guaidó, como lo había
                hecho su antecesor Iván Duque.
            </p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
    </div>

    <div class="card col-sm">
        <iframe width="320" height="215" class="rounded-3" src="https://www.youtube.com/embed/dfKgVKxHa3M">
        </iframe>
        <div class="card-body">
            <h2 class="card-title">La Nasa pospone el lanzamiento de la misión a la luna por fallas en motor</h2>
            <h5>Sección Ciencia</h5>
            <p class="card-text">
                Un revés sufrió la nueva aventura del hombre a la luna. Claro porque la NASA decidió suspender el lanzamiento de la misión no tripulada Artemis I,
                prevista para las 08:33 hrs. de hoy lunes, debido a problemas técnicos en el motor de la nave espacial. El lanzamiento del cohete de 98 metros de altura
                desde la plataforma 39B del Centro Espacial Kennedy fue reagendada para este viernes, dijo la NASA. De acuerdo a AP, las fugas de hidrógeno han empañado
                los preparativos de la NASA desde abril, y han requerido una serie de reparaciones. La prueba se repitió con más éxito en junio, aunque también hubo algunas
                filtraciones. Los responsables dijeron que no sabrían con certeza si las reparaciones habían funcionado hasta que se intentara cargar los tanques del cohete
                con casi un millón de galones (4,5 millones de litros) de combustible frío el lunes.
            </p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
    </div>


    @foreach($articulos as $articulo)
    
    <div class="card col-sm">
        <div class="card-body">
            <h2 class="card-title">{{$articulo->titulo}}</h2>
            <h5>{{$articulo->nombre_seccion}}</h5>
            <p class="card-text">
                {{$articulo->cuerpo_seccion}}
            </p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
    </div>
    @endforeach

</div>