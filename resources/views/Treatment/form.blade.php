<div class="row padding-1 p-1">
    <div class="col-md-12">

        <div class="form-group mb-2 mb20">
            <label for="d_patient_id" class="form-label">Paciente</label>
            <select name="d_patient_id" class="form-control" id="d_patient_id">
                <option value="">Seleccione un paciente</option>
                @foreach ($patients as $patient)
                    <option value="{{ $patient->id }}" @selected(old('d_patient_id', $treatment?->d_patient_id)==$patient->id)>
                        {{ $patient->name }} {{ $patient->surname }}
                    </option>
                @endforeach
            </select>
            @error('d_patient_id')<div class="text-danger text-red-400">{{ $message }}</div> @enderror
        </div>

    </div>
</div>
