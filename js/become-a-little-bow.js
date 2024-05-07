

const loadMore = document.querySelector('.load-more-balb');
loadMore.addEventListener('click', function(event) {
    const hiddenCards = document.querySelectorAll('.none');
    hiddenCards.forEach(hiddenCard => {
        hiddenCard.classList.remove('none');
    });

    loadMore.style.display = 'none';
});

//
