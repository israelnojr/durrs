@extends('layouts.backend')

@section('title','Maintenance Section')

@push('css')

@endpush

@section('content')
    <div class="content">
    @include('backend.partial.message')
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">Add New Maintenance Section</h4>
                        </div>
                        <div class="card-content">
                            <form method="POST" action="{{route('maintenancesection.store')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Title</label>
                                            <input type="text" class="form-control" name="title">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Description</label>
                                            <textarea type="text" class="form-control" cols="30" rows="10" name="desc"></textarea>
                                        </div>
                                    </div>
                                </div>
                
                                <div class="row">
                                    <div class="col-md-12">
                                        <label class="control-label">Image</label>
                                        <input type="file" name="image">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Icon</label>
                                            <input type="text" class="form-control" name="icon" placeholder="add a glificon class here Eg: lnr-magic-wand">
                                        </div>
                                    </div>
                                </div>
                                <a href="{{ route('maintenancesection.index') }}" class="btn btn-danger">Back</a>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')

@endpush