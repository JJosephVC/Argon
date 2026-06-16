<div class="row">
    <div class="col-md-6 mb-3">
        <strong>N°:</strong>
        <p>{{ $treatment->id }}</p>
    </div>
    <div class="col-md-6 mb-3">
        <strong>Paciente:</strong>
        <p>{{ optional($treatment->record?->patient)->name }} {{ optional($treatment->record?->patient)->surname }}</p>
    </div>
    <div class="col-md-6 mb-3">
        <strong>Historial clinico:</strong>
        <p>#{{ optional($treatment->record)->id }}</p>
    </div>
    <div class="col-md-6 mb-3">
        <strong>Tipo de tratamiento:</strong>
        <p>{{ optional($treatment->treatment_type)->name }}</p>
    </div>
    <div class="col-md-6 mb-3">
        <strong>Fecha:</strong>
        <p>{{ $treatment->date }}</p>
    </div>
    <div class="col-md-6 mb-3">
        <strong>Estado:</strong>
        <p>{{ $treatment->status }}</p>
    </div>
    <div class="col-md-6 mb-3">
        <strong>Costo:</strong>
        <p>{{ $treatment->cost }}</p>
    </div>
    <div class="col-md-12 mb-3">
        <strong>Observaciones:</strong>
        <p>{{ $treatment->observations }}</p>
    </div>
</div>
