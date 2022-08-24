@extends('layouts.homepage')

@section('page-title', 'Exit Interview')
@section('form-active', 'active')

@section('content')

    <div class="container my-3">
        <div class="row mt-5 mb-4">
            <div class="col-md-6">
                <h3>Personal Data Sheet Page 1</h3>
            </div>
        </div>

        <div class="row mx-4 justify-content-center">
            <div class="col-md-10">
                <form action="">
                    <div class="row box-forms align-items-center">
                        {{-- Fields --}}
                        @foreach ($account as $user)
                        <div class="col-md-12 my-2">
                            <h4>Personal Information</h4>
                        </div>
                        <div class="col-md-4 my-2">
                            <label class="form-label">Last Name</label>
                            <input type="text" class="form-control" value="{{ $user->lastName }}" name="lastName" id="lastName">
                        </div>
                        <div class="col-md-4 my-2">
                            <label class="form-label">First Name</label>
                            <input type="text" class="form-control" value="{{ $user->firstName }}" name="firstName" id="firstName">
                        </div>
                        <div class="col-md-4 my-2">
                            <label class="form-label">Middle Name</label>
                            <input type="text" class="form-control" value="{{ $user->middleName }}" name="middleName" id="middleName">
                        </div>
                        <div class="col-md-4 my-2">
                            <label class="form-label">Gender: </label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="gender" value="Male"
                                    @if ('Male' == $user->gender)
                                        checked
                                    @endif>
                                <label class="form-check-label">Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="gender" value="Female"
                                    @if ('Female' == $user->gender)
                                        checked
                                    @endif>
                                <label class="form-check-label">Female</label>
                            </div>
                        </div>
                        <div class="col-md-4 my-2">
                            <label class="form-label">Age</label>
                            <input type="text" class="form-control" value="{{ $user->age }}" name="age" id="age">
                        </div>
                        <div class="col-md-4 my-2">
                            <label class="form-label">Birthday</label>
                            <input type="date" class="form-control" value="{{ $user->bday }}" name="bday" id=""bday>
                        </div>
                        <div class="col-md-6 my-2">
                            <label class="form-label">Landline/Mobile Number</label>
                            <input type="text" class="form-control" value="{{ $user->number }}" name="number" id=""number>
                        </div>
                        <div class="col-md-6 my-2">
                            <label class="form-label">Email</label>
                            <input type="text" class="form-control" value="{{ $user->email }}" name="email" id="email">
                        </div>
                        <div class="col-md-4 my-2">
                            <label class="form-label">Religion</label>
                            <input type="text" class="form-control" value="{{ $user->religion }}" name="religion" id=""religion>
                        </div>
                        <div class="col-md-4 my-2">
                            <label class="form-label">Course</label>
                            <select class="form-select" name="courseID" id="courseID">
                                @foreach ($courses as $course)
                                    <option value="{{ $course->courseID }}"
                                        @if (($course->courseID) == $user->courseID)
                                            selected
                                        @endif
                                        >{{ $course->courseID }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4 my-2">
                            <label class="form-label">Year Graduated</label>
                            <select class="form-select" name="batch" id="batch">
                                @for ($i = date('Y'); $i >= 1996; $i--)
                                    <option value="{{ $i }}"
                                        @if (($user->batch) == $i)
                                            selected
                                        @endif
                                        >{{ $i }}</option>
                                @endfor
                            </select>
                        </div>
                        <div class="col-md-12 my-2">
                            <label class="form-label">City Address</label>
                            <input type="text" class="form-control" value="{{ $user->cityAddress }}" name="cityAddress" id="cityAddress">
                        </div>
                        <div class="col-md-12 my-2">
                            <label class="form-label">Provincial Address</label>
                            <input type="text" class="form-control" placeholder="Provincial Address" name="provincialAddress" id="provincialAddress">
                        </div>
                        <div class="col-md-12 mt-2">
                            <hr style="height:2px;border-width:5px;color:#000000;background-color:#000000">
                        </div>
                        <div class="col-md-6 my-2">
                            <label class="form-label">Father's Name</label>
                            <input type="text" class="form-control" placeholder="Father's Name" name="fathersName" id="fathersName">
                        </div>
                        <div class="col-md-6 my-2">
                            <label class="form-label">Father's Telephone/Cellphone No.</label>
                            <input type="text" class="form-control" placeholder="Father's Contact No." name="fathersNumber" id="fathersNumber">
                        </div>
                        <div class="col-md-6 my-2">
                            <label class="form-label">Mother's Name</label>
                            <input type="text" class="form-control" placeholder="Mother's Name" name="mothersName" id="mothersName">
                        </div>
                        <div class="col-md-6 my-2">
                            <label class="form-label">Mother's Telephone/Cellphone No.</label>
                            <input type="text" class="form-control" placeholder="Mother's Contact No." name="mothersNumber" id="mothersNumber">
                        </div>
                        @endforeach
                        {{-- End Fields --}}
                        <div class="col-md-12 mt-5">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                  <li class="page-item"><a class="page-link disabled" href="">Previous</a></li>
                                  <li class="page-item"><a class="page-link" href="{{ route('user.pdsP2') }}" id="btnNext">Next</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
