@include('common.header')
<x-message-banner msg="User Login Successfully - ( This is component ) dynamically" class="success"/>
<x-message-banner msg="User Login Successfully - ( This is component ) dynamically" class="success"/>

<br>


<x-message-banner msg="Password not correct please try again"  class="error"/>


<x-message-banner msg="This is just a warning message !!"  class="warning"/>
<h1>Home page (new page)</h1>

<a href="/">Welcome page</a>
<a href="/about/amit">About Us</a>


<!-- @include('common.inner', ['page' => "this is HOME Page - dynamically from common.inner"]) -->
@includeif('common.inner', ['page' => "this is HOME Page - dynamically from common.inner"])

<h2>{{$name}}</h2>
<!-- <h1>User Name is : {{$users[0]}}</h1> -->

@if($name == "amit")
<h1>This is Amit</h1>
@elseif($name == "samy")
<h2>Test - Samy</h2>
@else
<h1>This is other user</h1>
@endif

<div>
    <!-- Loops -->
    @for($i = 0; $i <= 10; $i++)
    <h3>{{$i}}</h3>
    @endfor
</div>

<div>
    <!-- Foreach -->
    @foreach($users as $user)
    <h3>{{$user}}</h3>
    @endforeach
</div>
