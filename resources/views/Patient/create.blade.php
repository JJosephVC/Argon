@extends('layouts.panel')
@section('title','Patient/Create')

@section('content')
    <section class="content form-container">
        <div class="row bg-slate-600">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title ">Registro de Paciente</span>
                    </div>
                    <div class="card-body bg-slate-800">
                        <form method="POST" action="{{ route('patients.store') }}" role="form" enctype="multipart/form-data">
                            @csrf

                            @include('Patient.form',['patient' => $patientC])
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
