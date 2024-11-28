@extends('layout.master')
@section('content')

<div class="main-content mt-5">

    <div class="card-header">
        Create Post
        <a class="btn btn-success" href="">Back</a>
        </div>

        <div class="card-body">

<form action="">

    <div class="form-group">
        <label for="" class="form-label">Image</label>
        <input type="file" class="form-control">
    </div>

    <div class="form-group">
        <label for="" class="form-label">Title</label>
        <input type="text" class="form-control">
    </div>

    <div class="form-group">
        <label for="" class="form-label">Title</label>
<select name="" id="" class="form-control">
<option value="">Test1</option>
<option value="">Test2</option>
<option value="">Test3</option>
</select>
</div>

    <div class="form-group">
        <label for="" class="form-label">Description</label>
<Textarea name="" id="" cols="30" rows="10" class="form-control"></Textarea>
    </div>

    <div class="form-group mt-3">
        <button class="btn btn-primary">Submit</button>

    </div>

</form>
        </div>
</div>
</div>

@endsection
