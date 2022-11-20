@extends('layout.main')
@section('body')
<div class="register">
    <div class="register-form">
        <form action="">
            <div class="row align-items-center pt-4 pb-3">
                <div class="col-md-3 ps-5">
                    <h6 class="mb-0">Name</h6>
                </div>
                <div class="col-md-9 pe-5">
                    <input type="text" name="name">
                </div>
            </div>
            <div class="row align-items-center pt-4 pb-3">
                <div class="col-md-3 ps-5">
                    <h6 class="mb-0">Username</h6>
                </div>
                <div class="col-md-9 pe-5">
                    <input type="text" name="username">
                </div>
            </div>
            <div class="row align-items-center pt-4 pb-3">
                <div class="col-md-3 ps-5">
                    <h6 class="mb-0">Email</h6>
                </div>
                <div class="col-md-9 pe-5">
                    <input type="email" name="email">
                </div>
            </div>
            <div class="row align-items-center pt-4 pb-3">
                <div class="col-md-3 ps-5">
                    <h6 class="mb-0">Phone</h6>
                </div>
                <div class="col-md-9 pe-5">
                    <input type="number" name="phone" min="0">
                </div>
            </div>
        </form>
    </div>
</div>
@endsection()