<div class="row padding-1 p-1">
    <div class="col-md-12">

        <div class="form-group mb-2 mb20">
            <label for="name" class="form-label">Nombre del tratamiento</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $treatmenttype?->name) }}" id="name" placeholder="Nombre">
            @error('name')<div class="text-danger text-red-400">{{ $message }}</div>@enderror
        </div>

        <div class="form-group mb-2 mb20">
            <label for="description" class="form-label">Descripción</label>
            <input type="text" name="description" class="form-control" value="{{ old('description', $treatmenttype?->description) }}" id="description" placeholder="Descripción">
            @error('description')<div class="text-danger text-red-400">{{ $message }}</div>@enderror
        </div>

        <div class="form-group mb-2 mb20">
            <label for="base_cost" class="form-label">Costo base</label>
            <input type="text" name="base_cost" class="form-control" value="{{ old('base_cost', $treatmenttype?->base_cost) }}" id="base_cost" placeholder="Costo base">
            @error('base_cost')<div class="text-danger text-red-400">{{ $message }}</div>@enderror
        </div>

        <div class="form-group mb-2 mb20">
            <label for="estimated_duration" class="form-label">Duración estimada</label>
            <input type="text" name="estimated_duration" class="form-control" value="{{ old('estimated_duration', $treatmenttype?->estimated_duration) }}" id="estimated_duration" placeholder="Tiempo estimado del tratamiento">
            @error('estimated_duration')<div class="text-danger text-red-400">{{ $message }}</div>@enderror
        </div>

        <div class="col-md-12 mt20 mt-2">
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </div>
</div>
