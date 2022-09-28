<form method="POST" action="{{ route('articulos.store') }}" class="border border-secondary">
    @csrf
        <div class="mb-3">
            <h1>Agregar Noticia</h1>
            <label for="tituloInput" class="form-label">Titulo de la Noticia</label>
            <input type="text" class="form-control" name="titulo" id="tituloInput" aria-describedby="descripcionInputTitulo">
            <div id="descripcionInputTitulo" class="form-text">Escribe el título de tu noticia.</div>
        </div>

        <div class="mb-3">        
            <label for="tituloInput" class="form-label">Nombre sección</label>
            <input type="text" class="form-control" name="nombre_seccion" id="tituloInput" aria-describedby="descripcionInputTitulo">
            <div id="descripcionInputTitulo" class="form-text">Escribe el Nombre sección</div>
        </div>

        <div class="mb-3">
            <label for="cuerpoNoticiaInput" class="form-label">Cuerpo Noticia</label>
            <textarea class="form-control" name="cuerpo_seccion" id="cuerpoNoticiaInput" rows="3"></textarea>
        </div>
        <button class="btn btn-outline-success" type="submit">Agregar Noticia</button>

{{--         <button 
        class="btn btn-outline-success" 
        type="button" 
        onclick="agregarNoticia()">
            Agregar Noticia
        </button>  --}}
        <!-- Boton para crear articulos -->
</form>