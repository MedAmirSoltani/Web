var icons = {
    image: {
        upvoteg: '<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-arrow-up-square" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm8.5 9.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" /> </svg>',
        upvotef: '<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-arrow-up-square-fill" viewBox="0 0 16 16"><path d="M2 16a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2zm6.5-4.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 1 0z"/></svg>',
        downvoteg: '<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-arrow-down-square" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm8.5 2.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z"/></svg>',
        downvotef: '<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-arrow-down-square-fill" viewBox="0 0 16 16"><path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5a.5.5 0 0 1 1 0z"/></svg>'
    },

    elements: {
        upvote: document.getElementById("upvote"),
        downvote: document.getElementById("downvote"),
        nbvotes: document.getElementById("nbvote"),
    },
    static: {

        upvoted: false,
        downvoted: false

    },


};


icons.elements.upvote.innerHTML = icons.image.upvoteg;
icons.elements.downvote.innerHTML = icons.image.downvoteg;



icons.elements.upvote.addEventListener("click", function () {

    if ((icons.static.upvoted == false) && (icons.static.downvoted == false)) {
        icons.static.upvoted = true;
        icons.elements.nbvotes.value = icons.elements.nbvotes.value + 1;
        
    } else if ((icons.static.upvoted == false) && (icons.static.downvoted == true)) {
        icons.static.upvoted = true;
        icons.static.downvoted = false;
        icons.elements.nbvotes.value = icons.elements.nbvotes.value + 1;
       
    } else if ((icons.static.upvoted == true)) {
        icons.static.upvoted = false;
        icons.elements.nbvotes.value = icons.elements.nbvotes.value;
       

    }
    if (icons.static.upvoted == true) {
        icons.elements.upvote.innerHTML = icons.image.upvotef;
        icons.elements.downvote.innerHTML = icons.image.downvoteg;

    } else { icons.elements.upvote.innerHTML = icons.image.upvoteg; }


})

icons.elements.downvote.addEventListener("click", function () {




    if ((icons.static.upvoted == false) && (icons.static.downvoted == false)) {
        icons.static.downvoted = true;
        icons.elements.nbvotes.value = icons.elements.nbvotes.value - 1;
        
    } else if ((icons.static.downvoted == false) && (icons.static.upvoted == true)) {
        icons.static.downvoted = true;
        icons.static.upvoted = false;
        icons.elements.nbvotes.value = icons.elements.nbvotes.value - 1;
        
    } else if ((icons.static.downvoted == true)) {
        icons.static.downvoted = false;
        icons.elements.nbvotes.value = icons.elements.nbvotes.value;
        
    }
    if (icons.static.downvoted == true) {
        icons.elements.downvote.innerHTML = icons.image.downvotef;
        icons.elements.upvote.innerHTML = icons.image.upvoteg;
    } else { icons.elements.downvote.innerHTML = icons.image.downvoteg; }




})









