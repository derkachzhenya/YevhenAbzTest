@extends('layouts.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">

            <div class="card-body p-0">
                <div class="container-fluid">
                    <div class="row mb-2 ">
                        <div class="col-7 col-sm-9 col-md-10">
                            <h1 class="m-0">{{ __('Employee') }}</h1>
                        </div>
                        <div class="col-5 col-sm-3 col-md-2">
                            <a href="{{ route('employes.create') }}"
                                class="btn btn-block btn-secondary m-0 float-sm-right">{{ __('Add employee') }}</a>
                        </div>
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row mb-2 ">
                        <div class="col-7 col-sm-9 col-md-10">
                            {{ __('Employee') }}
                        </div>

                        <div class="col-5 col-sm-3 col-md-2">
                            <div class="card-tools ">
                                <form action="">
                                    <div class="input-group input-group-sm" style="width: 150px;">
                                        <input type="text" name="q" class="form-control float-right"
                                            placeholder="Search">
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
            </div>

            <div class="container-fluid col-12">
                <div class="table-responsive">
                    <table class="table table-striped border">
                        <thead>
                            <tr>
                                <th style="width: 10px">{{ __('Photo') }}</th>
                                <th>{{ __('Name') }}</th>
                                <th>{{ __('Position') }}</th>
                                <th>{{ __('Date of employment') }}</th>
                                <th>{{ __('Phone number') }}</th>
                                <th>{{ __('Email') }}</th>
                                <th>{{ __('Salary') }}</th>
                                <th>{{ __('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($employes as $employe)
                                <tr>
                                    <td><img class="direct-chat-img" src="{{ asset('storage/' . $employe->image) }}"
                                            alt="message user image"></td>
                                    <td>{{ $employe->firstName }}</td>
                                    <td>{{ $employe->position->name ?? 'None' }}</td>
                                    <td>{{ $employe->created_at->format('d.m.Y') }}</td>
                                    <td>
                                        {{ $employe->number }}
                                    </td>
                                    <td>{{ $employe->mail }}</td>
                                    <td>${{ $employe->salary }}</td>
                                    <td class="d-flex justify-content-between">
                                        <div><a class="fas fa-pen text-dark"
                                                href="{{ route('employes.edit', $employe->id) }}"></a></div>

                                        <form action="{{ route('employes.destroy', $employe->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <div>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="fas fa-trash-alt border-0 bg-transparent"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal{{ $employe->id }}">
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModal{{ $employe->id }}" tabindex="-1"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="exampleModalLabel">
                                                                    {{ __('Remove position') }}
                                                                </h1>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                {{ __('Are you sure you want to remove position') }}
                                                                {{ $employe->firstName }}
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
                </div>
                <div class="float-right">
                    {{ $employes->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
