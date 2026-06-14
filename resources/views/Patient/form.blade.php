<div class="row padding-1 p-1">
    <div class="col-md-12">

        <div class="form-group mb-2 mb20">
            <label for="name" class="form-label">Nombres del paciente</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $patient?->name) }}" id="name" placeholder="Nombres">
            @error('name')<div class="text-danger text-red-400">{{ $message }}</div>@enderror
        </div>

        <div class="form-group mb-2 mb20">
            <label for="surname" class="form-label">Apellidos</label>
            <input type="text" name="surname" class="form-control" value="{{ old('surname', $patient?->surname) }}" id="surname" placeholder="Apellidos">
            @error('surname')<div class="text-danger text-red-400">{{ $message }}</div>@enderror
        </div>

        <div class="form-group mb-2 mb20">
            <label for="identity_card" class="form-label">Número de cédula</label>
            <input type="text" name="identity_card" class="form-control" value="{{ old('identity_card', $patient?->identity_card) }}" id="identity_card" placeholder="Número de cédula">
            @error('identity_card')<div class="text-danger text-red-400">{{ $message }}</div>@enderror
        </div>

        <div class="form-group mb-2 mb20">
            <label for="email" class="form-label">Email</label>
            <input type="text" name="email" class="form-control" value="{{ old('email', $patient?->email) }}" id="email" placeholder="Correo electrónico">
            @error('email')<div class="text-danger text-red-400">{{ $message }}</div>@enderror
        </div>

        <div class="form-group mb-2 mb20">
            <label for="gender" class="form-label">Género</label>
            <select name="gender" class="form-control" id="gender">
                <option value="">Seleccione un género</option>
                <option value="F" @selected(old('gender', $patient?->gender) === 'F')>Femenino</option>
                <option value="M" @selected(old('gender', $patient?->gender) === 'M')>Masculino</option>
            </select>
            @error('gender')<div class="text-danger text-red-400">{{ $message }}</div>@enderror
        </div>

        <div class="form-group mb-2 mb20">
            <label for="birthdate" class="form-label">Fecha de nacimiento</label>
            <input type="date" name="birthdate" class="form-control" value="{{ old('birthdate', $patient?->birthdate) }}" id="birthdate">
            @error('birthdate')<div class="text-danger text-red-400">{{ $message }}</div>@enderror
        </div>

        <div class="form-group mb-2 mb20">
            <label for="address" class="form-label">Dirección</label>
            <input type="text" name="address" class="form-control" value="{{ old('address', $patient?->address) }}" id="address" placeholder="Dirección">
            @error('address')<div class="text-danger text-red-400">{{ $message }}</div>@enderror
        </div>

        <div class="col-md-12 mt20 mt-2">
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </div>
</div>
