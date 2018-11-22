
<template>
    <div>
        <full-calendar :events="events"></full-calendar>
    </div>
</template>

<script>
import "fullcalendar/dist/fullcalendar.css";
import { FullCalendar } from "vue-full-calendar";
export default {
  components: {
    FullCalendar
  },

  data() {
    return {
      events: [
        {
          title: "event1",
          start: "2010-01-01"
        },
        {
          title: "event2",
          start: "2010-01-05",
          end: "2010-01-07"
        },
        {
          title: "event3",
          start: "2010-01-09T12:30:00",
          allDay: false
        }
      ]
    };
  }
};
</script>
