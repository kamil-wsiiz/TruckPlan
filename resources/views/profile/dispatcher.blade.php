@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card mb-3">
                    <div class="card-header">{{ __('Zadania') }}</div>

                    <div class="card-body table-responsive text-end">
                        <table class="table table-align-middle text-center">
                            <thead>
                            <tr>
                                <th scope="col">{{ __('Id') }}</th>
                                <th scope="col">{{ __('Tytuł') }}</th>
                                <th scope="col">{{ __('Status') }}</th>
                                <th scope="col">{{ __('Kierowca') }}</th>
                                <th scope="col">{{ __('Szczegóły') }}</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Dostawa w Rzeszowie</td>
                                <td>W realizacji</td>
                                <td>
                                    <select class="form-select">
                                        @foreach(\App\Models\User::where(['type' => \App\Models\User::TYPES['driver']])->get() as $driver)
                                            <option
                                                value="{{ $driver->id }}">{{ $driver->name }} {{ $driver->surname }}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td>
                                    <button class="btn btn-outline-info mx-2"><i class="bi-info-circle"></i></button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">{{ __('Kierowcy') }}</div>

                    <div class="card-body table-responsive text-end">
                        <table class="table table-align-middle text-center">
                            <thead>
                            <tr>
                                <th scope="col">{{ __('Id') }}</th>
                                <th scope="col">{{ __('Imię i nazwisko') }}</th>
                                <th scope="col">{{ __('Przypisane zadanie') }}</th>
                                <th scope="col">{{ __('Szczegóły') }}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                                $targets = [1 => 'Dostawa w Rzeszowie'];
                            @endphp

                            @foreach(\App\Models\User::where(['type' => \App\Models\User::TYPES['driver']])->get() as $driver)
                                <tr>
                                    <td>{{ $driver->id }}</td>
                                    <td>
                                        {{ $driver->name }} {{ $driver->surname }}
                                    <td>{{ $targets[$driver->id] ?? '-' }}</td>
                                    <td>
                                        <button class="btn btn-outline-info mx-2"><i class="bi-info-circle"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
