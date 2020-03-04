Vue.component('v-select', VueSelect.VueSelect)
var app = new Vue({
  el: "#app",
  data: {
    nombre_servicio: '',
    valor: '',
    descripcion: '',
    user_file: '',
    zonas: [],
    selecte: [],
    servicio: [],
    serviciosModal: {},
    editarModal: {},
    Modal: {},

  },
  created: function () {

      this.zona();
      this.joinServicios();



  },
  mounted: function () {
      document.addEventListener('DOMContentLoaded', function () {
          var elems = document.querySelector('.modal');
          var instances = M.Modal.init(elems);
      });


      document.addEventListener('DOMContentLoaded', function () {
          var elems = document.querySelector('select');
          var instances = M.FormSelect.init(elems);
      });
  },
  methods: {

    submitFile() {
      let formData = new FormData();
      formData.append('user_file', this.user_file);
      var arreglo_select = JSON.stringify(this.selecte);
      formData.append('zonas', arreglo_select);
      formData.append("nombre_servicio",this.nombre_servicio);
      formData.append("valor",this.valor);
      formData.append("descripcion",this.descripcion);
      //for (var i = 0; i < this.selecte.length; i++) {
        //formData.append('zonas[]', this.selecte[i]);
        //console.log('>> zona >> ',  this.selecte[i]);
      //}

      // You should have a server side REST API
      axios.post('http://localhost/Administrativo/index.php/welcome/insertar_servicio',
          formData, {
            headers: {
              'Content-Type': 'multipart/form-data'
            }
          }
        ).then(resp =>{
          console.log(resp.data);
          console.log('SUCCESS!!');
        })
        .catch(e => {
          console.log(e);
        });
    },
    handleFileUpload() {
      this.user_file = this.$refs.user_file.files[0];
      console.log('>>>> 1st element in files array >>>> ', this.user_file);
    },
    joinServicios: function () {
        url = "http://localhost/Administrativo/index.php/welcome/joinServicios";
        axios.post(url)
                .then(res => {
                    this.servicio = res.data;
                })
                .catch(error => {
                    console.log(error);
                });
    },
    zona: function () {
        url = "http://localhost/Administrativo/index.php/welcome/zona";
        axios.post(url)
                .then(res => {
                    this.zonas = res.data;
                    console.log(this.zonas);
                })
                .catch(error => {
                    console.log(error);
                });
    },
    cargarModal: function (s) {
        console.log(s);
        this.editarModal = s;
        //open modal

        var elem = document.querySelector('.modal');
        var instance = M.Modal.getInstance(elem);
        instance.open();
    },
    eliminar_servicio: function (s) {
        if (confirm("Estas seguro de eliminar el servicio " + s.nombre_servicio + "?")) {
            url = "http://localhost/Administrativo/index.php/welcome/eliminar_servicio";
            param = new FormData();
            param.append("id_servicio", s.id_servicio);
            axios.post(url, param)
                    .then(resp => {
                        o = resp.data;
                        M.toast({html: o.value});
                        this.joinServicios();
                    })
                    .catch(e => {
                        console.log(e);
                    });
        }

    },

    actualizar_servicio:function(){
     url="http://localhost/Administrativo/index.php/welcome/actualizar_servicio";

     let formData = new FormData();
     formData.append('user_file', this.user_file);
     var arreglo_select = JSON.stringify(this.selecte);
     formData.append('zonas', arreglo_select);
     formData.append("nombre_servicio",this.nombre_servicio);
     formData.append("valor",this.valor);
     formData.append("descripcion",this.descripcion);

     axios.post(url,param)
             .then(resp =>{
                 o = resp.data;
                 M.toast({html: o.value});
                 this.joinMo();
                 var elems = document.querySelector('.modal');
                 var instances = M.Modal.init(elems);
                 instance.close();
     })
             .catch(e =>{
                 console.log(e);
             });
    },



  }
});
