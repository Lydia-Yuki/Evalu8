var p = MindFusion.Scheduling;

var localeDe =  {
    "locale": "en-US",
    "date": {
        "dateFormats": {
            "shortDate": "d/MM/yyyy",
            "shortTime": "h:mm tt",
            "longDate": "dddd, MMMM dd, yyyy",
            "longTime": "h:mm:ss tt",
            "dayMonth": "d/MM",
            "yearMonth": "MMMM, yyyy",
            "full": "dddd, MMMM dd, yyyy h:mm:ss tt"
        },
        "months": {
            "narrow": [
                "J",
                "F",
                "M",
                "A",
                "M",
                "J",
                "J",
                "A",
                "S",
                "O",
                "N",
                "D"
            ],
            "short": [
                "Jan",
                "Feb",
                "Mar",
                "Apr",
                "May",
                "Jun",
                "Jul",
                "Aug",
                "Sep",
                "Oct",
                "Nov",
                "Dec"
            ],
            "long": [
                "January",
                "February",
                "March",
                "April",
                "May",
                "June",
                "July",
                "August",
                "September",
                "October",
                "November",
                "December"
            ]
        },
        "days": {
            
            "short": [
                "Mon",
                "Tue",
                "Wed",
                "Thur",
                "Fri"
            ],
            "long": [
                "Monday",
                "Tuesday",
                "Wednesday",
                "Thursday",
                "Friday"
            ]
        },
        "dayPeriods": {
            "am": "am.",
            "pm": "pm."
        },
        "firstDayOfWeek": 0
    }
}

//create a new calendar instance
var calendar = new p.Calendar(document.getElementById("calendar"));
calendar.locale = localeDe;

calendar.currentView = p.CalendarView.WeekRange;

// renders a single week
calendar.weekRangeSettings.weekStyle = p.WeekRangeViewStyle.SingleWeek;
calendar.weekRangeSettings.headerStyle = p.HorizontalHeaderStyle.None;
calendar.weekRangeSettings.visibleRows = 5;

calendar.theme = "light";

calendar.selectionEnd.addEventListener(handleSelection);
calendar.headerClick.addEventListener(handleHeaderClick);

//visualize the calendar
calendar.render();

function handleHeaderClick(sender, args)
{
	if(sender.currentView === p.CalendarView.Timetable)
	{
		sender.date = sender.timetableSettings.dates.items()[0];
		sender.currentView = p.CalendarView.WeekRange;
	}
}

function handleSelection(sender, args)
{
	if(sender.currentView === p.CalendarView.WeekRange)
	{
		//cancel the default behavior
		args.cancel = true;
		
		var start = args.startTime;
		var end = args.endTime;
		
		//clear all dates from the timetable
		sender.timetableSettings.dates.clear();
		
		while(start < end)
		{
			sender.timetableSettings.dates.add(start);
			start = p.DateTime.addDays(start, 1);
			
		}
		
		sender.currentView = p.CalendarView.Timetable;
	}
}
