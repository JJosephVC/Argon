<div class="row padding-1 p-1">
    <div class="col-md-12">

        <div class="form-group mb-2 mb20">
            <label for="date" class="form-label">Fecha</label>
            <input type="date" name="date" class="form-control" value="{{ old('date', $date?->date) }}" id="date">
            @error('date')<div class="text-danger text-red-400">{{ $message }}</div>@enderror
        </div>

        <div class="form-group mb-2 mb20">
            <label for="hour" class="form-label">Hora</label>
            <input type="time" name="hour" class="form-control" value="{{ old('hour', $date?->hour) }}" id="hour">
            @error('hour')<div class="text-danger text-red-400">{{ $message }}</div>@enderror
        </div>

        <div class="form-group mb-2 mb20">
            <label for="d_patients_id" class="form-label">Paciente</label>
            <select name="d_patients_id" class="form-control" id="d_patients_id">
                <option value="">Seleccione un paciente</option>
                @foreach ($patients as $patient)
                    <option value="{{ $patient->id }}" @selected(old('d_patients_id', $date?->d_patients_id) == $patient->id)>
                        {{ $patient->name }} {{ $patient->surname }}
                    </option>
                @endforeach
            </select>
            @error('d_patients_id')<div class="text-danger text-red-400">{{ $message }}</div>@enderror
        </div>

        <div class="form-group mb-2 mb20">
            <label for="d_dentists_id" class="form-label">Odont&oacute;logo asignado</label>
            <select name="d_dentists_id" class="form-control" id="d_dentists_id">
                <option value="">Seleccione un odont&oacute;logo</option>
                @foreach ($dentists as $dentist)
                    <option value="{{ $dentist->id }}" @selected(old('d_dentists_id', $date?->d_dentists_id) == $dentist->id)>
                        {{ $dentist->name }} {{ $dentist->surname }}
                    </option>
                @endforeach
            </select>
            @error('d_dentists_id')<div class="text-danger text-red-400">{{ $message }}</div>@enderror
        </div>

        <div class="form-group mb-2 mb20">
            <label for="d_treatments_types_id" class="form-label">Tipo de tratamiento</label>
            <select name="d_treatments_types_id" class="form-control" id="d_treatments_types_id">
                <option value="">Seleccione un tipo de tratamiento</option>
                @foreach ($treatmenttypes as $treatmenttype)
                    <option value="{{ $treatmenttype->id }}" @selected(old('d_treatments_types_id', $date?->d_treatments_types_id) == $treatmenttype->id)>
                        {{ $treatmenttype->name }}
                    </option>
                @endforeach
            </select>
            @error('d_treatments_types_id')<div class="text-danger text-red-400">{{ $message }}</div>@enderror
        </div>

        <div class="form-group mb-2 mb20">
            <label for="estimated_duration" class="form-label">Duraci&oacute;n estimada</label>
            <input type="number" name="estimated_duration" class="form-control" value="{{ old('estimated_duration', $date?->estimated_duration) }}" id="estimated_duration" placeholder="Duracion en minutos" min="1">
            @error('estimated_duration')<div class="text-danger text-red-400">{{ $message }}</div>@enderror
        </div>

        <div class="form-group mb-2 mb20">
            <label for="appoinment_status" class="form-label">Estado de la cita</label>
            <select name="appoinment_status" class="form-control" id="appoinment_status">
                <option value="">Seleccione un estado</option>
                <option value="Programada" @selected(old('appoinment_status', $date?->appoinment_status) === 'Programada')>Programada</option>
                <option value="Completada" @selected(old('appoinment_status', $date?->appoinment_status) === 'Completada')>Completada</option>
                <option value="Cancelada" @selected(old('appoinment_status', $date?->appoinment_status) === 'Cancelada')>Cancelada</option>
            </select>
            @error('appoinment_status')<div class="text-danger text-red-400">{{ $message }}</div>@enderror
        </div>

        <div class="col-md-12 mt20 mt-2 px-0">
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </div>
</div>
