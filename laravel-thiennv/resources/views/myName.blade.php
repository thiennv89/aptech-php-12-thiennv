@foreach ($user as $users) 
    <p>This is user {{$users->id}} and {{$users->name}}</p>
@endforeach