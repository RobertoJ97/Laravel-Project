function Validar() {
    var bandera = false;
    var nombre = document.getElementById("nombre").value;
    var apellido = document.getElementById('apellido').value;
    var solapin = document.getElementById('solapin').value;
    var grupo = document.getElementById('grupo').value;
    var correo = document.getElementById('correo').value;
    var errornombre, errorapellido, errorsolapin, errorgrupo, errorcorreo = "";
    if (nombre.length > 0) {
        let auxiliar = nombre.split(" ");
        let caracter = "";
        for (var i = 0; i < auxiliar.length; i++) {
            caracter = auxiliar[i].charAt(0);
            if (caracter != caracter.toUpperCase()) {
                errornombre = document.getElementById('errornombre').innerHTML = "El nombre debe comenzar con mayúscula";
                break;
            }
        }
    } else {
        errornombre = document.getElementById('errornombre').innerHTML = "El campo es obligatorio";
    }
    if (nombre.length > 0) {
        var auxiliar2 = nombre.split(" ");
        for (var p = 0; p < auxiliar2.length; p++) {
            for (var y = 0; y < auxiliar2[p].length; y++) {
                if (auxiliar2[p].charAt(y) == 0 || auxiliar2[p].charAt(y) == 1 || auxiliar2[p].charAt(y) == 2 || auxiliar2[p].charAt(y) == 3 || auxiliar2[p].charAt(y) == 4 || auxiliar2[p].charAt(y) == 5 || auxiliar2[p].charAt(y) == 6 || auxiliar2[p].charAt(y) == 7 || auxiliar2[p].charAt(y) == 8 || auxiliar2[p].charAt(y) == 9) {
                    errornombre = document.getElementById('errornombre').innerHTML = "El nombre no contiene número";
                    break;
                }
            }
        }
    }
    if (apellido.length > 0) {
        var auxiliar1 = apellido.split(" ");
        var caracter1 = "";
        for (var j = 0; j < auxiliar1.length; j++) {
            caracter1 = auxiliar1[j].charAt(0);
            if (caracter1 != caracter1.toUpperCase()) {
                errorapellido = document.getElementById('errorapellido').innerHTML = "El apellido debe comenzar con mayúscula";
                break;
            }
        }
    } else {
        errorapellido = document.getElementById('errorapellido').innerHTML = "El campo es obligatorio";
    }
    if (apellido.length > 0) {
        var auxiliar3 = apellido.split(" ");
        for (var l = 0; l < auxiliar3.length; l++) {
            for (var b = 0; b < auxiliar3[l].length; b++) {
                if (auxiliar3[l].charAt(b) == 0 || auxiliar3[l].charAt(b) == 1 || auxiliar3[l].charAt(b) == 2 || auxiliar3[l].charAt(b) == 3 || auxiliar3[l].charAt(b) == 4 || auxiliar3[l].charAt(b) == 5 || auxiliar3[l].charAt(b) == 6 || auxiliar3[l].charAt(b) == 7 || auxiliar3[l].charAt(b) == 8 || auxiliar3[l].charAt(b) == 9) {
                    errorapellido = document.getElementById('errorapellido').innerHTML = "El apellido no contiene número";
                    break;
                }
            }
        }
    }
    if (solapin.length != 7) {
        errorsolapin = document.getElementById('errorsolapin').innerHTML = "El solapin debe contener siete caracteres";
    }
    if (solapin.length > 0) {
        if (solapin.charAt(0) == "E" || solapin.charAt(0) == "T") {
            for (var k = 1; k < solapin.length; k++) {
                if (solapin.charAt(k) != 1 && solapin.charAt(k) != 2 && solapin.charAt(k) != 3 && solapin.charAt(k) != 4 && solapin.charAt(k) != 5 && solapin.charAt(k) != 6 && solapin.charAt(k) != 7 && solapin.charAt(k) != 8 && solapin.charAt(k) != 9 && solapin.charAt(k) != 0) {
                    errorsolapin = document.getElementById('errorsolapin').innerHTML = "El solapin debe contener números";
                    break;
                }

            }
        } else {
            errorsolapin = document.getElementById('errorsolapin').innerHTML = "El solapin debe comenzar con E(Estudiante) o T(Trabajador)";
        }
    } else {
        errorsolapin = document.getElementById('errorsolapin').innerHTML = "El campo es obligatorio";
    }

    if (grupo.length == 7) {
        var aux = "";
        if (grupo.charAt(3) == 1) {
            aux = grupo.split("1");
        }
        if (grupo.charAt(3) == 2) {
            aux = grupo.split("2");
        }
        if (grupo.charAt(3) == 3) {
            aux = grupo.split("3");
        }
        if (grupo.charAt(3) == 4) {
            aux = grupo.split("4");
        }
        if (grupo.charAt(0) != "I") {
            errorgrupo = document.getElementById('errorgrupo').innerHTML = "El grupo no es correcto Ej(IDF1501)";
        }
        if (grupo.charAt(1) != "D") {
            errorgrupo = document.getElementById('errorgrupo').innerHTML = "El grupo no es correcto Ej(IDF1501)";
        }
        if (grupo.charAt(2) != "F") {
            errorgrupo = document.getElementById('errorgrupo').innerHTML = "El grupo no es correcto Ej(IDF1501)";
        }
        if (aux.charAt(0) == "IDF") {
            for (var a = 4; a < grupo.length; a++) {
                if (grupo.charAt(a) != 1 && solapin.charAt(a) != 2 && solapin.charAt(a) != 3 && solapin.charAt(a) != 4 && solapin.charAt(a) != 5) {
                    errorgrupo = document.getElementById('errorgrupo').innerHTML = "El grupo no es correcto Ej(IDF1501)";
                    break;
                }
            }
        } else {
            errorgrupo = document.getElementById('errorgrupo').innerHTML = "El grupo debe comenzar con IDF Ej(IDF1501)";
        }
    } else {
        errorgrupo = document.getElementById('errorgrupo').innerHTML = "El grupo debe contener siete caracteres IDF Ej(IDF1501)";
    }
    if (grupo.length == 0) {
        errorgrupo = document.getElementById('errorgrupo').innerHTML = "El campo es obligatorio";
    }
    if (correo.length == 0) {
        errorcorreo = document.getElementById('errorcorreo').innerHTML = "El campo es obligatorio";
    }
    if (errornombre == "" && errorapellido == "" && errorsolapin == "" &&
        errorgrupo == "" && errorcorreo == "") {
        bandera = true;
    }
    return bandera;
}


