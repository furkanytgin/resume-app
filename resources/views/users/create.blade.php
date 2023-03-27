@extends('home')


@section('content')

<form method="POST" action="{{ route('users.store') }}">
    @csrf
    <!-- 2 column grid layout with text inputs for the first and last names -->
    <div class="container">
        @if ($errors->any())
            @foreach($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    {{ $error }}
                </div>
            @endforeach
        @endif

        <div class="row mb-4">
            <div class="col">
              <div class="form-outline">
                <label class="form-label" for="form6Example1">Name</label>
                <input type="text" id="form6Example1" class="form-control" name="name" value="{{ old('name') }}"/>
              </div>
            </div>

            <div class="col">
              <div class="form-outline">
                <label class="form-label" for="form6Example2">Email</label>
                <input type="email" id="form6Example2" class="form-control" name="email" value="{{ old('email') }}" />
              </div>
            </div>
          </div>




          <!-- Email input -->
          <div class="form-outline mb-4">
            <label class="form-label" for="form6Example5" >Password</label>
            <input type="password" id="form6Example5" name="password" class="form-control" />
          </div>
        <button type="submit" class="btn btn-primary btn-block mb-4">Create</button>

    </div>
  </form>
@endsection
