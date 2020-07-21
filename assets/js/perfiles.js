Vue.component('v-select', VueSelect.VueSelect)

var app = new Vue({
  el: "#app",
  data: {
    nombre_rol: '',
    vista: [],
    roles: [],
    selecte: [],

    serviciosModal: {},
    Modal: {},
  },
  created: function () {
      this.joinRoles();
      this.vistas();
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
    agregar_rol: function() {
      let formData = new FormData();
      formData.append('nombre_rol', this.nombre_rol);
      var arreglo_select = JSON.stringify(this.selecte);
      formData.append('vistas', arreglo_select);

      console.log('>> s >> ', arreglo_select);
      console.log('>> formData >> ', ...formData);

      // You should have a server side REST API
      axios.post('http://localhost:81/Administrativo/index.php/welcome/insertar_rol',
          formData, {
            headers: {
              'Content-Type': 'multipart/form-data'
            }
          }
        ).then(resp =>{

          this.joinRoles();
          console.log('SUCCESS!!');
        })
        .catch(e => {
          console.log(e);
        });
    },
    joinRoles: function () {
        url = "http://localhost:81/Administrativo/index.php/welcome/joinRoles";
        axios.post(url)
                .then(res => {

                    this.roles = res.data;
                })
                .catch(error => {
                    console.log(error);
                });
    },
    vistas: function () {
        url = "http://localhost:81/Administrativo/index.php/welcome/vista";
        axios.post(url)
                .then(res => {
                    this.vista = res.data;
                    console.log(this.vista);
                })
                .catch(error => {
                    console.log(error);
                });
    },

    cargarModal: function (r) {
        this.Modal = r;
        //open modal
        var elem = document.querySelector('.modal');
        var instance = M.Modal.getInstance(elem);
        instance.open();
    },


  }
});
