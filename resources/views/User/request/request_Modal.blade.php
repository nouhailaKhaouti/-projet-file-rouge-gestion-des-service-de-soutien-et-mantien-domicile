<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="input1">Input 1</label>
            <input type="text" class="form-control" id="input1" placeholder="Enter input 1">
          </div>
          <div class="form-group">
            <label for="select1">Select 1</label>
            <select class="form-select" id="select1">
              <option value="1">Option 1</option>
              <option value="2">Option 2</option>
              <option value="3">Option 3</option>
            </select>
          </div>
          <div class="form-group">
            <label for="multiSelect1">Multi-select 1</label>
            <select class="form-select" id="multiSelect1" multiple>
              <option value="1">Option 1</option>
              <option value="2">Option 2</option>
              <option value="3">Option 3</option>
            </select>
          </div>
          <div class="form-group">
            <label for="input2">Input 2</label>
            <input type="text" class="form-control" id="input2" placeholder="Enter input 2">
          </div>
        </div>
        <div class="col-md-6">
          <div id="miniCalendar"></div>
          <div class="form-group">
            <label for="input3">Input 3</label>
            <input type="text" class="form-control" id="input3" placeholder="Enter input 3">
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<script>
$(document).ready(function() {
    $.ajax({
        url: '/disabled-dates',
        type: 'GET',
        success: function(response) {
            var disabledDates = response.disabled_dates;

            $('#calendar').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month'
                },
                defaultView: 'month',
                datesDisabled: disabledDates,
                dayRender: function(date, cell) {
                    // disable specific days of the week, e.g. Sundays
                    if (date.day() === 0) {
                        cell.addClass('fc-disabled-day');
                    }
                },
            });
        },
        // error: function(xhr) {
        //     // handle error
        // }
    });
});
</script>