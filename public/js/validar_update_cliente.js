function setUpdateCliente () {
	document.querySelector("#set_update_cliente").addEventListener("submit",validarUpdateCliente);
}

function validarUpdateCliente (event) {
    var vcl_nombre = document.querySelector(".cl_nombre").value ;
    var vcl_apellidos = document.querySelector(".cl_apellidos").value ;
    var vcl_usuario = document.querySelector(".cl_usuario").value ;
    var vcl_password = document.querySelector(".cl_password").value ;
    var vcl_telefono = document.querySelector(".cl_telefono").value ;
    var vcl_mail = document.querySelector(".cl_mail").value ;
    var vcl_mensaje = document.querySelector(".cl_mensaje").value ;

    var cl_nombre = document.querySelector(".cl_nombre") ;
    var cl_apellidos = document.querySelector(".cl_apellidos") ;
    var cl_usuario = document.querySelector(".cl_usuario") ;
    var cl_password = document.querySelector(".cl_password") ;
    var cl_telefono = document.querySelector(".cl_telefono") ;
    var cl_mail = document.querySelector(".cl_mail") ;
    var cl_mensaje = document.querySelector(".cl_mensaje") ;

    if (vcl_nombre === "") {
        event.preventDefault () ;
        cl_nombre.style.setProperty("border-color", "red", "important") ;  
        return false ;
    } else if (vcl_nombre != "") {
        cl_nombre.style.setProperty("border-color", "#b0c0fe", "important") ; 

        if (vcl_apellidos === "") {
            event.preventDefault () ;
            cl_apellidos.style.setProperty("border-color", "red", "important") ;  
            return false ;
        } else if (vcl_apellidos != "") {
            cl_apellidos.style.setProperty("border-color", "#b0c0fe", "important") ; 
            
            if (vcl_usuario === "") {
                event.preventDefault () ;
                cl_usuario.style.setProperty("border-color", "red", "important") ;  
                return false ;
            } else if (vcl_usuario != "") {
                cl_usuario.style.setProperty("border-color", "#b0c0fe", "important") ;  

                if (vcl_password === "") {
                    event.preventDefault () ;
                    cl_password.style.setProperty("border-color", "red", "important") ;  
                    return false ;
                } else if (vcl_password != "") {
                    cl_password.style.setProperty("border-color", "#b0c0fe", "important") ;  
                    
                    if (vcl_telefono === "") {
                        event.preventDefault () ;
                        cl_telefono.style.setProperty("border-color", "red", "important") ;  
                        return false ;
                    } else if (vcl_telefono != "") {
                        cl_telefono.style.setProperty("border-color", "#b0c0fe", "important") ;  
                        
                        if (vcl_mail === "") {
                            event.preventDefault () ;
                            cl_mail.style.setProperty("border-color", "red", "important") ;  
                            return false ;
                        } else if (vcl_mail != "") {
                            cl_mail.style.setProperty("border-color", "#b0c0fe", "important") ;  
                            
                            if (vcl_mensaje === "") {
                                event.preventDefault () ;
                                cl_mensaje.style.setProperty("border-color", "red", "important") ;  
                                return false ;
                            } else if (vcl_mensaje != "") {
                                cl_mensaje.style.setProperty("border-color", "#b0c0fe", "important") ;  
                
                            }
                        }
                    }
                }
            }
        }
    }
}

window.addEventListener ("load", setUpdateCliente) ;