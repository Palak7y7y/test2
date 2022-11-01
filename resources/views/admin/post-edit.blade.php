@extends('layouts.app')

@section('header_extras')

<title>Edit Post | Half Tuber</title>
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/1/jquery.min.js"></script>
<script src="https://cdn.ckeditor.com/4.4.5.1/full/ckeditor.js"></script>

@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6" style="margin-top:20px; margin-bottom:20px;">
          <h1>Add New News</h1>
            <form method="post" action="{{route('post.update',['id'=>$post->id])}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="date">Upload Date</label>
                    <input type="date" class="form-control" id="date" name="post_upload_date" placeholder="Enter Date"  value="{{$post->date}}" required>
                </div>
                <div class="form-group">
                    <label for="type">Enter Post Type</label>
                    <select class="form-control" id="type" name="post_type" >
                        <option value="">Select Post Type</option>
                        <option value="Blog" {{($post->type =="Blog")? 'selected':''}}>Blog</option>
                        <option value="News" {{($post->type =="News")? 'selected':''}}>News</option>
                        <option value="Article" {{($post->type =="Article")? 'selected':''}}>Article</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="post_title" placeholder="Enter Title"  value="{{$post->title}}" required>
                </div>
                <div class="form-group">
                    <label for="subtitle">SubTitle</label>
                    <input type="text" class="form-control" id="subtitle" name="post_sub_title" placeholder="Enter Sub Title"  value="{{$post->sub_title}}" required>
                </div>
                <div class="form-group">
                    <label for="category">Category</label>
                    <select class="form-control" id="category" name="post_category" placeholder="Enter Category"  required>
                    <option value="">Select Category</option>
                    @foreach($categories as $category)
                    <option value="{{$category->id}}" {{($category->id == $post->category_id) ? 'selected':''}}>{{$category->name}}</option>
                    @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="picture">Image</label>
                    <input type="file" class="form-control" id="picture" name="post_image" placeholder="Enter image">
                </div>
                <div style="margin-top:10px;margin-bottom:10px;">
                <img src="{{asset('assets/img/'.$post->image)}}" style="max-width:10%;height:auto;">
                </div>

                <div class="form-group">
                    <label for="meta_title">Meta Title</label>
                    <input type="text" class="form-control" id="meta_title" name="meta_title" placeholder="Enter Meta Title" value="{{$post->meta_title}}">
                </div>

                <div class="form-group">
                    <label for="meta_desc">Meta_Description</label>
                    <input type="text" class="form-control" id="meta_desc" name="meta_description" placeholder="Enter Meta Description" value="{{$post->meta_description}}">
                </div>

                <div class="form-group">
                    <label for="meta_key">Meta_Keywords</label>
                    <input type="text" class="form-control" id="meta_key" name="meta_keyword" placeholder="Enter Meta Keywords" value="{{$post->meta_keyword}}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>

        <div class="col-md-6" style="margin-top:20px; margin-bottom:20px;">
                <div class="form-group">
                    <label for = "decription">Description</label>
                    <textarea class = "form-control" id = "description" name = "post_description" placeholder = "Enter Description" required>{{$post->description}}</textarea>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('footer_extras')

<script>
  CKEDITOR.replace( 'description' );
  $("form").submit( function(e) {
            var messageLength = CKEDITOR.instances['description'].getData().replace(/<[^>]*>/gi, '').length;
            if( !messageLength ) {
                alert( 'Please enter a description' );
                e.preventDefault();
            }
        });
    // ClassicEditor
    // .create( document.querySelector( '#description' ) )
    // .catch( error => {
    // console.error( error );
    // } );
</script>

@endsection