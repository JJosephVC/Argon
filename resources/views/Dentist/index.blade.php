@extends('layouts.panel')
@section('title', 'Dentist/Create')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                Odontólogos del centro
                            </span>

                             <div class="float-right">
                                <a href="{{ route('dentists.create') }}" class="fas fa-plus text-white btn btn-primary btn-sm float-right p-3"  data-placement="left">
                                  Añadir dentista
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th></th>
                                        <th>ID</th>
										<th>Nombres</th>
										<th>Apellidos</th>
                                        <th>Número de licencia</th>
										<th>Email</th>
										<th>Número de teléfono</th>
                                        <th>Descripción profesional</th>
                                        <th>Especialidad</th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($dentistI as $dentist)
                                    <tr>
                                        <td></td>
                                        <td>{{ $dentist->id }}</td>
                                        <td>{{ $dentist->name }}</td>
                                        <td>{{ $dentist->surname }}</td>
                                        <td>{{ $dentist->license_number }}</td>
                                        <td>{{ $dentist->email }}</td>
                                        <td>{{ $dentist->phone_number }}</td>
                                        <td>{{ $dentist->description_professional }}</td>
                                        <td>{{ $dentist->speciality }}</td>
                                        <td class="flex gap-4">
                                            <a href="{{ route('dentists.show', $dentist) }}"
                                            class="btn btn-sm">
                                                <i class="fas fa-eye" style="color: #002FFA; font-size: 15px;"></i>
                                            </a>
                                            <a href="{{ route('dentists.edit', $dentist) }}"
                                            class="btn btn-sm">
                                                <i class="fas fa-pen" style="color: #1AFF00; font-size: 15px;"></i>
                                            </a>
                                            @csrf
                                            @method('DELETE')
                                            <a class="btn btn-sm">
                                                <i class="fas fa-trash" style="color: #FF0000; font-size: 15px;"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
