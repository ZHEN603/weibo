@extends('layouts.default')
@section('title','所有用户')

@section('content')
<div class="offset-md-2 col-md-8">
    <h4 class="mb-4 text-center">所有用户</h4>
    <div class="list-group list-group-flush">
        @foreach ($users as $user)
            <div class="list-group-item">
                <img src="{{$user->gravatar()}}" alt="{{$user->name}}" class="mr-3" width="32" style="border-radius: 50%">
                <a href="{{route('users.show',$user)}}">{{$user->name}}</a>
                @can('destroy', $user)
                    <form action="{{route('users.destroy',$user->id)}}" method="POST" class="float-end">
                        {{csrf_field()}}
                        {{method_field('DELETE')}}
                        <button type="submit" class="btn btn-sm btn-danger delete-btn">删除</button>
                    </form>
                @endcan
            </div>
        @endforeach
    </div>
    <div class="mt-3">
        {!! $users->render() !!}
    </div>
</div>
</col-md-8>

@stop
