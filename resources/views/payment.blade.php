@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">

        <!-- Sidebar -->
        <div class="col-md-2 bg-light vh-100 p-3 border-end">
            <h5 class="fw-bold">FacturaPro</h5>
            <ul class="nav flex-column mt-4">
                <li class="nav-item"><a class="nav-link" href="#">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Comprobantes</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Clientes</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Productos</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Reportes</a></li>
                <li class="nav-item mt-3">
                    <strong>Configuración</strong>
                    <ul class="nav flex-column ms-3">
                        <li><a class="nav-link active text-primary" href="#">Métodos de Pago</a></li>
                        <li><a class="nav-link" href="#">Impuestos</a></li>
                        <li><a class="nav-link" href="#">Integración SUNAT</a></li>
                    </ul>
                </li>
            </ul>
        </div>

        <!-- Contenido principal -->
        <div class="col-md-10 p-4">

            <!-- Header -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h3 class="fw-bold">Métodos de Pago</h3>
                    <small class="text-muted">
                        Configura los métodos de pago según SUNAT
                    </small>
                </div>
                <button class="btn btn-primary">
                    + Nuevo método
                </button>
            </div>

            <!-- Alerta SUNAT -->
            <div class="alert alert-info d-flex justify-content-between align-items-center">
                <div>
                    <strong>Importante:</strong> Los métodos deben cumplir con la tabla 53 de SUNAT.
                </div>
                <img src="https://upload.wikimedia.org/wikipedia/commons/3/3f/Sunat_logo.png" width="80">
            </div>

            <!-- Tabla -->
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="mb-3">Métodos configurados</h5>

                    <table class="table table-hover align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>Código</th>
                                <th>Método</th>
                                <th>Descripción</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>01</td>
                                <td>Efectivo</td>
                                <td>Pago en efectivo</td>
                                <td><span class="badge bg-success">Activo</span></td>
                                <td>
                                    <button class="btn btn-sm btn-outline-primary">Editar</button>
                                    <button class="btn btn-sm btn-outline-danger">Eliminar</button>
                                </td>
                            </tr>

                            <tr>
                                <td>02</td>
                                <td>Depósito</td>
                                <td>Depósito en cuenta</td>
                                <td><span class="badge bg-success">Activo</span></td>
                                <td>
                                    <button class="btn btn-sm btn-outline-primary">Editar</button>
                                    <button class="btn btn-sm btn-outline-danger">Eliminar</button>
                                </td>
                            </tr>

                            <tr>
                                <td>03</td>
                                <td>Transferencia</td>
                                <td>Transferencia bancaria</td>
                                <td><span class="badge bg-success">Activo</span></td>
                                <td>
                                    <button class="btn btn-sm btn-outline-primary">Editar</button>
                                    <button class="btn btn-sm btn-outline-danger">Eliminar</button>
                                </td>
                            </tr>

                            <tr>
                                <td>04</td>
                                <td>Tarjeta Crédito</td>
                                <td>Pago con tarjeta</td>
                                <td><span class="badge bg-success">Activo</span></td>
                                <td>
                                    <button class="btn btn-sm btn-outline-primary">Editar</button>
                                    <button class="btn btn-sm btn-outline-danger">Eliminar</button>
                                </td>
                            </tr>

                            <tr>
                                <td>06</td>
                                <td>Yape</td>
                                <td>Pago móvil</td>
                                <td><span class="badge bg-success">Activo</span></td>
                                <td>
                                    <button class="btn btn-sm btn-outline-primary">Editar</button>
                                    <button class="btn btn-sm btn-outline-danger">Eliminar</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Vista previa -->
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h6>Vista previa</h6>
                            <select class="form-select">
                                <option>01 - Efectivo</option>
                                <option>02 - Depósito</option>
                                <option>03 - Transferencia</option>
                                <option>04 - Tarjeta</option>
                                <option>06 - Yape</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h6>Información SUNAT</h6>
                            <p class="text-muted">
                                Tabla 53 - Catálogo de métodos de pago oficiales.
                            </p>
                            <a href="#" class="btn btn-outline-primary btn-sm">
                                Ver más
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection