const button = document.getElementById('menubtn');

button.addEventListener('click', function() {
    
  const review = document.getElementById('hidden');

  if (review.classList.contains('hidden')) {
      review.classList.remove('hidden');
      
  } else {

    review.classList.add('hidden');

  }


});