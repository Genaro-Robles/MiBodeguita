<x-app-layout>

<div class="flex min-h-screen bg-gray-100">

    <!-- Sidebar -->
    <aside class="w-60 bg-white shadow-md hidden md:flex flex-col">
        <div class="px-5 py-4 border-b">
            <h2 class="text-lg font-bold text-blue-600">Mi Bodeguita</h2>
            <p class="text-xs text-gray-400">Sistema de Facturación</p>
        </div>

        <nav class="p-3 space-y-1 text-sm flex-1">
            <a href="#" class="flex items-center gap-2 px-3 py-2 rounded-md hover:bg-gray-100">📊 Dashboard</a>
            <a href="#" class="flex items-center gap-2 px-3 py-2 rounded-md hover:bg-gray-100">🧾 Comprobantes</a>
            <a href="#" class="flex items-center gap-2 px-3 py-2 rounded-md hover:bg-gray-100">👥 Clientes</a>
            <a href="#" class="flex items-center gap-2 px-3 py-2 rounded-md hover:bg-gray-100">📦 Productos</a>

            <div class="mt-3 text-[11px] text-gray-400 uppercase">Configuración</div>

            <a href="#" class="flex items-center gap-2 px-3 py-2 rounded-md bg-blue-50 text-blue-600 font-semibold">
                💳 Métodos de Pago
            </a>
            <a href="#" class="px-3 py-2 rounded-md hover:bg-gray-100">Impuestos</a>
            <a href="#" class="px-3 py-2 rounded-md hover:bg-gray-100">SUNAT</a>
        </nav>
    </aside>

    <!-- Main -->
    <main class="flex-1 flex justify-center p-6">

        <!-- CONTENIDO CENTRADO -->
        <div class="w-full max-w-6xl space-y-6">

            <!-- Header -->
            <div class="flex justify-between items-center">
                <div>
                    <h1 class="text-2xl font-bold text-gray-800">Métodos de Pago</h1>
                    <p class="text-sm text-gray-500">Configuración según SUNAT</p>
                </div>

                <button class="bg-blue-600 text-white px-4 py-2 text-sm rounded-lg hover:bg-blue-700 shadow">
                    + Nuevo método
                </button>
            </div>

            <!-- BANNERS -->
            <div class="grid md:grid-cols-3 gap-4">

                <!-- Info -->
                <div class="bg-blue-50 border border-blue-200 p-4 rounded-lg">
                    <p class="text-xs text-blue-600 font-semibold">Normativa</p>
                    <p class="text-sm text-blue-800">
                        Cumple con la tabla 53 de SUNAT.
                    </p>
                </div>

                <!-- Warning -->
                <div class="bg-yellow-50 border border-yellow-200 p-4 rounded-lg">
                    <p class="text-xs text-yellow-600 font-semibold">Importante</p>
                    <p class="text-sm text-yellow-800">
                        Revisa los métodos activos periódicamente.
                    </p>
                </div>

                <!-- Success -->
                <div class="bg-green-50 border border-green-200 p-4 rounded-lg">
                    <p class="text-xs text-green-600 font-semibold">Estado</p>
                    <p class="text-sm text-green-800">
                        Todos los métodos están activos.
                    </p>
                </div>

            </div>

            <!-- MÉTRICAS -->
            <div class="grid md:grid-cols-3 gap-4">

                <div class="bg-white p-4 rounded-lg shadow-sm">
                    <p class="text-xs text-gray-400">Métodos activos</p>
                    <p class="text-xl font-bold text-gray-800">5</p>
                </div>

                <div class="bg-white p-4 rounded-lg shadow-sm">
                    <p class="text-xs text-gray-400">Más usado</p>
                    <p class="text-sm font-semibold text-blue-600">Efectivo</p>
                </div>

                <div class="bg-white p-4 rounded-lg shadow-sm">
                    <p class="text-xs text-gray-400">Última actualización</p>
                    <p class="text-sm text-gray-600">Hoy</p>
                </div>

            </div>

            <!-- TABLA -->
            <div class="bg-white rounded-lg shadow-sm">

                <div class="flex justify-between items-center px-4 py-3 border-b">
                    <h2 class="text-sm font-semibold text-gray-700">Métodos configurados</h2>

                    <div class="flex gap-2">
                        <input type="text" placeholder="Buscar..."
                            class="text-xs border rounded-md px-2 py-1 focus:ring-1 focus:ring-blue-500">

                        <select class="text-xs border rounded-md px-2 py-1">
                            <option>Todos</option>
                            <option>Activos</option>
                        </select>
                    </div>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="text-gray-500 border-b text-xs">
                                <th class="py-2 px-4 text-left">Código</th>
                                <th class="text-left">Método</th>
                                <th class="text-left">Descripción</th>
                                <th class="text-center">Estado</th>
                                <th class="text-right px-4">Acciones</th>
                            </tr>
                        </thead>

                        <tbody class="divide-y">

                            @foreach([
                                ['01','Efectivo','Pago en efectivo'],
                                ['02','Depósito','Depósito en cuenta'],
                                ['03','Transferencia','Transferencia bancaria'],
                                ['04','Tarjeta','Pago con tarjeta'],
                                ['06','Yape','Pago móvil']
                            ] as $metodo)

                            <tr class="hover:bg-gray-50">
                                <td class="py-2 px-4">{{ $metodo[0] }}</td>
                                <td class="font-medium">{{ $metodo[1] }}</td>
                                <td class="text-gray-500 text-xs">{{ $metodo[2] }}</td>

                                <td class="text-center">
                                    <span class="bg-green-100 text-green-700 px-2 py-0.5 rounded text-xs">
                                        Activo
                                    </span>
                                </td>

                                <td class="text-right px-4 space-x-2">
                                    <button class="text-blue-600 text-xs hover:underline">Editar</button>
                                    <button class="text-red-600 text-xs hover:underline">Eliminar</button>
                                </td>
                            </tr>

                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>

            <!-- EXTRA -->
            <div class="flex justify-between items-center text-xs text-gray-500">
                <p>Mostrando 5 métodos</p>
                <button class="text-blue-600 hover:underline">Ver historial</button>
            </div>

        </div>
    </main>
</div>

</x-app-layout>