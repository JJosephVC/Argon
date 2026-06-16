@extends('layouts.panel')
@section('title', 'Record/Edit')

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Editar historial clinico</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('records.update', $recordE->id) }}" role="form">
                            @method('PATCH')
                            @csrf
                            @include('Record.form', ['record' => $recordE, 'patients' => $patientE])
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
