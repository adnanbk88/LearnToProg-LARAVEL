@extends('layouts.master')
@section('content')
        <!-- SHOWCASE SECTION -->
        <section id="about-page">
            <div class="container">
                <h1>Contact us</h1>
                <div class="row">
                    <div class="col-md-8 mx-auto">
                        <form action="" method="post">
                            <div class="form-group">
                                <input type="text" placeholder="Name" name="name" class="input">
                                <input type="email" placeholder="Email" name="email" class="input">
                                <textarea name="message" class="input" rows="6"></textarea>
                                <button class="send-btn">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
@endsection