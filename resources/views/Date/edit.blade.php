@extends('layouts.panel')
@section('title', 'Date/Edit')

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Editar Cita</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('dates.update', $dateE->id) }}" role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('Date.form', [
                                'date' => $dateE,
                                'dentists' => $dentistE,
                                'patients' => $patientE,
                                'treatmenttypes' => $treatmenttypeE
                            ])
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
