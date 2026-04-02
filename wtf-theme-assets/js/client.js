
/*
var popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]');
if (popoverTriggerList) {
  var popoverList = _toConsumableArray(popoverTriggerList).map(function (popoverTriggerEl) {
    return new bootstrap.Popover(popoverTriggerEl);
  });
  var popover = new bootstrap.Popover('.popover-dismiss', {
    trigger: 'focus'
  });
}*/
"use strict";
/*
var toastTrigger = document.getElementById('liveToastBtn');
var toastLiveExample = document.getElementById('liveToast');
if (toastTrigger) {
  var toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample);
  toastTrigger.addEventListener('click', function () {
    toastBootstrap.show();
  });
}*/
"use strict";
"use strict";

/* global bootstrap: false */
/*
(() => {
  'use strict'
  const tooltipTriggerList = Array.from(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
  tooltipTriggerList.forEach(tooltipTriggerEl => {
    new bootstrap.Tooltip(tooltipTriggerEl)
  })
})()*/

/* global bootstrap: false */

(function () {
  'use strict';

  // Tooltip and popover demos
  document.querySelectorAll('.tooltip-demo').forEach(function (tooltip) {
    new bootstrap.Tooltip(tooltip, {
      selector: '[data-bs-toggle="tooltip"]'
    });
  });
  document.querySelectorAll('[data-bs-toggle="popover"]').forEach(function (popover) {
    new bootstrap.Popover(popover);
  });
  document.querySelectorAll('.toast').forEach(function (toastNode) {
    var toast = new bootstrap.Toast(toastNode, {
      autohide: false
    });
    toast.show();
  });

  // Disable empty links and submit buttons
  document.querySelectorAll('[href="#"], [type="submit"]').forEach(function (link) {
    link.addEventListener('click', function (event) {
      event.preventDefault();
    });
  });
  function setActiveItem() {
    var hash = window.location.hash;
    if (hash === '') {
      return;
    }
    var link = document.querySelector(".wtf-aside a[href=\"".concat(hash, "\"]"));
    if (!link) {
      return;
    }
    var active = document.querySelector('.wtf-aside .active');
    var parent = link.parentNode.parentNode.previousElementSibling;
    link.classList.add('active');
    if (parent.classList.contains('collapsed')) {
      parent.click();
    }
    if (!active) {
      return;
    }
    var expanded = active.parentNode.parentNode.previousElementSibling;
    active.classList.remove('active');
    if (expanded && parent !== expanded) {
      expanded.click();
    }
  }
  setActiveItem();
  window.addEventListener('hashchange', setActiveItem);
})();
"use strict";

$(document).ready(function () {
  $(window).on("scroll", function () {
    if ($(window).scrollTop() > 50) {
      $('#wtfHeader').addClass('header-bg');
      $('#wtfFooter').addClass('footer-bg');
    } else {
      $('#wtfHeader').removeClass('header-bg');
      $('#wtfFooter').removeClass('footer-bg');
    }
  });
});