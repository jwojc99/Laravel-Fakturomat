@extends('layouts.app')

@section('content')


<!-- Contact Section-->
<section class="masthead page-section" id="contact">
    <div class="container">
        <!-- Contact Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Dodaj fakture</h2>
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
                <form action="{{route('invoices.store') }}" method="POST" id="contactForm" name="sentMessage" novalidate="novalidate">
                    {{csrf_field()}}
                    <div class="control-group">
                    <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Wybierz klienta</label>

                        <select name="customer" class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                            <option selected>Wybierz...</option>
                            @foreach (\App\Models\Customer::all() as $customer)
                                <option value={{$customer->id}}>{{$customer->name}}</option>
                            @endforeach
                        </select>
                        
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Invoice Number</label>
                            <input class="form-control" id="number" name="number" type="text" placeholder="Number" required="required" data-validation-required-message="Please enter number." />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Date</label>
                            <input class="form-control" id="date" name="date" type="date" placeholder="Date" required="required" data-validation-required-message="Please enter date." />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Total Amount</label>
                            <input class="form-control" id="total" name="total" type="text" placeholder="Total amount" required="required" data-validation-required-message="Please enter total amount." />
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
