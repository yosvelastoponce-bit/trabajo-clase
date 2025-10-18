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
            Estudiantes
        </h1>
        
        <br>

        <div class="mb-4">
            <a href="{{ route('estudiantes.create') }}" 
            class="inline-flex items-center bg-green-600 hover:bg-green-700 text-white font-semibold py-2 px-4 border border-transparent rounded-lg shadow-md transition duration-300 ease-in-out transform hover:scale-105"
            title="Crear un nuevo estudiante"
            role="button"
            >
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                Nuevo
            </a>
        </div>

        <div class="relative flex flex-col w-full h-full overflow-scroll text-gray-700 bg-white shadow-md rounded-xl bg-clip-border">
            <table class="w-full text-left table-auto min-w-max">
                <thead>
                    <tr>
                        <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">Codigo</th>
                        <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">Nombres</th>
                        <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">PriApe</th>
                        <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">SegApe</th>
                        <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">DNI</th>
                        <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">Ver</th>
                        <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">Editar</th>
                        <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($estudiantes as $estudiante)
                        <tr class="hover:bg-blue-100">
                            <td class="py-2 px-4 border-b border-gray-300">
                                {{ $estudiante->codigo }}
                            </td>
                            <td class="py-2 px-4 border-b border-gray-300">
                                {{ $estudiante->nombres }}
                            </td>
                            <td class="py-2 px-4 border-b border-gray-300">
                                {{ $estudiante->pri_ape }}
                            </td>
                            <td class="py-2 px-4 border-b border-gray-300">
                                {{ $estudiante->seg_ape }}
                            </td>
                            <td class="py-2 px-4 border-b border-gray-300">
                                {{ $estudiante->dni }}
                            </td>

                            <td class="py-2 px-4 border-b border-gray-300">
                                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                    Ver
                                </button>
                            </td>
                            <td class="py-2 px-4 border-b border-gray-300">
                                <a href="{{ route('estudiantes.edit', $estudiante->id) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">
                                    Editar
                                </a>
                            </td>
                            <td class="py-2 px-4 border-b border-gray-300">
                                <a href="{{ route('estudiantes.delete', $estudiante->id) }}" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                    Eliminar
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>