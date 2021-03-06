var INDEX = 0;
let salir=false;
function generate_message(msg, type) {
    $(".chat-logs").val("");
    INDEX++;
    var str = "";
    str += "<div id='cm-msg-" + INDEX + "' class=\"chat-msg " + type + '">';
    str += '          <span class="msg-avatar">';
    str += "          </span>";
    str += '          <div class="cm-msg-text">';
    str += msg;
    str += "          </div>";
    str += "        </div>";
    $(".chat-logs").append(str); 
    $("#cm-msg-" + INDEX)
        .hide()
        .fadeIn(300);
    if (type == "self") {
        $("#chat-input").val("");
    }

    $(".chat-logs")
        .stop()
        .animate({ scrollTop: $(".chat-logs")[0].scrollHeight }, 1000);
}

$(function () {
    $("#chat-submit").click(function (e) {
        e.preventDefault();
        var msg = $("#chat-input").val();
        if (msg.trim() == "") {
            return false;
        }
        const Usuario = JSON.parse(localStorage.getItem("usuario"));
        if (Usuario != null) {
            if (Usuario.validado == false) {
                ValidarUsuario(msg);
            } else {
                ValidarUsuario(msg);
                //generate_message(msg, 'self');
                //EnvioMensajeFirabase(msg);
                console.log("envio");
            }
        } else {
            const idUsuario = document.getElementById("idUsu").value;
            if (idUsuario != null) {
                ValidarUsuario(msg);
            } else {
                alert("Inicia sesion");
            }
        }
    });

    const ValidarUsuario = (e) => {
        const usuario = JSON.parse(localStorage.getItem("usuario"));
        const csrf = document.getElementById("csrf").content;
        if (usuario != null) {
            let data = new URLSearchParams();
            const email = usuario.user.email;
            data.append("email", email);
            fetch("index", {
                headers: {
                    "X-CSRF-TOKEN": csrf,
                },
                body: data,
                method: "POST",
            })
                .then((res) => res.json())
                .then((data) => {
                    if (data == -1) {
                        let modalUsuario = $("#formUsuarioGoogle");
                        modalUsuario.modal("show");
                    } else {
                        if (usuario != null) {
                            if (usuario.validado == false) {
                                let idUsu;
                                data.forEach((us) => {
                                    idUsu = us.Id_Usuarios;
                                });
                                usuario.idDb = idUsu;
                                usuario.validado = true;
                                localStorage.setItem(
                                    "usuario",
                                    JSON.stringify(usuario)
                                );
                                ObtenerMensajes(idUsu);
                            } else {
                                //generate_message(e,'self');
                                EnvioMensajeFirabaseG(e);
                                ObtenerMensajes(idUsu);
                            }
                        } 
                    }
                })
                .catch((error) => console.log(error));
        } else {
            const idUsuario = document.getElementById("idUsu").value;
            const csrf = document.getElementById("csrf").content;
            let data = new URLSearchParams();
            data.append("id", idUsuario);
            fetch("index", {
                headers: {
                    "X-CSRF-TOKEN": csrf
                },
                body: data,
                method: "POST",
            })
                .then((r) => r.json())
                .then((data) => {
                    if (data == -1) {
                        let modalUsuario = $("#formUsuarioGoogle");
                        modalUsuario.modal("show");
                    }else{
                     const arreglo=[];
                     arreglo.push(data);
                     console.log(arreglo);
                     let idUsu;
                     arreglo.forEach(u=>{
                       idUsu=u.Id_Usuarios;
                     })
                     EnvioFirebase(arreglo,e);
                      ObtenerMensajes(idUsu);
                    }
                })
                .catch((error) => console.log(error));
        }
    };

    /* function generate_button_message(msg, buttons){    
     /* Buttons should be object array 
       [
         {
           name: 'Existing User',
           value: 'existing'
         },
         {
           name: 'New User',
           value: 'new'
         }
       ]
     */
    /* INDEX++;
   var btn_obj = buttons.map(function(button) {
      return  "              <li class=\"button\"><a href=\"javascript:;\" class=\"btn btn-primary chat-btn\" chat-value=\""+button.value+"\">"+button.name+"<\/a><\/li>";
   }).join('');
   var str="";
   str += "<div id='cm-msg-"+INDEX+"' class=\"chat-msg user\">";
   str += "          <span class=\"msg-avatar\">";     
   str += "          <\/span>";
   str += "          <div class=\"cm-msg-text\">";
   str += msg;
   str += "          <\/div>";
   str += "          <div class=\"cm-msg-button\">";
   str += "            <ul>";   
   str += btn_obj;
   str += "            <\/ul>";
   str += "          <\/div>";
   str += "        <\/div>";
   $(".chat-logs").append(str);
   $("#cm-msg-"+INDEX).hide().fadeIn(300);   
   $(".chat-logs").stop().animate({ scrollTop: $(".chat-logs")[0].scrollHeight}, 1000);
   $("#chat-input").attr("disabled", true);
 }*/

    $(document).delegate(".chat-btn", "click", function () {
        var value = $(this).attr("chat-value");
        var name = $(this).html();
        $("#chat-input").attr("disabled", false);
        generate_message(name, "self");
    });

    $("#chat-circle").click(function () {
        $("#chat-circle").toggle("scale");
        $(".chat-box").toggle("scale");
        let usu = JSON.parse(localStorage.getItem("usuario"));
        if (usu != null) {
            if (usu.validado == true) {
                ObtenerMensajes(usu.idDb);
            }
        } else {
            let idUsuario = document.getElementById("idUsu").value;
            ObtenerMensajes(idUsuario);
        }
    });

    $(".chat-box-toggle").click(function () {
        $("#chat-circle").toggle("scale");
        $(".chat-box").toggle("scale");
    });
});

