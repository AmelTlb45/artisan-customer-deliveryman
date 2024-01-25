
<x-app-layout>

<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8" />
    <title>Food Bar </title>
    <base href="/public">
    <!-- Site favicon -->
    @include('users.deliverymans.sitefavicon')

    <!-- Global site tag (gtag.js) - Google Analytics -->
    @include('users.deliverymans.script')
    <!-- End Google Tag Manager -->

</head>

<body>
    @include('users.deliverymans.loader')

    @include('users.deliverymans.header')

    @include('users.deliverymans.sidebar-right')

    @include('users.deliverymans.sidebar-left')

    <div class="main-container">
        <div class="pd-ltr-20">
    <div class="card-box pb-10">
        <div class="h5 pd-20 mb-0">Recent Customers</div>
        <table class="data-table table nowrap">
            <thead>
                <tr>
                    <th class="table-plus">Name</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Payment status</th>
                    <th>Delivery status</th>

                    <th class="datatable-nosort">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($orders as $data)
                    <tr>
                        <td class="table-plus">
                            <div class="name-avatar d-flex align-items-center">
                                <div class="avatar mr-2 flex-shrink-0">
                                    <img src="{{ asset($data->image) }}" class="border-radius-100 shadow"
                                        width="40" height="40" alt="" />
                                </div>
                                <div class="txt">
                                    <div class="weight-600">{{ $data->name }}</div>
                                </div>
                            </div>
                        </td>
                        <td>{{ $data->phone }}</td>
                        <td>{{ $data->address }}</td>
                        <td>{{ $data->quantity }}</td>
                        <td>{{ $data->price }}</td>
                        <td>{{ $data->payment_status }}</td>
                        <td>

                            @if ($data->delivery_status == 'processing')
                                <a class="btn btn-primary" href="{{ url('delivered', $data->id) }}"
                                    onclick="return confirm('Are you sure this order is delivered?')">Delivery</a>
                        </td>
                    @else
                        <a>Delivered</a>
                @endif
                </td>
                <td>
                    <div class="table-actions">
                        <a href="#" data-color="#265ed7"><i class="icon-copy dw dw-edit2"></i></a>
                        <a href="#" data-color="#e95959"><i class="icon-copy dw dw-delete-3"></i></a>
                    </div>
                </td>
                </tr>
            @empty
                <tr>
                    <td colspan="16">Data Not Found</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <!-- welcome modal start -->
   
        </div>
    </div>

    <!-- welcome modal end -->
    <!-- js -->
    @include('users.deliverymans.js')
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0"
            style="display: none; visibility: hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->



</body>

</html>



</x-app-layout>














