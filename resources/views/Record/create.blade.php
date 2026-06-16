@extends('layouts.panel')
@section('title','Record/Create')

@section('content')
    <section class="content form-container">
        <div class="row bg-slate-600">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Registro de historial clinico</span>
                    </div>
                    <div class="card-body bg-slate-800">
                        <form method="POST" action="{{ route('records.store') }}" role="form">
                            @csrf
                            @include('Record.form', ['record' => $recordC, 'patients' => $patientC])
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
