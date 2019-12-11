document.addEventListener('DOMContentLoaded', function() {
  if (window.location.pathname === '/utg/about/') {
    const element = document.getElementById('nav-tab');
    element.addEventListener('click', onTabClick, false);
  } else {
    console.log(window.location.pathname);
    return;
  }

  function onTabClick(event) {
    let activeTabs = document.querySelectorAll('.active');

    // console.log(event.target.href.split('#')[1]);
    // deactivate existing active tab and panel
    activeTabs.forEach(function(tab) {
      if (event.target.className === 'nav') {
        return false;
      }
      tab.className = tab.className.replace('active', '');
    });

    // activate new tab and panel
    event.target.parentElement.className += ' active';
    document.getElementById(event.target.href.split('#')[1]).className +=
      ' active';
  }
});
