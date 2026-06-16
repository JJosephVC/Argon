@extends('layouts.panel')
@section('title', 'TreatmentType/Create')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                Tipo de Tratamientos
                            </span>

                             <div class="float-right">
                                <a href="{{ route('treatments_types.create') }}" class="fas fa-plus text-white btn btn-primary btn-sm float-right p-3"  data-placement="left">
                                  Crear nuevo
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
                                        <th>N°</th>
										<th>Nombre</th>
										<th>Descripción</th>
										<th>Costo base</th>
										<th>Duración estimada</th>
                                        <th>Acciones</th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($treatmenttypeI as $treatment_t)
                                    <tr>
                                        <td></td>
                                        <td>{{ $treatment_t->id }}</td>
                                        <td>{{ $treatment_t->name }}</td>
                                        <td>{{ $treatment_t->description }}</td>
                                        <td>{{ $treatment_t->base_cost }}</td>
                                        <td>{{ $treatment_t->estimated_duration }}</td>
                                        <td class="flex gap-4">
                                            <a href="{{ route('treatments_types.show', $treatment_t) }}"
                                            class="btn btn-sm">
                                                <i class="fas fa-eye" style="color: #002FFA; font-size: 15px;"></i>
                                            </a>
                                            <a href="{{ route('treatments_types.edit', $treatment_t) }}"
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
