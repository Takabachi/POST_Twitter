@extends('layout')

@section('content')

    <form method="POST" action="{{route('store')}}">
    @csrf

        <div>
            <input type="text" name="title" class="form-control mt-4"></input>
        </div>

        <div>
            <textarea name="body" cols="30" rows="4" class="form-control mt-4"></textarea>
        </div>

        <div class="text-right mt-4">
            <button type="submit" class="btn btn-outline-secondary btn-sm">ツイートする</button>
            <a href="{{ route('index') }}" class="btn btn-outline-secondary btn-sm">キャンセル</a>
        </div>

    </form>

@endsection