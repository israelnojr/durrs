@extends('layouts.backend')

@section('title','Market Section')

@push('css')

@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @include('backend.partial.message')
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">Edit Market Section</h4>
                        </div>
                        <div class="card-content">
                            <form method="POST" action="{{ route('marketsection.update',$marketSection->id) }}" 
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Title</label>
                                            <input type="text" class="form-control" name="title" value="{{ $marketSection->title }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Description</label>
                                            <input type="text" class="form-control" name="desc" value="{{ $marketSection->desc }}">
                                        </div>
                                    </div>
                                </div>
                            
                                <div class="row">
                                    <div class="col-md-12">
                                        <label class="control-label">Image</label>
                                        <input type="file" name="image" value="{{ $marketSection->image}}">
                                    </div>
                                </div>
                                <a href="{{ route('marketsection.index') }}" class="btn btn-danger">Back</a>
                                <button type="submit" class="btn btn-primary">update</button>
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