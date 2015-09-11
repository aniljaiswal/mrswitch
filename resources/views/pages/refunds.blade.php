@extends('pages.static-layout')

@section('content')

    <div class="page-wrapper custom-nav static-pages">
        @include('partials.nav')

        <section class="header-6 v-center">

            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="text-center">CANCELLATIONS AND REFUNDS</h3>
                        <br>
                        <br>
                        <h6 class="last-updated">Last Updated on August 3rd, 2015</h6>

                        <p>In case of dissatisfaction from our services, clients have the liberty to cancel their
                            subscription and request a refund from us. Our Policy for the cancellation and refund will be as follows:</p>
                        <dl>
                            <dt>Cancellation Policy</dt>
                            <dd>
                                Cancellation of service renewals for electrical services must be made at least seven 7
                                business days prior to the end of the current service period.
                                <br/>
                                <br/>
                                Requests received later than seven 7 business days prior to the end of the current
                                service period will be treated as cancellation of services for the next service period.
                            </dd>
                            <dt>Refund Policy</dt>
                            <dd>
                                We will do our best to provide excellent services to our clients.
                                <br/>
                                <br/>
                                In case any client is not completely satisfied with our services we can provide a
                                refund within 30 days from the date of start of the subscription. The final refunds
                                will be made after deducting the Service Tax and the Hourly charges for the services
                                completed by us.
                                <br/>
                                <br/>
                                If paid by credit card, refunds will be issued to the original credit card provided at
                                the time of purchase and in case of Payment Gateway payments refund will be made
                                to the same bank account through which the purchase was made.
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>

        </section>

        @include('partials.footer')
    </div>

@stop
