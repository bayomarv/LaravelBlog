@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class="container col-md-8 mt-5">
            <div class="font-weight-bold alert alert-danger">
                {{$error}}
            </div>
        </div>
    @endforeach
@endif

@if(session('success'))
    <div class="container col-md-8 mt-5">
        <div class="font-weight-bold alert alert-success">
            {{session('success')}}
        </div>
    </div>
@endif

@if(session('error'))
    <div class="container col-md-8 mt-5">
        <div class="font-weight-bold alert alert-danger">
            {{session('error')}}
        </div>
    </div>
@endif