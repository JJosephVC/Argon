<div class="row">
    <div class="col-md-6 mb-3">
        <strong>N°:</strong>
        <p>{{ $treatment->id }}</p>
    </div>
    <div class="col-md-6 mb-3">
        <strong>Paciente:</strong>
        <p>{{ optional($treatment->record->patient)->name }} {{ optional($date->record->patient)->surname }}</p>
    </div>
    {{-- <div class="col-md-6 mb-3">
        <strong>Fecha:</strong>
        <p>{{ $date->date }}</p>
    </div>
    <div class="col-md-6 mb-3">
        <strong>Hora:</strong>
        <p>{{ $date->hour }}</p>
    </div>
    <div class="col-md-6 mb-3">
        <strong>Odontólogo asignado:</strong>
        <p>{{ optional($date->dentist)->name }} {{ optional($date->dentist)->surname }}</p>
    </div>
    <div class="col-md-6 mb-3">
        <strong>Tipo de tratamiento:</strong>
        <p>{{ optional($date->treatment_type)->name }}</p>
    </div>
    <div class="col-md-6 mb-3">
        <strong>Duración estimada:</strong>
        <p>{{ $date->estimated_duration }} minutos</p>
    </div>
    <div class="col-md-6 mb-3">
        <strong>Estado de la cita:</strong>
        <p>{{ $date->appoinment_status }}</p>
    </div> --}}
</div>
