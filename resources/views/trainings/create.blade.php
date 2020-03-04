@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Insert New Record</div>

                <div class="card-body">

                    <!-- form start -->
                    <form action="" method="POST">
                        
                        Title
                        <input name="title" type="text" class="form-control">
                        Description
                        <input name="description" type="text" class="form-control">
                        Trainer
                        <input name="trainer" type="text" class="form-control">
                        <button type="submit" class="btn btn-primary" >Submit Record</button>
                    
                    </form>

                    <!-- form end -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
