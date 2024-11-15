document.addEventListener("DOMContentLoaded", function(){
    eventListener();
    darkMode();
});

function darkMode(){

    //const botonDarkMode = document.querySelector(".dark-mode-boton");
    const prefiereDarkMode = window.matchMedia("(prefers-color-scheme: dark)");

    if(prefiereDarkMode.matches){
        document.body.classList.add("dark-mode");
    }else{
        document.body.classList.remove("(dark-mode)");
    }

    prefiereDarkMode.addEventListener("change", function(){
        document.body.classList.toggle("dark-mode");
    });

    const botonDarkMode = document.querySelector(".dark-mode-boton");
    botonDarkMode.addEventListener("click", function(){
        document.body.classList.toggle("dark-mode");

        //para que el modo elegido se quede guardado en el local-storage
        if(document.body.classList.contains("dark-mode")){
            localStorage.setItem("modo-oscuro","true");
        }else{
            localStorage.setItem("modo-oscuro","false");
        }
    });

    //obtener el modo del color actual
    if(localStorage.getItem("modo-oscuro") === "true"){
        document.body.classList.add("dark-mode");
    }else{
        document.body.classList.remove("dark-mode");
    }
}

//boton darkmode
function eventListener(){
    const mobileMenu = document.querySelector(".mobile-menu");
    mobileMenu.addEventListener('click', navegacionResponsive)

    //Muestra campos condicionales
    const metodoContacto = document.querySelectorAll('input[name="contacto[contacto]"]');
    metodoContacto.forEach(input => input.addEventListener('click', mostrarMetodosContacto))
}
function navegacionResponsive(){
    const navegacion = document.querySelector(".navegacion")
    navegacion.classList.toggle('mostrar')
}

function mostrarMetodosContacto(e ){
    const contactoDiv = document.querySelector('#contacto');

    if(e.target.value === 'telefono'){
        contactoDiv.innerHTML = `
            <label for="telefono">Numero de Telefono</label>
            <input type="tel" placeholder="Tu Telefono" id="telefono"  name="contacto[telefono]">

            <p>Elija la fecha y la hora para la llamada</p>

            <label for="fecha">Fecha:</label>
            <input type="date"  id="fecha"  name="contacto[fecha]">
                
            <label for="hora">Hora:</label>
            <input type="time" id="hora" min="09:00" max="18:00"  name="contacto[hora]">
        `;
    }else{
        contactoDiv.innerHTML =`
            <label for="email">E-mail</label>
            <input type="email" placeholder="Tu Email" id="email"  name="contacto[email]" >

        `;
    }
}