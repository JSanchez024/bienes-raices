<fieldset>
    <legend>Informacion General</legend>

    <label for="nombre">NOMBRE:</label>
    <input type="text" id="nombre" name="vendedor[nombre]" placeholder="Nombre Vendedor"
    value="<?php echo s( $vendedor->nombre ); ?>">
    <label for="nombre">APELLIDO :</label>
    <input type="text" id="apellido" name="vendedor[apellido]" placeholder="Apellido Vendedor"
    value="<?php echo s( $vendedor->apellido); ?>">
</fieldset>

<fieldset>
    <legend>Informacion General</legend>
    <label for="nombre">TELEFONO:</label>
    <input type="text" id="telefono" name="vendedor[telefono]" placeholder="Telefono Vendedor"
    value="<?php echo s( $vendedor->telefono ); ?>">

</fieldset>