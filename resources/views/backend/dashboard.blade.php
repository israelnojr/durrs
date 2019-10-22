@extends('layouts.backend')

@section('title','Dashboard')

@push('css')
@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header" data-background-color="orange">
                            <i class="material-icons">content_copy</i>
                        </div>
                        <div class="card-content">
                            <p class="category">Cat / Prod</p>
                            <h3 class="title"> product
                            </h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons text-danger">info</i>
                                <a href="#pablo">Total Categories and Products</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header" data-background-color="green">
                            <i class="material-icons">slideshow</i>
                        </div>
                        <div class="card-content">
                            <p class="category">Slider Count</p>
                            <h3 class="title">10</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">date_range</i> <a href="">Get More Details...</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header" data-background-color="red">
                            <i class="material-icons">local_printshop</i>
                        </div>
                        <div class="card-content">
                            <p class="category">Quotation</p>
                            <h3 class="title">quote</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">local_offer</i> Not Confirmed Quotation
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header" data-background-color="blue">
                            <i class="material-icons">message</i>
                        </div>
                        <div class="card-content">
                            <p class="category">Message</p>
                            <h3 class="title">11</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">update</i> Just Updated
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    @include('backend.partial.message')
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">Quotations</h4>
                        </div>
                        <div class="card-content table-responsive">
                            <table id="table" class="table"  cellspacing="0" width="100%">
                                <thead class="text-primary">
                                <th>ID</th>
                                <th>Full Name</th>
                                <th>Phone</th>
                                <th>Company</th>
                                <th>Email</th>
                                <th>Message</th>
                                <th>Status</th>
                                <th>DateTime</th>
                                </thead>
                                <tbody>
                                @foreach($quotation as $q)
                                    <tr>
                                        <td>{{$q->id}}</td>
                                        <td>{{$q->fullname}}</td>
                                        <td>{{$q->phone}}</td>
                                        <td>{{$q->company}}</td>
                                        <td>{{$q->email}}</td>
                                        <td>{{$q->message}}</td>
                                        <th> 
                                            <span class="label label-info">Confirmed</span>          
                                        </th>
                                        <td>{{$q->created_at}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">Email List</h4>
                        </div>
                        <div class="card-content table-responsive">
                            <table id="table" class="table"  cellspacing="0" width="100%">
                                <thead class="text-primary">
                                <th>ID</th>
                                <th>Email</th>
                                <th>DateTime</th>
                                </thead>
                                <tbody>
                                @foreach($emails as $email)
                                    <tr>
                                        <td>{{$email->id}}</td>
                                        <td>{{$email->email}}</td>
                                        <td>{{$email->created_at}}</td>
                                    </tr>
                                @endforeach
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