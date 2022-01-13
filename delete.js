function deleteFunction($cardid)
{
    var dcard = document.getElementById($cardid + "d");
    var card = document.getElementById($cardid);

    

    dcard.style.display = 'flex';
    card.parentNode.replaceChild(dcard, card);

}

function notDeleteFunction($cardid) {

    var dcard = document.getElementById($cardid + "d");
    var card = document.getElementById($cardid);

    
    card.parentNode.replaceChild(card, dcard);
    
}