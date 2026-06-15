@extends('layouts.panel')
@section('title','Date/Create')

@section('content')
    <section class="content form-container">
        <div class="row bg-slate-600">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Registro de Cita</span>
                    </div>
                    <div class="card-body bg-slate-800">
                        <form method="POST" action="{{ route('dates.store') }}" role="form" enctype="multipart/form-data">
                            @csrf

                            @include('Date.form', [
                                'date' => $dateC,
                                'dentists' => $dentistC,
                                'patients' => $patientC,
                                'treatmenttypes' => $treatmenttypeC
                            ])
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
