<div class="modal fade" id="dataProtection" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="max-width: 45%">
        <div class="modal-content" >
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><b>DATA PRIVACY NOTICE.</b></h5>
            </div>
            <form action="{{ route('user.dataPrivacy') }}" method="post">
                @csrf
                <div class="modal-body">
                    <p>
                        We respect and value your rights as a data subject under the Data Privacy Act (DPA). PUP is committed to protecting the personal data you provide in accordance with the requirements under the DPA and its IRR. In this regard, PUP implements reasonable and appropriate security measure to maintain the confidentiality, integrity, and availability of your personal data. For more detailed Privacy Statement, you may visit <a href="https://www.pup.edu.ph/privacy/" target="_blank">PUP Data Privacy.</a>
                    </p>
                    <p>
                        I understand and agree that by filling out this form, I am allowing this institution to collect, process, use, share, and disclose my personal information and also to store it as long as necessary for the fulfillment of the stated purpose and in accordance with applicable laws including the Data Privacy Act of 2012 and its Implementing Rules and Regulations. The purpose and extent of collection use, sharing, disclosure, and storage of my personal information was explained to me.
                    </p>
                    <p>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="isAgreed" value="Agree">
                            <label class="form-check-label">Agree</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="isAgreed" value="Disagree">
                            <label class="form-check-label">Disagree</label>
                        </div>
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
