@extends('layouts.backend')

@section('title','Market Section')

@push('css')
    
@endpush

@section('content')
    <div class="content">
    @include('backend.partial.message')
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ route('maintenancesection.create') }}" class="btn btn-primary">Add New</a>
                    
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">All Market Section</h4>
                        </div>
                        <div class="card-content table-responsive table-custom">
                            <table id="table" class="table table-striped " cellspacing="0" width="100%" height="100%">
                                <thead class="text-primary">
                                <th>ID</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Created At</th>
                                <th>Action</th>
                                </thead>
                                <tbody>
                                 @if($maintenanceSection)
                                    @foreach($maintenanceSection as $mainsec)
                                        <tr>
                                            <td> {{$mainsec->id}} </td>
                                            <td> {{$mainsec->title}} </td>
                                            <th>{{ str_limit($mainsec->desc, $limit = 50, $end = '...') }}</th>
                                            <td><img class="img-responsive img-thumbnail" 
                                                src="{{ asset('uploads/maintenancesection/'.$mainsec->image) }}" 
                                                style="height: 100px; width: 100px" alt="">
                                            </td>
                                            <td>{{ $mainsec->created_at->toFormattedDateString()}}</td>
                                            <td>
                                                <a href="{{ route('maintenancesection.edit',$mainsec->id) }}" class="btn btn-info btn-sm">
                                                    <i class="material-icons">mode_edit</i>
                                                </a>

                                                <form id="delete-form-id" action="{{ route('maintenancesection.destroy',$mainsec->id) }}" 
                                                    style="display: none;" method="POST">
                                                    @csrf @method('DELETE')
                                                </form>
                                                <button type="button" class="btn btn-danger btn-sm" 
                                                        onclick="if(confirm('Are you sure? You want to delete this?')){event.preventDefault();
                                                        document.getElementById('delete-form-id').submit();
                                                    }else { event.preventDefault(); }">  <i class="material-icons">delete</i>
                                                </button>
                                            </td> 
                                        </tr>
                                    @endforeach
                                 @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        } );
    </script>
@endpush