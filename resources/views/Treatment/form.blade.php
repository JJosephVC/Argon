<div class="row padding-1 p-1">
    <div class="col-md-12">

        <div class="form-group mb-2 mb20">
            <label for="date" class="form-label">Fecha</label>
            <input type="date" name="date" class="form-control" value="{{ old('date', $treatment?->date) }}" id="date">
            @error('date')<div class="text-danger text-red-400">{{ $message }}</div>@enderror
        </div>

        <div class="form-group mb-2 mb20">
            <label for="t_records_id" class="form-label">Historial clinico</label>
            <select name="t_records_id" class="form-control" id="t_records_id">
                <option value="">Seleccione un historial clinico</option>
                @foreach ($records as $record)
                    <option value="{{ $record->id }}" @selected(old('t_records_id', $treatment?->t_records_id) == $record->id)>
                        #{{ $record->id }} - {{ optional($record->patient)->name }} {{ optional($record->patient)->surname }}
                    </option>
                @endforeach
            </select>
            @error('t_records_id')<div class="text-danger text-red-400">{{ $message }}</div>@enderror
        </div>

        <div class="form-group mb-2 mb20">
            <label for="t_treatments_types_id" class="form-label">Tipo de tratamiento</label>
            <select name="t_treatments_types_id" class="form-control" id="t_treatments_types_id">
                <option value="">Seleccione un tipo de tratamiento</option>
                @foreach ($treatmenttypes as $treatmenttype)
                    <option value="{{ $treatmenttype->id }}" @selected(old('t_treatments_types_id', $treatment?->t_treatments_types_id) == $treatmenttype->id)>
                        {{ $treatmenttype->name }}
                    </option>
                @endforeach
            </select>
            @error('t_treatments_types_id')<div class="text-danger text-red-400">{{ $message }}</div>@enderror
        </div>

        <div class="form-group mb-2 mb20">
            <label for="status" class="form-label">Estado</label>
            <select name="status" class="form-control" id="status">
                <option value="">Seleccione un estado</option>
                <option value="Pendiente" @selected(old('status', $treatment?->status) === 'Pendiente')>Pendiente</option>
                <option value="En proceso" @selected(old('status', $treatment?->status) === 'En proceso')>En proceso</option>
                <option value="Finalizado" @selected(old('status', $treatment?->status) === 'Finalizado')>Finalizado</option>
            </select>
            @error('status')<div class="text-danger text-red-400">{{ $message }}</div>@enderror
        </div>

        <div class="form-group mb-2 mb20">
            <label for="cost" class="form-label">Costo</label>
            <input type="number" step="0.01" name="cost" class="form-control" value="{{ old('cost', $treatment?->cost) }}" id="cost" placeholder="Costo">
            @error('cost')<div class="text-danger text-red-400">{{ $message }}</div>@enderror
        </div>

        <div class="form-group mb-2 mb20">
            <label for="observations" class="form-label">Observaciones</label>
            <textarea name="observations" class="form-control" id="observations" rows="4">{{ old('observations', $treatment?->observations) }}</textarea>
            @error('observations')<div class="text-danger text-red-400">{{ $message }}</div>@enderror
        </div>

        <div class="col-md-12 mt20 mt-2 px-0">
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>

    </div>
</div>
