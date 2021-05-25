$(document).ready(function(){
    $(window).scroll(function(){ 
        if(this.scrollY > 20){
            $(".navbar").addClass("sticky");
        }else{
            $(".navbar").removeClass("sticky");
        }
    });
    
    $(".menu-toggler").click(function(){ 
        $(this).toggleClass("active");
        $(".navbar-menu").toggleClass("active");
    });
});

function loadAlphabet(){
    let alphabet ="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    for (let index = 0; index < alphabet.length; index++) {
        let letter = alphabet[index];
        let span = document.createElement("span");
        span.innerText = letter;
        $("#letter_search").append(span);
    }
}