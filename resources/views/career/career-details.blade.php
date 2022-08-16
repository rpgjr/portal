
<div class="row position-career">
    <div class="col-md-12">
        <div class="col-md-8">
            <div style="min-height: 120px;">
                <div class="collapse collapse-horizontal" id="career{{$job->id}}">
                    <div class="card card-body">

                    <h4><b>Job Name: </b>{{ $job->job_name }}</h4>
                    <p><b>Company Name: </b>{{ $job->company }}</p>
                    <p><b>Salary: </b>{{ $job->salary }}</p>
                    <p><b>Category: </b>{{ $job->category }}</p>
                    <p><b>Job Description: </b></p>
                    <p class="desc" style="white-space: pre-wrap">{{ $job->description }}</p>
                    <p><b>Email: </b>{{ $job->email }}</p>
                    <p><b>Number: </b>{{ $job->number }}</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

