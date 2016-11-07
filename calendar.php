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
		eventColor: 'black',
		eventRender: function(event, element) {
			 element.addClass("fc-" + event.title.replace(/\s+/g, "_"));
		
		}
	});
});

</script>
<style>
/* the fullcalendar DOM is a mess; it's a million nested tables with a million 
    classes and *ghasp* inline styles.  good luck, you'll need it. */

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
div.fc-day-grid-container.fc-scroller{
    height: auto !important; /* hack to stop content from overflowing the calender box */
}
div.fc-row.fc-week {
    min-height: 125px !important; /* fix so there aren't any weeks that are shorter in height */
}
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
	display: block;
	font-weight: bold;
	font-size: 11pt;
}

.fc td.fc-today.fc-state-highlight{
	background: lightgrey;
}
.fc-Bag_Day{
	background: #e60000 !important;
}

@media screen and (max-width: 850px) { /*mobile-specific rules*/
	span.fc-time{
		display: none !important;
	}
}
@media screen and (max-width: 700px) { /*very small device rules*/
	div.fc-content span.fc-title{
		font-size: 9pt;
	}
}
@media screen and (max-width: 500px) { /*very very small device rules*/
	#mobilewarning {
		display: block !important;
		font-style: italic;
                text-align: center;
                margin-top: 10px;
	}
}
</style>

<div id="loading">loading...</div>
<div id="calendar"></div>
<div id="mobilewarning" style="display: none;">eek.  you might want to tilt your device.</div>
