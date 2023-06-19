window.addEventListener('scroll', function() {
    var footer = document.querySelector('.footer');
    var contentHeight = document.querySelector('.content').offsetHeight;
    var viewportHeight = window.innerHeight;
    var scrollHeight = window.scrollY;
  
    if (scrollHeight >= contentHeight - viewportHeight) {
      footer.style.display = 'block'; /* Pokazanie stopki przy przewinięciu na sam dół */
    } else {
      footer.style.display = 'none'; /* Ukrycie stopki w pozostałych przypadkach */
    }
  });