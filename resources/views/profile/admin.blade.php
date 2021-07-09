@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mb-3">
                    <div class="card-header">{{ __('Użytkownicy') }}</div>

                    <div class="card-body table-responsive text-end">
                        <button class="btn btn-success mb-3 float-start">{{ __('Dodaj użytkownika') }}</button>
                        <table class="table table-align-middle text-center">
                            <thead>
                                <tr>
                                    <th scope="col">{{ __('Imię') }}</th>
                                    <th scope="col">{{ __('Nazwisko') }}</th>
                                    <th scope="col">{{ __('Email') }}</th>
                                    <th scope="col">{{ __('Typ') }}</th>
                                    <th scope="col">{{ __('Akcje') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach(\App\Models\User::all() as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->surname }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->type }}</td>
                                    <td>
                                        <button class="btn btn-outline-info mx-2"><i class="bi-pencil"></i></button>
                                        <button class="btn btn-outline-danger"><i class="bi-trash"></i></button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">{{ __('Logi') }}</div>

                    <div class="card-body table-responsive text-end">
                        <table class="table table-align-middle text-center">
                            <thead>
                            <tr>
                                <th scope="col">{{ __('Data') }}</th>
                                <th scope="col">{{ __('Log') }}</th>
                            </tr>
                            </thead>
                            <tbody>
                            <td colspan="2">{{ __('Brak danych') }}</td>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
