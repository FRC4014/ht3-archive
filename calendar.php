<script type='text/javascript'>
$(document).ready(function() {
	$('#calendar').fullCalendar({
		googleCalendarApiKey: 'AIzaSyAZTD6_f2aFg9LwRXATJPAXJ2PP_WeN-Fo',
		events: {
			googleCalendarId: 'ahn09a1v9p21546jq3g65u4us0@group.calendar.google.com'
		},
		customButtons: {
			addGCal: {
				text: 'add to Google Calendar',
				click: function() {
					window.location = "https://calendar.google.com/calendar/render?cid=ahn09a1v9p21546jq3g65u4us0%40group.calendar.google.com";
				}
			}
		},
		header: {
			left: 'prev,next',
			center: 'title',
			right: 'addGCal'
		},
		displayEventEnd: true,
		timeFormat: 'h:mma'
	});
});

</script>
<style>
#loading {
	display: none;
	position: absolute;
	top: 10px;
	right: 10px;
}

#calendar {
	max-width: 900px;
	margin: 0 auto;
}
#calendar table{
	margin: 0;
}
#calendar button{
	font: inherit;
	font-weight: bold;
}
#calendar td.fc-event-container a{
	height: 80px;
	background-color: black;
	border: none;
}
div.fc-content{
	overflow: visible;
	white-space: normal;
	padding: 5px;
	text-align: center;

}
div.fc-content span.fc-time{
	overflow: visible;
	white-space: normal;
	display: block;
	font-weight: normal;
	font-size: 8pt;
}

div.fc-content span.fc-title{
	overflow: visible;
	white-space: normal;
	margin-top: 10px;
	display: block;
	font-weight: bold;
	font-size: 12pt;
}		
</style>

<div id='loading'>loading...</div>
<div id='calendar'></div>
