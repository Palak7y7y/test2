@extends('layouts.app')

@section('header_extras')

<title>Add Post | Half Tuber</title>
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/1/jquery.min.js"></script>
<script src="https://cdn.ckeditor.com/4.4.5.1/full/ckeditor.js"></script>

@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6" style="margin-top:20px; margin-bottom:20px;">
          <h1>Add New Post</h1>
            <form method="post" action="{{route('post.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="date">Enter Upload Date</label>
                    <input type="date" class="form-control" id="date" name="post_upload_date" placeholder="Enter Date" value="{{old('news_upload_date')}}">
                    @error('post_upload_date')
                     <p class="text-danger">{{$errors->first('news_upload_date')}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="type">Enter Post Type</label>
                    <select class="form-control" id="type" name="post_type" >
                        <option value="">Select Post Type</option>
                        <option value="Blog" {{(old('post_type')=="Blog")? 'selected':''}}>Blog</option>
                        <option value="News" {{(old('post_type')=="News")? 'selected':''}}>News</option>
                        <option value="Article" {{(old('post_type')=="Article")? 'selected':''}}>Article</option>
                    </select>
                    @error('post_type')
                     <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="title">Enter Title</label>
                    <input type="text" class="form-control" id="title" name="post_title" placeholder="Enter Title" value="{{old('news_title')}}">
                    @error('post_title')
                     <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="subtitle">Enter SubTitle</label>
                    <input type="text" class="form-control" id="subtitle" name="post_sub_title" placeholder="Enter Sub Title" value="{{old('news_sub_title')}}">
                    @error('post_sub_title')
                     <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="category">Select Category</label>
                    <select class="form-control" id="category" name="post_category" placeholder="Enter Category">
                    <option value="">Select Category</option>
                    @foreach($categories as $category)
                    <option value="{{$category->id}}" {{(old('post_category')==$category->id)? 'selected':''}}>{{$category->name}}</option>
                    @endforeach
                    </select>
                    @error('post_category')
                     <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="picture">Enter Image</label>
                    <input type="file" class="form-control" id="picture" name="post_image" placeholder="Enter image" >
                    @error('post_image')
                     <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="meta_title">Meta Title</label>
                    <input type="text" class="form-control" id="meta_title" name="meta_title" placeholder="Enter Meta Title" value="{{old('meta_title')}}">
                    @error('meta_title')
                     <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="meta_desc">Meta_Description</label>
                    <input type="text" class="form-control" id="meta_desc" name="meta_description" placeholder="Enter Meta Description" value="{{old('meta_description')}}">
                    @error('meta_description')
                     <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="meta_key">Meta_Keywords</label>
                    <input type="text" class="form-control" id="meta_key" name="meta_keyword" placeholder="Enter Meta Keywords" value="{{old('meta_keyword')}}"> 
                    @error('meta_keyword')
                     <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        
        <div class="col-md-6" style="margin-top:20px; margin-bottom:20px;">
                <div class="form-group">
                    <label for="decription">Enter Description</label>
                    <textarea class="form-control" id="description" name="post_description" placeholder="Enter Description" >{{old('news_description')}}</textarea>
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