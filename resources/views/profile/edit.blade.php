
<x-app-layout>

<!DOCTYPE html>
<html>

<head>

    <title>Food Bar </title>
    <base href="/public">

    @include('users.artisans.sitefavicon')


    @include('users.artisans.script')

</head>

<body>
    <div class="main-container">
        <div class="py-10">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <div class="card-box pd-10 height-100-p mb-30">
            <div class="row align-items-center">
                <div class="col-md-2">
                    <img src="artisan/vendors/images/f1.png" alt="" />
                </div>
                <div class="col-md-4">
                    <h4 class="font-20 weight-500 mb-10 text-capitalize">
                        Welcome
                        <div class="weight-600 font-30" style="color: rgb(250, 206, 84);">{{ Auth::user()->name }}!</div>

                    </h4>
                    <p class="font-18 max-width-600">

                    </p>
                </div>
            </div>
        </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
        </div>

    @include('users.artisans.loader')

    @include('users.artisans.header')

    @include('users.artisans.sidebar-right')

    @include('users.artisans.sidebar-left')

    @include('users.artisans.js')

</body>

</html>





</x-app-layout>