const EnvioMensajeFirabaseG = (e) => {
   while(salir == false){
     generate_message(e, 'self');
     salir=true;
   }
    const usuario = JSON.parse(localStorage.getItem("usuario"));
    const fecha = Date.now();
    const foto = usuario.additionalUserInfo.profile.picture;
    if(usuario.idDb.length <0){
        alert("f");
    }else{
    const mensaje = {
        idusuario: Number(usuario.idDb),
        nombre: usuario.additionalUserInfo.profile.name,
        apellido: usuario.additionalUserInfo.profile.family_name,
        foto: foto,
        fecha: fecha,
        mensaje: e,
        leido: false,
        idAdmin: 0,
    };
    console.log("ahhh");
    db.collection("chats")
        .add(mensaje)
        .then((data) => console.log("se guardo"))
        .catch((error) => console.log(error));
}
};
const EnvioFirebase=(e,msg)=>{
  while(salir == false){
    generate_message(msg, 'self');
    salir=true;
  }
  let nombre;
  let apellido;
  let id;
  e.forEach(u=>{
    id=u.Id_Usuarios,
    nombre=u.name,
    apellido=u.apellido
  })
  const foto="http://e0.365dm.com/16/08/16-9/20/theirry-henry-sky-sports-pundit_3766131.jpg?20161212144602";
  const fecha = Date.now();
  const msgEnvio={
       idusuario: Number(id),
        nombre: nombre,
        apellido: apellido,
        foto: foto,
        fecha: fecha,
        mensaje: msg,
        leido: false,
        idAdmin: 0
  }
 db.collection("chats").add(msgEnvio)
 .then(data=> console.log("envio mppp"))
 .catch(error=> console.log(error))
}

const ObtenerMensajes = (e) => {
    db.collection("chats")
        .where("idusuario", "==", Number(e))
        .orderBy("fecha")
        .onSnapshot((querysnap) => {
            const m = [];
            querysnap.forEach((element) => {
                m.push(element.data());
            });
            ObtenerMensajesAdmin(e, m);
        });
};

const ObtenerMensajesAdmin = (e, usu) => {
    db.collection("chats")
        .where("idusuario", "==", Number(e))
        .where("idAdmin", "==", 11)
        .orderBy("fecha")
        .onSnapshot((querySnapshot) => {
            const mensajes = [];
            querySnapshot.forEach((doc) => {
                mensajes.push(doc.data());
            });
            MostrarMensajesUsuario(mensajes, usu);
        });
};

const MostrarMensajesUsuario = (mensajes, usu) => {
    let chatLogs = document.getElementById("chatlogs");
    chatLogs.innerHTML = "";
    let arrayMensajes = [];
    arrayMensajes.push(mensajes);
    arrayMensajes.push(usu);
    const mensajesarr = [].concat.apply([], arrayMensajes);
    const mensajesOrdenados = mensajesarr.sort((a, b) => a.fecha - b.fecha);
    mensajesOrdenados.reduce((acc, v) => {
        if (v.idAdmin == 0) {
            generate_message(v.mensaje, "self");
        } else {
            generate_message(v.mensaje, "user");
        }
    }, 0);
};
