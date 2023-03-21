@extends('layouts.app')

@section('title-block')
Update data
@endsection

@section('content')
  <h1>  Update data</h1>


  <form action="{{ route('contact-update-submit', $data->id) }}" method="post">
    @csrf
    <div class="form-group mt-3">
      <label for="name">Имя</label>
      <input type="text" name="name" value="{{ $data->name }}" class="form-control" id="name" placeholder="Имя">
    </div>
    <div class="form-group mt-3">
      <label for="email">Email</label>
      <input type="email" name="email" value="{{ $data->email }}" class="form-control" id="email" placeholder="Email">
    </div>
    <div class="form-group mt-3">
      <label for="subject">Тема сообщения</label>
      <input type="text" name="subject" value="{{ $data->subject }}" class="form-control" id="subject" placeholder="Тема сообщения">
    </div>
    <div class="form-group mt-3">
      <label for="message">Сообщение</label>
      <textarea name="message" class="form-control" id="message" placeholder="Сообщение">{{ $data->message }}</textarea>

    </div>
    <button type="submit" class="btn btn-success">Update</button>
  </form>






@endsection
