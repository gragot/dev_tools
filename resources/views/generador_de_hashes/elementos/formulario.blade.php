<form action="{{ route('generador_de_hashes.action') }}" method="post">
    <div class="form-group">
        <label>Introduce la contraseña</label>
        <input type="text" class="form-control" name="pass" value="{{ $pass }}">
    </div>
    <button type="submit" class="btn btn-primary">Crear hashes</button>
</form>
