<x-layouts.app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
            <h1>Vista para alumnos</h1>
            <ul>
                <li> <a href="{{ route('alumno.create') }} "> Crear un nuevo alumno </a>
                </li>
            </ul>
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y-2 divide-gray-200">
                    <thead class="ltr:text-left rtl:text-right">
                        <tr class="*:font-medium *:text-gray-900">
                            <th class="px-3 py-2 whitespace-nowrap">ID</th>
                            <th class="px-3 py-2 whitespace-nowrap">Nombre</th>
                            <th class="px-3 py-2 whitespace-nowrap">Codigo</th>
                            <th class="px-3 py-2 whitespace-nowrap">Correo institucional</th>
                            <th class="px-3 py-2 whitespace-nowrap">Fecha de nacimiento</th>
                            <th class="px-3 py-2 whitespace-nowrap">Sexo</th>
                            <th class="px-3 py-2 whitespace-nowrap">Carrera</th>
                            <th class="px-3 py-2 whitespace-nowrap">Editar</th>
                            <th class="px-3 py-2 whitespace-nowrap">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($alumnos as $alumno)
                        <tr>
                            <td> {{ $alumno->id }} </td>
                            <td> <a href="{{ route('alumno.show', $alumno->id) }}"> {{ $alumno->nombre }} </a></td>
                            <td> {{ $alumno->codigo }} </td>
                            <td> {{ $alumno->correo }} </td>
                            <td> {{ $alumno->fecha_nacimiento }} </td>
                            <td> {{ $alumno->sexo }} </td>
                            <td> {{ $alumno->carrera }} </td>
                            <td> <a class="btn btn-warning" href="{{ route('alumno.edit', $alumno->id) }}">Editar</a></td>
                            <td>
                                <form action="{{ route('alumno.destroy', $alumno->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger"> Eliminar registro </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-layouts.app>