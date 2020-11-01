const btnChat = document.querySelector ("#btn_chat") ;
const btnChat3 = document.querySelector ("#btn_chat3") ;
const chats = document.querySelector (".chats") ;
const divFloat = document.querySelector (".chat-content") ;

function charger () {
    btnChat.addEventListener ("click", chatOn) ;
    btnChat3.addEventListener ("click", chatOff) ;
    //btnChat3.style.display = "none" ;
}

function chatOn (event) {
    event.preventDefault () ;
    //divFloat.style.position = "absolute" ;
    divFloat.style.bottom = "360px" ;
    divFloat.style.transition = "0.7s" ;
    btnChat.style.display = "none" ;
    btnChat3.style.display = "block" ;
    chats.style.display = "block" ;
}

function chatOff (event) {
    event.preventDefault () ;
    divFloat.style.bottom = "0%" ;
    divFloat.style.transition = "0.7s" ;
    btnChat.style.display = "block" ;
    btnChat3.style.display = "none" ;
    chats.style.display = "none" ;
}

window.addEventListener ("load", charger) ;