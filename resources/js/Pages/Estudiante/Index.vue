<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    estudiantes:{
        Object
    }
})
</script>

<template>
    <Head title="Estudiante" />

    <AuthenticatedLayout>
      <template #header>
          <h2
              class="text-xl font-semibold leading-tight text-gray-800"
          >
        </h2>
      </template>
      
      Estudiantes
      <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
          <div class="py-3">
            
           <Link :href="route('estudiantes.create')" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
      
            Agregar
          </Link>
          <!-- <Link :href="route('estudiantes.reporte.pdf')" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
      
            PDF
          </Link> -->
          <a href="/estudiantes/reporte/pdf" 
          class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
          PDF</a>
          </div>

  <table class="overflow-x-auto">
  <thead class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
    <tr>
      <th class="px-4 py-2 text-left">codigo</th>
      <th class="px-4 py-2 text-left">nombre</th>
      <th class="px-4 py-2 text-left">pri_ape</th>
      <th class="px-4 py-2 text-left">Editar</th>
      <th class="px-4 py-2 text-left">Eliminar</th>
    </tr>
  </thead>
  <!-- {{ estudiantes }} -->
  <tbody  >
    <tr v-for="(estudiantes, index) in estudiantes" :key="index">
      <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ estudiantes.codigo }}</td>
      <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ estudiantes.nombres }}</td>
      <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ estudiantes.pri_ape }}</td>
      <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm"> 
        
        <Link :href="route('estudiantes.edit', estudiantes)" 
        class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">
            Editar
        </Link>
      </td>
    </tr>
  </tbody>
  </table>
  </div>
            
        </div>
        
    </AuthenticatedLayout>
</template>
