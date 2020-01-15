@extends('temple.plantilla')

@section('menu')
    @parent
@endsection

@section('content')

    <div class="col-12 tm-page-cols-container tm-call-to-action-col">
        <h2 class="tm-text-secondary mb-4">Llena los campos requeridos</h2>
        <form action="#" method="POST" id="tm_contact_form" enctype="multipart/form-data">
            <p><strong>Datos del dueño</strong></p>
            <div class="form-group">
            <input type="text" id="nombrecompleto" name="nombrecompleto" class="form-control rounded-0 border-top-0 border-right-0 border-left-0" placeholder="Nombre Completo" required="">
            </div>
            <div class="form-group-2">
            <input type="email" id="email" name="email" class="form-control rounded-0 border-top-0 border-right-0 border-left-0" placeholder="Correo Electronico" required="">
            </div>
            <div class="form-group">
                <input type="text" id="telefono" name="telefono" class="form-control rounded-0 border-top-0 border-right-0 border-left-0" placeholder="Telefono" required="">
            </div>
            <p><strong>Datos de la mascota</strong></p>
            <div class="form-group">
                <input type="text" id="nombrePet" name="nombrePet" class="form-control rounded-0 border-top-0 border-right-0 border-left-0" placeholder="Nombre" required="">
            </div>
            <div class="form-group-2 input-field">
            <select class="tm-select" name="raza" id="raza">
                <option value="select">Raza</option>
                <option value="CE">...</option>
                <option value="CE">...</option>
                <option value="SA">...</option>
                <option value="PM">...</option>
                <option value="WD">Otra</option>
            </select>
            </div>
            <div class="form-group tm-choices-container tm-text-secondary">
            <label class="tm-w-50">
                <input type="radio" class="with-gap" name="gender" value="Hembra">
                <span>Hembra</span>
            </label>

            <label class="tm-w-50">
                <input type="radio" class="with-gap" name="gender" value="Macho">
                <span>Macho</span>
            </label>
            </div>

            <div class="form-group-2">
                <input type="text" id="color" name="color" class="form-control rounded-0 border-top-0 border-right-0 border-left-0" placeholder="Color" required="">
            </div>

            <div class="tm-mb-5">
            <textarea rows="3" id="contact_message" name="contact_message" class="form-control rounded-0" placeholder="Caracteristicas Especificas" required=""></textarea>
            </div>

            <div class="tm-mb-6 file-upload-container">
            <input id="file_name_label" type="text" class="border-top-0 border-right-0 border-left-0" placeholder="Selecciona una foto" disabled="">
            <label class="btn btn-outline btn-file">
                Buscar...
                <input type="file" name="file_to_upload" style="display: none;">
            </label>
            </div>

            <div class="">
            <button type="submit" class="btn btn-secondary tm-btn-submit rounded-0">
                Generar
            </button>
            </div>
        </form>
    </div>

@endsection
