
@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(\Illuminate\Support\Facades\Session::has('success'))
   <p class="success">{{\Illuminate\Support\Facades\Session::get('success')}}</p>
    @endif