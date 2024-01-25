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

    @include('users.deliverymans.main-container')
    <!-- welcome modal start -->


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
