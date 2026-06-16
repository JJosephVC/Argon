@extends('layouts.panel')
@section('title', 'Record/Index')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span id="card_title">Historiales clínicos</span>

                            <div class="float-right">
                                <a href="{{ route('records.create') }}" class="fas fa-plus text-white btn btn-primary btn-sm float-right p-3">
                                    Crear historial clínico
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
                                        <th>ID</th>
                                        <th>Fecha de apertura</th>
                                        <th>Paciente</th>
                                        <th>Cedula</th>
                                        <th>Teléfono</th>
                                        <th>Correo</th>
                                        <th>Observaciones</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($recordI as $record)
                                        <tr>
                                            <td>{{ $record->id }}</td>
                                            <td>{{ $record->opening_date }}</td>
                                            <td>{{ optional($record->patient)->name }} {{ optional($record->patient)->surname }}</td>
                                            <td>{{ optional($record->patient)->identity_card }}</td>
                                            <td>{{ optional($record->patient)->phone_number }}</td>
                                            <td>{{ optional($record->patient)->email }}</td>
                                            <td>{{ $record->general_observations }}</td>
                                            <td class="flex gap-4">
                                                <a href="{{ route('records.show', $record) }}" class="btn btn-sm">
                                                    <i class="fas fa-eye" style="color: #002FFA; font-size: 15px;"></i>
                                                </a>
                                                <a href="{{ route('records.edit', $record) }}" class="btn btn-sm">
                                                    <i class="fas fa-pen" style="color: #1AFF00; font-size: 15px;"></i>
                                                </a>
                                                <form action="{{ route('records.destroy', $record) }}" method="POST" class="d-inline">
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
@endsection
