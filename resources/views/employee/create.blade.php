@extends('layouts.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-12 d-flex justify-content-between">
                        <div>
                            <h1 class="m-0">{{ __('Employees') }}</h1>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="col-12 col-sm-12 col-md-7 mt-3">
                        <!-- general form elements -->
                        <div class="card card-secondary">
                            <div class="card-header">
                                <h3 class="card-title">{{ __('Add employee') }}</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{ route('employes.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        @error('image')
                                            <i class="far fa-times-circle"></i>
                                        @enderror
                                        <label for="exampleInputFile">{{ __('Photo') }}</label>
                                        <div class="input-group">
                                            <div class="custom-file col-5">
                                                <input type="file" class="custom-file-input" id="image"
                                                    name="image" value="{{ old('image') }}">
                                                <label class="custom-file-label" for="exampleInputFile"></label>
                                            </div>
                                        </div>
                                        @error('image')
                                            {{ $message }}
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        @error('firstName')
                                            <i class="far fa-times-circle"></i>
                                        @enderror
                                        <label for="name">{{ __('Name') }}</label>
                                        <input type="text" name="firstName" class="form-control" id="name"
                                            placeholder="Enter name" value="{{ old('firstName') }}">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                @error('firstName')
                                                    {{ $message }}
                                                @enderror
                                            </div>
                                            <div>
                                                <p id="result" class=" text-muted"></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        @error('number')
                                            <i class="far fa-times-circle"></i>
                                        @enderror
                                        <label for="phone">{{ __('Phone') }}</label>
                                        <input type="char" name="number" class="form-control" id="phone"
                                            placeholder="+380" value="{{ old('number') }}">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                @error('number')
                                                    {{ $message }}
                                                @enderror
                                            </div>
                                            <div>
                                                <p class="text-right text-muted">
                                                    {{ __('Required format +38(xx)XXX XX XX') }}</p>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            @error('mail')
                                                <i class="far fa-times-circle"></i>
                                            @enderror
                                            <label for="mail">{{ __('Email') }}</label>
                                            <input type="mail" name="mail" class="form-control" id="mail"
                                                placeholder="Enter email" value="{{ old('mail') }}">
                                            @error('mail')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        @error('position')
                                            <i class="far fa-times-circle"></i>
                                        @enderror
                                        <label for="position">{{ __('Position') }}</label>
                                        <select class="form-control" id="position" name="position_id">
                                            @foreach ($positions as $position)
                                                <option value="{{ $position->id }}">{{ $position->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        @error('salary')
                                            <i class="far fa-times-circle"></i>
                                        @enderror
                                        <label for="salary">{{ __('Salary, $') }}</label>
                                        <input type="numeric" name="salary" class="form-control" id="salary"
                                            placeholder="Enter salary" value="{{ old('salary') }}">
                                        @error('salary')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="head">{{ __('Head') }}</label>
                                        <input type="text" id="search" name="head" class="form-control"
                                            value="{{ old('head') }}">
                                        @error('head')
                                            {{ $message }}
                                        @enderror

                                    </div>
                                    <div class="form-group">
                                        <label for="date">{{ __('Date of employment') }}</label>
                                        <input type="date" name="created_at" class="form-control" id="date">
                                    </div>
                                    @error('created_at')
                                        {{ $message }}
                                    @enderror
                                </div>

                                <div class="card-footer d-flex justify-content-end">
                                    <div class="col-4 col-sm-3 col-md-2"><a class="btn btn-block btn-default"
                                            href="{{ route('employes.index') }}">{{ __('Cancel') }}</a> </div>
                                    <div>
                                        <button type="submit" class="btn btn-secondary">{{ __('Save') }}</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>
    </div>
@endsection
