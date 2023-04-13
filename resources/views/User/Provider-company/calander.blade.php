<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="admin/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="admin/assets/img/favicon.png">
    <title>
        Maintenance services
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>

    <!-- CSS Files -->
    <link id="pagestyle" href="user/assets/css/style.css" rel="stylesheet" />

</head>

<body>
    <div id="calendar"></div>


    <script>
        $(document).ready(function() {
            $('#calendar').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month'
                },
                defaultView: 'month',
                minDate: '2023-01-01', // set minimum date to January 1, 2023
                eventSources: [{
                    url: '/events',
                    type: 'GET',
                    data: {},
                    color: 'blue',
                    textColor: 'white',
                    events: function(data, callback) {
                        var events = [];

                        // transform the data from the database into the FullCalendar event object format
                        $.each(data, function(index, event) {
                            var color;

                            // set the color of the event based on the status of the event
                            if (event.status === 'confirmed') {
                                color = 'green';
                            } else if (event.status === 'pending') {
                                color = 'yellow';
                            } else {
                                color = 'red';
                            }

                            // create a Font Awesome icon element
                            var iconEl = document.createElement('img');
                            iconEl.addAttribute("scr",event.icon);
                            iconEl.addAttribute("height","30");
                            iconEl.addAttribute("width","30");
                            iconEl.classList.add('fas','rounded-circle' );

                            // create the event object and push it to the events array
                            events.push({
                                id: event.id,
                                title: event.user,
                                start: event.jour,
                                color: color,
                                icon: iconEl.outerHTML // add the icon HTML to the event object
                            });

                        });

                        // pass the transformed events array to the callback function
                        callback(events);
                    },
                    eventRender: function(event, element) {
                        // prepend the icon HTML to the event title
                        $(element).find('.fc-title').prepend(event.icon);
                    }
                }]
            })
        });
    </script>