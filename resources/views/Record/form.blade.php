<div class="row padding-1 p-1">
    <div class="col-md-12">
        <div class="form-group mb-2 mb20">
            <label for="opening_date" class="form-label">Fecha de apertura</label>
            <input type="date" name="opening_date" class="form-control" value="{{ old('opening_date', $record?->opening_date) }}" id="opening_date">
            @error('opening_date')<div class="text-danger text-red-400">{{ $message }}</div>@enderror
        </div>

        <div class="form-group mb-2 mb20">
            <label for="r_patients_id" class="form-label">Paciente</label>
            <select name="r_patients_id" class="form-control" id="r_patients_id">
                <option value="">Seleccione un paciente</option>
                @foreach ($patients as $patient)
                    <option value="{{ $patient->id }}" @selected(old('r_patients_id', $record?->r_patients_id) == $patient->id)>
                        {{ $patient->name }} {{ $patient->surname }} - {{ $patient->identity_card }}
                    </option>
                @endforeach
            </select>
            @error('r_patients_id')<div class="text-danger text-red-400">{{ $message }}</div>@enderror
        </div>

        <div class="form-group mb-2 mb20">
            <label for="general_observations" class="form-label">Observaciones generales</label>
            <textarea name="general_observations" class="form-control" id="general_observations" rows="4">{{ old('general_observations', $record?->general_observations) }}</textarea>
            @error('general_observations')<div class="text-danger text-red-400">{{ $message }}</div>@enderror
        </div>

        <div class="col-md-12 mt20 mt-2">
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </div>
</div>
