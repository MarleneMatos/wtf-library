/* globals Chart:false */

(() => {
  'use strict'

  // Graphs
  const ctx = document.getElementById('myChart')
  new Chart(ctx, {
    type: 'line',
    data: {
      labels: [
        'Sunday',
        'Monday',
        'Tuesday',
        'Wednesday',
        'Thursday',
        'Friday',
        'Saturday'
      ],
      datasets: [{
        data: [
          15339,
          21345,
          18483,
          24003,
          23489,
          24092,
          12034
        ],
        lineTension: 0,
        backgroundColor: 'transparent',
        borderColor: 'var(--wtf-primary)',
        borderWidth: 4,
        pointBackgroundColor: 'var(--wtf-primary)'
      }]
    },
    options: {
      plugins: {
        /*
        legend: {
          display: false
        }
          legend: {
          position: 'top',
        }
        */ 
       legend: {
          position: 'bottom',
        },
        title: {
          display: true,
          text: 'Line 1'
        },
        tooltip: {
          boxPadding: 3
        }
      }
    }
  })
})()
