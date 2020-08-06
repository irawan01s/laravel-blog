@csrf
<div class="form-row">
  <div class="col-md-12 mb-3">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
</div>
<div class="form-row">
  <div class="col-md-12 mb-3">
    <label for="content">Content</label>
    <input type="text" class="form-control" id="content" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
</div>
<div class="form-row">
  <div class="col-md-6 mb-3">
    <label for="status">Status</label>
    <select class="custom-select" id="status" required>
      <option selected disabled value="">Choose...</option>
      <option value="publish">Publish</option>
      <option value="draft">Draft</option>
    </select>
    <div class="invalid-feedback">
      Please provide a valid city.
    </div>
  </div>
  <div class="col-md-6 mb-3">
    <label for="picture">Picture</label>
    <div class="custom-file">
      <input type="file" class="custom-file-input" id="picture" required>
      <label class="custom-file-label" for="picture">Choose file</label>
    </div>
    <div class="invalid-feedback">
      Please select a valid state.
    </div>
  </div>
</div>
<div class="form-group">
  <div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
    <label class="form-check-label" for="invalidCheck">
      Agree to terms and conditions
    </label>
    <div class="invalid-feedback">
      You must agree before submitting.
    </div>
  </div>
</div>
<button class="btn btn-primary" type="submit">Submit form</button>