<div class="row mb-3">

    @if ($setting->input_type == 'text')
        <div class="col-sm-6">
            <label for="value" class="col-form-label">{{ $setting->display_name }}<span
                    class="text-danger">*</span></label>
            <input class="form-control @error('value') is-invalid @enderror" type="text" placeholder="" id="value"
                name="value" value="{{ $setting->value ?? old('value') }}" required max="255">

            @error('value')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    @endif

    @if ($setting->input_type == 'file')

        <div class="col-sm-6">
            <label for="image" class="col-form-label">{{ $setting->display_name }}<span
                    class="text-danger">*</span></label>
            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image"
                name="image" value="{{ old('image') }}">

            @error('image')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="col-sm-6">
            @if ($setting->value != null)
                <img src="{{ asset('storage/' . $setting->value) }}" alt="" class="img-fluid">
            @else
                <img src="https://placehold.co/150x150/png" alt="" class="img-fluid">
            @endif
        </div>

    @endif

</div>
