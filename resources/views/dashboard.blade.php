@extends('layouts.app')

@section('content')
<div class="status">
  <form action="/store" method="POST" class="form">
    @csrf
    <div class="field">
      <div class="input-form">
        inpu
      </div>
    </div>
  </form>
</div>
@endsection