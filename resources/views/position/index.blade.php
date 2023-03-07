@extends('layouts.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <!-- Table -->
        <div class="container-fluid">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2 ">
                        <div class="col-7 col-sm-9 col-md-10 ">
                            <h1 class="m-0">{{ __('Positions') }}</h1>
                        </div>
                        <div class="col-5 col-sm-3 col-md-2">
                            <a href="{{ route('positions.create') }}"
                                class="btn btn-block btn-secondary m-0 float-sm-right">{{ __('Add position') }}</a>
                        </div>
                    </div>
                </div>
                <div class="col-5 col-sm-3 col-md-2 float-right mb-2">
                    <div class="card-tools ">
                        <form action="">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="q" class="form-control float-right" placeholder="Search">
                        </form>

                        <div class="input-group-append">
                            <button type="submit" class="btn btn-default">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="card-body p-0">


            <table class="table table-striped border">
                <thead>
                    <tr>
                        <th>{{ __('Name') }}</th>
                        <th>{{ __('Last update') }}</th>
                        <th>{{ __('Action') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($positions as $position)
                        <tr>
                            <td>{{ $position->name }}</td>
                            <td>{{ $position->updated_at->format('d.m.Y') }}</td>

                            <td class="d-flex">
                                <div><a class="fas fa-pen text-dark mr-3"
                                        href="{{ route('positions.edit', $position->id) }}"></a></div>
                                <form action="{{ route('positions.destroy', $position->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <div>


                                        <!-- Button trigger modal -->
                                        <button type="button" class="fas fa-trash-alt border-0 bg-transparent"
                                            data-bs-toggle="modal" data-bs-target="#exampleModal{{ $position->id }}">

                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal{{ $position->id }}" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">
                                                            {{ __('Remove position') }}
                                                        </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        {{ __('Are you sure you want to remove position') }}
                                                        {{ $position->name }}
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">{{ __('Cancel') }}</button>
                                                        <button type="submit"
                                                            class="btn btn-secondary">{{ __('Remove') }}</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="float-right mt-3">
                {{ $positions->links() }}
            </div>

        </div>
    </div>



    </div>
@endsection
