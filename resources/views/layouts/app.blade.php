<!DOCTYPE html>
<html lang="en" style="height: auto;">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SPA Client</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style --><!-- Use Version 6.9 For Customized Implementation -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css?v=6.9">  
  <!-- Full Calendar --><!-- Used With CustomCode, MomentJS, FullCalendarJS -->
  <link rel="stylesheet" href="plugins/fullcalendar/main.css">
  <!-- overlayScrollbars --><!-- Used With Theme Fixed -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="plugins/dropzone/min/dropzone.min.css">
  <!-- Ionicons --><!-- Used With Widgets -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> 

          <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
   
<style>  
  :root{--icon-color:rgba(27, 181, 216, 1);--icon-color-light:rgba(23, 162, 184, 1);--static-blue: rgba(8, 146, 253, 1);--static-maroon: #d81b60;--static-pink:#ff0080;--bg-gradient-aluminum:linear-gradient(5deg, #b5b5b54d 10%, hsla(0, 0%, 58%, 0.4) 30%, #ffffffff);  }

  html{
    cursor: url("dist/img/12pxCursor.svg"), default; 
  } 
  a:hover, i:hover{
    cursor: url("dist/img/Pointer2.svg"), pointer; 
  }
  

  .navbar-nav .nav-link.active {  
    border-bottom: 1px ridge #d81b60; 
    border-left:1px inset #d81b60;
    border-right:1px groove #d81b60; 
    text-shadow:-1px 1px 2px rgba(0,0,0,0.4);
    box-shadow:-1px 2px 3px 0px rgba(0,0,0,0.2);
    border-radius:12px; 
    background-image: linear-gradient(5deg, #b5b5b54d 10%, hsla(0, 0%, 58%, 0.4) 30%, #ffffffff); 
  }
  .navbar-nav .nav-link.disabled {
    pointer-events: none; 
  } 
  .nav-item .nav-link.active i{
    text-shadow:0px 1px 0px rgba(23,162,184,0.3);
  }
  .nav-item .nav-link i{ 
    color: var(--icon-color);  
  } 
  .nav-item .nav-link:hover:not(.active-link) i{text-shadow:0px 1px 0px rgba(23,162,184,0.3);}
  .bg-aluminum{background-image:var(--bg-gradient-aluminum);}
</style>

</head>
<body class="hold-transition sidebar-mini layout-navbar-fixed layout-fixed" style="height: auto;"> 

<div class="wrapper" id="top">
<!-- Preloader -->
  <!-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>  -->

    <x-navbar/>
    <x-sidebar/>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    
      @yield('content') 
    
    </div>
    <!-- /.content-wrapper --> 

      <x-control-sidebar/>  
      
    <!-- Main Footer -->
  <footer class="main-footer"> 
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Make Your Future Creative!
    </div>
    <!-- Default to the left -->
    <strong>Copyright © 2025-2026 <a href="https://collabstudio.online/studio">CollabStudio.online</a>.</strong> All rights reserved.
  </footer>

</div>  

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script> 
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js?"></script> 
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script> 
<!-- fullCalendar 2.2.5 -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/fullcalendar/main.js"></script> 
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>


<!-- Full Calendar -->
<script>
  $(function () {

    /* initialize the external events
     -----------------------------------------------------------------*/
    function ini_events(ele) {
      ele.each(function () {

        // create an Event Object (https://fullcalendar.io/docs/event-object)
        // it doesn't need to have a start or end
        var eventObject = {
          title: $.trim($(this).text()) // use the element's text as the event title
        }

        // store the Event Object in the DOM element so we can get to it later
        $(this).data('eventObject', eventObject)

        // make the event draggable using jQuery UI
        $(this).draggable({
          zIndex        : 1070,
          revert        : true, // will cause the event to go back to its
          revertDuration: 0  //  original position after the drag
        })

      })
    }

    ini_events($('#external-events div.external-event'))

    /* initialize the calendar
     -----------------------------------------------------------------*/
    //Date for the calendar events (dummy data)
    var date = new Date()
    var d    = date.getDate(),
        m    = date.getMonth(),
        y    = date.getFullYear()

    var Calendar = FullCalendar.Calendar;
    var Draggable = FullCalendar.Draggable;

    var containerEl = document.getElementById('external-events');
    var checkbox = document.getElementById('drop-remove');
    var calendarEl = document.getElementById('calendar');

    // initialize the external events
    // -----------------------------------------------------------------

    new Draggable(containerEl, {
      itemSelector: '.external-event',
      eventData: function(eventEl) {
        return {
          title: eventEl.innerText,
          backgroundColor: window.getComputedStyle( eventEl ,null).getPropertyValue('background-color'),
          borderColor: window.getComputedStyle( eventEl ,null).getPropertyValue('background-color'),
          textColor: window.getComputedStyle( eventEl ,null).getPropertyValue('color'),
        };
      }
    });

    var calendar = new Calendar(calendarEl, {
      headerToolbar: {
        left  : 'prev,next today',
        center: 'title',
        right : 'dayGridMonth,timeGridWeek,timeGridDay'
      },
      themeSystem: 'bootstrap',
      //Random default events
      events: [
        {
          title          : 'All Day Event',
          start          : new Date(y, m, 1),
          backgroundColor: '#f56954', //red
          borderColor    : '#f56954', //red
          allDay         : true
        },
        {
          title          : 'Long Event',
          start          : new Date(y, m, d - 5),
          end            : new Date(y, m, d - 2),
          backgroundColor: '#f39c12', //yellow
          borderColor    : '#f39c12' //yellow
        },
        {
          title          : 'Meeting',
          start          : new Date(y, m, d, 10, 30),
          allDay         : false,
          backgroundColor: '#0073b7', //Blue
          borderColor    : '#0073b7' //Blue
        },
        {
          title          : 'Lunch',
          start          : new Date(y, m, d, 12, 0),
          end            : new Date(y, m, d, 14, 0),
          allDay         : false,
          backgroundColor: '#00c0ef', //Info (aqua)
          borderColor    : '#00c0ef' //Info (aqua)
        },
        {
          title          : 'Birthday Party',
          start          : new Date(y, m, d + 1, 19, 0),
          end            : new Date(y, m, d + 1, 22, 30),
          allDay         : false,
          backgroundColor: '#00a65a', //Success (green)
          borderColor    : '#00a65a' //Success (green)
        },
        {
          title          : 'Click for Google',
          start          : new Date(y, m, 28),
          end            : new Date(y, m, 29),
          url            : 'https://www.google.com/',
          backgroundColor: '#3c8dbc', //Primary (light-blue)
          borderColor    : '#3c8dbc' //Primary (light-blue)
        }
      ],
      editable  : true,
      droppable : true, // this allows things to be dropped onto the calendar !!!
      drop      : function(info) {
        // is the "remove after drop" checkbox checked?
        if (checkbox.checked) {
          // if so, remove the element from the "Draggable Events" list
          info.draggedEl.parentNode.removeChild(info.draggedEl);
        }
      }
    });

    calendar.render();
    // $('#calendar').fullCalendar()

    /* ADDING EVENTS */
    var currColor = '#3c8dbc' //Red by default
    // Color chooser button
    $('#color-chooser > li > a').click(function (e) {
      e.preventDefault()
      // Save color
      currColor = $(this).css('color')
      // Add color effect to button
      $('#add-new-event').css({
        'background-color': currColor,
        'border-color'    : currColor
      })
    })
    $('#add-new-event').click(function (e) {
      e.preventDefault()
      // Get value and make sure it is not null
      var val = $('#new-event').val()
      if (val.length == 0) {
        return
      }

      // Create events
      var event = $('<div />')
      event.css({
        'background-color': currColor,
        'border-color'    : currColor,
        'color'           : '#fff'
      }).addClass('external-event')
      event.text(val)
      $('#external-events').prepend(event)

      // Add draggable funtionality
      ini_events(event)

      // Remove event from text input
      $('#new-event').val('')
    })
  })
</script>
  
</body></html>