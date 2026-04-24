/* globals Chart:false */

(() => {
  'use strict'

  // Graphs
  //const ctx = document.getElementById('myChart')
  const ctx = document.getElementById('lineChart').getContext('2d');

  // Helper to fetch colors
  const getCSSVar = (varName) => getComputedStyle(document.documentElement).getPropertyValue(varName).trim();

  /*
  bar: Ideal for comparing quantities across different categories.
  pie / doughnut: Best for showing proportions or percentages of a whole.
  radar: Used for comparing multiple quantitative variables (like player stats in a video game).
  polarArea: Similar to a pie chart, but each segment has a different radius based on its value.
  bubble: Displays three-dimensional data ($x$, $y$, and $r$ for radius).scatter: Plots points based on $x$ and $y$ coordinates, useful for scientific data or correlations.
  */

  // Extract values once at the start
  const primaryRGB = getCSSVar('--wtf-primary-rgb');
  const secondaryRGB = getCSSVar('--wtf-secondary-rgb');
  const successRGB = getCSSVar('--wtf-success-rgb');
  const infoRGB = getCSSVar('--wtf-info-rgb');
  const warningRGB = getCSSVar('--wtf-warning-rgb');
  const dangerRGB = getCSSVar('--wtf-danger-rgb');
 
  // Define the data for multiple lines
  const data = {
    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'], // Common x-axis labels
    datasets: [
      {
        label: 'Line 1 fill',
        data: [65, 59, 80, 81, 56, 55, 40], // Data points for line 1
        fill: true,
        borderColor: `rgba(${primaryRGB}, 1)`, // Line color
        backgroundColor: `rgba(${primaryRGB}, 0.2)`, // Background color
        tension: 0.1
      },
      {
        label: 'Line 2 fill',
        data: [30, 48, 40, 19, 86, 27, 90], // Data points for line 2
        fill: true,
        borderColor: `rgba(${secondaryRGB}, 1)`, // Line color
        backgroundColor: `rgba(${secondaryRGB}, 0.2)`, // Background color
        tension: 0.1
      },
      {
        label: 'Line 3',
        data: [3, 38, 50, 15, 66, 33, 70], // Data points for line 2
        fill: false,
        borderColor: `rgba(${successRGB}, 1)`, // Line color
        backgroundColor: `rgba(${successRGB}, 0.2)`, // Background color
        tension: 0.1
      },
      {
        label: 'Line 4',
        data: [6, 58, 2, 9, 86, 17, 30], // Data points for line 2
        fill: false,
        borderColor: `rgba(${infoRGB}, 1)`, // Line color
        backgroundColor: `rgba(${infoRGB}, 0.2)`, // Background color
        tension: 0.1
      },
      {
        label: 'Line 5',
        data: [12, 28, 30, 29, 120, 37, 40], // Data points for line 2
        fill: false,
        borderColor: `rgba(${warningRGB}, 1)`, // Line color
        backgroundColor: `rgba(${warningRGB}, 0.2)`, // Background color
        tension: 0.1
      },
      {
        label: 'Line 6 | Fill',
        data: [20, 68, 4, 39, 96, 57, 10], // Data points for line 2
        fill: true,
        borderColor: `rgba(${dangerRGB}, 1)`, // Line color
        backgroundColor: `rgba(${dangerRGB}, 0.2)`, // Background color
        tension: 0.1
      }

    ]
  };

  // Configure the chart
  const config = {
    type: 'line',
    data: data,
    options: {
      responsive: true,
      plugins: {
        legend: {
          position: 'bottom',
        },
        title: {
          display: true,
          text: 'wtf - Example Line Chart'
        }
      },
      scales: {
        y: {
          beginAtZero: true
        }
      }
    },
  };

  // Create the chart instance
  const myChart = new Chart(ctx, config);
})()
