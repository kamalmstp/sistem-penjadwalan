<div class="row">
	<div class="col-md-8">
    	<div class="row">
            <!-- CALENDAR-->
            <div class="col-md-12 col-xs-12">
                <div class="panel panel-primary " data-collapsed="0">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <i class="fa fa-calendar"></i>
                            Kalender
                        </div>
                    </div>
                    <div class="panel-body" style="padding:0px;">
                        <div class="calendar-env">
                            <div class="calendar-body">
                                <div id="notice_calendar"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>



    <script>
  $(document).ready(function() {

	  var calendar = $('#notice_calendar');

				$('#notice_calendar').fullCalendar({
					header: {
						left: 'title',
						right: 'today prev,next'
					},

					//defaultView: 'basicWeek',

					editable: false,
					firstDay: 1,
					height: 530,
					droppable: false
				});
	});
  </script>
