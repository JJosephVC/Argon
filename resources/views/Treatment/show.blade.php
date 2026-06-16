@extends('layouts.panel')
@section('title', 'Treatment/Show')

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span class="card-title">Detalle del tratamiento</span>
                        <a class="btn btn-primary btn-sm" href="{{ route('treatments.index') }}">Volver</a>
                    </div>
                    <div class="card-body bg-white">
                        @include('Treatment.show-content', ['date' => $dateI])
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
