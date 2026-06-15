@extends('layouts.panel')
@section('title', 'Date/Index')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span id="card_title">Citas</span>

                            <div class="float-right">
                                <button type="button" class="fas fa-plus text-white btn btn-primary btn-sm float-right p-3"
                                    data-toggle="modal" data-target="#createDateModal">
                                    A&ntilde;adir Cita
                                </button>
                            </div>
                        </div>
                    </div>

                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th></th>
                                        <th>N°;</th>
                                        <th>Fecha</th>
                                        <th>Hora</th>
                                        <th>Paciente</th>
                                        <th>Odontólogo asignado</th>
                                        <th>Duración estimada</th>
                                        <th>Tipo de tratamiento</th>
                                        <th>Estado de la cita</th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($dateI as $date)
                                        <tr>
                                            <td></td>
                                            <td>{{ $date->id }}</td>
                                            <td>{{ $date->date }}</td>
                                            <td>{{ $date->hour }}</td>
                                            <td>{{ optional($date->patient)->name }}</td>
                                            <td>{{ optional($date->dentist)->name }}</td>
                                            <td>{{ $date->estimated_duration }}</td>
                                            <td>{{ optional($date->treatment_type)->name }}</td>
                                            <td>{{ $date->appoinment_status }}</td>
                                            <td class="flex gap-4">
                                                <button type="button" class="btn btn-sm" data-toggle="modal" data-target="#showDateModal{{ $date->id }}">
                                                    <i class="fas fa-eye" style="color: #002FFA; font-size: 15px;"></i>
                                                </button>
                                                <button type="button" class="btn btn-sm" data-toggle="modal" data-target="#editDateModal{{ $date->id }}">
                                                    <i class="fas fa-pen" style="color: #1AFF00; font-size: 15px;"></i>
                                                </button>
                                                <form action="{{ route('dates.destroy', $date) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm">
                                                        <i class="fas fa-trash" style="color: #FF0000; font-size: 15px;"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!Creación de Modal o Ventana flotante
    cuya fase pasa de estar oculta a ser mostrada una vez se selecciona un boton
    y pasa la información que está en el form adaptandola al espacio de la modal
    -->
    <div class="modal fade" id="createDateModal" tabindex="-1" role="dialog" aria-labelledby="createDateModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <form method="POST" action="{{ route('dates.store') }}" role="form" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="createDateModalLabel">Registro de Cita</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @include('Date.form', [
                            'date' => $dateC,
                            'dentists' => $dentistC,
                            'patients' => $patientC,
                            'treatmenttypes' => $treatmenttypeC
                        ])
                    </div>
                </form>
            </div>
        </div>
    </div>

    @foreach ($dateI as $date)
        <div class="modal fade" id="showDateModal{{ $date->id }}" tabindex="-1" role="dialog" aria-labelledby="showDateModalLabel{{ $date->id }}" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="showDateModalLabel{{ $date->id }}">Detalle de Cita</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @include('Date.show-content', ['date' => $date])
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="editDateModal{{ $date->id }}" tabindex="-1" role="dialog" aria-labelledby="editDateModalLabel{{ $date->id }}" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <form method="POST" action="{{ route('dates.update', $date->id) }}" role="form" enctype="multipart/form-data">
                        {{ method_field('PATCH') }}
                        @csrf
                        <div class="modal-header">
                            <h5 class="modal-title" id="editDateModalLabel{{ $date->id }}">Editar Cita</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            @include('Date.form', [
                                'date' => $date,
                                'dentists' => $dentistC,
                                'patients' => $patientC,
                                'treatmenttypes' => $treatmenttypeC
                            ])
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
@endsection
