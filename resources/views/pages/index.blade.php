@extends('layouts.app')

@section('content')

<div class="container">

  <h3 align="center" class="mt-5">Contact</h3>

  <div class="row">
    <div class="col-md-2">
    </div>
    <div class="col-md-8">

      <div class="form-area">
        <form method="POST" action="{{ route('contact.store') }}">
          @csrf
          <div class="row">
            <div class="col-md-12">
              <label>First Name</label>
              <input type="text" class="form-control" name="first_name">
            </div>
            <div class="col-md-12">
              <label>Last Name</label>
              <input type="text" class="form-control" name="last_name">

            </div>
            <div class="col-md-12">
              <label>Email</label>
              <input type="text" class="form-control" name="email">

            </div>
          </div>
          <div class="row">
            <div class="col-md-12 mt-3">
              <input type="submit" class="btn btn-primary" value="Create">
            </div>

          </div>
        </form>
      </div>

      <table class="table mt-5">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Họ tên</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>

          @foreach ( $contacts as $key => $contact )

          <tr>
            <td scope="col">{{ ++$key }}</td>
            <td scope="col">{{ $contact->first_name }} {{ " "}} {{ $contact->last_name }}</td>
            <td scope="col">{{ $contact->email }}</td>
            <td scope="col">

              <a href="{{  route('contact.edit', $contact->id) }}">
                <button class="btn btn-primary btn-sm">
                  <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                </button>
              </a>

              <form action="{{ route('contact.destroy', $contact->id) }}" method="POST" style="display:inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
              </form>
            </td>

          </tr>

          @endforeach




        </tbody>
      </table>
    </div>
  </div>
</div>

@endsection


@push('css')
<style>
  .container {
    border: 1px solid #ccc;
    margin: 80px auto;
    padding: 20px;
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