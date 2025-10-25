<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Estudiantes</title>
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    </head>
    <body>
        <h1 class="text-3xl font-bold underline">
            Comentarios
        </h1>
        
        <br>

        <div class="mb-4">
            <a href="{{ route('comentarios.create') }}" 
                class="inline-flex items-center bg-green-600 hover:bg-green-700 text-white font-semibold py-2 px-4 border border-transparent rounded-lg shadow-md transition duration-300 ease-in-out transform hover:scale-105"
                title="Crear un nuevo estudiante"
                role="button">
                Nuevo
            </a>
        </div>

        <div class="relative flex flex-col w-full h-full overflow-scroll text-gray-700 bg-white shadow-md rounded-xl bg-clip-border">
            <table class="w-full text-left table-auto min-w-max">
                <thead>
                    <tr>
                        <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">Estudiante</th>
                        <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">Descripción</th>
                        <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">Curso</th>
                        <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">Ver</th>
                        <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">Editar</th>
                        <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comentarios as $comentario)
                        <tr class="hover:bg-blue-100">
                            <td class="py-2 px-4 border-b border-gray-300">
                                {{ $comentario->estudiante->nombres }} {{ $comentario->estudiante->pri_ape }} {{ $comentario->estudiante->seg_ape }}
                            </td>
                            <td class="py-2 px-4 border-b border-gray-300">
                                {{ $comentario->descripcion }}
                            </td>
                            <td class="py-2 px-4 border-b border-gray-300">
                                {{ $comentario->curso }}
                            </td>

                            <td class="py-2 px-4 border-b border-gray-300">
                                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                    Ver
                                </button>
                            </td>

                            <td class="py-2 px-4 border-b border-gray-300">
                                <a href="{{ route('comentarios.edit', $comentario->id) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">
                                    Editar
                                </a>
                            </td>
                            {{-- <td class="py-2 px-4 border-b border-gray-300">
                                <a href="{{ route('estudiantes.delete', $estudiante->id) }}" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                    Eliminar
                                </a>
                            </td>--}}

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


    </body>
</html>