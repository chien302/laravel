@extends('layouts.app')

@section('content')

<div class="container">

  <h3 align="center" class="mt-5">Contacts</h3>

  <div class="row">
    <div class="col-md-2">
    </div>
    <div class="col-md-8">

      <div class="form-area">
        <form method="POST" action="{{ route('contact.update', $contact->id) }}">
          {!! csrf_field() !!}
          @method("PATCH")
          <div class="row">
            <div class="col-md-12">
              <label>First Name</label>
              <input type="text" class="form-control" name="first_name" value="{{ $contact->first_name }}">
            </div>
            <div class="col-md-12">
              <label>Last Name</label>
              <input type="text" class="form-control" name="last_name" value="{{ $contact->last_name }}">
            </div>
            <div class="col-md-12">
              <label>Email</label>
              <input type="text" class="form-control" name="email" value="{{ $contact->email }}">
            </div>
          </div>

          <div class="row">
            <div class="col-md-12 mt-3">
              <input type="submit" class="btn btn-primary" value="Update">
            </div>

          </div>
        </form>
      </div>

    </div>
  </div>
</div>

@endsection


@push('css')
<style>
  .container {
    border: 1px solid #ccc;
    margin: 80px auto;
    padding-bottom: 100px;
    border-radius: 20px;
  }

  .bi-trash-fill {
    color: red;
    font-size: 18px;
  }

  .bi-pencil {
    color: green;
    font-size: 18px;
    margin-left: 20px;
  }
</style>
@endpush