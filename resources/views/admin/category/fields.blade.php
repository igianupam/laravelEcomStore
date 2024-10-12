<div class="col-12 col-lg-12">
    <label for="name" class="col-form-label">Category Name<span class="text-danger">*</span></label>
    <input type="text" class="form-control @error('name') is-invalid @enderror " placeholder="category" name="name" value="{{ $category->name ?? old('name') }}">

    @error('name')
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

    @if (isset($category->media) && !is_null($category->media->path) && file_exists(public_path('storage/' . $category->media->path)))
        <img style="height: 150px; width:150px;" src="{{ asset('storage/'.$category->media->path) }}" class="img-thumbnail" alt="">
    @endif

</div>

<div class="col-12 col-lg-12">
    <label for="description" class="col-form-label">Description<span class="text-danger">*</span></label>
    <textarea class="form-control @error('description') is-invalid @enderror " name="description" id=""
        cols="30" rows="10">{{ $category->description ?? old('description') }}</textarea>

    @error('description')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

</div>

<div class="col-12 col-lg-12 my-2">
    <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary waves-effect waves-light">Back</a>
    <button type="submit" class="btn btn-primary waves-effect waves-light">Save</button>
</div>
