<!-- Event Modal -->
<div class="modal fade" id="eventModal" tabindex="-1" role="dialog" aria-labelledby="eventModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close glyphicon glyphicon-remove" data-dismiss="modal" aria-hidden="true"></button>
        <h4 class="modal-title" id="eventModalLabel">
          <div id="eventTitle" title="Event Details"></div>
        </h4>
      </div><!-- /.modal-header -->
      <div class="modal-body">
        <div id="eventTime"></div>
        <div id="eventInfo"></div>
      </div><!-- /.modal-body -->
      <div class="modal-footer">
        <div class="btn-group">
          <a class="btn btn-default" data-dismiss="modal">Close</a>
          <a id="eventLink" class="btn btn-danger hidden-xs"><span class="glyphicon glyphicon-plus"> Add Event to Google</span></a>
        </div>
      </div><!-- /.modal-footer -->
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->