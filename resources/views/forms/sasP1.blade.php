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
        <label class="form-label">Stakeholder</label>
        <select class="form-select" aria-label="Default select example" name="stakeholder">
            <option value="Student">Student</option>
            <option value="Faculty">Faculty</option>
            <option value="Support Staff">Support Staff</option>
            <option value="School Administrator">School Administrator</option>
        </select>
    </div>
    <div class="col-md-8 my-2">
        <label class="form-label">Email</label>
        <input type="text" class="form-control" name="email" value="{{ $user->email }}">
    </div>
    <div class="col-md-4 my-2">
        <label class="form-label">Number of Semesters with PUP</label>
        <select class="form-select" aria-label="Default select example" name="semesters">
            <option value="1 or less than 1">1 or less than 1</option>
            <option value="2 – 4">2 – 4</option>
            <option value="5 – 7">5 – 7</option>
            <option value="8 or more">8 or more</option>
        </select>
    </div>
@endforeach
</div>
