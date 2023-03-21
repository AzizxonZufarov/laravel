@extends('layouts.app')

@section('title-block')
main page
@endsection

@section('content')
  <h1>main page</h1>
@endsection
@section('aside')
  @parent
  <p>
    Extra layout
  </p>
@endsection
