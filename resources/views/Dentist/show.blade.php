@extends('layouts.panel')
@section('title', 'Dentist/Create')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">Odontólogo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('dentists.index') }}">Volver</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">

                        <div class="form-group mb-2 mb20">
                            <strong>Nombres del Odontólogo:</strong>
                            {{ $dentistS->name }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Apellidos del Odontólogo:</strong>
                            {{ $dentistS->surname }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Número de licencia:</strong>
                            {{ $dentistS->license_number }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Correo electrónico:</strong>
                            {{ $dentistS->email }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Teléfono:</strong>
                            {{ $dentistS->phone_number }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Descripción:</strong>
                            {{ $dentistS->description_professional }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Especialidad:</strong>
                            {{ $dentistS->speciality }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
