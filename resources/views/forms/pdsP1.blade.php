<div class="row align-items-center">
    {{-- Fields --}}
    @foreach ($account as $user)
    <div class="col-md-12 my-2">
        <h4>Personal Information</h4>
    </div>
    <input type="hidden" class="form-control" value="{{ $user->userID }}" name="userID">
    <div class="col-md-4 my-2">
        <label class="form-label">Last Name</label>
        <input type="text" class="form-control" value="{{ $user->lastName }}" name="lastName">
    </div>
    <div class="col-md-4 my-2">
        <label class="form-label">First Name</label>
        <input type="text" class="form-control" value="{{ $user->firstName }}" name="firstName">
    </div>
    <div class="col-md-4 my-2">
        <label class="form-label">Middle Name</label>
        <input type="text" class="form-control" value="{{ $user->middleName }}" name="middleName">
    </div>
    <div class="col-md-4 my-2">
        <label class="form-label">Gender: </label>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" value="Male"
                @if ($user->gender == "Male")
                    checked
                @endif>
            <label class="form-check-label">Male</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" value="Female"
                @if ($user->gender == "Female")
                    checked
                @endif>
            <label class="form-check-label">Female</label>
        </div>
    </div>
    <div class="col-md-4 my-2">
        <label class="form-label">Age</label>
        <input type="text" class="form-control" value="{{ $user->age }}" name="age">
    </div>
    <div class="col-md-4 my-2">
        <label class="form-label">Birthday</label>
        <input type="date" class="form-control" value="{{ $user->bday }}" name="bday">
    </div>
    <div class="col-md-6 my-2">
        <label class="form-label">Landline/Mobile Number</label>
        <input type="text" class="form-control" value="{{ $user->number }}" name="number">
    </div>
    <div class="col-md-6 my-2">
        <label class="form-label">Email</label>
        <input type="text" class="form-control" value="{{ $user->email }}" name="email">
    </div>
    <div class="col-md-4 my-2">
        <label class="form-label">Religion</label>
        <input type="text" class="form-control" value="{{ $user->religion }}" name="religion">
    </div>
    <div class="col-md-4 my-2">
        <label class="form-label">Course</label>
        <select class="form-select" name="courseID">
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
        <select class="form-select" name="batch">
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
        <input type="text" class="form-control" value="{{ $user->cityAddress }}" name="cityAddress">
    </div>
    <div class="col-md-12 my-2">
        <label class="form-label">Provincial Address</label>
        <input type="text" class="form-control" placeholder="Provincial Address" name="provincialAddress">
    </div>
    <div class="col-md-12 mt-2">
        <hr style="height:2px;border-width:5px;color:#000000;background-color:#000000">
    </div>
    <div class="col-md-6 my-2">
        <label class="form-label">Father's Name</label>
        <input type="text" class="form-control" placeholder="Father's Name" name="fathersName">
    </div>
    <div class="col-md-6 my-2">
        <label class="form-label">Father's Telephone/Cellphone No.</label>
        <input type="text" class="form-control" placeholder="Father's Contact No." name="fathersNumber">
    </div>
    <div class="col-md-6 my-2">
        <label class="form-label">Mother's Name</label>
        <input type="text" class="form-control" placeholder="Mother's Name" name="mothersName">
    </div>
    <div class="col-md-6 my-2">
        <label class="form-label">Mother's Telephone/Cellphone No.</label>
        <input type="text" class="form-control" placeholder="Mother's Contact No." name="mothersNumber">
    </div>
    @endforeach
</div>
