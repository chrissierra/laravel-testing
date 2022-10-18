<div id="formulario_contacto" class="container-fluid border border-secondary" style="padding: 3em; border-radius: 1em">
    {{-- 
        nombre_cliente
        mensaje
        correo
        
    --}}
    <form method="POST" action="{{ route('formulariocontacto.store') }}">
        @csrf
        <div class="mb-4">
            <h1 class="text-center mb-4">FORMULARIO DE CONTACTO</h1>
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" name="correo" class="form-control"  placeholder="name@example.com">
        </div>

        <div class="mb-4">
            <label for="exampleFormControlInput1" class="form-label">Nombre</label>
            <input type="text" name="nombre_cliente" class="form-control"  placeholder="Juan perez">
        </div>

        <div class="mb-4">
            <label for="exampleFormControlTextarea1" class="form-label">Descripcion</label>
            <textarea class="form-control" name="mensaje"  rows="3"></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary mb-2">Enviar</button>
    </form>
</div>
<div style="margin-bottom: 3em"></div>