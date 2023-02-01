@extends('backend.layouts.app')

@section('content')

<div class="aiz-titlebar text-left mt-2 mb-3">
    <div class=" align-items-center">
        <h1 class="h3">{{translate('Pre Order Report')}}</h1>
    </div>
</div>

<div class="row">
    <div class="col-md-10 mx-auto">
        <div class="card">
            {{-- <form action="{{ route('wallet-history.index') }}" method="GET">
                <div class="card-header row gutters-5">
                    <div class="col text-center text-md-left">
                        <h5 class="mb-md-0 h6">{{ translate('Wallet Transaction') }}</h5>
                    </div>
                    @if(Auth::user()->user_type != 'seller')
                    <div class="col-md-3 ml-auto">
                        <select id="demo-ease" class="form-control form-control-sm aiz-selectpicker mb-2 mb-md-0" name="user_id">
                            <option value="">{{ translate('Choose User') }}</option>
                            @foreach ($users_with_wallet as $key => $user)
                                <option value="{{ $user->id }}" @if($user->id == $user_id) selected @endif >
                                    {{ $user->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    @endif
                    <div class="col-md-3">
                        <div class="form-group mb-0">
                            <input type="text" class="form-control form-control-sm aiz-date-range" id="search" name="date_range"@isset($date_range) value="{{ $date_range }}" @endisset placeholder="{{ translate('Daterange') }}">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-md btn-primary" type="submit">
                            {{ translate('Filter') }}
                        </button>
                    </div>
                </div>
            </form> --}}
            <div class="card-body">

                <table class="table aiz-table mb-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th data-breakpoints="lg">{{  translate('Date') }}</th>
                            <th data-breakpoints="lg">{{  translate('User Email') }}</th>
                            <th data-breakpoints="lg">{{  translate('Descroption') }}</th>
                            <th>{{ translate('User Name')}}</th>
                            <th>{{ translate('Product Name')}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($preOrders as $key => $preOrder)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                
                                <td>{{ $preOrder->created_at }}</td>
                                <td>{{ $preOrder->email }}</td>
                                <td><strong>{{ $preOrder->details }}</strong></td>
                                <td>{{ $preOrder->name }}</td>
                                <td>{{ Str::limit($preOrder->product_name,75,'') }}</td>
                                
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="aiz-pagination mt-4">
                    {{ $preOrders->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection