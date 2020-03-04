new Vue({
    el: 'main',
    data: {
        email_usuario: '',
        contraseña_usuario: ''


    },
    created: function () {


    },
    mounted: function () {



    },
    methods: {

        iniciarSesion: function () {

            url = "http://localhost/Administrativo/welcome/inicioSesion";
            param = new FormData();
            param.append("email_usuario", this.email_usuario);
            param.append("contraseña_usuario", this.contraseña_usuario);


            axios.post(url, param)
                    .then(res => {

                        if (res.data.ruta !== "") {
                          console.log(res.data.ruta);
                            window.location.href = res.data.ruta;

                        } else {
                            M.toast({html: res.data.value});
                        }
                    })
                    .catch(e => {
                        console.log(e);
                    });

        }









    }



});
