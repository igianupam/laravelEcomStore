<div class="col-12 col-lg-12">
    <label for="title" class="col-form-label">Title<span class="text-danger">*</span></label>
    <input type="text" class="form-control @error('title') is-invalid @enderror " placeholder="title" name="title" value="{{ $banner->title ?? old('title') }}">

    @error('title')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

</div>

<div class="col-12 col-lg-12">
    <label for="description" class="col-form-label">Description<span class="text-danger">*</span></label>
    <textarea name="description" class="form-control @error('description') is-invalid @enderror " id="" cols="30" rows="10">{{ $banner->description ?? old('description') }}</textarea>

    @error('description')
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

    @if (isset($banner->media) && !is_null($banner->media->path) && file_exists(public_path('storage/' . $banner->media->path)))
        <img style="height: 150px; width:150px;" src="{{ asset('storage/'.$banner->media->path) }}" class="img-thumbnail" alt="">
    @endif

</div>


<div class="col-12 col-lg-12 my-2">
    <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary waves-effect waves-light">Back</a>
    <button type="submit" class="btn btn-primary waves-effect waves-light">Save</button>
</div>
