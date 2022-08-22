@extends('layouts.homepage')

@section('page-title', 'Exit Interview')
@section('form-active', 'active')

@section('content')

    <div class="container my-3">
        <div class="row mt-5 mb-4">
            <div class="col-md-6">
                <h3>Exit Interview Page 2</h3>
            </div>
        </div>

        <div class="row mx-4 justify-content-center">
            <div class="col-md-10">
                <form action="">
                    <div class="row box-forms">
                        {{-- Fields --}}
                        <div class="col-md-12 text-center my-2">
                            <hr>
                            <p>Please rate the following items by selecting your choice number on the box provided</p>
                            <p><b>[5 - Outstanding] [4- Very Satisfactory] [3- Satisfactory] [2- Fair] [1- Poor]</b></p>
                            <hr>
                        </div>
                        {{-- Section1 Questions --}}
                        <div class="col-md-12 my-2">
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col" style="width: 550px">Questions</th>
                                    <th scope="col" style="width: 50px">5</th>
                                    <th scope="col" style="width: 50px">4</th>
                                    <th scope="col" style="width: 50px">3</th>
                                    <th scope="col" style="width: 50px">2</th>
                                    <th scope="col" style="width: 50px">1</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    {{-- Q1 --}}
                                    <tr>
                                        <td>Academic Standard</td>
                                        <td><input class="form-check-input" type="radio" name="sec1_q1" value="5"></td>
                                        <td><input class="form-check-input" type="radio" name="sec1_q1" value="4"></td>
                                        <td><input class="form-check-input" type="radio" name="sec1_q1" value="3"></td>
                                        <td><input class="form-check-input" type="radio" name="sec1_q1" value="2"></td>
                                        <td><input class="form-check-input" type="radio" name="sec1_q1" value="1"></td>
                                    </tr>
                                    {{-- Q2 --}}
                                    <tr>
                                        <td>School Activities</td>
                                        <td><input class="form-check-input" type="radio" name="sec1_q2" value="5"></td>
                                        <td><input class="form-check-input" type="radio" name="sec1_q2" value="4"></td>
                                        <td><input class="form-check-input" type="radio" name="sec1_q2" value="3"></td>
                                        <td><input class="form-check-input" type="radio" name="sec1_q2" value="2"></td>
                                        <td><input class="form-check-input" type="radio" name="sec1_q2" value="1"></td>
                                    </tr>
                                    {{-- Q3 --}}
                                    <tr>
                                        <td>Faculty/Teacher</td>
                                        <td><input class="form-check-input" type="radio" name="sec1_q3" value="5"></td>
                                        <td><input class="form-check-input" type="radio" name="sec1_q3" value="4"></td>
                                        <td><input class="form-check-input" type="radio" name="sec1_q3" value="3"></td>
                                        <td><input class="form-check-input" type="radio" name="sec1_q3" value="2"></td>
                                        <td><input class="form-check-input" type="radio" name="sec1_q3" value="1"></td>
                                    </tr>
                                    {{-- Q4 --}}
                                    <tr>
                                        <td>Classmates</td>
                                        <td><input class="form-check-input" type="radio" name="sec1_q4" value="5"></td>
                                        <td><input class="form-check-input" type="radio" name="sec1_q4" value="4"></td>
                                        <td><input class="form-check-input" type="radio" name="sec1_q4" value="3"></td>
                                        <td><input class="form-check-input" type="radio" name="sec1_q4" value="2"></td>
                                        <td><input class="form-check-input" type="radio" name="sec1_q4" value="1"></td>
                                    </tr>
                                    {{-- Q5 --}}
                                    <tr>
                                        <td>Facilities</td>
                                        <td><input class="form-check-input" type="radio" name="sec1_q5" value="5"></td>
                                        <td><input class="form-check-input" type="radio" name="sec1_q5" value="4"></td>
                                        <td><input class="form-check-input" type="radio" name="sec1_q5" value="3"></td>
                                        <td><input class="form-check-input" type="radio" name="sec1_q5" value="2"></td>
                                        <td><input class="form-check-input" type="radio" name="sec1_q5" value="1"></td>
                                    </tr>
                                    {{-- Q6 --}}
                                    <tr>
                                        <td>Course Taken</td>
                                        <td><input class="form-check-input" type="radio" name="sec1_q6" value="5"></td>
                                        <td><input class="form-check-input" type="radio" name="sec1_q6" value="4"></td>
                                        <td><input class="form-check-input" type="radio" name="sec1_q6" value="3"></td>
                                        <td><input class="form-check-input" type="radio" name="sec1_q6" value="2"></td>
                                        <td><input class="form-check-input" type="radio" name="sec1_q6" value="1"></td>
                                    </tr>
                                    {{-- Q7 --}}
                                    <tr>
                                        <td>Student Organization/s</td>
                                        <td><input class="form-check-input" type="radio" name="sec1_q7" value="5"></td>
                                        <td><input class="form-check-input" type="radio" name="sec1_q7" value="4"></td>
                                        <td><input class="form-check-input" type="radio" name="sec1_q7" value="3"></td>
                                        <td><input class="form-check-input" type="radio" name="sec1_q7" value="2"></td>
                                        <td><input class="form-check-input" type="radio" name="sec1_q7" value="1"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        {{-- End Fields --}}
                        <div class="col-md-12 mt-5">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                  <li class="page-item"><a class="page-link" href="{{ route('user.exitInterviewP1') }}">Previous</a></li>
                                  <li class="page-item"><a class="page-link" href="{{ route('user.exitInterviewP1') }}">1</a></li>
                                  <li class="page-item"><a class="page-link active" href="{{ route('user.exitInterviewP2') }}">2</a></li>
                                  <li class="page-item"><a class="page-link" href="{{ route('user.exitInterviewP3') }}">3</a></li>
                                  <li class="page-item"><a class="page-link" href="{{ route('user.exitInterviewP4') }}">4</a></li>
                                  <li class="page-item"><a class="page-link" href="{{ route('user.exitInterviewP5') }}">5</a></li>
                                  <li class="page-item"><a class="page-link" href="{{ route('user.exitInterviewP3') }}">Next</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
