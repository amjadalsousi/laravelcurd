<br>
<div class="container">
    @if(session('sucessMsg'))
    <div class="alert alert-success" role="alert">
        {{session('sucessMsg')}}
    </div>
    @endif


    @if($errors->any())
    @foreach ($errors->all() as $error)
    <div class="alert alert-danger" role="alert">
        {{$error}}
    </div>
    @endforeach
    @endif
</div>