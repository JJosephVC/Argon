@extends('layouts.panel')
@section('title', 'Treatment Types/Create')

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Tipo de Tratamiento</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('treatments_types.update', $treatmenttypeE->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('TreatmentType.form', ['treatmenttype' => $treatmenttypeE])
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
