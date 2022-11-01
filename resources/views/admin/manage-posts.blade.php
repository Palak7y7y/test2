@extends('layouts.app')

@section('header_extras')

<title>Manage Posts | Half Tuber</title>
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/1/jquery.min.js"></script>
<script src="https://cdn.ckeditor.com/4.4.5.1/full/ckeditor.js"></script>

@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12" style="margin-top:20px; margin-bottom:20px;">
          <a href="{{route('post.create')}}" class="btn btn-primary">Add New Post</a>
            <h1> All Posts</h1>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">S.no.</th>
                    <th scope="col">News Title</th>
                    <th scope="col">Picture</th>
                    <th scope="col">Manage</th>
                </tr>
                </thead>
                <tbody>
                @foreach($posts as $post)
                <tr>
                    <th scope="row">{{++$i}}</th>
                    <td>{{$post->title}}</td>
                    <td><img src="{{asset('assets/img/'.$post->image)}}" style="max-width:10%;height:auto;"></td>
                    <td>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton{{$i}}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         Actions
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton{{$i}}">
                        <ul>
                        <li><a class="dropdown-item" href="{{route('post.edit',['id' => $post->id])}}">Edit</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0)" data-toggle="modal" data-target="#delete-post{{$i}}">Delete</a></li>
                        </ul>
                        </div>
                    </div>
                    </td>
                </tr>

                <div class="modal fade" id="delete-post{{$i}}">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Warning</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
    
                          <div class="modal-body">
                            <p>Are You sure? You Want To Delete This Post.</p>
                          </div>
    
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <a href="{{route('post.delete',['id' => $post->id])}}" class="btn btn-danger">Delete</a>
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

