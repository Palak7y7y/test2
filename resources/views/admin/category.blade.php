@extends('layouts.app')

@section('header_extras')

<title>All Category | Half Tuber</title>

@endsection



@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6" style="margin-top:20px; margin-bottom:20px;">
          <h1>Add New Category</h1>
            <form method="post" action="{{route('category.store')}}" enctype="multipart/form-data">
                @csrf
              <div class="form-group">
                <label for="category">Enter Category</label>
                <input type="text" class="form-control" id="category" name="category_name" placeholder="Enter Category">
              </div>
              
              <div class="form-group">
                <label for="picture">Enter Picture</label>
                <input type="file" class="form-control" id="category" name="category_picture" placeholder="Enter Picture">
              </div>
              
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="col-md-6" style="margin-top:20px; margin-bottom:20px;">
          <h1> All Categories </h1>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">S.no.</th>
                <th scope="col">Category_name</th>
                <th scope="col">Picture</th>
                <th scope="col">Manage</th>
              </tr>
            </thead>
            <tbody>
              @foreach($categories as $category)
              <tr>
                <th scope="row">{{++$i}}</th>
                <td>{{$category->name}}</td>
                <td><img src="{{asset('assets/img/category/'.$category->picture)}}" style="max-width:20%;height:auto;"></td>
                <td>
                  <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton{{$i}}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Actions
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton{{$i}}">
                      <ul>
                      <li><a class="dropdown-item" href="javascript:void(0)" data-toggle="modal" data-target="#edit-category{{$i}}">Edit</a></li>
                      <li><a class="dropdown-item" href="javascript:void(0)" data-toggle="modal" data-target="#delete-category{{$i}}">Delete</a></li>
                      </ul>
                    </div>
                  </div>
                </td>
              </tr>
              <div class="modal fade" id="edit-category{{$i}}">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Edit Category</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>

                      <div class="modal-body">
                        <form method="post" action="{{route('category.update',['id' => $category->id])}}" enctype="multipart/form-data">
                          @csrf
                        <div class="form-group">
                          <label for="category">Category</label>
                          <input type="text" class="form-control" id="category" name="category_name" value="{{$category->name}}" placeholder="Enter Category">
                        </div>
                        
                        <div class="form-group">
                          <label for="picture">Picture</label>
                          <input type="file" class="form-control" id="category" name="category_picture" placeholder="Enter Picture">
                        </div>

                        <div style="margin-top:10px;">
                          <img src="{{asset('assets/img/category/'.$category->picture)}}" style="max-width:20%;height:auto;">
                        </div>
                      </div>

                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                      </form>
                      </div>

                    </div>
                  </div>
              </div>
              <div class="modal fade" id="delete-category{{$i}}">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Warning</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>

                      <div class="modal-body">
                        <p>Are You sure? You Want To Delete This Category.</p>
                      </div>

                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <a href="{{route('category.delete',['id' => $category->id])}}" class="btn btn-danger">Delete</a>
                      </form>
                      </div>

                    </div>
                  </div>
              </div>
              @endforeach
            </tbody>
          </table>
        </div>
    </div>
</div>
@endsection