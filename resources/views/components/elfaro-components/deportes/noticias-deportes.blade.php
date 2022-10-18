<div class="row" id="contenedorPrincipalNoticias">
    <!--Limite de 3 articulos en linea horizontal-->
    <div class=" col-12 col-lg-4">
        <div class="card card-noticias-main ">
            <img class="img-fluid imagen-main" src="alonso.png">
            <div class="card-body">
                <h2>Alonso se quejó por radio de que le hacían el vacío</h2>
                <h5 class="card-title">Sección deportes</h5>
                <p class="card-text">
                    Fernando Alonso tuvo una tarde de lo más interesante en la radio para comunicarse con su equipo. Además del ya famoso
                    mensaje sobre Lewis Hamilton, el piloto trató de ponerse en contacto con su equipo durante la carrera para preguntarles los
                    tiempos y las distancias con los demás. Está bien, es un procedimiento habitual durante las pruebas para poder saber en todo momento
                    qué está pasando sobre el asfalto. En varias ocasiones, el español pide por radio a su ingeniero de pista, Karel Loos, que le dé información
                    de tiempo por vuelta objetivo.También se muestra molesto en radio, igual que lo hizo posteriormente frente a los medios tras la carrera, del
                    momento de las paradas. Parece que fueron, a su juicio, demasiado pronto y que le terminaron por sacar en tráfico.
                </p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                <audio controls>
                    <source src="2.4.mp3" type="audio/mp3">
                    <p>Your browser doesn't support HTML5 audio</p>
                </audio>
            </div>
        </div>
    </div>


    <div class=" col-12 col-lg-4">
        <div class="card card-noticias-main ">
            <img  class="img-fluid imagen-main" src="manches.png">
            <div class="card-body">
                <h2 class="card-title">Manchester United anunció millonario acuerdo por jugador de Ajax</h2>
                <h5>Sección deportes</h5>
                <p class="card-text">
                    Manchester United y Ajax anunciaron un acuerdo para el traspaso del brasileño Antony Matheus dos Santos al club inglés, operación que puede
                    alcanzar los cien millones de euros. "Ajax acordó una tarifa de transferencia de 95 millones de euros con el club inglés. Por variables, esa cantidad
                    puede aumentar hasta los 100 millones de euros", precisa la entidad neerlandesa en su comunicado. El traspaso del extremo brasileño, de 22 años y que se
                    crió en la favela Inferninho de Osasco (en las afueras de Sao Paulo), está pendiente del pertinente reconocimiento médico y el pase internacional.

                </p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
    </div>

    <div class=" col-12 col-lg-4">
        <div class="card  card-noticias-main ">
            <div class="row ">
                <div class="col-12 ">
                    <iframe width="320" height="215" class="rounded-3 imagen-main" src="https://www.youtube.com/embed/N55OtTim5Jo">
                    </iframe>
                </div>
            </div>
            <div class="card-body">
                <h2 class="card-title">Chile vs. Perú: ¿Cuándo y dónde ver el amistoso de La Roja Sub 23?</h2>
                <h5>Sección deportes</h5>
                <p class="card-text">
                    La selección chilena sub 23 enfrentará a Perú en el Estadio Tierra de Campeones de Iquique, en un duelo importante para que Eduardo Berizzo vea
                    opciones de jugadores jóvenes, con la única excepción del portero Brayan Cortés, quien supera ese rango de edad. El duelo se llevará a cabo este miércoles a
                    las 18:30 horas (22:30 GMT) y si quieres verlo por televisión puedes sintonizar Chilevisión, mientras que por cable puedes hacerlo por TNT Sports y por streaming
                    en Estadio TNT.
                </p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
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
<div class="mb-4"></div>