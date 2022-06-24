<form method="POST" action="<?=URL_BASE?>formulario/guardar">
    <table>
        <tr>
            <td><label>Nombre</label></td>
            <td><input type="text" name="nombre" value=""/></td>
        </tr>
        <tr>
            <td><label>Edad</label></td>
            <td><input type="number" name="edad" value=""/></td>
        </tr>
        <tr>
            <td><label>Correo</label></td>
            <td><input type="email" name="correo" value=""/></td>
        </tr>
        <tr>
            <td><input type="submit" value="Guardar"/></td>
            <td></td>
        </tr>
    </table>
</form>