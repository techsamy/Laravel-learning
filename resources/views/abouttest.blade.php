@include('common.header')
<x-message-banner msg="User Login Successfully - in About page ( This is component ) dynamically" />
<div>
    <!-- Do what you can, with what you have, where you are. - Theodore Roosevelt -->
     <p>Created about test page for view & created by cmd</p>
     <h1>User Name is : {{$user}}</h1>

     
</div>

@include('common.inner', ['page' => "this is About Page - dynamically from common.inner"])

