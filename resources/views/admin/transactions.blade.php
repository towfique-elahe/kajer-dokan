@extends('admin.layout.adminLayout')

@section('title', '| Transactions')
@section('pageTitle', 'Transactions')

@section('main')
    <main id="cTrans">
        <!-- topbar -->
        @include('admin.components.topbar')

        <!-- main content -->
        <section class="main">
            <div class="card">
                <div class="card_heading">
                    <div class="icon">
                        <iconify-icon icon="ph:arrows-left-right-bold"></iconify-icon>
                    </div>
                    <p>recent transactions</p>
                </div>
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
                            <tr>
                                <td>#001</td>
                                <td>15 Jun, 2023</td>
                                <td>৳ 1500</td>
                                <td>
                                    <a href="javascript:void()">
                                        <iconify-icon icon="icon-park-solid:transaction-order"></iconify-icon>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>#001</td>
                                <td>15 Jun, 2023</td>
                                <td>৳ 1500</td>
                                <td>
                                    <a href="javascript:void()">
                                        <iconify-icon icon="icon-park-solid:transaction-order"></iconify-icon>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>#001</td>
                                <td>15 Jun, 2023</td>
                                <td>৳ 1500</td>
                                <td>
                                    <a href="javascript:void()">
                                        <iconify-icon icon="icon-park-solid:transaction-order"></iconify-icon>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>#001</td>
                                <td>15 Jun, 2023</td>
                                <td>৳ 1500</td>
                                <td>
                                    <a href="javascript:void()">
                                        <iconify-icon icon="icon-park-solid:transaction-order"></iconify-icon>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>#001</td>
                                <td>15 Jun, 2023</td>
                                <td>৳ 1500</td>
                                <td>
                                    <a href="javascript:void()">
                                        <iconify-icon icon="icon-park-solid:transaction-order"></iconify-icon>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>#001</td>
                                <td>15 Jun, 2023</td>
                                <td>৳ 1500</td>
                                <td>
                                    <a href="javascript:void()">
                                        <iconify-icon icon="icon-park-solid:transaction-order"></iconify-icon>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>#001</td>
                                <td>15 Jun, 2023</td>
                                <td>৳ 1500</td>
                                <td>
                                    <a href="javascript:void()">
                                        <iconify-icon icon="icon-park-solid:transaction-order"></iconify-icon>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>#001</td>
                                <td>15 Jun, 2023</td>
                                <td>৳ 1500</td>
                                <td>
                                    <a href="javascript:void()">
                                        <iconify-icon icon="icon-park-solid:transaction-order"></iconify-icon>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>#001</td>
                                <td>15 Jun, 2023</td>
                                <td>৳ 1500</td>
                                <td>
                                    <a href="javascript:void()">
                                        <iconify-icon icon="icon-park-solid:transaction-order"></iconify-icon>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>#001</td>
                                <td>15 Jun, 2023</td>
                                <td>৳ 1500</td>
                                <td>
                                    <a href="javascript:void()">
                                        <iconify-icon icon="icon-park-solid:transaction-order"></iconify-icon>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </main>
@endsection
