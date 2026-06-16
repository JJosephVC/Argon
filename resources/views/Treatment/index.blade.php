@extends('layouts.panel')
@section('title','Treatment/create')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span id="card_title">Tratamientos</span>

                            <div class="float-right">
                                <button type="button" class="fas fa-plus text-white btn btn-primary btn-sm float-right p-3"
                                    data-toggle="modal" data-target="#createDateModal">
                                    Añadir Tratamiento
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
                                        <th>N°</th>
                                        <th>Paciente</th>
                                        <th>Tratamiento</th>
                                        <th>Fecha</th>
                                        <th>Estado</th>
                                        <th>Costo</th>
                                        <th>Observaciones</th>
                                        <th>Acciones</th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($treatmentI as $treatment)
                                        <tr>
                                            <td></td>
                                            <td>{{ $treatment->id }}</td>
                                            <td>{{ optional($treatment->record->patient)->name }}</td>
                                            <td>{{ optional($treatment->record->treatment_type)->name }}</td>
                                            <td>{{ $treatment->date }}</td>
                                            <td>{{ $treatment->status }}</td>
                                            <td>{{ $treatment->cost }}</td>
                                            <td>{{ $treatment->observations }}</td>
                                            <td class="flex gap-4">
                                                <button type="button" class="btn btn-sm" data-toggle="modal" data-target="#showDateModal{{ $treatment->id }}">
                                                    <i class="fas fa-eye" style="color: #002FFA; font-size: 15px;"></i>
                                                </button>
                                                <button type="button" class="btn btn-sm" data-toggle="modal" data-target="#editDateModal{{ $treatment->id }}">
                                                    <i class="fas fa-pen" style="color: #1AFF00; font-size: 15px;"></i>
                                                </button>
                                                <form action="{{ route('treatments.destroy', $treatment) }}" method="POST" class="d-inline">
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

    <div class="modal fade" id="createDateModal" tabindex="-1" role="dialog" aria-labelledby="createDateModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <form method="POST" action="{{ route('treatments.store') }}" role="form" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="createDateModalLabel">Registro de Cita</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                            @include('Treatment.form', [
                                'treatment'=> $treatmentC,
                                'record'=> $recordC,
                                'date'=> $dateC,
                                'patients'=> $patientC,
                                'treatmenttypes'=> $treatmenttypeC
                            ])
                    </div>
                </form>
            </div>
        </div>
    </div>

    @foreach ($treatmentI as $treatment)
        <div class="modal fade" id="showDateModal{{ $treatment->id }}" tabindex="-1" role="dialog" aria-labelledby="showDateModalLabel{{ $treatment->id }}" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="showDateModalLabel{{ $treatment->id }}">Detalle de tratamiento</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @include('Treatment.show-content', ['date' => $date])
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
