@extends('layouts.panel')
@section('title', 'Patient/Create')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                Pacientes Registrados
                            </span>

                             <div class="float-right">
                                <a href="{{ route('patients.create') }}" class="fas fa-plus text-white btn btn-primary btn-sm float-right p-3"  data-placement="left">
                                  Añadir paciente
                                </a>
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
                                        <th>ID</th>
										<th>Nombres</th>
										<th>Apellidos</th>
                                        <th>Número de cédula</th>
										<th>Email</th>
										<th>Género</th>
                                        <th>Fecha de nacimiento</th>
                                        <th>Número de teléfono</th>
                                        <th>Dirección</th>
                                        <th>Acciones</th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($patientI as $patient)
                                    <tr>
                                        <td></td>
                                        <td>{{ $patient->id }}</td>
                                        <td>{{ $patient->name }}</td>
                                        <td>{{ $patient->surname }}</td>
                                        <td>{{ $patient->identity_card }}</td>
                                        <td>{{ $patient->email }}</td>
                                        <td>{{ $patient->gender }}</td>
                                        <td>{{ $patient->birthdate }}</td>
                                        <td>{{ $patient->phone_number }}</td>
                                        <td>{{ $patient->address }}</td>
                                        <td class="flex gap-4">
                                            @if ($patient->record)
                                                <a href="{{ route('records.show', $patient->record) }}"
                                                class="btn btn-sm">
                                                    <i class="fas fa-notes-medical" style="color: #6f42c1; font-size: 15px;"></i>
                                                </a>
                                            @endif
                                            <a href="{{ route('patients.edit', $patient) }}"
                                            class="btn btn-sm">
                                                <i class="fas fa-pen" style="color: #00ccff; font-size: 15px;"></i>
                                            </a>
                                            @csrf
                                            @method('DELETE')
                                            <a class="btn btn-sm">
                                                <i class="fas fa-trash" style="color: #FF0000; font-size: 15px;"></i>
                                            </a>
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
@endsection
