@extends('layouts.panel')
@section('title', 'Treatment/Create')

@section('content')
    <section class="content form-container">
        <div class="row bg-slate-600">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Registro de tratamiento</span>
                    </div>
                    <div class="card-body bg-slate-800">
                        <form method="POST" action="{{ route('treatments.store') }}" role="form" enctype="multipart/form-data">
                            @csrf

                            @include('Treatment.form', [
                                'treatment'=>$treatmentC,
                                'record'=>$recordC,
                                'date'=>$dateC,
                                'patients'=>$patientC,
                                'treatmenttypes'=>$treatmenttypeC
                            ])
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
