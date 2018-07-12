@extends('layouts.app')
@section('content') 
<div class="container">
 <form  method="post" action={{route("post.store")}}>
 {{ csrf_field() }}
 <div class="form-group">
       <label for="">Category</label>
      <select name="category_id" id="" class="form-control">
      @foreach($categories as $category)
      <option value="{{ $category->id}}">{{ $category->name}}</option>
       @endforeach
      </select>
  </div>
    <div class="form-group">
       <label for="">Title</label>
      <input type="text" class="form-control" name="title" placeholder="Post Title..">
  </div>
   <div class="form-group">
        <label for="">Content</label>
      <textarea rows="5" class="form-control" name="content" placeholder="Post Content.."></textarea>
  </div>
  <div class="form-group">
   <input type="submit" value ="Save" class="btn btn-primary">
  </div>
 </form>

</div>



@endsection