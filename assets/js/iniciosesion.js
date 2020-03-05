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

        iniciar_sesion: function () {
            url = "http://localhost/Tecnobella/index.php/welcome/iniciar_sesion";
            param = new FormData();
            param.append("email_usuario", this.email_usuario);
            param.append("contraseña_usuario", this.contraseña_usuario);
            axios.post(url, param)
                    .then(res => {

                        if (res.data.ruta !== "") {

                            window.location.href = res.data.ruta;
                        } else {
                            M.toast({html: res.data.value});
                        }
                    })
                    .catch(e => {
                        console.log(e);
                    });
        },









    }



});
