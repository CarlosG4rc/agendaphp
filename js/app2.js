const formularioContactos = document.querySelector('#contacto');

eventListeners();

function eventListeners(){
    formularioContactos.addEventListener('submit', leerFormulario);

}

function leerFormulario(e){
    e.preventDefault();
    //leer los datos de los inputs
    const nombre = document.querySelector('#nombre').value,
          empresa = document.querySelector('#empresa').value,
          telefono = document.querySelector('#telefono').value,
          accion = document.querySelector('#accion').value;

    if(nombre === '' || empresa === '' || telefono ===''){
        //Dos parametros, texto y clase
        mostrarNotificacion('Todos los campos son obligatorios','error');
    }
    else{
        //Pasa la validacion, crear llamado a ajax
        const infoContacto = new FormData();
        infoContacto.append('nombre', nombre);
        infoContacto.append('empresa', empresa);
        infoContacto.append('telefono', telefono);
        infoContacto.append('accion', accion);

        if(accion === 'crear'){
            //crearemos un nuevo contacto
            insertBD(infoContacto);
        }else{
            //editar el contacto
        }
    }
}
/**Inserta en la base de datos, via ajax**/
function insertBD(datos){
    //Llamado a Ajax

    //crear el objeto
    const xhr = new XMLHttpRequest();
    //abrir la conexion
    xhr.open('POST','inc/modelos/modelo-contactos.php', true);

    //pasar los datos
    xhr.onload = function(){
        if(this.status === 200){
            console.log(JSON.parse(xhr.responseText));
            //tenemos la respuesta de php
            const respuesta = JSON.parse(xhr.responseText);
            console.log(respuesta.empresa)

        }
    }

    //enviar los datos
    xhr.send(datos)
}
//Notificación en pantalla
function mostrarNotificacion(mensaje,clase){
    const notificacion = document.createElement('div');
    notificacion.classList.add(clase, 'notificacion', 'sombra');
    notificacion.textContent = mensaje;

    //formulario
    formularioContactos.insertBefore(notificacion,document.querySelector('form legend'));

    //Ocultar y mostrar la notificacion
    setTimeout(() =>{
        notificacion.classList.add("visible");
        setTimeout(() => {
            notificacion.classList.remove("visible");
            setTimeout(() => {
                notificacion.remove();
            },500)
        },3000);
    },100);
}
