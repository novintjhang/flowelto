@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center pt-4">
        <h4 class="title">Your Cart</h4>
    </div>
    <div class="row justify-content-center pt-4">
        <div class="col-lg-10">
            <table class="table cart-table" width="100%">
                <tbody>
                    @foreach($transactions as $transaction)
                        <tr>
                            <td class="center">
                                <a href="{{ route('transaction.show', $transaction->id) }}">
                                Transaction at {{ $transaction->created_at }}
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection
