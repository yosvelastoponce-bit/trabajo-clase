<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, useForm} from '@inertiajs/vue3';

const formulario=useForm({
    codigo:'',
    nombres: '',
    pri_ape: '',
    seg_ape: '',
    dni: '',
})
const createEstudiante=()=>{
    const url=route('estudiantes.store');

    formulario.post(url, {
        onSuccess: (response)=>{

        }
    })
    // console.log();
}
</script>

<template>
    <Head title="Nuevo Estudiante" />
     <AuthenticatedLayout>
        <template #header>
            <h2 class="text-3xl font-bold text-center text-blue-600 py-4">
                nuevo estudiante
            </h2>
        </template>

        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div>
                <form @submit.prevent="createEstudiante">
                    <div class="mb-4">
    <label class="block text-gray-700 text-sm font-bold mb-2" for="codigo">
      Codigo: 
    </label>
    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" v-model="formulario.codigo" >
  </div>
  <div class="mb-4">
    <label class="block text-gray-700 text-sm font-bold mb-2" for="nombres" >
      Nombres: 
    </label>
    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" v-model="formulario.nombres"   >
  </div>
  <div class="mb-4">
    <label class="block text-gray-700 text-sm font-bold mb-2" for="pri_ape">
      Primer apellido: 
    </label>
    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" v-model="formulario.pri_ape" >
  </div>
  <div class="mb-4">
    <label class="block text-gray-700 text-sm font-bold mb-2" for="seg_ape">
      Segundo Apellido: 
    </label>
    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" v-model="formulario.seg_ape" >
  </div>
  <div class="mb-4">
    <label class="block text-gray-700 text-sm font-bold mb-2" for="dni">
      DNI: 
    </label>
    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" v-model="formulario.dni" >
  </div>
  
  <div class="flex items-center justify-between">
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
      Guardar
    </button>
    
  </div>
</form>
            </div>
        </div>
     </AuthenticatedLayout>
</template>