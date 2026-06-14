@extends('layouts.panel')
@section('title','Treatment Type/Create')

@section('content')
    <section class="content form-container">
        <div class="row bg-slate-600">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title ">Tipo de Tratamiento</span>
                    </div>
                    <div class="card-body bg-slate-800">
                        <form method="POST" action="{{ route('treatments_types.store') }}" role="form" enctype="multipart/form-data">
                            @csrf

                            @include('TreatmentType.form',['treatmenttype' => $treatmenttypeC])
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
