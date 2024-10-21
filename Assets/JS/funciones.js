function frmLogin(e) {
    e.preventDefault();

    const usuario = document.getElementById("usuario");
    const clave = document.getElementById("clave");

    if (usuario.value == "") {
        usuario.classList.remove("is-invalid");
        usuario.classList.add("is-invalid");
        usuario.focus();
    } else if (clave.value == "") {
        usuario.classList.remove("is-invalid");
        clave.classList.add("is-invalid");
        clave.focus();
    } else {
        const url = base_url + "Usuarios/Validar";
        const frm = document.getElementById("frmLogin");
        const http = new XMLHttpRequest();
        http.open("POST", url, true);
        http.send(new FormData(frm));
        http.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                const res = JSON.parse(this.responseText);

                // Aquí redirigimos según el perfil
                if (res == "docente") {
                    window.location = base_url + "Docentes"; // Redirige al controlador de docentes
                } else if (res == "estudiante") {
                    window.location = base_url + "Estudiantes"; // Redirige al controlador de estudiantes
                } else if (res == "administracion") {
                    window.location = base_url + "Administracion"; // Redirige al controlador de administración
                } else {
                    const alerta = document.getElementById("alerta");
                    alerta.classList.remove("d-none");
                    alerta.innerHTML = res;
                    alerta.style.textAlign = "center";
                    alerta.style.marginTop = "10px";
                    alerta.style.fontSize = "20px";
                    alerta.style.color = "#ebff00";
                }
            }
        };
    }
}