function ValidarSET() {
    var bandera = false;
    var nombre = document.getElementById("nombre").value;
    var apellido = document.getElementById('apellido').value;
    var solapin = document.getElementById('solapin').value;
    var categoria_docente = document.getElementById('categoria_docente').value;
    var grado_cientifico = document.getElementById('grado_cientifico').value;
    var correo = document.getElementById('correo').value;
    var errornombre = "";
    var errorapellido = "";
    var errorsolapin = "";
    var errorcategoria_docente = "";
    var errorgrado_cientifico = "";
    var errorcorreo = "";
    if (nombre.length > 0) {
        let auxiliar = nombre.split(" ");
        let caracter = "";
        for (var i = 0; i < auxiliar.length; i++) {
            caracter = auxiliar[i].charAt(0);
            if (caracter != caracter.toUpperCase()) {
                errornombre = document.getElementById('errornombre').innerHTML = "El nombre debe comenzar con mayúscula";
                break;
            }
        }
    } else {
        errornombre = document.getElementById('errornombre').innerHTML = "El campo es obligatorio";
    }
    if (nombre.length > 0) {
        var auxiliar2 = nombre.split(" ");
        for (var p = 0; p < auxiliar2.length; p++) {
            for (var y = 0; y < auxiliar2[p].length; y++) {
                if (auxiliar2[p].charAt(y) == 0 || auxiliar2[p].charAt(y) == 1 || auxiliar2[p].charAt(y) == 2 || auxiliar2[p].charAt(y) == 3 || auxiliar2[p].charAt(y) == 4 || auxiliar2[p].charAt(y) == 5 || auxiliar2[p].charAt(y) == 6 || auxiliar2[p].charAt(y) == 7 || auxiliar2[p].charAt(y) == 8 || auxiliar2[p].charAt(y) == 9) {
                    errornombre = document.getElementById('errornombre').innerHTML = "El nombre no contiene número";
                    break;
                } else {


                }
            }
        }
    }
    if (apellido.length > 0) {
        var auxiliar1 = apellido.split(" ");
        var caracter1 = "";
        for (var j = 0; j < auxiliar1.length; j++) {
            caracter1 = auxiliar1[j].charAt(0);
            if (caracter1 != caracter1.toUpperCase()) {
                errorapellido = document.getElementById('errorapellido').innerHTML = "El apellido debe comenzar con mayúscula";
                break;
            }
        }
    } else {
        errorapellido = document.getElementById('errorapellido').innerHTML = "El campo es obligatorio";
    }
    if (apellido.length > 0) {
        var auxiliar3 = apellido.split(" ");
        for (var l = 0; l < auxiliar3.length; l++) {
            for (var b = 0; b < auxiliar3[l].length; b++) {
                if (auxiliar3[l].charAt(b) == 0 || auxiliar3[l].charAt(b) == 1 || auxiliar3[l].charAt(b) == 2 || auxiliar3[l].charAt(b) == 3 || auxiliar3[l].charAt(b) == 4 || auxiliar3[l].charAt(b) == 5 || auxiliar3[l].charAt(b) == 6 || auxiliar3[l].charAt(b) == 7 || auxiliar3[l].charAt(b) == 8 || auxiliar3[l].charAt(b) == 9) {
                    errorapellido = document.getElementById('errorapellido').innerHTML = "El apellido no contiene número";
                    break;
                } else {
                    errorapellido = document.getElementById('errorapellido').innerHTML = "";

                }
            }
        }
    }
    if (solapin.length != 7) {
        errorsolapin = document.getElementById('errorsolapin').innerHTML = "El solapin debe contener siete caracteres";
    }
    if (solapin.length > 0) {
        if (solapin.charAt(0) == "E" || solapin.charAt(0) == "T") {
            for (var k = 1; k < solapin.length; k++) {
                if (solapin.charAt(k) != 1 && solapin.charAt(k) != 2 && solapin.charAt(k) != 3 && solapin.charAt(k) != 4 && solapin.charAt(k) != 5 && solapin.charAt(k) != 6 && solapin.charAt(k) != 7 && solapin.charAt(k) != 8 && solapin.charAt(k) != 9 && solapin.charAt(k) != 0) {
                    errorsolapin = document.getElementById('errorsolapin').innerHTML = "El solapin debe contener números";
                    break;
                }
            }
        } else {
            errorsolapin = document.getElementById('errorsolapin').innerHTML = "El solapin debe comenzar con E(Estudiante) o T(Trabajador)";
        }
    } else {
        errorsolapin = document.getElementById('errorsolapin').innerHTML = "El campo es obligatorio";
    }
    if (categoria_docente.length == 0) {
        errorcategoria_docente = document.getElementById('errorcategoria_docente').innerHTML = "El campo es obligatorio";
    }
    if (grado_cientifico.length == 0) {
        errorgrado_cientifico = document.getElementById('errorgrado_cientifico').innerHTML = "El campo es obligatorio";
    }
    if (correo.length == 0) {
        errorcorreo = document.getElementById('errorcorreo').innerHTML = "El campo es obligatorio";
    }
    if (errornombre == "" && errorapellido == "" && errorsolapin == "" &&
        errorcategoria_docente == "" && errorgrado_cientifico == "" &&
        errorcorreo == "") {
        bandera = true;

    }
    return bandera;
}

