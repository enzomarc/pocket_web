@extends('layouts.dashboard')

@section('styles')
    <link rel="stylesheet" href="/css/getting-started.css">
@stop

@section('content')
    <div class="row" id="header">
        <h3>Hi, Enzo - Welcome to Pocket!</h3>
        <p>Your business is currently in Test Mode - this means there're a couple more things to finish up before customers can start paying you online. The guides belows will show you how to do this.</p>
    </div>

    <div class="row" id="steps">
        <div class="four columns">
            <div class="row">
                <i class="fa fa-credit-card"></i>
            </div>
            <div class="row">
                <h6>Activate Your Business</h6>
                <p>2 of 4 tasks completed</p>
            </div>
            <div class="row">
                <a href="{{ route('dashboard.activation') }}" class="button">Continue</a>
            </div>
        </div>
        <div class="four columns">
            <div class="row">
                <i class="fa fa-wordpress"></i>
            </div>
            <div class="row">
                <h6>Setup Pocket</h6>
                <p>Learn how to use Pocket with your business</p>
            </div>
            <div class="row">
                <button>Show me</button>
            </div>
        </div>
        <div class="four columns">
            <div class="row">
                <i class="fa fa-camera-retro"></i>
            </div>
            <div class="row">
                <h6>Dashboard Tour</h6>
                <p>See what you can do with Pocket</p>
            </div>
            <div class="row">
                <button>Start</button>
            </div>
        </div>
    </div>
    <div class="row" id="support">
        <a href="#">Need help incorporating your business?</a>
    </div>
    <hr>
    <div class="row" id="developers">
        <div class="two columns">
            <h6>Shortcuts for Developers</h6>
        </div>
        <div class="ten columns">
            <div class="six columns">
                <h6>API Docs</h6>
                <p>Our documentation contains the Libraries, APIs, and SDKs you need to integrate Pocket in your website or app.</p>
                <a href="#" class="button button-primary">Go to docs</a>
            </div>
            <div class="six columns">
                <h6>Your Test Keys</h6>
                <p id="also">Also available in <a href="settings/developer">settings/developer</a></p>
                <div class="labeled-control">
                    <span class="before">Test Secret</span>
                    <input type="text" name="secret" id="secret" readonly value="sk_test_132ds1f546fzd266f1z6fz456ze4fez16y16">
                </div>
                <div class="labeled-control">
                    <span class="before">Test Public</span>
                    <input type="text" name="public" id="public" readonly value="pk_test_654ge8r7g4fd64h654ze89r74ezr546ezr45">
                </div>
            </div>
        </div>
    </div>
@stop
