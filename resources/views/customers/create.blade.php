@extends('layouts.app')

@section('content')


<!-- Contact Section-->
<section class="masthead page-section" id="contact">
    <div class="container">
        <!-- Contact Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Dodaj klienta</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Contact Section Form-->
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19.-->
                <form action="{{route('customers.store') }}" method="POST" id="contactForm" name="sentMessage" novalidate="novalidate">
                    {{csrf_field()}}
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Nazwa klienta </label>
                            <input class="form-control" id="name" name="name" value="{{ old('name')}}" type="text" placeholder="Nazwa" data-validation-required-message="Please enter name." />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Adres</label>
                            <input class="form-control" id="address" name="address" value="{{ old('address')}}" type="text" placeholder="Adres" data-validation-required-message="Please enter address." />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>NIP </label>
                            <input class="form-control" id="nip" name="nip" value="{{ old('nip')}}" type="text" placeholder="NIP" required="required" data-validation-required-message="Please enter NIP." />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br />
                    <div id="success"></div>
                    <div class="form-group"><button class="btn btn-primary btn-xl" id="sendMessageButton" type="submit">Send</button></div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