function ValidarResponsable() {
    var bandera = false;
    var nombre = document.getElementById("nombre").value;
    var apellido = document.getElementById('apellido').value;
    var solapin = document.getElementById('solapin').value;
    var ano_responsable = document.getElementById('ano_responsable').value;
    var usuario = document.getElementById('usuario').value;
    var correo = document.getElementById('correo').value;
    var errornombre = "";
    var errorapellido = "";
    var errorsolapin = "";
    var errorano_responsable = "";
    var errorusuario = "";
    var errorcorreo = "";

    if (nombre.length > 0) {
        let auxiliar = nombre.split(" ");
        let caracter = "";
        for (var i = 0; i < auxiliar.length; i++) {
            caracter = auxiliar[i].charAt(0);
            if (caracter != caracter.toUpperCase()) {
                errornombre = document.getElementById('errornombre').innerHTML = "El nombre debe comenzar con mayúscula";
                break;
            }
        }
    } else {
        errornombre = document.getElementById('errornombre').innerHTML = "El campo es obligatorio";
    }
    if (nombre.length > 0) {
        var auxiliar2 = nombre.split(" ");
        for (var p = 0; p < auxiliar2.length; p++) {
            for (var y = 0; y < auxiliar2[p].length; y++) {
                if (auxiliar2[p].charAt(y) == 0 || auxiliar2[p].charAt(y) == 1 || auxiliar2[p].charAt(y) == 2 || auxiliar2[p].charAt(y) == 3 || auxiliar2[p].charAt(y) == 4 || auxiliar2[p].charAt(y) == 5 || auxiliar2[p].charAt(y) == 6 || auxiliar2[p].charAt(y) == 7 || auxiliar2[p].charAt(y) == 8 || auxiliar2[p].charAt(y) == 9) {
                    errornombre = document.getElementById('errornombre').innerHTML = "El nombre no contiene número";
                    break;
                } else {


                }
            }
        }
    }
    if (apellido.length > 0) {
        var auxiliar1 = apellido.split(" ");
        var caracter1 = "";
        for (var j = 0; j < auxiliar1.length; j++) {
            caracter1 = auxiliar1[j].charAt(0);
            if (caracter1 != caracter1.toUpperCase()) {
                errorapellido = document.getElementById('errorapellido').innerHTML = "El apellido debe comenzar con mayúscula";
                break;
            } else {
                errorapellido = document.getElementById('errorapellido').innerHTML = "";

            }
        }
    } else {
        errorapellido = document.getElementById('errorapellido').innerHTML = "El campo es obligatorio";
    }
    if (apellido.length > 0) {
        var auxiliar3 = apellido.split(" ");
        for (var l = 0; l < auxiliar3.length; l++) {
            for (var b = 0; b < auxiliar3[l].length; b++) {
                if (auxiliar3[l].charAt(b) == 0 || auxiliar3[l].charAt(b) == 1 || auxiliar3[l].charAt(b) == 2 || auxiliar3[l].charAt(b) == 3 || auxiliar3[l].charAt(b) == 4 || auxiliar3[l].charAt(b) == 5 || auxiliar3[l].charAt(b) == 6 || auxiliar3[l].charAt(b) == 7 || auxiliar3[l].charAt(b) == 8 || auxiliar3[l].charAt(b) == 9) {
                    errorapellido = document.getElementById('errorapellido').innerHTML = "El apellido no contiene número";
                    break;
                } else {
                    errorapellido = document.getElementById('errorapellido').innerHTML = "";

                }
            }
        }
    }
    if (solapin.length > 0) {
        if (solapin.charAt(0) == "E" || solapin.charAt(0) == "T") {
            for (var k = 1; k < solapin.length; k++) {
                if (solapin.charAt(k) != 1 && solapin.charAt(k) != 2 && solapin.charAt(k) != 3 && solapin.charAt(k) != 4 && solapin.charAt(k) != 5 && solapin.charAt(k) != 6 && solapin.charAt(k) != 7 && solapin.charAt(k) != 8 && solapin.charAt(k) != 9 && solapin.charAt(k) != 0) {
                    errorsolapin = document.getElementById('errorsolapin').innerHTML = "El solapin debe contener números";
                    break;
                }
            }
        } else {
            errorsolapin = document.getElementById('errorsolapin').innerHTML = "El solapin debe comenzar con E(Estudiante) o T(Trabajador)";
        }
    } else {
        errorsolapin = document.getElementById('errorsolapin').innerHTML = "El campo es obligatorio";
    }
    if (ano_responsable.length == 0) {
        errorano_responsable = document.getElementById('errorano_responsable').innerHTML = "El campo es obligatorio";
    }
    if (usuario.length == 0) {
        errorusuario = document.getElementById('errorusuario').innerHTML = "El campo es obligatorio";
    }
    if (usuario.length > 0) {
        let caracter2 = "";
        for (let i = 0; i < usuario.length; i++) {
            caracter2 = usuario[i].charAt(0);
            if (caracter2 == caracter2.toUpperCase()) {
                errorusuario = document.getElementById('errorusuario').innerHTML = "El usuario no puede estar en mayúscula";
                break;
            }
        }
    }
    if (correo.length == 0) {
        errorcorreo = document.getElementById('errorcorreo').innerHTML = "El campo es obligatorio";
    }
    if (correo.length > 0) {
        var auxiliar3 = correo.split("@");
        if (usuario != auxiliar3[0]) {
            errorcorreo = document.getElementById('errorcorreo').innerHTML = "El correo no concuerda con el usuario";
        }
    }


    if (errornombre == "" && errorapellido == "" && errorsolapin == "" &&
        errorano_responsable == "" && errorusuario == "" && errorcorreo == "") {
        bandera = true;
    }
    return bandera;
}

