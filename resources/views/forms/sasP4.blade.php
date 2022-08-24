@extends('layouts.homepage')

@section('page-title', 'Exit Interview')
@section('form-active', 'active')

@section('content')

    <div class="container my-3">
        <div class="row mt-5 mb-4">
            <div class="col-md-12">
                <h3>Student Affairs and Services (SAS) Program Page 4</h3>
            </div>
        </div>

        <div class="row mx-4 justify-content-center">
            <div class="col-md-10">
                <form action="">
                    <div class="row box-forms align-items-center">
                        {{-- Fields --}}
                        <div class="col-md-12 text-center my-2">
                            <hr>
                            <h5 class="mb-4"><b>ASSESSMENT OF THE STUDENTS AFFAIRS AND SERVICES (SAS) PROGRAM, PROJECTS AND ACTIVITIES OF THE POLYTECHNIC UNIVERSITY OF THE PHILIPPINES TAGUIG BRANCH</b></h5>
                            <p>Please assess the Student Affairs and Services (SAS) Program, projects and activities of the Polytechnic University of the Philippines Taguig Branch using the scales below: </p>
                            <p><b>[1 - Very Satisfactory] [2 - Satisfactory] [3 - Unsatisfactory] [4 - Very Unsatisfactory]</b></p>
                            <hr>
                        </div>
                    {{-- Section5 Questions --}}
                        {{-- HEALTH SERVICES --}}
                        <div class="col-md-12 my-2">
                            <h3>Health Services</h3>
                            <table class="table align-middle">
                                <thead>
                                  <tr>
                                    <th scope="col" style="width: 550px">Questions</th>
                                    <th scope="col" style="width: 50px">1</th>
                                    <th scope="col" style="width: 50px">2</th>
                                    <th scope="col" style="width: 50px">3</th>
                                    <th scope="col" style="width: 50px">4</th>
                                  </tr>
                                </thead>
                                <tbody>
                                {{-- Q37 - Q42 --}}
                                    {{-- Q37 --}}
                                    <tr>
                                        <td>37. Dissemination of health services program, projects and activities.</td>
                                        <td><input class="form-check-input" type="radio" name="sas_q37" value="1"></td>
                                        <td><input class="form-check-input" type="radio" name="sas_q37" value="2"></td>
                                        <td><input class="form-check-input" type="radio" name="sas_q37" value="3"></td>
                                        <td><input class="form-check-input" type="radio" name="sas_q37" value="4"></td>
                                    </tr>
                                    {{-- Q38 --}}
                                    <tr>
                                        <td>38. Adequacy of medical services.</td>
                                        <td><input class="form-check-input" type="radio" name="sas_q38" value="1"></td>
                                        <td><input class="form-check-input" type="radio" name="sas_q38" value="2"></td>
                                        <td><input class="form-check-input" type="radio" name="sas_q38" value="3"></td>
                                        <td><input class="form-check-input" type="radio" name="sas_q38" value="4"></td>
                                    </tr>
                                    {{-- Q39 --}}
                                    <tr>
                                        <td>39. Adequacy of dental services.</td>
                                        <td><input class="form-check-input" type="radio" name="sas_q39" value="1"></td>
                                        <td><input class="form-check-input" type="radio" name="sas_q39" value="2"></td>
                                        <td><input class="form-check-input" type="radio" name="sas_q39" value="3"></td>
                                        <td><input class="form-check-input" type="radio" name="sas_q39" value="4"></td>
                                    </tr>
                                    {{-- Q40 --}}
                                    <tr>
                                        <td>40. Competence of medical and dental personnel.</td>
                                        <td><input class="form-check-input" type="radio" name="sas_q40" value="1"></td>
                                        <td><input class="form-check-input" type="radio" name="sas_q40" value="2"></td>
                                        <td><input class="form-check-input" type="radio" name="sas_q40" value="3"></td>
                                        <td><input class="form-check-input" type="radio" name="sas_q40" value="4"></td>
                                    </tr>
                                    {{-- Q41 --}}
                                    <tr>
                                        <td>41. Adequacy of medical and dental facilities, equipment and supplies.</td>
                                        <td><input class="form-check-input" type="radio" name="sas_q41" value="1"></td>
                                        <td><input class="form-check-input" type="radio" name="sas_q41" value="2"></td>
                                        <td><input class="form-check-input" type="radio" name="sas_q41" value="3"></td>
                                        <td><input class="form-check-input" type="radio" name="sas_q41" value="4"></td>
                                    </tr>
                                    {{-- Q42 --}}
                                    <tr>
                                        <td>42.  Promptness of medical and dental services.</td>
                                        <td><input class="form-check-input" type="radio" name="sas_q42" value="1"></td>
                                        <td><input class="form-check-input" type="radio" name="sas_q42" value="2"></td>
                                        <td><input class="form-check-input" type="radio" name="sas_q42" value="3"></td>
                                        <td><input class="form-check-input" type="radio" name="sas_q42" value="4"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    {{-- Section6 Questions --}}
                        {{-- GUIDANCE AND COUNSELING SERVICES --}}
                        <div class="col-md-12 my-2">
                            <h3>Guidance and Counseling Services</h3>
                            <table class="table align-middle">
                                <thead>
                                  <tr>
                                    <th scope="col" style="width: 550px">Questions</th>
                                    <th scope="col" style="width: 50px">1</th>
                                    <th scope="col" style="width: 50px">2</th>
                                    <th scope="col" style="width: 50px">3</th>
                                    <th scope="col" style="width: 50px">4</th>
                                  </tr>
                                </thead>
                                <tbody>
                                {{-- Q43 - Q47 --}}
                                    {{-- Q43 --}}
                                    <tr>
                                        <td>43. Appraisal system for student’s attributes, adaptability, and competence.</td>
                                        <td><input class="form-check-input" type="radio" name="sas_q43" value="1"></td>
                                        <td><input class="form-check-input" type="radio" name="sas_q43" value="2"></td>
                                        <td><input class="form-check-input" type="radio" name="sas_q43" value="3"></td>
                                        <td><input class="form-check-input" type="radio" name="sas_q43" value="4"></td>
                                    </tr>
                                    {{-- Q44 --}}
                                    <tr>
                                        <td>44.  Availability of counseling services.</td>
                                        <td><input class="form-check-input" type="radio" name="sas_q44" value="1"></td>
                                        <td><input class="form-check-input" type="radio" name="sas_q44" value="2"></td>
                                        <td><input class="form-check-input" type="radio" name="sas_q44" value="3"></td>
                                        <td><input class="form-check-input" type="radio" name="sas_q44" value="4"></td>
                                    </tr>
                                    {{-- Q45 --}}
                                    <tr>
                                        <td>45.  Maintenance of confidential records by the guidance counselors.</td>
                                        <td><input class="form-check-input" type="radio" name="sas_q45" value="1"></td>
                                        <td><input class="form-check-input" type="radio" name="sas_q45" value="2"></td>
                                        <td><input class="form-check-input" type="radio" name="sas_q45" value="3"></td>
                                        <td><input class="form-check-input" type="radio" name="sas_q45" value="4"></td>
                                    </tr>
                                    {{-- Q46 --}}
                                    <tr>
                                        <td>46.  Availability of counseling rooms.</td>
                                        <td><input class="form-check-input" type="radio" name="sas_q46" value="1"></td>
                                        <td><input class="form-check-input" type="radio" name="sas_q46" value="2"></td>
                                        <td><input class="form-check-input" type="radio" name="sas_q46" value="3"></td>
                                        <td><input class="form-check-input" type="radio" name="sas_q46" value="4"></td>
                                    </tr>
                                    {{-- Q47 --}}
                                    <tr>
                                        <td>47.  Monitoring of the effectiveness of guidance and placement activities.</td>
                                        <td><input class="form-check-input" type="radio" name="sas_q47" value="1"></td>
                                        <td><input class="form-check-input" type="radio" name="sas_q47" value="2"></td>
                                        <td><input class="form-check-input" type="radio" name="sas_q47" value="3"></td>
                                        <td><input class="form-check-input" type="radio" name="sas_q47" value="4"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    {{-- Section7 Questions --}}
                        {{-- FOOD SERVICES  --}}
                        <div class="col-md-12 my-2">
                            <h3>Food Services</h3>
                            <table class="table align-middle">
                                <thead>
                                  <tr>
                                    <th scope="col" style="width: 550px">Questions</th>
                                    <th scope="col" style="width: 50px">1</th>
                                    <th scope="col" style="width: 50px">2</th>
                                    <th scope="col" style="width: 50px">3</th>
                                    <th scope="col" style="width: 50px">4</th>
                                  </tr>
                                </thead>
                                <tbody>
                                {{-- Q48 - Q52 --}}
                                    {{-- Q48 --}}
                                    <tr>
                                        <td>48. Management of safety and sanitary conditions of canteen and food outlets.</td>
                                        <td><input class="form-check-input" type="radio" name="sas_q48" value="1"></td>
                                        <td><input class="form-check-input" type="radio" name="sas_q48" value="2"></td>
                                        <td><input class="form-check-input" type="radio" name="sas_q48" value="3"></td>
                                        <td><input class="form-check-input" type="radio" name="sas_q48" value="4"></td>
                                    </tr>
                                    {{-- Q49 --}}
                                    <tr>
                                        <td>49.  Coordination of the food safety of food services outside the school premises with the local government.</td>
                                        <td><input class="form-check-input" type="radio" name="sas_q49" value="1"></td>
                                        <td><input class="form-check-input" type="radio" name="sas_q49" value="2"></td>
                                        <td><input class="form-check-input" type="radio" name="sas_q49" value="3"></td>
                                        <td><input class="form-check-input" type="radio" name="sas_q49" value="4"></td>
                                    </tr>
                                    {{-- Q50 --}}
                                    <tr>
                                        <td>50.  Nutrition of meals served in the canteen and food outlets.</td>
                                        <td><input class="form-check-input" type="radio" name="sas_q50" value="1"></td>
                                        <td><input class="form-check-input" type="radio" name="sas_q50" value="2"></td>
                                        <td><input class="form-check-input" type="radio" name="sas_q50" value="3"></td>
                                        <td><input class="form-check-input" type="radio" name="sas_q50" value="4"></td>
                                    </tr>
                                    {{-- Q51 --}}
                                    <tr>
                                        <td>51.  Affordability and reasonableness of prices of the meals in the canteen and food outlets.</td>
                                        <td><input class="form-check-input" type="radio" name="sas_q51" value="1"></td>
                                        <td><input class="form-check-input" type="radio" name="sas_q51" value="2"></td>
                                        <td><input class="form-check-input" type="radio" name="sas_q51" value="3"></td>
                                        <td><input class="form-check-input" type="radio" name="sas_q51" value="4"></td>
                                    </tr>
                                    {{-- Q52 --}}
                                    <tr>
                                        <td>52.  Personal hygiene of canteen and food outlets personnel.</td>
                                        <td><input class="form-check-input" type="radio" name="sas_q52" value="1"></td>
                                        <td><input class="form-check-input" type="radio" name="sas_q52" value="2"></td>
                                        <td><input class="form-check-input" type="radio" name="sas_q52" value="3"></td>
                                        <td><input class="form-check-input" type="radio" name="sas_q52" value="4"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        {{-- End Fields --}}
                        <div class="col-md-12 mt-5">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                  <li class="page-item"><a class="page-link" href="{{ route('user.sasP3') }}">Previous</a></li>
                                  <li class="page-item"><a class="page-link" href="{{ route('user.sasP1') }}">1</a></li>
                                  <li class="page-item"><a class="page-link" href="{{ route('user.sasP2') }}">2</a></li>
                                  <li class="page-item"><a class="page-link" href="{{ route('user.sasP3') }}">3</a></li>
                                  <li class="page-item"><a class="page-link active" href="{{ route('user.sasP4') }}">4</a></li>
                                  <li class="page-item"><a class="page-link" href="{{ route('user.sasP5') }}">5</a></li>
                                  <li class="page-item"><a class="page-link" href="{{ route('user.sasP5') }}">Next</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
