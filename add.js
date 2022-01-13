var btn = document.getElementById("btn");
btn.onclick = function() {openAddCard()};

var cards = document.getElementsByClassName('container');
var texts = document.getElementsByClassName('contentbox');
var addCard = document.getElementById("add");

function openAddCard() {
  
  addCard.style.display = 'flex';

  for (var i = 0; i < cards.length; i++) {
    cards[i].style.opacity = "0.6";
    cards[i].style.transitionDelay = "0.3s";
    texts[i].style.opacity = "0.6";
    texts[i].style.transitionDelay = "0.3s";
  }

}

var closeBtn = document.getElementById("closeBtn");
closeBtn.onclick = function() {closeAddCard()};

function closeAddCard() {
  addCard.style.display = 'none';

  for (var i = 0; i < cards.length; i++) {
    cards[i].style.opacity = "1";
    cards[i].style.transitionDelay = "0.3s";
    texts[i].style.opacity = "1";
    texts[i].style.transitionDelay = "0.3s";
  }
}

if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}