function ValidarProfesor() {
    var bandera = false;
    var nombre = document.getElementById("nombre").value;
    var apellido = document.getElementById('apellido').value;
    var solapin = document.getElementById('solapin').value;
    var usuario = document.getElementById('usuario').value;
    var correo = document.getElementById('correo').value;
    var errornombre = "";
    var errorapellido = "";
    var errorsolapin = "";
    var errorusuario = "";
    var errorcorreo = "";

    if (nombre.length > 0) {
        let auxiliar = nombre.split(" ");
        let caracter = "";
        for (var i = 0; i < auxiliar.length; i++) {
            caracter = auxiliar[i].charAt(0);
            if (caracter != caracter.toUpperCase()) {
                errornombre = document.getElementById('errornombre').innerHTML = "El nombre debe comenzar con mayúscula";
                break;
            }
        }
    } else {
        errornombre = document.getElementById('errornombre').innerHTML = "El campo es obligatorio";
    }
    if (nombre.length > 0) {
        var auxiliar2 = nombre.split(" ");
        for (var p = 0; p < auxiliar2.length; p++) {
            for (var y = 0; y < auxiliar2[p].length; y++) {
                if (auxiliar2[p].charAt(y) == 0 || auxiliar2[p].charAt(y) == 1 || auxiliar2[p].charAt(y) == 2 || auxiliar2[p].charAt(y) == 3 || auxiliar2[p].charAt(y) == 4 || auxiliar2[p].charAt(y) == 5 || auxiliar2[p].charAt(y) == 6 || auxiliar2[p].charAt(y) == 7 || auxiliar2[p].charAt(y) == 8 || auxiliar2[p].charAt(y) == 9) {
                    errornombre = document.getElementById('errornombre').innerHTML = "El nombre no contiene número";
                    break;
                } else {


                }
            }
        }
    }
    if (apellido.length > 0) {
        var auxiliar1 = apellido.split(" ");
        var caracter1 = "";
        for (var j = 0; j < auxiliar1.length; j++) {
            caracter1 = auxiliar1[j].charAt(0);
            if (caracter1 != caracter1.toUpperCase()) {
                errorapellido = document.getElementById('errorapellido').innerHTML = "El apellido debe comenzar con mayúscula";
                break;
            }
        }
    } else {
        errorapellido = document.getElementById('errorapellido').innerHTML = "El campo es obligatorio";
    }
    if (apellido.length > 0) {
        var auxiliar3 = apellido.split(" ");
        for (var l = 0; l < auxiliar3.length; l++) {
            for (var b = 0; b < auxiliar3[l].length; b++) {
                if (auxiliar3[l].charAt(b) == 0 || auxiliar3[l].charAt(b) == 1 || auxiliar3[l].charAt(b) == 2 || auxiliar3[l].charAt(b) == 3 || auxiliar3[l].charAt(b) == 4 || auxiliar3[l].charAt(b) == 5 || auxiliar3[l].charAt(b) == 6 || auxiliar3[l].charAt(b) == 7 || auxiliar3[l].charAt(b) == 8 || auxiliar3[l].charAt(b) == 9) {
                    errorapellido = document.getElementById('errorapellido').innerHTML = "El apellido no contiene número";
                    break;
                } else {
                    errorapellido = document.getElementById('errorapellido').innerHTML = "";

                }
            }
        }
    }
    if (solapin.length > 0) {
        if (solapin.charAt(0) == "E" || solapin.charAt(0) == "T") {
            for (var k = 1; k < solapin.length; k++) {
                if (solapin.charAt(k) != 1 && solapin.charAt(k) != 2 && solapin.charAt(k) != 3 && solapin.charAt(k) != 4 && solapin.charAt(k) != 5 && solapin.charAt(k) != 6 && solapin.charAt(k) != 7 && solapin.charAt(k) != 8 && solapin.charAt(k) != 9 && solapin.charAt(k) != 0) {
                    errorsolapin = document.getElementById('errorsolapin').innerHTML = "El solapin debe contener números";
                    break;
                }
            }
        } else {
            errorsolapin = document.getElementById('errorsolapin').innerHTML = "El solapin debe comenzar con E(Estudiante) o T(Trabajador)";
        }
    } else {
        errorsolapin = document.getElementById('errorsolapin').innerHTML = "El campo es obligatorio";
    }
    if (usuario.length == 0) {
        errorusuario = document.getElementById('errorusuario').innerHTML = "El campo es obligatorio";
    }
    if (usuario.length > 0) {
        let caracter3 = "";
        for (let i = 0; i < usuario.length; i++) {
            caracter3 = usuario[i].charAt(0);
            if (caracter3 == caracter3.toUpperCase()) {
                errorusuario = document.getElementById('errorusuario').innerHTML = "El usuario no puede estar en mayúscula o contener números";
                break;
            }
        }
    }
    if (correo.length == 0) {
        errorcorreo = document.getElementById('errorcorreo').innerHTML = "El campo es obligatorio";
    }
    if (correo.length > 0) {
        var auxiliar3 = correo.split("@");
        if (usuario != auxiliar3[0]) {
            errorcorreo = document.getElementById('errorcorreo').innerHTML = "El correo no concuerda con el usuario";
        }
    }
    if (errornombre == "" && errorapellido == "" && errorsolapin == "" &&
        errorusuario == "" && errorcorreo == "") {
        bandera = true;
    }
    return bandera;
}

