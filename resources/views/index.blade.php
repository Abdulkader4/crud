@extends('layout.master')
@section('content')

<div class="main-content mt-5" style="background-color: #1b1616; padding: 1px;">
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6">
    <h4>All Posts</h4>
            </div>
            <div class="col-md-6 d-flex justify-content-end">
        <a class="btn btn-success" href="{{route("post.create")}}">Create</a>
        <a class="btn btn-warning" href="">Trashed</a>

        </div>
        </div>
        </div>

        <div class="card-body">
            <table class="table table-striped table-bordered border-dark">
                <thead style="background: #635858 ">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col" style="width 10%"> image</th>
                    <th scope="col" style="width 30%">Titel</th>
                    <th scope="col" style="width 10%">Description</th>
                    <th scope="col" style="width 10%">Category</th>
                    <th scope="col" style="width 10%">publish Date</th>
                    <th scope="col" style="width 10%">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>
                      <img src="https://picsum.photos/200/300?grayscale" alt="" width="80px">
                    </td>
                    <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</td>
                    <td> olorem impedit ipsam veritatis.!</td>
                    <td>News</td>
                    <td>11-4-2024</td>
                    <td>
                      <a class="btn-sm btn-primary" href="">Edit </a>
                      <a class="btn-sm btn-danger" href="">Delete </a>
                      <a class="btn-sm btn-success" href="">show </a>


                    </td>
                  </tr>

                </tbody>
              </table>
        </div>

</div>

@endsection
