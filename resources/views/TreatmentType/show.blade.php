@extends('layouts.panel')
@section('title', 'Treatment Type/Create')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">Student</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('treatments_types.index') }}">Volver</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">

                        <div class="form-group mb-2 mb20">
                            <strong>Nombre del tipo de tratamiento:</strong>
                            {{ $treatmenttypeS->name }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Descripción:</strong>
                            {{ $treatmenttypeS->description }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Costo base:</strong>
                            {{ $treatmenttypeS->base_cost }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Duración estimada:</strong>
                            {{ $treatmenttypeS->estimated_duration }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
