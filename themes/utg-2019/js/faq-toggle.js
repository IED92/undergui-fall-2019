document.addEventListener('DOMContentLoaded', function() {
  if (window.location.pathname === '/utg/about/') {
    // const faqContainer = document.querySelector('.faq-answer-container')
    const faqSlideDown = document.querySelector('.faq-slide-down');
    // const faqSlideUp = document.querySelector('.faq-slide-up');

    faqSlideDown.addEventListener('click', function(e) {
      e.preventDefault();
    });
  } else {
    return;
  }
});