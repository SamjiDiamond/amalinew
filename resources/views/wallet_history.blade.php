@extends('layouts.sidebar')

@section('styles')
 @endsection

@section('content')
    

            <div class="card-body">
                <form class="form" id="filter_form" method="get">
                    <div class="row">
                        <!-- search -->
                        <div class="col-md-3">
                            <label for="search"> Search </label>
                            <div class="input-group">
                                <input type="text" name="search" class="form-control" value="" placeholder="search...">
                                <div class="input-group-btn">
                                    <button type="submit" class="btn btn-primary " aria-haspopup="true">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- date -->
                    </div>
                </form>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-table">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-center table-hover datatable">
                                    <thead class="thead-light">
                                    <tr>
                                        <th>SN</th>
                                        <th>Type</th>
                                        <th>Amount</th>
                                        <th>Description</th>
                                        <th>Prev Balance</th>
                                        <th>Cur Balance</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($datas as $data)
                                        <tr>
                                            <td>
                                                {{$i++}}
                                            </td>
                                            <td>
                                                {{$data->type}}
                                            </td>
                                            <td>
                                                {{$data->amount}}
                                            </td>
                                            <td>
                                                {{$data->description}}
                                            </td>
                                            <td>
                                                {{$data->prev_bal}}
                                            </td>
                                            <td>
                                                {{$data->cur_bal}}
                                            </td>
                                            <td>
                                                @if($data->status == 1)
                                                    <span class="badge badge-primary"> Successful </span>
                                                @else
                                                    <span class="badge badge-danger"> Failed</span>
                                                @endif
                                            </td>
                                            <td>
                                                {{$data->created_at}}
                                            </td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
@endsection

@section('scripts') 
@endsection
