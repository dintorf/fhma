$(document).ready(function() {

    // page is now ready, initialize the calendar...
    if ($(window).width() <= 768){
    	$('#calendar').fullCalendar({
	    	defaultView: 'month',
	    	titleFormat: {
	    		day: 'MMMM yyyy'
	    	},
	    	theme: true,
	    	googleCalendarApiKey: 'AIzaSyAe-6qENX_grJdo2JveS9tds7m-2iPC4hE',
	        events: {
	            googleCalendarId: 'gf4jrl1a6n2ka68hlru390f3rs@group.calendar.google.com'
	        },
	        eventRender: function (event, element) {
	        	element.attr('href', '');
	        	element.attr('data-toggle', 'modal');
	        	element.attr('data-target','#eventModal');
	        	element.attr('onclick', 'openModal("' + event.title + '","' + event.description + '","' + event.url + '","' + event.start.format('h:mm a') + '","' + event.end.format('h:mm a') + '");');
	        }
    	});
    }
    else{
    	$('#calendar').fullCalendar({
	    	defaultView: 'month',
	    	theme: true,
	    	header: {
	    		left: 'prev,next today',
	    		center: 'title',
	    		right: 'month,agendaWeek,basicDay'
	    	},
	        googleCalendarApiKey: 'AIzaSyAe-6qENX_grJdo2JveS9tds7m-2iPC4hE',
	        events: {
	            googleCalendarId: 'gf4jrl1a6n2ka68hlru390f3rs@group.calendar.google.com'
	        },
	        eventRender: function (event, element) {
	        	element.attr('href', '');
	        	element.attr('data-toggle', 'modal');
	        	element.attr('data-target','#eventModal');
	        	var description = "";
	        	if(event.description)
	        		description = event.description.replace(/(\r\n|\n|\r)/gm,"<br />");
	        	element.attr('onclick', 'openModal("' + event.title + '","' + description + '","' + event.url + '","' + event.start.format('h:mm a') + '","' + event.end.format('h:mm a') + '");');
	        }
    	});
    }
});

function openModal(title, info, url, start, end) {
	console.log(start);

	var time = (start == end) ? (start == "12:00 am") ? "All Day" : start : start + " - " + end;

	$("#eventTime").html(time);
	$("#eventInfo").html(info);
    $("#eventLink").attr('href', url);
    $("#eventTitle").html(title);
    $(".fc-event div").on('click', function(){
    	$("#eventModal").modal({
    		show: true,
    	});
    });
}
