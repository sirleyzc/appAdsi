<template>
    <app-layout title="Marca">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Marca
            </h2>
        </template>

        

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-gray-100 overflow-hidden shadow-xl sm:rounded-lg">
                    <!-- <h1 v-for="(objeto, index) in mar" :key="index">{{objeto.nombre}}</h1> -->
                    <!-- button -->
                    <div class="mb-4">
                        <button type="button" class='flex max-w-sm w-auto bg-gradient-to-r from-green-500 to-blue-500 hover:from-green-600 hover:to-blue-600 focus:outline-none text-white text-2xl uppercase font-bold shadow-md rounded-lg mx-auto p-2'>
                            <div class="flex sm:flex-cols-12 gap-4">
                                <div class="col-span-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="36" height="36" viewBox="0 0 24 24" style=" fill:#ffffff;"><path d="M 12 2 C 6.4889971 2 2 6.4889971 2 12 C 2 17.511003 6.4889971 22 12 22 C 17.511003 22 22 17.511003 22 12 C 22 6.4889971 17.511003 2 12 2 z M 12 4 C 16.430123 4 20 7.5698774 20 12 C 20 16.430123 16.430123 20 12 20 C 7.5698774 20 4 16.430123 4 12 C 4 7.5698774 7.5698774 4 12 4 z M 11 7 L 11 11 L 7 11 L 7 13 L 11 13 L 11 17 L 13 17 L 13 13 L 17 13 L 17 11 L 13 11 L 13 7 L 11 7 z"></path></svg>
                                </div>
                                <div class="col-span-2 pt-px">Nuevo</div>
                            </div>    
                        </button>
                    </div>
            
                    <!-- component -->
<div class="overflow-x-auto">
        <div class="min-w-screen bg-gray-100 flex items-center justify-center bg-gray-100 font-sans overflow-hidden">
            <div class="w-full lg:w-3/6">
                <div class="bg-white shadow-md rounded my-6">
                    <table class="min-w-max w-full table-fixed">
                        <thead>
                            <tr class="bg-gray-500 text-white uppercase text-sm leading-normal">
                                <th class="py-3 px-6 text-left">Nombre</th>
                                <th class="py-3 px-6 text-left">Estado</th>
                                <th class="py-3 px-6 text-center">Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 text-sm font-light">
                            <tr v-for="(objeto, index) in mar" :key="index" class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                    <div class="flex items-center">
                                        <span class="font-medium">{{objeto.nombre}}</span>
                                    </div>
                                </td>
                                <td class="py-3 px-6" v-if="objeto.edo==0">
                                    <span class="bg-red-100 text-red-600 py-1 px-3 rounded-t-lg text-xs">Activo</span>
                                </td>
                                <td class="py-3 px-6" v-else>
                                    <span class="bg-green-100 text-green-600 py-1 px-3 rounded-t-lg text-xs">Inactivo</span>
                                </td>
                                <td class="py-3 px-6">
                                    <div class="flex item-center justify-center">
                                        <div class="w-4 mr-2 transform hover:text-blue-500 motion-safe:hover:scale-110" title="ver" @click="verMar">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                            </svg>
                                        </div>
                                        <div class="w-4 mr-2 transform hover:text-green-500 motion-safe:hover:scale-110" title="actualizar" @click="editarMar">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                            </svg>
                                        </div>
                                        <div class="w-4 mr-2 transform hover:text-red-500 motion-safe:hover:scale-110" title="eliminar" @click="eliminarMar">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
                   
                    
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'
    import Welcome from '@/Jetstream/Welcome.vue'

    export default defineComponent({
        components: {
            AppLayout,
        },
        props:["mar"],

        methods: {
            verMar(){
                alert("Boton ver ok");
            },

            editarMar(){
                alert("Boton editar ok");
            },
            
            eliminarMar(){
                alert("Boton eliminar ok")
            }
        }
    })
</script>



