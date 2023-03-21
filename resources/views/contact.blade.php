@extends('layouts.app')

@section('title-block')
Contact
@endsection

@section('content')
  <h1>  Contact</h1>


  <form action="{{ route('contact-form') }}" method="post">
    @csrf
    <div class="form-group mt-3">
      <label for="name">Имя</label>
      <input type="text" name="name" class="form-control" id="name" placeholder="Имя">
    </div>
    <div class="form-group mt-3">
      <label for="email">Email</label>
      <input type="email" name="email" class="form-control" id="email" placeholder="Email">
    </div>
    <div class="form-group mt-3">
      <label for="subject">Тема сообщения</label>
      <input type="text" name="subject" class="form-control" id="subject" placeholder="Тема сообщения">
    </div>
    <div class="form-group mt-3">
      <label for="message">Сообщение</label>
      <textarea name="message" class="form-control" id="message" placeholder="Сообщение">Сообщение</textarea>

    </div>
    <button type="submit" class="btn btn-success">Submit</button>
  </form>






@endsection
