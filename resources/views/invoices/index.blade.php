@extends('layouts.app')

@section('content')
    <!-- Lista Section-->
    <section class="masthead page-section portfolio" id="portfolio">
        <div class="container">
            <!-- Portfolio Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Lista Faktur</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- ALERT -->
            @if (session()->has('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{session()->get('message')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Number</th>
                    <th scope="col">Date</th>
                    <th scope="col">Total amount</th>
                    <th scope="col">Customer</th>
                    <th scope="col">Action</th>
                    <th scope="col"></th>

                </tr>
                </thead>
                <tbody>
                @foreach($invoices as $inv)
                    <tr>
                        <th scope="row">{{$inv->id}}</th>
                        <td>{{$inv->number}}</td>
                        <td>{{$inv->date}}</td>
                        <td>{{$inv->total}}</td>
                        <td>{{$inv->customer->name}}</td>
                        <td><a href="{{route('invoices.edit',['id'=>$inv->id] ) }}" class="btn btn-outline-primary">Edit</a> </td>
                        <!-- <td><a href="{{route('invoices.delete',['id'=>$inv->id] ) }}" class="btn btn-outline-danger">Delete</a> </td> -->
                        <td><form method="POST" action="{{ route('invoices.delete',['id'=>$inv->id]) }}">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-outline-danger">Usuń</button>
                        </form></td>
                        
                    </tr>
                @endforeach
                </tbody>
            </table>


        </div>
    </section>
@endsection
