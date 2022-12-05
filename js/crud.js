var url = "./crud.php";

var crudApp = new Vue({
    el: "#crudApp",
    data: {
        exercises: [],
        ejercicio: "",
        cantrepeticiones: "",
        cantseries: "",
        comentario: "",
        total: 0
    },
    methods: {
        btnCrear: async function() {

            const {value: formValues} = await Swal.fire({
                title: 'NUEVO',
                html:
                '<div class="row"><label class="col-sm-3 col-form-label">Ejercicio</label><div class="col-sm-7"><input id="ejercicio" type="text" class="form-control"></div></div><div class="row"><label class="col-sm-3 col-form-label">Repetición</label><div class="col-sm-7"><input id="cantrepeticiones" type="number" class="form-control"></div></div><div class="row"><label class="col-sm-3 col-form-label">Series</label><div class="col-sm-7"><input id="cantseries" type="number" min="0" class="form-control"></div></div><div class="row"><label class="col-sm-3 col-form-label">Comentario</label><div class="col-sm-7"><input id="comentario" type="text" class="form-control"></div></div>',              
                focusConfirm: false,
                showCancelButton: true,
                confirmButtonText: 'Guardar',          
                confirmButtonColor:'#1cc88a',          
                cancelButtonColor:'#3085d6',  
                preConfirm: () => {            
                    return [
                        this.ejercicio = document.getElementById('ejercicio').value,
                        this.cantrepeticiones = document.getElementById('cantrepeticiones').value,
                        this.cantseries = document.getElementById('cantseries').value,  
                        this.comentario = document.getElementById('comentario').value                                      
                    ]
                    }
                })        
                if(this.ejercicio == "" || this.cantrepeticiones == 0 || this.cantseries == 0 || this.comentario == ""){
                        Swal.fire({
                            type: 'info',
                            title: 'Datos incompletos',                                    
                        }) 
                }       
                else{          
                    this.crearExercise();          
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000
                    });
                    Toast.fire({
                        type: 'success',
                        title: '¡Ejercicio Agregado!'
                    })                
                }

        },

        btnBorrar: function(idrutina) {

        Swal.fire({
            title: '¿Está seguro de borrar el registro?',         
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor:'#d33',
            cancelButtonColor:'#3085d6',
            confirmButtonText: 'Borrar'
            }).then((result) => {
                if (result.value) {            
                    this.borrarExercise(idrutina);             
                    
                    Swal.fire(
                        '¡Eliminado!',
                        'El registro ha sido borrado.',
                        'success'
                    )
                }
            })     

        },

        btnEditar: async function(idrutina, ejercicio, cantrepeticiones, cantseries, comentario) {

            await Swal.fire({
            title: 'EDITAR',
            html:
            '<div class="form-group"><div class="row"><label class="col-sm-3 col-form-label">Ejercicio</label><div class="col-sm-7"><input id="ejercicio" value="'+ejercicio+'" type="text" class="form-control"></div></div><div class="row"><label class="col-sm-3 col-form-label">Repetición</label><div class="col-sm-7"><input id="cantrepeticiones" value="'+cantrepeticiones+'" type="number" min="0" class="form-control"></div></div><div class="row"><label class="col-sm-3 col-form-label">Series</label><div class="col-sm-7"><input id="cantseries" value="'+cantseries+'" type="number" min="0" class="form-control"></div></div><div class="row"><label class="col-sm-3 col-form-label">Comentario</label><div class="col-sm-7"><input id="comentario" value="'+comentario+'" type="text" class="form-control"></div></div></div>', 
            focusConfirm: false,
            showCancelButton: true,                         
            }).then((result) => {
                if (result.value) {                                             
                ejercicio = document.getElementById('ejercicio').value,    
                cantrepeticiones = document.getElementById('cantrepeticiones').value,
                cantseries = document.getElementById('cantseries').value,
                comentario = document.getElementById('comentario').value,                        
                
                this.editarExercise(idrutina,ejercicio,cantrepeticiones,cantseries, comentario);
                Swal.fire(
                    '¡Actualizado!',
                    'El registro ha sido actualizado.',
                    'success'
                )                  
                }
            });

        },

        //PROCEDIMIENTO LISTAR
        listarExercises: function() {
            axios.post(url, {opcion:1}).then(response =>{
                this.exercises = response.data;     
            });
        },
        //PROCEDIMIENTO CREAR
        crearExercise: function() {
            axios.post(url, {opcion:2, ejercicio:this.ejercicio, cantrepeticiones:this.cantrepeticiones, cantseries:this.cantseries, comentario:this.comentario}).then(response =>{
                this.listarExercises();
            });
            //restablecer los valores del input:
            this.ejercicio = '';
            this.cantrepeticiones = 0;
            this.cantseries = 0;
            this.comentario = '';
        },
        //PROCEDIMIENTO EDITAR
        editarExercise: function(idrutina, ejercicio, cantrepeticiones, cantseries, comentario) {
            axios.post(url, {opcion:3, idrutina:idrutina, ejercicio:ejercicio, cantrepeticiones:cantrepeticiones, cantseries:cantseries, comentario:comentario}).then(response =>{
                this.listarExercises();
            });
        },
        //PROCEDIMIENTO BORRAR
        borrarExercise: function(idrutina) {
            axios.post(url, {opcion:4, idrutina:idrutina}).then(response =>{
                this.exercises = response.data;  
                this.listarExercises();   
            });
        }

    },
    created: function() {
        this.listarExercises();
    },
    computed: {
        /* totalE() {
            this.total = 0;
            for (let i = 0; i < this.exercises.length; i++) {
                this.total = this.total + i;
            }
            return this.total;
        }  */
    }
})