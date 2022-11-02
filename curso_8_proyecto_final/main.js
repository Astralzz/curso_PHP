//Eliminar
function borrarDato(obj) {
  //Confirmación
  const cf = confirm("Seguro qu  e deseas borrar a " + obj.value);

  //Comprobamos
  if (cf) {
    //Ruta
    const r = "?= " + obj;
    //Método
    const m = "get";
    //Nombre
    const n = "idEliminar";
    //Valor
    const v = obj.value;

    //Eliminamos
    enviarInf(r, m, n, v);
  }
}

//Mandar info
function enviarInf(rutaEnv, método, nombre, valor) {
  //Creamos formulario
  let form = document.createElement("form");
  //Acción o ruta a env
  form.action = rutaEnv;
  //Método / post, get, delete, etc
  form.method = método;

  //Creamos input
  form.innerHTML = '<input name="' + nombre + '" value="' + valor + '">';

  //El formulario debe estar en el document para poder enviarlo
  document.body.append(form);

  //Enviamos
  form.submit();

  //Eliminamos
  form.remove();
}
