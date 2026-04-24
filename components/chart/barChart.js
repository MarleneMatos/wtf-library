/* globals Chart:false */

(() => {
  'use strict'

  // Graphs
  //const ctx = document.getElementById('myChart')
  const ctx = document.getElementById('barChart').getContext('2d');

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
 
  const config = {
  type: 'bar', // or 'line'
  data: {
    labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
    datasets: [{
      label: 'Total Clicks',
      data: [120, 95, 140, 180, 130, 90, 70],
      backgroundColor: `rgba(${primaryRGB}, 0.8)`,
      borderColor: `rgba(${primaryRGB}, 1)`
    }]
  },
  options: {
    responsive: true,
    plugins: {
      legend: { display: false },
      title: {
        display: true,
        text: 'Clicks per Day'
      }
    }
  }
};

  // Create the chart instance
  const barChart = new Chart(ctx, config);
})()
