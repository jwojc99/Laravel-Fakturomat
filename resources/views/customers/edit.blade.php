@extends('layouts.app')

@section('content')


    <!-- Contact Section-->
    <section class="masthead page-section" id="contact">
        <div class="container">
            <!-- Contact Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Edytujesz klienta {{$customer->id}}</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Contact Section Form-->
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19.-->
                    <form action="{{route('customers.update',['klienci'=>$customer->id]) }}" method="POST" id="contactForm" name="sentMessage" novalidate="novalidate">
                        {{csrf_field()}}
                        @method('PUT')
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                <label>Nazwa klienta</label>
                                <input value="{{$customer->name}}" class="form-control" id="name" name="name" type="text" placeholder="Nazwa" required="required" data-validation-required-message="Please enter name." />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                <label>Adres</label>
                                <input value="{{$customer->address}}" class="form-control" id="address" name="address" type="text" placeholder="Adres" required="required" data-validation-required-message="Please enter address." />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                <label> NIP </label>
                                <input value="{{$customer->nip}}" class="form-control" id="nip" name="nip" type="text" placeholder="NIP" required="required" data-validation-required-message="Please enter NIP." />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br />
                        <div id="success"></div>
                        <div class="form-group"><button class="btn btn-primary btn-xl" id="sendMessageButton" type="submit">Update</button></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
