@extends('private.layout')

@section('content')
    <div class="card">
        <h5 class="card-header   text-center py-4">
            <strong>Create a tournament</strong>
        </h5>
        <div class="card-body px-lg-5 pt-0">
            <div class="md-form" style="color: black;">
                <form action="{{route('store')}}" method="post">
                    @csrf
                    <div class="form-group row">
                        <label for="location" class="col-2 col-form-label">Location:</label>
                        <div class="col-10">
                            <input id="location" name="location" type="text" required="required" class="form-control ">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="date" class="col-2 col-form-label">Date:</label>
                        <div class="col-10">
                            <input id="date" name="date" type="date" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="max_participants" class="col-2 col-form-label">Maximum participants:</label>
                        <div class="col-10">
                            <input id="max_participants" name="max_participants" type="number" required="required" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-2 col-10">
                            <button name="submit" type="submit" class="btn btn-outline-dark btn-rounded btn-block z-depth-0 my-4 waves-effect">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>







@endsection
