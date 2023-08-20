@extends('worker.layout.workerLayout')

@section('title', '| Transactions')
@section('pageTitle', 'Transactions')

@section('main')
    <main id="cTrans">
        <!-- topbar -->
        @include('worker.components.topbar')

        <!-- main content -->
        <section class="main">
            <div class="card">
                <div class="card_heading">
                    <div class="icon">
                        <iconify-icon icon="ph:arrows-left-right-bold"></iconify-icon>
                    </div>
                    <p>recent transactions</p>
                </div>
                @if (count($transactions) > 0)
                    <div class="card_body">
                        <table class="transaction">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Date</th>
                                    <th>Amount</th>
                                    <th>Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($transactions as $transaction)
                                    <tr>
                                        <td>{{ $transaction->id }}</td>
                                        <td>{{ $transaction->created_at }}</td>
                                        <td>৳ {{ $transaction->amount }}</td>
                                        <td>
                                            <a href="{{ route('worker.transaction', [$transaction->id]) }}">
                                                <iconify-icon icon="icon-park-solid:transaction-order"></iconify-icon>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <p style="text-align: center">No transactions available</p>
                @endif
            </div>
        </section>
    </main>
@endsection
