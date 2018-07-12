@extends('layouts.app')
@section('content') 
<div class="container">
        @foreach($posts as $post)
           <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <div class="panel panel-default">
                <div class="panel-heading">     {{$post->title}}
                 <a href = "{{ route('post.edit',$post) }}" class="btn btn-xs btn-success " >Edit</a>
                
             
                <div class="pull-right">
                          <form action="{{ route('post.destroy',$post) }}" method="post">
                      {{csrf_field()}}
                      {{method_field('DELETE')}}
                   <button type="submit"   class="btn btn-xs btn-danger">Delete</button>
                      
                    
                    </form>
                </div>
                </div>

                <div class="panel-body">
                    {!!str_limit($post->content,150)!!} <a href = "{{ route('post.show',$post) }}"  >Next</a>
                </div>
            </div>

        </div>
        
    </div>
    @endforeach
</div>


@endsection