@extends('layouts.panel')
@section('title','Dentist/Create')

@section('content')
    <section class="content form-container">
        <div class="row bg-slate-600">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title ">Odontólogos</span>
                    </div>
                    <div class="card-body bg-slate-800">
                        <form method="POST" action="{{ route('dentists.store') }}" role="form" enctype="multipart/form-data">
                            @csrf

                            @include('Dentist.form',['dentist' => $dentistC])
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
