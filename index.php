<?php include 'inc/layout/header.php'; ?>

<div class="contenedor-barra">
    <h1>Agenda de contactos</h1>
</div>
<div class="bg-amarillo contenedor sombra">
    <form id="contacto" action="#">
        <legend>Añada un contacto <span>Todos los campos son obligatorios</span></legend>
        <div class="campos">
            <div class="campo">
                <label for="nombre">Nombre:</label>
                <input type="text" placeholder="Nombre Contacto" id="nombre">
            </div>
            <div class="campo">
                <label for="empresa">Empresa:</label>
                <input type="text" placeholder="Nombre Empresa" id="empresa">
            </div>
            <div class="campo">
                <label for="nombre">Teléfono:</label>
                <input type="tel" placeholder="Teléfono Contacto" id="telfono">
            </div>
        </div>
        <div class="campo enviar">
            <input type="submit" value="Añadir">
        </div>
    </form>
</div>
<div class="bg-blanco sombra contactos contenedor">
    <div class="contenedor-contactos">
        <h2>Contactos</h2>
        <input type="text" id="buscar" class="buscador sombra" placeholder="Buscar Contactos...">

        <p class="total-contactos"><span>2 </span>Contactos</p>

        <div class="contenedor-tabla">
            <table id="listado-contactos">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Empresa</th>
                        <th>Teléfono</th>
                        <th>Acciones</th>
                    </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Carlos</td>
                    <td>IFP</td>
                    <td>5540390123</td>
                    <td>
                        <a class="btn-editar btn" href="#">
                            <i class="fas fa-pen-square"></i>
                        </a>
                        <button data-id="1" type="button" class="btn-borrar btn">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>Carlos</td>
                    <td>IFP</td>
                    <td>5540390123</td>
                    <td>
                        <a class="btn-editar btn" href="#">
                            <i class="fas fa-pen-square"></i>
                        </a>
                        <button data-id="1" type="button" class="btn-borrar btn">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>Carlos</td>
                    <td>IFP</td>
                    <td>5540390123</td>
                    <td>
                        <a class="btn-editar btn" href="#">
                            <i class="fas fa-pen-square"></i>
                        </a>
                        <button data-id="1" type="button" class="btn-borrar btn">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </td>
                </tr>
            </tbody>
            </table>
        </div>
    </div>
</div>



<?php include 'inc/layout/footer.php'; ?>