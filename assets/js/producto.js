Vue.component('v-select', VueSelect.VueSelect)
Vue.component('vue-simple-spinner', VueSelect.VueSelect)
var app = new Vue({
  el: "#app",
  data: {
    email_usuario: '',
    nombre_usuario:'',
    apellido_usuario:'',
    contraseña_usuario:'',
    contraseña:'',

    vista: [],
    roles: [],
    selecte: [],
    selecte2: [],
    subrol:[
      {
        id: 1,
        nombre_subrol: 'Si',

      },
      {
        id: 2,
        nombre_subrol: 'No',

      }
    ],
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



