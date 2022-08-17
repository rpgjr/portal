function addQuestionButton() {
    var dummy = '<label for="formGroupExampleInput" class="form-label mt-3"><b>New Question:</b></label><input name="question" type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter new question here..."><button type="submit" class="btn btn-primary mt-1 mb-2">Save</button> <br>';
    document.getElementById('wrapper').innerHTML += dummy;
    document.getElementById('addQuestionButton').setAttribute('class', 'btn btn-primary float-end disabled');
}
