<div class="modal fade" id="addCareer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" style="max-width: 50%">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Job Ad</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
            <div class="modal-body">
                <form action="{{ route('career.addJob') }}" method="post">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Job Name</label>
                  <input type="text" class="form-control" name="job_name">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Company Name</label>
                    <input type="text" class="form-control" name="company">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Salary</label>
                    <input type="text" class="form-control" name="salary">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Description</label>
                    <textarea class="form-control" rows="5" name="description" style="white-space: pre-wrap"></textarea>
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
                    <input type="text" class="form-control" name="email">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Number </label>
                    <input type="text" class="form-control" name="number">
                </div>
                @if (Session()->get('loginID'))
                    <input type="hidden" name="username" value="{{ $data }}">
                    <input type="hidden" name="carRequest" value="0">


                @elseif (Session()->get('loginAdminID'))
                    <input type="hidden" name="username" value="{{ Session()->get('loginAdminID') }}">
                    <input type="hidden" name="carRequest" value="1">
                @endif

            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
      </div>
    </div>
</div>
