@extends('layout')
@section('title')
    Add A MEMBER!
@endsection
@section('content')

    <div class="container px-5 my-5">
        <form id="contactForm" method="post" action="{{ route('members.store') }}">
            @csrf
            <div class="form-floating mb-3">
                <input class="form-control" id="name" type="text" placeholder="Name" name="name" style="height: 10rem;" data-sb-validations="required"></input>
                <label for="name">Name</label>
                <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" id="firstName" type="text" placeholder="FirstName" name="firstname" style="height: 10rem;" data-sb-validations="required"></input>
                <label for="firstName">FirstName</label>
                <div class="invalid-feedback" data-sb-feedback="firstName:required">FirstName is required.</div>
            </div>
{{--            <div class="mb-3">--}}
{{--                <label class="form-label d-block">Geslacht</label>--}}
{{--                <div class="form-check form-check-inline">--}}
{{--                    <input class="form-check-input" id="male" type="radio" geslacht="geslacht" name="geslacht" data-sb-validations="" />--}}
{{--                    <label class="form-check-label" for="male">Male</label>--}}
{{--                </div>--}}
{{--                <div class="form-check form-check-inline">--}}
{{--                    <input class="form-check-input" id="female" type="radio"  name="geslacht" data-sb-validations="" />--}}
{{--                    <label class="form-check-label" for="female">Female</label>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="form-floating mb-3">--}}
{{--                <input class="form-control" id="dateOfBirth" type="text" placeholder="Date of Birth" data-sb-validations="required" />--}}
{{--                <label for="dateOfBirth">Date of Birth</label>--}}
{{--                <div class="invalid-feedback" data-sb-feedback="dateOfBirth:required">Date of Birth is required.</div>--}}
{{--            </div>--}}
{{--            <div class="mb-3">--}}
{{--                <label class="form-label d-block">Group</label>--}}
{{--                <div class="form-check form-check-inline">--}}
{{--                    <input class="form-check-input" id="teacher" type="radio" name="group" data-sb-validations="" />--}}
{{--                    <label class="form-check-label" for="teacher">Teacher</label>--}}
{{--                </div>--}}
{{--                <div class="form-check form-check-inline">--}}
{{--                    <input class="form-check-input" id="member" type="radio" name="group" data-sb-validations="" />--}}
{{--                    <label class="form-check-label" for="member">Member</label>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="form-floating mb-3">--}}
{{--                <input class="form-control" id="emailAddress" type="email" placeholder="Email Address" name="email" data-sb-validations="required,email" />--}}
{{--                <label for="emailAddress">Email Address</label>--}}
{{--                <div class="invalid-feedback" data-sb-feedback="emailAddress:required">Email Address is required.</div>--}}
{{--                <div class="invalid-feedback" data-sb-feedback="emailAddress:email">Email Address Email is not valid.</div>--}}
{{--            </div>--}}
{{--            <div class="form-floating mb-3">--}}
{{--                <select class="form-select" id="level" aria-label="Level">--}}
{{--                    <option value="6Dan">6Dan</option>--}}
{{--                    <option value="5Dan">5Dan</option>--}}
{{--                    <option value="4Dan">4Dan</option>--}}
{{--                    <option value="3Dan">3Dan</option>--}}
{{--                    <option value="2Dan">2Dan</option>--}}
{{--                    <option value="1Dan">1Dan</option>--}}
{{--                    <option value="1Kyu">1Kyu</option>--}}
{{--                    <option value="2Kyu">2Kyu</option>--}}
{{--                    <option value="3Kyu">3Kyu</option>--}}
{{--                    <option value="4Kyu">4Kyu</option>--}}
{{--                    <option value="5Kyu">5Kyu</option>--}}
{{--                    <option value="6Kyu">6Kyu</option>--}}
{{--                </select>--}}
{{--                <label for="level">Level</label>--}}
{{--            </div>--}}

            <div class="d-none" id="submitSuccessMessage">
                <div class="text-center mb-3">
                    <div class="fw-bolder">Form submission successful!</div>
                </div>
            </div>
            <div class="d-none" id="submitErrorMessage">
                <div class="text-center text-danger mb-3">Error sending message!</div>
            </div>
            <div class="d-grid">
                <button class="btn btn-primary btn-lg" id="submitButton" type="submit">Submit</button>
            </div>
        </form>
    </div>



@endsection
