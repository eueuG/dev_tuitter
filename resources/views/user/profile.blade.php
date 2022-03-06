@extends('layout._default')
@section('content')
  <p>{{ $user->icon_img_path }}</p>
  <p>{{ $user->name }}</p>
  <p>{{ $user->email }}</p>
@endsection
