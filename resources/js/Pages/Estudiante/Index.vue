<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';

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
                Estudiantes
            </h2>
        </template>
        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <table class="table-fixed">
  <thead>
    <tr>
      <th>codigo</th>
      <th>nombre</th>
      <th>pri_ape</th>
    </tr>
  </thead>
  <tbody >
    <tr v-for="(estudiantes, index) in estudiantes" :key="index">
      <td>{{ estudiantes.codigo }}</td>
      <td>{{ estudiantes.nombres }}</td>
      <td>{{ estudiantes.pri_ape }}</td>
    </tr>
  </tbody>
</table>
            </div>
            
        </div>
        
    </AuthenticatedLayout>
</template>
