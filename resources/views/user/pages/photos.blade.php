@extends('user.layouts.master')
@section('content')
    <div class="col-10">
        <div class="border-bottom border-top border-primary bg-light py-5 px-4">
            <div class="text-center">
                <small
                    class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Book
                    Us</small>
                <h1 class="display-5 mb-5">Where you want Our Services</h1>
            </div>
            <div class="row g-4 form">
                <div class="col-lg-4 col-md-6">
                    <select class="form-select border-primary p-2" aria-label="Default select example">
                        <option selected>Davlat</option>
                        <option value="1">USA</option>
                        <option value="2">UK</option>
                        <option value="3">India</option>
                    </select>
                </div>
                <div class="col-lg-4 col-md-6">
                    <select class="form-select border-primary p-2" aria-label="Default select example">
                        <option selected>Barcha Mualliflar</option>
                        <option value="1">Depend On Country</option>
                        <option value="2">UK</option>
                        <option value="3">India</option>
                    </select>
                </div>
                <div class="col-lg-4 col-md-6">
                    <select class="form-select border-primary p-2" aria-label="Default select example">
                        <option selected>Kutubxona</option>
                        <option value="1">Depend On Country</option>
                        <option value="2">UK</option>
                        <option value="3">India</option>
                    </select>
                </div>
                <div class="col-lg-4 col-md-6">
                    <select class="form-select border-primary p-2" aria-label="Default select example">
                        <option selected>Xususiyatlarga Havola</option>
                        <option value="1">Event Type</option>
                        <option value="2">Big Event</option>
                        <option value="3">Small Event</option>
                    </select>
                </div>
                <div class="col-lg-4 col-md-6">
                    <select class="form-select border-primary p-2" aria-label="Default select example">
                        <option selected>Identifikatsiya Raqami</option>
                        <option value="1">100-200</option>
                        <option value="2">300-400</option>
                        <option value="3">500-600</option>
                        <option value="4">700-800</option>
                        <option value="5">900-1000</option>
                        <option value="6">1000+</option>
                    </select>
                </div>

                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-primary px-5 py-3 rounded-pill">Qidirish</button>
                </div>
            </div>
        </div>
    </div>

@endsection