<div class="col-12 col-lg-12">
    <label for="name" class="col-form-label">Product Name<span class="text-danger">*</span></label>
    <input type="text" class="form-control @error('name') is-invalid @enderror " placeholder="product" name="name"
        value="{{ $product->name ?? old('name') }}">

    @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

</div>

{{-- <div class="col-6 col-lg-6">
    <label for="image" class="col-form-label">Image<span class="text-danger">*</span></label>
    <input type="file" class="form-control @error('image') is-invalid @enderror " name="image">

    @error('image')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

    <div>
        <img style="height: 150px; width:150px;" src="{{ asset('storage/'.$product->media->path) }}" class="img-thumbnail" alt="">
    </div>

</div> --}}

<div class="col-12 col-lg-12">
    <label for="category_id" class="col-form-label">Category<span class="text-danger">*</span></label>
    <select name="category_id" class="form-select @error('category_id') is-invalid @enderror ">
        <option value="">--Select--</option>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}"
                {{ isset($subcategory) && $subcategory->category_id == $category->id ? 'selected' : '' }}>
                {{ $category->name }}</option>
        @endforeach

    </select>

    @error('category_id')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

</div>

<div class="col-12 col-lg-12">
    <label for="sub_category_id" class="col-form-label">Sub Category<span class="text-danger">*</span></label>
    <select name="sub_category_id" class="form-select @error('sub_category_id') is-invalid @enderror ">
        <option value="">--Select--</option>
        @foreach ($subcategories as $subcategory)
            <option value="{{ $subcategory->id }}"
                {{ isset($product) && $product->category_id == $product->id ? 'selected' : '' }}>
                {{ $subcategory->name }}</option>
        @endforeach

    </select>

    @error('category_id')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

</div>

<div class="col-12 col-lg-12">
    <label for="description" class="col-form-label">Description<span class="text-danger">*</span></label>
    <textarea class="form-control @error('description') is-invalid @enderror " name="description" id=""
        cols="30" rows="10">{{ $product->description ?? old('description') }}</textarea>

    @error('description')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

</div>

<div class="col-12 col-lg-12">
    <label for="attributes" class="col-form-label">Attribute<span class="text-danger">*</span></label>
    <select name="attributes" class="form-select multiple @error('attributes') is-invalid @enderror" multiple="multiple" id="arrtibutesId">
        <option value="">--Select--</option>
        @foreach ($attributes as $attribute)
            <option value="{{ $attribute->id }}"
                {{ isset($product) && $product->category_id == $product->id ? 'selected' : '' }}>
                {{ $attribute->type }}</option>
        @endforeach

    </select>

    @error('attributes')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

</div>

<div class="col-12 col-lg-12 my-2">
    @include('admin.products.attributes_fields')
</div>

<div class="col-12 col-lg-12 my-2">
    <a href="{{ route('admin.products.index') }}" class="btn btn-secondary waves-effect waves-light">Back</a>
    <button type="submit" class="btn btn-primary waves-effect waves-light">Save</button>
</div>

@push('styles')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush

@push('scripts')
    <script src = "https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>

        $(document).ready(function() {
            $('.multiple').select2();
        });

    </script>

@endpush
