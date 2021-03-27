@extends('layouts.app')

@section('content')
    <!-- Lista Section-->
    <section class="masthead page-section portfolio" id="portfolio">
        <div class="container">
            <!-- Portfolio Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Lista Klientów</h2>
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
                    <th scope="col">Nazwa klienta</th>
                    <th scope="col">Adres</th>
                    <th scope="col">NIP</th>
                    <th scope="col">Action</th>
                    <th scope="col"></th>

                </tr>
                </thead>
                <tbody>
                @foreach($customers as $customer)
                    <tr>
                        <th scope="row">{{$customer->id}}</th>
                        <td><a href="{{route('customers.show',['klienci'=>$customer->id] ) }}">{{$customer->name}}</a> </td>
                        <td>{{$customer->address}}</td>
                        <td>{{$customer->nip}}</td>
                        <td><a href="{{route('customers.edit',['klienci'=>$customer->id] ) }}" class="btn btn-outline-primary">Edit</a> </td>
                        <!-- <td><a href="{{route('customers.destroy',['klienci'=>$customer->id] ) }}" class="btn btn-outline-danger">Delete</a> </td> -->
                        <td><form method="POST" action="{{ route('customers.destroy',['klienci'=>$customer->id]) }}">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-outline-danger">Delete</button>
                        </form></td>
                        <!-- <td><a href="{{route('customers.destroy',['klienci'=>$customer->id] ) }}" class="btn btn-outline-danger">Delete</a> </td> -->
                    </tr>
                @endforeach
                </tbody>
            </table>


        </div>
    </section>
@endsection
