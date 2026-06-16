@extends('layouts.panel')
@section('title', 'Record/Show')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <span class="card-title">Historial clinico</span>
            </div>

            <div class="card-body bg-white">
                <dl class="row">
                    <dt class="col-sm-3">Fecha de apertura</dt>
                    <dd class="col-sm-9">{{ $recordS->opening_date }}</dd>

                    <dt class="col-sm-3">Paciente</dt>
                    <dd class="col-sm-9">{{ optional($recordS->patient)->name }} {{ optional($recordS->patient)->surname }}</dd>

                    <dt class="col-sm-3">Cedula</dt>
                    <dd class="col-sm-9">{{ optional($recordS->patient)->identity_card }}</dd>

                    <dt class="col-sm-3">Genero</dt>
                    <dd class="col-sm-9">{{ optional($recordS->patient)->gender }}</dd>

                    <dt class="col-sm-3">Fecha de nacimiento</dt>
                    <dd class="col-sm-9">{{ optional($recordS->patient)->birthdate }}</dd>

                    <dt class="col-sm-3">Telefono</dt>
                    <dd class="col-sm-9">{{ optional($recordS->patient)->phone_number }}</dd>

                    <dt class="col-sm-3">Correo</dt>
                    <dd class="col-sm-9">{{ optional($recordS->patient)->email }}</dd>

                    <dt class="col-sm-3">Direccion</dt>
                    <dd class="col-sm-9">{{ optional($recordS->patient)->address }}</dd>

                    <dt class="col-sm-3">Observaciones generales</dt>
                    <dd class="col-sm-9">{{ $recordS->general_observations }}</dd>
                </dl>

                <a href="{{ route('records.index') }}" class="btn btn-secondary">Volver</a>
                <a href="{{ route('records.edit', $recordS) }}" class="btn btn-primary">Editar observaciones</a>
            </div>
        </div>
    </div>
@endsection
