<!DOCTYPE html>
<html lang="en">
  <head>
 @include('users.artisans.css')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
     @include('users.artisans.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('users.artisans.header')
        <!-- partial -->
        @include('users.artisans.body')
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('users.artisans.js')
  </body>
</html>
