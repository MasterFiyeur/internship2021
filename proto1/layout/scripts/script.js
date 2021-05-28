function letterGen(){
    const alphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    for (let index = 0; index < alphabet.length; index++) {
        let letter = alphabet[index];
        $('#alpha_search .letter_container').append("<span>"+letter+"</span>");
    }
}

function toggleSearch(element_id){
    const elements = $(".search_method").children();
    for (let index = 0; index < elements.length; index++) {
        const element = elements[index];
        if(element.id != element_id){	
            $(element).addClass("method_hidden");
        }else{
            $(element).removeClass("method_hidden");
        }
    }
}