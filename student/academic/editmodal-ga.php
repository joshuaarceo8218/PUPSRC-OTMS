<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog editmod" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel">Personal Information</h5>
        <button type="button" class="btn-close upload" data-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="input1">First Name</label>
                <input type="text" maxlength="50" class="form-control" id="input1" name="firstName">
              </div>
            </div>
            <div class="col-md-2">
              <div class="form-group">
                <label for="input2">Middle</label>
                <input type="text" maxlength="50" class="form-control" id="input2" name="middleName">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="input3">Last Name</label>
                <input type="text"  maxlength="100"class="form-control" id="input3" name="lastName">
              </div>
            </div>
            <div class="col-md-2">
              <div class="form-group">
                <label for="input4">Suffix</label>
                <input type="text" maxlength="5" class="form-control" id="input4" name="nameSuffix">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="input5">Student Number</label>
                <input type="text"  pattern="20[2-9][0-9]-[1-9]-SR-[0-9]" maxlength="50" class="form-control" id="input5" name="studentNumber">
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="input6">Yr&Sec</label>
                <input type="text" maxlength="10" class="form-control" id="input6" name="courseYrSec">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="input7">Academic Year</label>
                <input type="text" pattern="20[2-9][0-9]-20[2-9][0-9]" maxlength="9" class="form-control" id="input7" name="acadYear">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-3">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="radioOptions" id="radio1" value="option1" checked>
                <label class="form-check-label" for="radio1">1st Sem</label>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="radioOptions" id="radio2" value="option2">
                <label class="form-check-label" for="radio2">2nd Sem</label>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="radioOptions" id="radio3" value="option3">
                <label class="form-check-label" for="radio3">Summer</label>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="radioOptions2" id="radio4" value="option4">
                <label class="form-check-label" for="radio4">Late Reporting of Grade</label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="radioOptions2" id="radio5" value="option5">
                <label class="form-check-label" for="radio5">Completion of "Inc"</label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="radioOptions2" id="radio6" value="option6">
                <label class="form-check-label" for="radio6">Correction of Entry</label>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="input8">Student was reported as</label>
                <input type="text" class="form-control" id="input8">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label for="input8">Due to the following reason/s</label>
                <input type="text" maxlength="100"  class="form-control" id="input9">
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="modal-footer">
        <button type="submit" class="btn btn-primary submit" data-dismiss="modal">Submit</button>
      </div>
    </div>
  </div>
</div>