@extends('layouts.homepage')

@section('page-title', 'Exit Interview')
@section('form-active', 'active')

@section('content')

    <div class="container my-3">
        <div class="row mt-5 mb-4">
            <div class="col-md-6">
                <h3>Exit Interview Page 5</h3>
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
                    {{-- Section12 Questions --}}
                        {{-- Security Office --}}
                        <div class="col-md-12 my-3">
                            <h3>Security Office</h3>
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
                                        <td><input class="form-check-input" type="radio" name="sec12_q1" value="5"></td>
                                        <td><input class="form-check-input" type="radio" name="sec12_q1" value="4"></td>
                                        <td><input class="form-check-input" type="radio" name="sec12_q1" value="3"></td>
                                        <td><input class="form-check-input" type="radio" name="sec12_q1" value="2"></td>
                                        <td><input class="form-check-input" type="radio" name="sec12_q1" value="1"></td>
                                    </tr>
                                    {{-- Q2 --}}
                                    <tr>
                                        <td>Timeliness of Service</td>
                                        <td><input class="form-check-input" type="radio" name="sec12_q2" value="5"></td>
                                        <td><input class="form-check-input" type="radio" name="sec12_q2" value="4"></td>
                                        <td><input class="form-check-input" type="radio" name="sec12_q2" value="3"></td>
                                        <td><input class="form-check-input" type="radio" name="sec12_q2" value="2"></td>
                                        <td><input class="form-check-input" type="radio" name="sec12_q2" value="1"></td>
                                    </tr>
                                    {{-- Q3 --}}
                                    <tr>
                                        <td>Courtesy of Staff</td>
                                        <td><input class="form-check-input" type="radio" name="sec12_q3" value="5"></td>
                                        <td><input class="form-check-input" type="radio" name="sec12_q3" value="4"></td>
                                        <td><input class="form-check-input" type="radio" name="sec12_q3" value="3"></td>
                                        <td><input class="form-check-input" type="radio" name="sec12_q3" value="2"></td>
                                        <td><input class="form-check-input" type="radio" name="sec12_q3" value="1"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    {{-- Section13 Questions --}}
                        {{-- Janitorial Services --}}
                        <div class="col-md-12 my-3">
                            <h3>Janitorial Services</h3>
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
                                        <td><input class="form-check-input" type="radio" name="sec13_q1" value="5"></td>
                                        <td><input class="form-check-input" type="radio" name="sec13_q1" value="4"></td>
                                        <td><input class="form-check-input" type="radio" name="sec13_q1" value="3"></td>
                                        <td><input class="form-check-input" type="radio" name="sec13_q1" value="2"></td>
                                        <td><input class="form-check-input" type="radio" name="sec13_q1" value="1"></td>
                                    </tr>
                                    {{-- Q2 --}}
                                    <tr>
                                        <td>Timeliness of Service</td>
                                        <td><input class="form-check-input" type="radio" name="sec13_q2" value="5"></td>
                                        <td><input class="form-check-input" type="radio" name="sec13_q2" value="4"></td>
                                        <td><input class="form-check-input" type="radio" name="sec13_q2" value="3"></td>
                                        <td><input class="form-check-input" type="radio" name="sec13_q2" value="2"></td>
                                        <td><input class="form-check-input" type="radio" name="sec13_q2" value="1"></td>
                                    </tr>
                                    {{-- Q3 --}}
                                    <tr>
                                        <td>Courtesy of Staff</td>
                                        <td><input class="form-check-input" type="radio" name="sec13_q3" value="5"></td>
                                        <td><input class="form-check-input" type="radio" name="sec13_q3" value="4"></td>
                                        <td><input class="form-check-input" type="radio" name="sec13_q3" value="3"></td>
                                        <td><input class="form-check-input" type="radio" name="sec13_q3" value="2"></td>
                                        <td><input class="form-check-input" type="radio" name="sec13_q3" value="1"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-12 text-center my-2">
                            <hr>
                            <p>Overall evaluation on the following by writing your choice number on the box provided.</p>
                            <p><b>[5 - Outstanding] [4- Very Satisfactory] [3- Satisfactory] [2- Fair] [1- Poor]</b></p>
                            <hr>
                        </div>
                    {{-- Section14 Questions --}}
                        {{-- Overall --}}
                        <div class="col-md-12 my-3">
                            <h3>Overall</h3>
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
                                        <td>PUP Taguig Systems and Procedures</td>
                                        <td><input class="form-check-input" type="radio" name="sec14_q1" value="5"></td>
                                        <td><input class="form-check-input" type="radio" name="sec14_q1" value="4"></td>
                                        <td><input class="form-check-input" type="radio" name="sec14_q1" value="3"></td>
                                        <td><input class="form-check-input" type="radio" name="sec14_q1" value="2"></td>
                                        <td><input class="form-check-input" type="radio" name="sec14_q1" value="1"></td>
                                    </tr>
                                    {{-- Q2 --}}
                                    <tr>
                                        <td>PUP Taguig Programs/Courses</td>
                                        <td><input class="form-check-input" type="radio" name="sec14_q2" value="5"></td>
                                        <td><input class="form-check-input" type="radio" name="sec14_q2" value="4"></td>
                                        <td><input class="form-check-input" type="radio" name="sec14_q2" value="3"></td>
                                        <td><input class="form-check-input" type="radio" name="sec14_q2" value="2"></td>
                                        <td><input class="form-check-input" type="radio" name="sec14_q2" value="1"></td>
                                    </tr>
                                    {{-- Q3 --}}
                                    <tr>
                                        <td>PUP Taguig Services</td>
                                        <td><input class="form-check-input" type="radio" name="sec14_q3" value="5"></td>
                                        <td><input class="form-check-input" type="radio" name="sec14_q3" value="4"></td>
                                        <td><input class="form-check-input" type="radio" name="sec14_q3" value="3"></td>
                                        <td><input class="form-check-input" type="radio" name="sec14_q3" value="2"></td>
                                        <td><input class="form-check-input" type="radio" name="sec14_q3" value="1"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-12 my-2">
                            <label class="form-label">Give your comments/suggestions/recommendations for the improvement of PUP Taguig.</label>
                            <textarea class="form-control" rows="5"></textarea>
                        </div>
                        <div class="col-md-6 my-2">
                            <label class="form-label">Student’s Printed Name and Signature/Date</label>
                            <input type="file" class="form-control">
                        </div>
                        {{-- End Fields --}}
                        <div class="col-md-12 mt-3 text-center">
                            <button type="submit" class="btn btn-primary" style="width: 150px">Submit</button>
                        </div>
                        <div class="col-md-12 mt-4">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                  <li class="page-item"><a class="page-link" href="{{ route('user.exitInterviewP4') }}">Previous</a></li>
                                  <li class="page-item"><a class="page-link" href="{{ route('user.exitInterviewP1') }}">1</a></li>
                                  <li class="page-item"><a class="page-link" href="{{ route('user.exitInterviewP2') }}">2</a></li>
                                  <li class="page-item"><a class="page-link" href="{{ route('user.exitInterviewP3') }}">3</a></li>
                                  <li class="page-item"><a class="page-link" href="{{ route('user.exitInterviewP4') }}">4</a></li>
                                  <li class="page-item"><a class="page-link active" href="{{ route('user.exitInterviewP5') }}">5</a></li>
                                  <li class="page-item"><a class="page-link disabled" href="#">Next</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
