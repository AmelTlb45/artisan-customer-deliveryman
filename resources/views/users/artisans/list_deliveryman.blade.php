<x-app-layout>

</x-app-layout>
<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8" />
    <title>Food Bar </title>
    <base href="/public">
    <!-- Site favicon -->
    @include('users.artisans.sitefavicon')

    <!-- Global site tag (gtag.js) - Google Analytics -->
    @include('users.artisans.script')
    <!-- End Google Tag Manager -->
</head>

<body>
    @include('users.artisans.loader')

    @include('users.artisans.header')

    @include('users.artisans.sidebar-right')

    @include('users.artisans.sidebar-left')
    <div class="main-container">
    <div class="pd-20 card-box mb-30">
        <div class="clearfix">
            <div class="pull-left">
                <h4 class="text-gray h4">List Of deliveryman</h4>

            </div>
        </div>
        <table class="data-table table stripe hover nowrap">
            <thead>
                <tr>
                    <th class="table-plus datatable-nosort">deliveryman Name</th>

                    <th>statu </th>

                    <th class="datatable-nosort">give him mission</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($dev as $d)
                    <tr>
                        <td class="table-plus">{{ $d->name }}</td>
                        <td>{{ $d->Dispo }}</td>
                        <td>
                            @if($d->Dispo == "Yes")

                            

                            <button    type="button" id="sa-custom-position"  class="btn mb-20 btn-primary btn-block" href="{{ url('dispo_mission', ['orderId' => $order->id]) }}" >send order</button></td>
                          @else
                            <a>Delivered</a>
                          @endif
                        </td>

                @endforeach
                </tr>
            </tbody>
        </table>
    </div>
</div>



    <!-- welcome modal end -->
    <!-- js -->
    @include('users.artisans.js')


</body>

</html>
