@extends('layouts.homepage')

@section('page-title', 'Exit Interview')
@section('form-active', 'active')

@section('content')

    <div class="container my-3">
        <div class="row mt-5 mb-4">
            <div class="col-md-6">
                <h3>Exit Interview Page 3</h3>
            </div>
        </div>

        <div class="row mx-4 justify-content-center">
            <div class="col-md-10">
                <form action="">
                    <div class="row box-forms">
                        {{-- Fields --}}
                        <div class="col-md-12 text-center my-2">
                            <hr>
                            <p>Please rate the services (<i>quality and timeliness of service, and courtesy of staff</i> ) provided to you by the following offices. (Please rate by selecting the number corresponding your rating):</p>
                            <p><b>[5 - Outstanding] [4- Very Satisfactory] [3- Satisfactory] [2- Fair] [1- Poor]</b></p>
                            <hr>
                        </div>
                    {{-- Section2 Questions --}}
                        {{-- Director's Office --}}
                        <div class="col-md-12 my-3">
                            <h3>Director's Office</h3>
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
                                        <td>Quality of Service</td>
                                        <td><input class="form-check-input" type="radio" name="sec2_q1" value="5"></td>
                                        <td><input class="form-check-input" type="radio" name="sec2_q1" value="4"></td>
                                        <td><input class="form-check-input" type="radio" name="sec2_q1" value="3"></td>
                                        <td><input class="form-check-input" type="radio" name="sec2_q1" value="2"></td>
                                        <td><input class="form-check-input" type="radio" name="sec2_q1" value="1"></td>
                                    </tr>
                                    {{-- Q2 --}}
                                    <tr>
                                        <td>Timeliness of Service</td>
                                        <td><input class="form-check-input" type="radio" name="sec2_q2" value="5"></td>
                                        <td><input class="form-check-input" type="radio" name="sec2_q2" value="4"></td>
                                        <td><input class="form-check-input" type="radio" name="sec2_q2" value="3"></td>
                                        <td><input class="form-check-input" type="radio" name="sec2_q2" value="2"></td>
                                        <td><input class="form-check-input" type="radio" name="sec2_q2" value="1"></td>
                                    </tr>
                                    {{-- Q3 --}}
                                    <tr>
                                        <td>Courtesy of Staff</td>
                                        <td><input class="form-check-input" type="radio" name="sec2_q3" value="5"></td>
                                        <td><input class="form-check-input" type="radio" name="sec2_q3" value="4"></td>
                                        <td><input class="form-check-input" type="radio" name="sec2_q3" value="3"></td>
                                        <td><input class="form-check-input" type="radio" name="sec2_q3" value="2"></td>
                                        <td><input class="form-check-input" type="radio" name="sec2_q3" value="1"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    {{-- Section3 Questions --}}
                        {{-- Office of the Head of Academic Programs --}}
                        <div class="col-md-12 my-3">
                            <h3>Office of the Head of Academic Programs</h3>
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
                                        <td>Quality of Service</td>
                                        <td><input class="form-check-input" type="radio" name="sec3_q1" value="5"></td>
                                        <td><input class="form-check-input" type="radio" name="sec3_q1" value="4"></td>
                                        <td><input class="form-check-input" type="radio" name="sec3_q1" value="3"></td>
                                        <td><input class="form-check-input" type="radio" name="sec3_q1" value="2"></td>
                                        <td><input class="form-check-input" type="radio" name="sec3_q1" value="1"></td>
                                    </tr>
                                    {{-- Q2 --}}
                                    <tr>
                                        <td>Timeliness of Service</td>
                                        <td><input class="form-check-input" type="radio" name="sec3_q2" value="5"></td>
                                        <td><input class="form-check-input" type="radio" name="sec3_q2" value="4"></td>
                                        <td><input class="form-check-input" type="radio" name="sec3_q2" value="3"></td>
                                        <td><input class="form-check-input" type="radio" name="sec3_q2" value="2"></td>
                                        <td><input class="form-check-input" type="radio" name="sec3_q2" value="1"></td>
                                    </tr>
                                    {{-- Q3 --}}
                                    <tr>
                                        <td>Courtesy of Staff</td>
                                        <td><input class="form-check-input" type="radio" name="sec3_q3" value="5"></td>
                                        <td><input class="form-check-input" type="radio" name="sec3_q3" value="4"></td>
                                        <td><input class="form-check-input" type="radio" name="sec3_q3" value="3"></td>
                                        <td><input class="form-check-input" type="radio" name="sec3_q3" value="2"></td>
                                        <td><input class="form-check-input" type="radio" name="sec3_q3" value="1"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    {{-- Section4 Questions --}}
                        {{-- Administrative Office --}}
                        <div class="col-md-12 my-3">
                            <h3>Administrative Office</h3>
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
                                        <td>Quality of Service</td>
                                        <td><input class="form-check-input" type="radio" name="sec4_q1" value="5"></td>
                                        <td><input class="form-check-input" type="radio" name="sec4_q1" value="4"></td>
                                        <td><input class="form-check-input" type="radio" name="sec4_q1" value="3"></td>
                                        <td><input class="form-check-input" type="radio" name="sec4_q1" value="2"></td>
                                        <td><input class="form-check-input" type="radio" name="sec4_q1" value="1"></td>
                                    </tr>
                                    {{-- Q2 --}}
                                    <tr>
                                        <td>Timeliness of Service</td>
                                        <td><input class="form-check-input" type="radio" name="sec4_q2" value="5"></td>
                                        <td><input class="form-check-input" type="radio" name="sec4_q2" value="4"></td>
                                        <td><input class="form-check-input" type="radio" name="sec4_q2" value="3"></td>
                                        <td><input class="form-check-input" type="radio" name="sec4_q2" value="2"></td>
                                        <td><input class="form-check-input" type="radio" name="sec4_q2" value="1"></td>
                                    </tr>
                                    {{-- Q3 --}}
                                    <tr>
                                        <td>Courtesy of Staff</td>
                                        <td><input class="form-check-input" type="radio" name="sec4_q3" value="5"></td>
                                        <td><input class="form-check-input" type="radio" name="sec4_q3" value="4"></td>
                                        <td><input class="form-check-input" type="radio" name="sec4_q3" value="3"></td>
                                        <td><input class="form-check-input" type="radio" name="sec4_q3" value="2"></td>
                                        <td><input class="form-check-input" type="radio" name="sec4_q3" value="1"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    {{-- Section5 Questions --}}
                        {{-- Accounting/Cashier’s Office --}}
                        <div class="col-md-12 my-3">
                            <h3>Accounting/Cashier’s Office</h3>
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
                                        <td>Quality of Service</td>
                                        <td><input class="form-check-input" type="radio" name="sec5_q1" value="5"></td>
                                        <td><input class="form-check-input" type="radio" name="sec5_q1" value="4"></td>
                                        <td><input class="form-check-input" type="radio" name="sec5_q1" value="3"></td>
                                        <td><input class="form-check-input" type="radio" name="sec5_q1" value="2"></td>
                                        <td><input class="form-check-input" type="radio" name="sec5_q1" value="1"></td>
                                    </tr>
                                    {{-- Q2 --}}
                                    <tr>
                                        <td>Timeliness of Service</td>
                                        <td><input class="form-check-input" type="radio" name="sec5_q2" value="5"></td>
                                        <td><input class="form-check-input" type="radio" name="sec5_q2" value="4"></td>
                                        <td><input class="form-check-input" type="radio" name="sec5_q2" value="3"></td>
                                        <td><input class="form-check-input" type="radio" name="sec5_q2" value="2"></td>
                                        <td><input class="form-check-input" type="radio" name="sec5_q2" value="1"></td>
                                    </tr>
                                    {{-- Q3 --}}
                                    <tr>
                                        <td>Courtesy of Staff</td>
                                        <td><input class="form-check-input" type="radio" name="sec5_q3" value="5"></td>
                                        <td><input class="form-check-input" type="radio" name="sec5_q3" value="4"></td>
                                        <td><input class="form-check-input" type="radio" name="sec5_q3" value="3"></td>
                                        <td><input class="form-check-input" type="radio" name="sec5_q3" value="2"></td>
                                        <td><input class="form-check-input" type="radio" name="sec5_q3" value="1"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    {{-- Section6 Questions --}}
                        {{-- Office of Student Services/Scholarship --}}
                        <div class="col-md-12 my-3">
                            <h3>Office of Student Services/Scholarship</h3>
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
                                        <td>Quality of Service</td>
                                        <td><input class="form-check-input" type="radio" name="sec6_q1" value="5"></td>
                                        <td><input class="form-check-input" type="radio" name="sec6_q1" value="4"></td>
                                        <td><input class="form-check-input" type="radio" name="sec6_q1" value="3"></td>
                                        <td><input class="form-check-input" type="radio" name="sec6_q1" value="2"></td>
                                        <td><input class="form-check-input" type="radio" name="sec6_q1" value="1"></td>
                                    </tr>
                                    {{-- Q2 --}}
                                    <tr>
                                        <td>Timeliness of Service</td>
                                        <td><input class="form-check-input" type="radio" name="sec6_q2" value="5"></td>
                                        <td><input class="form-check-input" type="radio" name="sec6_q2" value="4"></td>
                                        <td><input class="form-check-input" type="radio" name="sec6_q2" value="3"></td>
                                        <td><input class="form-check-input" type="radio" name="sec6_q2" value="2"></td>
                                        <td><input class="form-check-input" type="radio" name="sec6_q2" value="1"></td>
                                    </tr>
                                    {{-- Q3 --}}
                                    <tr>
                                        <td>Courtesy of Staff</td>
                                        <td><input class="form-check-input" type="radio" name="sec6_q3" value="5"></td>
                                        <td><input class="form-check-input" type="radio" name="sec6_q3" value="4"></td>
                                        <td><input class="form-check-input" type="radio" name="sec6_q3" value="3"></td>
                                        <td><input class="form-check-input" type="radio" name="sec6_q3" value="2"></td>
                                        <td><input class="form-check-input" type="radio" name="sec6_q3" value="1"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        {{-- End Fields --}}
                        <div class="col-md-12 mt-5">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                  <li class="page-item"><a class="page-link" href="{{ route('user.exitInterviewP2') }}">Previous</a></li>
                                  <li class="page-item"><a class="page-link" href="{{ route('user.exitInterviewP1') }}">1</a></li>
                                  <li class="page-item"><a class="page-link" href="{{ route('user.exitInterviewP2') }}">2</a></li>
                                  <li class="page-item"><a class="page-link active" href="{{ route('user.exitInterviewP3') }}">3</a></li>
                                  <li class="page-item"><a class="page-link" href="{{ route('user.exitInterviewP4') }}">4</a></li>
                                  <li class="page-item"><a class="page-link" href="{{ route('user.exitInterviewP5') }}">5</a></li>
                                  <li class="page-item"><a class="page-link" href="{{ route('user.exitInterviewP4') }}">Next</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
