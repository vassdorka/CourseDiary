var calcCard = document.getElementById("calc");

function calcFunction() {
  
  calcCard.style.display = 'flex';

  for (var i = 0; i < cards.length; i++) {
    cards[i].style.opacity = "0.6";
    cards[i].style.transitionDelay = "0.3s";
    texts[i].style.opacity = "0.6";
    texts[i].style.transitionDelay = "0.3s";
  }

}


function closeCalcCard() {

  calcCard.style.display = 'none';

  for (var i = 0; i < cards.length; i++) {
    cards[i].style.opacity = "1";
    cards[i].style.transitionDelay = "0.3s";
    texts[i].style.opacity = "1";
    texts[i].style.transitionDelay = "0.3s";
  }
}