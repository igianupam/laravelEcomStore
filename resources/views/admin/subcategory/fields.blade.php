<div class="col-12 col-lg-12">
    <label for="name" class="col-form-label">Sub Category Name<span class="text-danger">*</span></label>
    <input type="text" class="form-control @error('name') is-invalid @enderror " placeholder="sub category"
        name="name" value="{{ $subcategory->name ?? old('name') }}">

    @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

</div>

<div class="col-12 col-lg-12">
    <label for="category_id" class="col-form-label">Category<span class="text-danger">*</span></label>
    <select name="category_id" class="form-select @error('category_id') is-invalid @enderror ">
        <option value="">--Select--</option>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}" {{ isset($subcategory) && $subcategory->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
        @endforeach

    </select>

    @error('category_id')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

</div>

<div class="col-12 col-lg-12">
    <label for="image" class="col-form-label">Image<span class="text-danger">*</span></label>
    <input type="file" class="form-control @error('image') is-invalid @enderror " name="image">

    @error('image')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

</div>

<div class="col-12 col-lg-12">
    <label for="description" class="col-form-label">Description<span class="text-danger">*</span></label>
    <textarea class="form-control @error('description') is-invalid @enderror " name="description" id=""
        cols="30" rows="10">{{ $subcategory->description ?? old('description') }}</textarea>

    @error('description')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

</div>

<div class="col-12 col-lg-12 my-2">
    <a href="{{ route('admin.sub-categories.index') }}" class="btn btn-secondary waves-effect waves-light">Back</a>
    <button type="submit" class="btn btn-primary waves-effect waves-light">Save</button>
</div>
