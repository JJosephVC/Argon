@extends('layouts.panel')
@section('title', 'Treatment/Edit')

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Editar Tratamiento</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('treatments.update', $treatmentE->id) }}" role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('Treatment.form', [
                                'treatment'=>$treatmentE,
                                'records'=>$recordE,
                                'treatmenttypes'=>$treatmenttypeE
                            ])
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
