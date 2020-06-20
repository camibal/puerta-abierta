function limpiarErrores() {
  var errores = document.getElementsByClassName("error");
  for (var i = 0; i < errores.length; i++) {
      errores[i].innerHTML = "";
  }
}

function validar(formulario) {

  if (formulario.nombre.value.trim().length == 0) {
      document.getElementById("Nombre").innerText = "Campo obligatorio";
      formulario.nombre.focus();
      return false;
  }

  if (formulario.nombre.value.trim().length < 3) {
      document.getElementById("Nombre").innerText = "Campo inválido";
      formulario.nombre.focus();
      return false;
  }
  if (formulario.email.value.trim().length == 0) {
    document.getElementById("Email").innerText = "Campo obligatorio";
    formulario.edad.focus();
    return false;
}

if (formulario.email.value.trim().length < 3) {
    document.getElementById("mail").innerText = "Campo inválido";
    formulario.edad.focus();
    return false;
}
if (formulario.edad.value.trim().length == 0) {
  document.getElementById("Edad").innerText = "Campo obligatorio";
  formulario.edad.focus();
  return false;
}

if (formulario.nombre.value.trim().length < 3) {
  document.getElementById("Edad").innerText = "Campo inválido";
  formulario.nombre.focus();
  return false;
}
if (formulario.nombre.value.trim().length == 0) {
document.getElementById("Fecha").innerText = "Campo obligatorio";
formulario.nombre.focus();
return false;
}

if (formulario.nombre.value.trim().length < 3) {
document.getElementById("Fecha").innerText = "Campo inválido";
formulario.nombre.focus();
return false;
}
if (formulario.nombre.value.trim().length == 0) {
  document.getElementById("Fecha").innerText = "Campo obligatorio";
  formulario.nombre.focus();
  return false;
  }
  
  if (formulario.nombre.value.trim().length < 3) {
  document.getElementById("Fecha").innerText = "Campo inválido";
  formulario.nombre.focus();
  return false;
  }


  alert("Datos enviados");

  return true;
}