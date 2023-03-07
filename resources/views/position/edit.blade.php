@extends('layouts.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-12 d-flex justify-content-between">
                        <div>
                            <h1 class="m-0">{{ __('Positions') }}</h1>
                        </div>
                    </div>

                    <div class="col-12 col-sm-12 col-md-7 mt-3">
                        <div class="card">
                            <h4 class="ml-3 mt-2">{{ __('Position edit') }}</h4>
                            <form action="{{ route('positions.update', $position->id) }}" method="post">
                                @csrf
                                @method('PATCH')
                                <div class="form-group ml-3 mr-3">
                                    @error('name')
                                        <i class="far fa-times-circle"></i>
                                    @enderror
                                    <label for="name">{{ __('Name') }}</label>
                                    <input type="text" name="name" class="form-control" id="name"
                                        value="{{ $position->name }}">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            @error('name')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                        <div>
                                            <p id="result" class=" text-muted"></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-between ml-3 mr-3">
                                    <p> <strong>{{ __('Created at:') }}</strong>
                                        {{ $position->created_at->format('d.m.Y') }} </p>
                                    <p> <strong>{{ __('Admin created ID:') }}</strong> {{ $position->id }} </p>
                                </div>
                                <div class="d-flex justify-content-between ml-3 mr-3">
                                    <p> <strong>{{ __('Updated at:') }}</strong>
                                        {{ $position->created_at->format('d.m.Y') }} </p>
                                    <p> <strong>{{ __('Admin updated ID:') }}</strong> {{ $position->id }} </p>
                                </div>

                                <div class="card-footer d-flex justify-content-end">
                                    <div class="col-4 col-sm-3 col-md-2"><a class="btn btn-block btn-default"
                                            href="{{ route('positions.index') }}">{{ __('Cancel') }}</a>
                                    </div>
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
    </section>
    </div>
@endsection
