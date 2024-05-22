@csrf
<div class="form-group">
    <label for="exampleInputEmail1">Project Name</label>
    <input type="text" name="name" class="form-control" value="{{ old('name', $project->name) }}"
        id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
    @error('name')
        <div>
            <p class="text-danger">{{ $errors->first('name') }}</p>
        </div>
    @enderror
</div>
<div class="form-group">
    <label for="exampleInputEmail1">description</label>
    <div class="form-floating">
        <textarea class="form-control" name="description" placeholder="Leave a comment here" id="floatingTextarea">{{ old('description', $project->description) }}</textarea>
    </div>

    @error('description')
        <div>
            <p class="text-danger">
                {{ $errors->first('description') }}
            </p>
        </div>
    @enderror
</div>
<div class="form-group">
    <label for="exampleInputEmail1">link</label>
    <input type="text" name="link" class="form-control" value="{{ old('link', $project->link) }}"
        id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter link">

    @error('link')
        <div>
            <p class="text-danger">
                {{ $errors->first('link') }}
            </p>
        </div>
    @enderror
</div>
<div class="form-group">
    <label for="exampleInputEmail1">CLIENT</label>
    <input type="text" name="client" class="form-control" value="{{ old('client', $project->client) }}"
        id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter client">

    @error('client')
        <div>
            <p class="text-danger">
                {{ $errors->first('client') }}
            </p>
        </div>
    @enderror
</div>
<div class="form-group">
    <label for="exampleInputEmail1">year</label>
    <input type="text" name="work_year" class="form-control" value="{{ old('year', $project->year) }}"
        id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter client">

    @error('work_year')
        <div>
            <p class="text-danger">
                {{ $errors->first('work_year') }}
            </p>
        </div>
    @enderror
</div>

<div class="form-group">
    <label for="exampleColorInput" class="form-label">Started</label>
    <input type="date" name="started" class="form-control form-control-color" id="exampleColorInput"
        value="{{ old('started', $project->started) }}" title="Choose your started">

    @error('year')
        <div>
            <p class="text-danger">
                {{ $errors->first('year') }}
            </p>
        </div>
    @enderror
</div>
<div class="form-group">
    <label for="exampleColorInput" class="form-label">FINISHED</label>
    <input type="date" name="finished" class="form-control form-control-color" id="exampleColorInput"
        value="{{ old('finished', $project->finished) }}" title="Choose your finished">

    @error('year')
        <div>
            <p class="text-danger">
                {{ $errors->first('year') }}
            </p>
        </div>
    @enderror
</div>
<div class="form-group">
    <div class="mb-3">
        <label for="formFile" class="form-label">Default file input example</label>
        <input class="form-control" name="image" type="file" id="formFile">
    </div>

    @error('image')
        <div>
            <p class="text-danger">
                {{ $errors->first('image') }}
            </p>
        </div>
    @enderror
</div>

<button type="submit" class="btn btn-primary">Submit</button>
