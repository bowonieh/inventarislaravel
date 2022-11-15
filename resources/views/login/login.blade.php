@extends('template')
@section('content')
<div class="container">

    <div class="card">
        <div class="card-header">
            <h1>Halaman Login</h1>
        </div>
        <form method="post" action="auth">

        
        <div class="card-body">
            <div class="form-group">
                <label class="form-label"> EMAIL</label>
                <input type="email" name="email" class="form-control" />
            </div>
            <div class="form-group">
                <label class="form-label"> PASSWORD</label>
                <input type="password" name="password" class="form-control" />
            </div>
        </div>
        <div class="card-footer">
                <button class="btn btn-primary">Login</button>
        </div>
        </form>
    </div>
</div>

</div>

@endsection