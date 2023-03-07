@extends('layouts.main')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-12 d-flex justify-content-between">
                        <div>
                            <h1 class="m-0">{{ __('Employees') }}</h1>
                        </div>
                    </div>

                    <div class="ccol-12 col-sm-12 col-md-7 mt-3 mt-3">
                        <div class="card card-secondary">
                            <div class="card-header">
                                <h3 class="card-title">{{ __('Employee edit') }}</h3>
                            </div>

                            <form action="{{ route('employes.update', $employe->id) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputFile">{{ __('Photo') }}</label>
                                        <div class="input-group">

                                            <div class="custom-file col-7">
                                                <input type="file" class="custom-file-input" id="image"
                                                    name="image" value="{{ public_path($employe->image) }}">
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
                                            value="{{ $employe->firstName }}">
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
                                            value="{{ $employe->number }}">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                @error('number')
                                                    {{ $message }}
                                                @enderror
                                            </div>
                                            <div>
                                                <p class="text-right text-muted">Required format +38(xx)XXX XX XX</p>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            @error('mail')
                                                <i class="far fa-times-circle"></i>
                                            @enderror
                                            <label for="mail">{{ __('Email') }}</label>
                                            <input type="mail" name="mail" class="form-control" id="mail"
                                                value="{{ $employe->mail }}">
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
                                                <option
                                                    value="{{ $position->id }}"{{ $position->id == $employe->position_id ? 'selected' : '' }}>
                                                    {{ $position->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        @error('salary')
                                            <i class="far fa-times-circle"></i>
                                        @enderror
                                        <label for="salary">{{ __('Salary, $') }}</label>
                                        <input type="numeric" name="salary" class="form-control" id="salary"
                                            value="{{ $employe->salary }}">
                                        @error('salary')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="head">{{ __('Head') }}</label>
                                        <input type="text" name="head" class="form-control" id="head"
                                        value="{{ $employe->head }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="date">{{ __('Date of employment') }}</label>
                                        <input type="date" name="created_at" class="form-control" id="date"
                                            value="{{ $employe->created_at }}">
                                    </div>

                                    @error('created_at')
                                        {{ $message }}
                                    @enderror
                                </div>

                                <div class="d-flex justify-content-between ml-3 mr-3">
                                    <p> <strong>{{ __('Created at:') }}</strong> {{ $employe->created_at->format('d.m.Y') }} </p>
                                    <p> <strong>{{ __('Admin created ID:') }}</strong> {{ $employe->position->id }}
                                    </p>
                                </div>
                                <div class="d-flex justify-content-between ml-3 mr-3">
                                    <p> <strong>{{ __('Updated at:') }}</strong> {{ $employe->created_at->format('d.m.Y') }} </p>
                                    <p> <strong>{{ __('Admin updated ID:') }}</strong> {{ $employe->position->id }}
                                    </p>
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
    </div>
@endsection