function ValidarTarea() {
    var bandera = false;
    var fecha = document.getElementById("fecha").value;
    var resultado = document.getElementById("resultado_esperado").value;
    var semana = document.getElementById("semana").value;
    var actividades = document.getElementById("actividades").value;
    var habiliadades = document.getElementById("habiliadades").value;
    var cant_horas = document.getElementById("cant_horas").value;
    var tipo_resultado = document.getElementById("tipo_resultado").value;
    var dia = fecha.split("-");
    var errorrfecha = "";
    var errorrsemana = "";
    var errorresultado_esperado = "";
    var errorractividades = "";
    var errorrhabiliadades = "";
    var errorrcant_horas = "";
    var errortipo_resultado = "";
    var day = new Date();

    /*if (dia[2] <= day.getDate()) {
        errorrfecha = document.getElementById('errorrfecha').innerHTML = "La fecha no es correcta";
    }
    if (dia[2] <= day.getDate() && (dia[1] <= day.getMonth() + 1)) {
        errorrfecha = document.getElementById('errorrfecha').innerHTML = "La fecha no es correcta";
    }
    if (dia[2] <= day.getDate() && (dia[1] <= day.getMonth() + 1) && dia[0] <= day.getFullYear()) {
        errorrfecha = document.getElementById('errorrfecha').innerHTML = "La fecha no es correcta";
    }
    if (dia[2] <= day.getDate() && (dia[1] <= day.getMonth() + 1) && dia[0] > day.getFullYear()) {
        errorrfecha = document.getElementById('errorrfecha').innerHTML = "La fecha no es correcta";
    }*/

    if (fecha.length > 0) {
        errorrfecha = document.getElementById('errorrfecha').innerHTML = "El campo es requerido";
    }

    if (resultado > 5 && resultado < 2) {
        errorresultado_esperado = document.getElementById('errorresultado_esperado').innerHTML = "La nota no es correcta";
    }
    if (actividades.length > 0) {
        errorractividades = document.getElementById('errorractividades').innerHTML = "El campo es requerido";
    }
    if (habiliadades.length > 0) {
        errorrhabiliadades = document.getElementById('errorrhabiliadades').innerHTML = "El campo es requerido";
    }
    if (semana.length > 0) {
        errorrsemana = document.getElementById('errorrsemana').innerHTML = "El campo es requerido";
    }
    if (cant_horas.length > 0) {
        errorrcant_horas = document.getElementById('errorrcant_horas').innerHTML = "El campo es requerido";
    }
    if (tipo_resultado.length > 0) {
        errortipo_resultado = document.getElementById('errortipo_resultado').innerHTML = "El campo es requerido";
    }
    if (errorresultado_esperado == "" && errorrfecha == "" && errortipo_resultado == "" && errorrcant_horas == "" &&
        errorrhabiliadades == "" && errorractividades == "") {
        alert("asdasd");
        //bandera = true;
    }


    return bandera;
}