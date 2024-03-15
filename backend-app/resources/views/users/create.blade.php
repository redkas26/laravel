<h1>Create User</h1>

<h1>{{$name1}}</h1>
<h1>{{$name2}}</h1>

the time is a {{ time() }}
<br>
@unless (Auth::check())
    You are not signed in.
@endunless

@isset($name1)
    // {{$name1}} is defined and is not null...
@endisset
 <br>
@empty($name1)
    // {{$name1}} is "empty"...
@endempty