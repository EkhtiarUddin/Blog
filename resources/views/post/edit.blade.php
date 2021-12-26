@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">Create Post</div>

                <div class="card-body">
                    <form action="{{route('post.update',['category' => $post->id])}}" method="POST">
                        {{method_field('PATCH')}}
                        @csrf
                        <div class="form-group">
                            <label for="category_id">Category : </label>
                            <select name="category_id" id="category_id" class="form-control">
                                @foreach($cats as $cat)
                                    <option value="{{$cat->id}}" @if($post->category_id == $cat->id) selected="" @endif>
                                        {{$cat->title}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="title">Title : </label>
                            <input type="text" value="{{$post->title}}" name="title" id="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="body">Body : </label>
                            <textarea name="body" id="body" cols="30" rows="10" class="form-control">{{$post->body}}</textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Update" class="btn btn-block btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
