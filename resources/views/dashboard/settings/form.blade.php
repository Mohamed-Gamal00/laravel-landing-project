@csrf
<div class="form-group">
    <label for="exampleInputEmail1">service title</label>
    <input type="text" name="title" class="form-control" value="{{ old('title', $service->title) }}"
        id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
    @error('title')
        <div>
            <p class="text-danger">{{ $errors->first('title') }}</p>
        </div>
    @enderror
</div>
<div class="form-group">
    <label for="exampleInputEmail1">description</label>
    <div class="form-floating">
        <textarea class="form-control" name="desc" placeholder="Leave a comment here" id="floatingTextarea">{{ old('desc', $service->desc) }}</textarea>
    </div>

    @error('desc')
        <div>
            <p class="text-danger">
                {{ $errors->first('desc') }}
            </p>
        </div>
    @enderror
</div>

<div class="form-group">
    <div class="mb-3">
        <label for="formFile" class="form-label">Default file input example</label>
        <input class="form-control" name="image" type="file" id="formFile">
    </div>

    @if ($service->image)
        <div class="mb-3">
            <div>
                <img src="{{ asset("storage/$service->image") }}" alt="Current Image" width="150">
            </div>
        </div>
    @endif

    @error('image')
        <div>
            <p class="text-danger">
                {{ $errors->first('image') }}
            </p>
        </div>
    @enderror
</div>

<button type="submit" class="btn btn-primary">Submit</button>
