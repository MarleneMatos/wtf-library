/* globals Chart:false */

(() => {
  'use strict'

  // Graphs
  //const ctx = document.getElementById('myChart')
  const ctx = document.getElementById('pieChart').getContext('2d');

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
 
  const data = {
  labels: ['Homepage', 'Products', 'Services', 'About', 'Other'],
  datasets: [{
    label: 'Clicks',
    data: [300, 500, 120, 80, 60],
    backgroundColor: [
      `rgba(${primaryRGB}, 0.8)`,
      `rgba(${secondaryRGB}, 0.8)`,
      `rgba(${successRGB}, 0.8)`,
      `rgba(${warningRGB}, 0.8)`,
      `rgba(${dangerRGB}, 0.8)`
    ]
  }]
};

const config = {
  type: 'pie',
  data: data,
  options: {
    plugins: {
      legend: { position: 'bottom' },
      title: {
        display: true,
        text: 'Click Sum per Page'
      }
    }
  }
};

  // Create the chart instance
  const pieChart = new Chart(ctx, config);
})()
