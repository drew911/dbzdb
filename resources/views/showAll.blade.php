@extends('layout')
@section('content')
<div class="container">
    <div class="page-header">
        <h1>Dragon Ball Z Database</h1>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <ul class="list-group">
                @foreach ($characters as $character)
                <li style="list-style-type: none;"> <a href="{{ route('edit', $character->id) }}" class="btn btn-success">E</a> <a href="{{ route('destroy', $character->id) }}" class="btn btn-danger">X</a>  {{ $character->name }}
                    @foreach($character->photos as $photo)
                    <!-- <img src="{{str_replace('public','storage',$photo->file_name)}}" style="max-width:200px"> -->
                    <img src="{{$photo->url}}" style="max-width:200px">

                    @endforeach
                    <a href="{{ route('create-photo', $character->id) }}" class="btn btn-success">+ Photo</a>
                    </li>
                @endforeach
            </ul>
        </div><!-- /.col-sm-4 -->
    </div>
      <div class="row">
        <div class="col-sm-12">
        </div>
      </div>
      <a href="{{ route('create') }}" class="btn btn-primary">Create</a>
</div> <!-- /container -->
@endsection
