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

                            <h4 class="ml-3 mt-2">{{ __('Add position') }}</h4>
                            <form action="{{ route('positions.store') }}" method="post">
                                @csrf
                                <div class="form-group ml-3 mr-3">
                                    @error('name')
                                        <i class="far fa-times-circle"></i>
                                    @enderror
                                    <label for="name">{{ __('Name') }}</label>
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Enter name">
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
