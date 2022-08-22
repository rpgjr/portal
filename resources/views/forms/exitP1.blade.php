<div class="row align-items-center">
@foreach ($account as $user)
    <div class="col-md-12 my-2">
        <h4>Personal Information</h4>
    </div>
    <input type="hidden" class="form-control" value="{{ $user->userID }}" name="userID">
    <div class="col-md-4 my-2">
        <label class="form-label">Last Name</label>
        <input type="text" class="form-control" name="lastName" value="{{ $user->lastName }}">
    </div>
    <div class="col-md-4 my-2">
        <label class="form-label">First Name</label>
        <input type="text" class="form-control" name="firstName" value="{{ $user->firstName }}">
    </div>
    <div class="col-md-4 my-2">
        <label class="form-label">Middle Name</label>
        <input type="text" class="form-control" name="middleName" value="{{ $user->middleName }}">
    </div>
    <div class="col-md-4 my-2">
        <label class="form-label">Gender: </label>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender"  value="Male"
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
        <input type="text" class="form-control" name="age" value="{{ $user->age }}">
    </div>
    <div class="col-md-4 my-2">
        <label class="form-label">Civil Status</label>
        <select class="form-select" name="civil_status">
            <option selected hidden>Please select one...</option>
            <option value="Single">Single</option>
            <option value="Married">Married</option>
            <option value="Widowed">Widowed</option>
            <option value="Separated">Separated</option>
            <option value="Divorced">Divorced</option>
        </select>
    </div>
    <div class="col-md-6 my-2">
        <label class="form-label">Contact Number</label>
        <input type="text" class="form-control" name="number" value="{{ $user->number }}">
    </div>
    <div class="col-md-6 my-2">
        <label class="form-label">Email</label>
        <input type="text" class="form-control" name="email" value="{{ $user->email }}">
    </div>
    <div class="col-md-6 my-2">
        <label class="form-label">Student Number</label>
        <input type="text" class="form-control" name="studNumber" value="{{ $user->studNumber }}">
    </div>
    <div class="col-md-3 my-2">
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
    <div class="col-md-3 my-2">
        <label class="form-label">Year</label>
        <select class="form-select" name="year">
            <option value="1st Year">1st Year</option>
            <option value="2nd Year">2nd Year</option>
            <option value="3rd Year">3rd Year</option>
            <option value="4th Year">4th Year</option>
            <option value="5th Year">5th Year</option>
        </select>
    </div>
    <div class="col-md-12 my-2">
        <label class="form-label">Address</label>
        <input type="text" class="form-control" name="cityAddress" value="{{ $user->cityAddress }}">
    </div>
    <div class="col-md-12 my-2">
        <label class="form-label">If employed (Position, Company/Company Address, Telephone Number).
            If not employed (Put N/A)
            </label>
        <input type="text" class="form-control" name="emp_status">
    </div>
    <div class="col-md-12 my-2">
        <label class="form-label">Reason/s for leaving PUP (Put a check on the box of your choice/s)</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="reason" value="Graduation">
            <label class="form-check-label">Graduation</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="reason" value="Personal">
            <label class="form-check-label">Personal</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="reason" value="Family">
            <label class="form-check-label">Family</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="reason" value="Academic">
            <label class="form-check-label">Academic</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="reason" value="Financial">
            <label class="form-check-label">Financial</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="reason" value="Work-related">
            <label class="form-check-label">Work-related</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="reason" value="Others">
            <label class="form-check-label">Others</label>
        </div>


        {{-- <div class="form-check">
            <input class="form-check-input" type="checkbox" value="Graduation" name="reason">
            <label class="form-check-label">Graduation</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="Personal" name="reason">
            <label class="form-check-label">Personal</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="Family" name="reason">
            <label class="form-check-label">Family</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="Academic" name="reason">
            <label class="form-check-label">Academic</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="Financial" name="reason">
            <label class="form-check-label">Financial</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="Work-related" name="reason">
            <label class="form-check-label">Work-related</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="Others" name="reason">
            <label class="form-check-label">Others</label>
        </div> --}}
    </div>
@endforeach
</div>
