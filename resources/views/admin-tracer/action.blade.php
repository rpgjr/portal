<!-- Add Modal -->
<div class="modal fade" id="addTracerQuestion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Question to Tracer Form</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ route('admin.addTracerQuestion') }}" method="post">
                @csrf
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">New Question</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter new Question here..." name="question">
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
    </div>
    </div>
</div>

<!-- Edit Modal -->
<div class="modal fade" id="editTracerQuestion{{ $question->questionID }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            {!! Form::model($question, [ 'method' => 'patch','route' => ['admin.updateTracerQuestion', $question->questionID] ]) !!}
                @csrf
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Question</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter new Question here..." name="question" value="{{ $question->question }}">
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save</button>
            {!! Form::close() !!}
        </div>
    </div>
    </div>
</div>

<!-- Delete Modal -->
<div class="modal fade" id="deleteTracerQuestion{{ $question->questionID }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
        </div>
        <div class="modal-body">
            {!! Form::model($question, [ 'method' => 'delete','route' => ['admin.deleteTracerQuestion', $question->questionID] ]) !!}
            @csrf
            <div class="alert alert-danger" role="alert">
                A you sure you want to delete this question: <br><b>"{{ $question->question }}"</b>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-danger">Delete</button>
            {!! Form::close() !!}
        </div>
    </div>
    </div>
</div>
