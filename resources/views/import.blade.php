@extends('layouts.app')

@section('content')

<div class="container py-5">
    <div class="row">
        <div class="col-12">
            <div class="d-flex flex-column justify-content-center">
                <form method="post" enctype="multipart/form-data">
                    <div class="d-flex flex-column gap-3">
                        <input type="text" name="table" id="" class="form-control" placeholder="Table name">
                        <input type="file" name="json" id="" class="form-control">
                        <button type="submit" class="btn btn-primary">Import</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
