@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <img src="{{ asset('assets/chart.png') }}" alt="chart" class="img-fluid mx-auto d-block">

                <div class="card my-3">
                    <div class="card-header">{{ __('Raporty') }}</div>

                    <div class="card-body">
                        <button class="btn btn-outline-info me-2">{{ __('Generuj raport pracownika') }}</button>
                        <button class="btn btn-outline-info">{{ __('Generuj raport firmy') }}</button>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">{{ __('Zadania') }}</div>

                    <div class="card-body table-responsive text-end">
                        <table class="table table-align-middle text-center">
                            <thead>
                                <tr>
                                    <th scope="col">{{ __('Id') }}</th>
                                    <th scope="col">{{ __('Tytuł') }}</th>
                                    <th scope="col">{{ __('Status') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Dostawa w Rzeszowie</td>
                                    <td>W realizacji</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
