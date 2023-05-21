@extends('base')

@section('content')
    <section class="container-fluid d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-8 mx-auto">
                    <div class="card w-100">
                        <div class="col-12">
                            <div class="col-6 mx-auto mt-3">
                                <h5 class="text-center">Перевод PDF файлов <small>Online</small></h5>
                                <img src="{{ asset('images/pdf.png') }}" alt="PDF Logotype" class="img-fluid">
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('form.data') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-4">
                                    <label for="exampleInputOriginalLang" class="form-label">Выберите оригинальный язык</label>
                                    <select 
                                        @error('originalLang') is-invalid @enderror
                                        class="form-select" 
                                        name="originalLang" 
                                        aria-label="Default select example"
                                    >
                                        <option value="ru-Ru">Русский</option>
                                        <option value="en-En">Английский</option>
                                    </select>
                                    @error('originalLang') <span class="invalid-feedback d-block">{{ $message }}</span> @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="exampleInputEndLang"class="form-label">Выберите желаемый язык перевода</label>
                                    <select 
                                        @error('endLang') is-invalid @enderror
                                        class="form-select" 
                                        name="endlLang"  
                                        aria-label="Default select example"
                                    >
                                        <option value="en-En">Английский</option>
                                        <option value="ru-Ru">Русский</option>
                                    </select>
                                    @error('endlLang') <span class="invalid-feedback d-block">{{ $message }}</span> @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="exampleInputFile" class="form-label">Загрузите файл</label>
                                    <input 
                                        @error('fileRef') is-invalid @enderror
                                        type="file" 
                                        name="fileRef" 
                                        class="form-control" 
                                        accept=".pdf"
                                    >
                                    @error('fileRef') <span class="invalid-feedback d-block">{{ $message }}</span> @enderror
                                </div>
                                <div class="mt-4">
                                    <button 
                                        type="submit" 
                                        class="btn btn-primary w-100 d-block mx-auto"
                                    >Перевести</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection