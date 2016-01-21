<!--
requires the following inside of <head>:

<link href='/wp-content/plugins/ht3-special/fullcalendar/fullcalendar.css' rel='stylesheet' />
	<link href='/wp-content/plugins/ht3-special/fullcalendar/fullcalendar.print.css' rel='stylesheet' media='print' />
	<script src='/wp-content/plugins/ht3-special/fullcalendar/lib/moment.min.js'></script>
	<script src='/wp-content/plugins/ht3-special/fullcalendar/lib/jquery.min.js'></script>
	<script src='/wp-content/plugins/ht3-special/fullcalendar/fullcalendar.min.js'></script>
	<script src='/wp-content/plugins/ht3-special/fullcalendar/gcal.js'></script>
-->

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
		timeFormat: 'h:mma',
		eventColor: 'black'
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

#calendar table{
	margin: 0;
}

span.fc-time, span.fc-title, div.fc-content{
	overflow: visible;
	white-space: normal;
}
@media screen and (max-width: 950px) { /*mobile-specific rules*/

}
@media screen and (min-width: 950px) { /*desktop-specific rules*/
	#calendar {
		max-width: 900px;
		margin: 0 auto;
	}
	#calendar button{
		font: inherit;
		font-weight: bold;
		background: white;
		border: black 1px solid;
	}
	#calendar td.fc-event-container a{
		/*height: 80px;*/
		background-color: black;
		border: none;
	}
	#calendar th.fc-day-header{
		color: black;
	}
	.fc-view{
		border-radius: 5px;
		border: black 3px solid;
	}
	div.fc-content{
		padding: 5px;
		text-align: center;
	}
	div.fc-content span.fc-time{
		display: block;
		font-weight: normal;
		font-size: 8pt;
	}

	div.fc-content span.fc-title{
		/*margin-top: 5px;*/
		display: block;
		font-weight: bold;
		font-size: 11pt;
	}		
}
</style>

<div id='loading'>loading...</div>
<div id='calendar'></div>
