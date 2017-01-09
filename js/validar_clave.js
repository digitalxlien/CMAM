function validarPassword(){
  var password1 = document.getElementById("contrasena").value;
  var password2 = document.getElementById("confirmar_contrasena").value;

  if(password1 == password2){
    return true;
  } else {
    alert("VERIFIQUE SU CONTRASEÑA\nLa contraseña no coincide");
    return false;
  }
}
