
function modifyFunction($cardid)
{
    var mcards = document.getElementById($cardid + "a");
    var cards = document.getElementById($cardid);

    

    mcards.style.display = 'flex';
    cards.parentNode.replaceChild(mcards, cards);

}

if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
  }