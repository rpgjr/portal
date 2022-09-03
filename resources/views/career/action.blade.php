{{-- Edit modal --}}
<div class="modal fade" id="editModal{{ $job->careerID }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" style="max-width: 50%">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Job</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
            <div class="modal-body">
                {!! Form::model($job, [ 'method' => 'patch','route' => ['career.update', $job->careerID] ]) !!}
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Job Name</label>
                  <input type="text" class="form-control" name="job_name" value="{{ $job->job_name }}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Company Name</label>
                    <input type="text" class="form-control" name="company" value="{{ $job->company }}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Salary</label>
                    <input type="text" class="form-control" name="salary" value="{{ $job->salary }}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Description</label>
                    <textarea class="form-control" rows="5" name="description" style="white-space: pre-wrap">{{ $job->description }}</textarea>
                </div>
                <div class="mb-3">
                    <select class="form-select" aria-label="Default select example" name="category">
                        <option selected hidden>Select Category...</option>
                        <option value="IT">IT</option>
                        <option value="Engineering">Engineering</option>
                        <option value="Accounting">Accounting</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="text" class="form-control" name="email" value="{{ $job->email }}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Number</label>
                    <input type="text" class="form-control" name="number" value="{{ $job->number }}">
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        {!! Form::close() !!}
      </div>
    </div>
</div>

{{-- Delete --}}
<div class="modal fade" id="deleteModal{{ $job->careerID }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Delete Job</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        {!! Form::model($job, [ 'method' => 'delete','route' => ['career.delete', $job->careerID] ]) !!}
        @csrf
            <div class="modal-body">
                <div class="alert alert-danger" role="alert">
                    Are you sure you want to delete this Job: <b>{{ $job->job_name }}</b> posted by <b>{{ $job->username }}</b>?
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        {!! Form::close() !!}
      </div>
    </div>
</div>

{{-- Applied? --}}
<div class="modal fade" id="appliedModal{{ $job->careerID }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Apply for this Job</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('user.applyCareer') }}" method="post">
        @csrf
            <div class="modal-body">
                <p>Send you resume here: <b>{{ $job->email }}</b></p>
                <p>or contact: <b>{{ $job->number }}</b> for further details.</p>

                @foreach ($account as $user)
                    <input type="hidden" name="userID" value="{{ $user->userID }}">
                    <input type="hidden" name="careerID" value="{{ $job->careerID }}">
                @endforeach
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
            <button type="submit" class="btn btn-primary">Done</button>
            </div>
        </form>
      </div>
    </div>
</div>
