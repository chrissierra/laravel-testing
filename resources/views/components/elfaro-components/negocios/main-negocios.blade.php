<div class="row" id="contenedorPrincipalNoticias">
    <!--Limite de 3 articulos en linea horizontal-->
    <div class=" col-12 col-lg-4">
        <div class="card card-noticias-main ">
            <img class="img-fluid imagen-main" src="2.2.png">
            <div class="card-body">
                <h2>Wall Street cae por tercera sesión consecutiva por temor a las alzas de tasas</h2>
                <h5 class="card-title">Sección negocios</h5>
                <p class="card-text">
                    NUEVA YORK, 30 ago (Reuters) -Las acciones estadounidenses cerraron a la baja por tercera sesión consecutiva el martes, ya que un
                    aumento de las ofertas de empleo avivó el temor a que la Reserva Federal de Estados Unidos tenga otra razón para mantener su agresiva
                    senda de subidas de tasas de interés para combatir la inflación.* El índice de referencia S&P 500 se ha desplomado más de un 5% desde
                    que el presidente de la Fed, Jerome Powell, reafirmó el viernes la determinación del banco central de subir los tipos, pese a la desaceleración
                    de la economía.* La demanda por trabajo no mostró señales de enfriamiento, ya que las ofertas de empleo en Estados Unidos aumentaron a 11,239
                    millones en julio y el dato del mes anterior fue revisado al alza.
                </p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                <audio controls>
                    <source src="5.1.mp3" type="audio/mp3">
                    <p>Your browser doesn't support HTML5 audio</p>
                </audio>
            </div>
        </div>
    </div>


    <div class=" col-12 col-lg-4">
        <div class="card card-noticias-main ">
            <img  class="img-fluid imagen-main" src="2.1.png">
            <div class="card-body">
                <h2 class="card-title">Powell contagia al BCE - Reto: “Aplastar la inflación”, caiga quien caig</h2>
                <h5>Sección negocios</h5>
                <p class="card-text">
                    Mercados europeos al alza este martes -Ibex 35, CAC 40, DAX...- tras las caídas de ayer. Los expertos siguen monitorizando las declaraciones de expertos
                    tras las declaraciones de Jerome Powell, presidente de la Reserva Federal estadounidense (Fed), en el simposio de Jackson Hole. “Powell dejó patente su
                    intención de reducir la inflación, aunque esto conlleve algo de 'dolor' y un periodo sostenido de desaceleración del crecimiento y del mercado laboral”,
                    señala el equipo de analistas de A&G Banca Privada. Hoy hay intervenciones de miembros de bancos centrales, que seguro continuarán con el discurso hawkish
                    de Powell en Jackson Hole, tanto por parte del BCE como de la Fed, destacan en Bankinter (BME:BKT).
                </p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
    </div>

    <div class=" col-12 col-lg-4">
        <div class="card  card-noticias-main ">
            <div class="row ">
                <div class="col-12 ">
                    <iframe width="320" height="215" class="rounded-3 imagen-main" src="https://www.youtube.com/embed/OJzTaOmeXS">
                    </iframe>
                </div>
            </div>
            <div class="card-body">
                <h2 class="card-title">Alerta cripto: Bitcoin vuelve a caer por debajo de los $20,000</h2>
                <h5>Sección negocios</h5>
                <p class="card-text">
                    <p class="card-text">
                        La restricción de liquidez sigue, y desde que así lo confirmó la Reserva Federal de Estados Unidos, los inversionistas huyen de los activos
                        de riesgos, entre estos el Bitcoin y las criptomonedas.La moneda digital cae hoy 2.5%, hundiendo al activo por debajo de los $20,000, el nivel
                        más bajo desde mediados de julio. Ayer, el Bitcoin se deslizó incluso hasta los $19,525, pero logró recuperarse para volver a caer hoy. El Bitcoin
                        Bitcoin se debilitó cuando el presidente de la Fed, Jerome Powell, desde su discurso en Jackson Hole, enfatizara que la política agresiva de tipos
                        continuará hasta ver resultados más seguros de que la inflación está finalmente cediendo.“Los activos de riesgo están en apuros, ya que la lucha de
                        Powell contra la inflación seguirá siendo agresiva incluso si desencadena una desaceleración económica”, indicaba en un reporte para CNBC, Edward Moya,
                        analista de la firma financiera Oanda.
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