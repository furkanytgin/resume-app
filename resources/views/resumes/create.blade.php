@extends('home')


@section('content')

<form method="POST" action="{{ route('resumes.store') }}">
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

            <input type="text" id="form6Example1" class="form-control" name="user_id" value="{{ auth()->user()->id }}"hidden/>

            <div class="col mb-4">
              <div class="form-outline">
                <label class="form-label" for="form6Example1">Başlık</label>
                <input type="text" id="form6Example1" class="form-control" name="title" value="{{  old('title') }}"/>
              </div>
            </div>

            <div class="col mb-4">
                <div class="form-outline">
                  <label class="form-label" for="form6Example2">Kısa Tanıtım</label>
                  <input type="text" id="form6Example2" class="form-control" name="summary" value="{{ old('summary') }}" />
                </div>
              </div>

            <div class="col mb-4">
                <div class="form-outline">
                  <label class="form-label" for="form6Example2">Yetenekler</label>
                  <input type="text" id="form6Example2" class="form-control" name="skills" value="{{ old('skills') }}" />
                </div>
              </div>

              <div class="col mb-4">
                <div class="form-outline">
                  <label class="form-label" for="form6Example2">Eğitim</label>
                  <input type="text" id="form6Example2" class="form-control" name="education" value="{{ old('education') }}" />
                </div>
              </div>

              <div class="col">
                <div class="form-outline">
                  <label class="form-label" for="form6Example2">Deneyimler</label>
                  <input type="text" id="form6Example2" class="form-control" name="experience" value="{{ old('experience') }}" />
                </div>
              </div>

              <div class="col">
                <div class="form-outline">
                  <label class="form-label" for="form6Example2">Hobiler</label>
                  <input type="text" id="form6Example2" class="form-control" name="interest" value="{{ old('interest') }}" />
                </div>
              </div>

             <div class="row">
                <div class="col-md-6 mt-4">
                    <select class="form-select form-select-lg mb-3" name="theme" id="section" onchange="showImage()">
                            <option value="{{ null }}">Cv için tasarım seçiniz</option>
                        @foreach (App\Enums\CvBlade::cases() as $blade)
                            <option value="{{ $blade->value }}">{{ $blade->name }}</option>
                        @endforeach
                      </select>
                </div>

                <div class="col-md-6 mt-4">
                    <img id="resim" src="">

                </div>
             </div>



        <button type="submit" class="btn btn-primary btn-block mb-4 mt-3">Oluştur</button>

    </div>
  </form>



@endsection
@section('js')
<script>
    var section = document.getElementById("section");
    function showImage() {
        var selectedSection = section.value;
        var image = document.getElementById("resim");

        if (selectedSection == "section1") {
        image.src = "{{ asset('js/images/sections/section1.png') }}";
        } else if (selectedSection == "section2") {
        image.src = "{{ asset('js/images/sections/section2.png') }}";
        }
    }
  </script>
@endsection
