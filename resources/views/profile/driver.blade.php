@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <img src="{{ asset('assets/chart.png') }}" alt="chart" class="img-fluid mx-auto d-block">

                <div class="card my-3">
                    <div class="card-header">{{ __('Mój status') }}</div>

                    <div class="card-body">
                        <select class="form-select">
                            <option value="1">Praca</option>
                            <option value="2">Przerwa</option>
                        </select>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">{{ __('Moje zadania') }}</div>

                    <div class="card-body table-responsive text-end">
                        <table class="table table-align-middle text-center">
                            <thead>
                            <tr>
                                <th scope="col">{{ __('Id') }}</th>
                                <th scope="col">{{ __('Tytuł') }}</th>
                                <th scope="col">{{ __('Status') }}</th>
                                <th scope="col">{{ __('Szczegóły') }}</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Dostawa w Rzeszowie</td>
                                <td>
                                    <select class="form-select">
                                        <option value="1">realizowane</option>
                                        <option value="2">nierozpoczęte</option>
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
            </div>
        </div>
    </div>
@endsection
