{{-- Approve --}}
<div class="modal fade" id="approveModal{{ $job->careerID }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Delete Job</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        {!! Form::model($job, [ 'method' => 'delete','route' => ['career.approve', $job->careerID] ]) !!}
        @csrf
            <div class="modal-body">
                <div class="alert alert-primary" role="alert">
                    Are you sure you want to approve this Job: <b>{{ $job->job_name }}</b> posted by <b>{{ $job->username }}</b>?
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
            <button type="submit" class="btn btn-primary">Approve</button>
            </div>
        {!! Form::close() !!}`
      </div>
    </div>
</div>
