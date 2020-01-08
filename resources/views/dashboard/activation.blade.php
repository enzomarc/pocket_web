@extends('layouts.dashboard')

@section('styles')
    <link rel="stylesheet" href="/css/activation.css">
@stop

@section('content')
    <div class="container">
        <div class="row" id="header">
            <h3>Activate your business</h3>
            <p>To activate your business, kindly complete the checks below. When you're done, click the "Send Activation Request" button.</p>
        </div>

        <div class="row alert">
            <i class="fa fa-question-circle"></i>
            <div class="row">
                <h6>Need someone else in the company to enter this information?</h6>
                <p><a href="#">Invite an administrator</a> to this account.</p>
            </div>
        </div>

        <div class="row" id="steps">
            <div class="row step completed">
                <div class="one column">
                    <i class="fa fa-check"></i>
                    <span>1</span>
                </div>
                <div class="nine columns">
                    <h5>Personal Information</h5>
                    <span>Please tell us a little about yourself</span>
                </div>
                <div class="two columns" style="display: flex; justify-content: flex-end">
                    <a href="#" class="button size-sm">Update</a>
                </div>
            </div>
            <div class="row step completed">
                <div class="one column">
                    <i class="fa fa-check"></i>
                    <span>2</span>
                </div>
                <div class="nine columns">
                    <h5>Business Information</h5>
                    <span>Please tell us more about your business</span>
                </div>
                <div class="two columns" style="display: flex; justify-content: flex-end">
                    <a href="#" class="button size-sm">Update</a>
                </div>
            </div>
            <div class="row step">
                <div class="one column">
                    <i class="fa fa-check"></i>
                    <span>3</span>
                </div>
                <div class="nine columns">
                    <h5>Verification Documents</h5>
                    <span>The documents we ask for are based on your <a href="#">business profile</a></span>
                </div>
                <div class="two columns" style="display: flex; justify-content: flex-end">
                    <a href="#" class="button button-primary size-sm">Continue</a>
                </div>
            </div>
            <div class="row step">
                <div class="one column">
                    <i class="fa fa-check"></i>
                    <span>4</span>
                </div>
                <div class="nine columns">
                    <h5>Settlement Account</h5>
                    <span>Let us know where to send your payouts to</span>
                </div>
                <div class="two columns" style="display: flex; justify-content: flex-end">
                    <a href="#" class="button button-primary size-sm">Continue</a>
                </div>
            </div>
            <div class="row step">
                <div class="one column">
                    <i class="fa fa-check"></i>
                    <span>5</span>
                </div>
                <div class="nine columns">
                    <h5>Truecaller Verification (Optional)</h5>
                    <span>Increase transaction limits for your business</span>
                </div>
                <div class="two columns" style="display: flex; justify-content: flex-end">
                    <a href="#" class="button button-primary size-sm">Continue</a>
                </div>
            </div>
        </div>

        <div class="row cta">
            <button class="button-success" disabled>Send Activation Request</button>
            <a href="#">Or change business type to <b>Registered Business</b></a>
        </div>
    </div>
@stop