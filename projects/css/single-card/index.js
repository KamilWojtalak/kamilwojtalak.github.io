const shareIcon = document.querySelector('.info__share');
const shareIconHover = document.querySelector('.share__icon');

const hoverBox = document.querySelector('.share_hover');

shareIcon.addEventListener( 'click', function() {
    hoverBox.style.display = 'block';
});

shareIconHover.addEventListener( 'click', function() {
    hoverBox.style.display = 'none';
});