<div class="row padding-1 p-1">
    <div class="col-md-12">

        <div class="form-group mb-2 mb20">
            <label for="name" class="form-label">Nombres del odontólogo</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $dentist?->name) }}" id="name" placeholder="Nombres">
            @error('name')<div class="text-danger text-red-400">{{ $message }}</div>@enderror
        </div>

        <div class="form-group mb-2 mb20">
            <label for="surname" class="form-label">Apellidos</label>
            <input type="text" name="surname" class="form-control" value="{{ old('surname', $dentist?->surname) }}" id="surname" placeholder="Apellidos">
            @error('surname')<div class="text-danger text-red-400">{{ $message }}</div>@enderror
        </div>

        <div class="form-group mb-2 mb20">
            <label for="license_number" class="form-label">Número de licencia</label>
            <input type="text" name="license_number" class="form-control" value="{{ old('license_number', $dentist?->license_number) }}" id="license_number" placeholder="Número de licencia">
            @error('license_number')<div class="text-danger text-red-400">{{ $message }}</div>@enderror
        </div>

        <div class="form-group mb-2 mb20">
            <label for="email" class="form-label">Email</label>
            <input type="text" name="email" class="form-control" value="{{ old('email', $dentist?->email) }}" id="email" placeholder="Correo electrónico">
            @error('email')<div class="text-danger text-red-400">{{ $message }}</div>@enderror
        </div>

        <div class="form-group mb-2 mb20">
            <label for="phone_number" class="form-label">Número de teléfono</label>
            <input type="text" name="phone_number" class="form-control" value="{{ old('phone_number', $dentist?->phone_number) }}" id="phone_number" placeholder="Número telefónico">
            @error('phone_number')<div class="text-danger text-red-400">{{ $message }}</div>@enderror
        </div>

        <div class="form-group mb-2 mb20">
            <label for="description_professional" class="form-label">Descripción profesional</label>
            <input type="text" name="description_professional" class="form-control" value="{{ old('description_professional', $dentist?->description_professional) }}" id="description_professional" placeholder="Descripción">
            @error('description_professional')<div class="text-danger text-red-400">{{ $message }}</div>@enderror
        </div>

        <div class="form-group mb-2 mb20">
            <label for="speciality" class="form-label">Especialidad</label>
            <input type="text" name="speciality" class="form-control" value="{{ old('speciality', $dentist?->speciality) }}" id="speciality" placeholder="Especialidad">
            @error('speciality')<div class="text-danger text-red-400">{{ $message }}</div>@enderror
        </div>

        <div class="col-md-12 mt20 mt-2">
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </div>
</div>
