// JavaScript Document

$(window).scroll(function(){
    var divHeight = $(window).height()*1;	
    var divIndex = $(window).scrollTop() / divHeight;
    
    
    console.log(divIndex);
            console.log(divHeight);

    
$(function () {
function runIt() {
  $('#fond19 img').animate({"opacity":"0.4"},500)
           .animate({"opacity":"1"},500, runIt);
}

runIt();
});


    
    $("#n1").append(function() {
        
        if (divIndex < 1) {
            $("#n1").css({opacity:'1'},1);}
        else {				
        $("#n1").css({opacity:'0.4'},1);}			
        
    });
    
    
    $("#n2").append(function() {
        
        if (divIndex >= 1 && divIndex < 2.19) {
            $("#n2").css({opacity:'1'},1);}
        else {				
        $("#n2").css({opacity:'0.4'},1);}			
        
    });
    
    $("#n3").append(function() {
        
        if (divIndex >= 2.19 && divIndex < 3.39) {
            $("#n3").css({opacity:'1'},1);}
        else {				
        $("#n3").css({opacity:'0.4'},1);}	
    });
    
    $("#n4").append(function() {
       
        if (divIndex >= 3.39 && divIndex < 4.59) {
            $("#n4").css({opacity:'1'},1);}
        else {				
        $("#n4").css({opacity:'0.4'},1);}	
    });
    
    $("#n5").append(function() {
        
    if (divIndex >= 4.59 && divIndex < 5.79) {
    $("#n5").css({opacity:'1'},1);}
        else {				
    $("#n5").css({opacity:'0.4'},1);}	
    });
    
    $("#n6").append(function() {
        
        if (divIndex >= 5.79 && divIndex < 6.99) {
    $("#n6").css({opacity:'1'},1);}
        else {				
    $("#n6").css({opacity:'0.4'},1);}	
    });
    
    $("#n7").append(function() {
        
        if (divIndex >= 6.99 && divIndex < 8.19) {
    $("#n7").css({opacity:'1'},1);}
        else {				
    $("#n7").css({opacity:'0.4'},1);}	
    });
    
    $("#n8").append(function() {
       
    if (divIndex >= 8.19 && divIndex < 9.39) {
    $("#n8").css({opacity:'1'},1);}
        else {				
    $("#n8").css({opacity:'0.4'},1);}	
    });
    
    $("#n9").append(function() {
        
        if (divIndex >= 9.39 && divIndex < 10.59) {
    $("#n9").css({opacity:'1'},1);}
        else {				
    $("#n9").css({opacity:'0.4'},1);}	
    });
    
    $("#n10").append(function() {
        
        if (divIndex >= 10.59 && divIndex < 11.79) {
    $("#n10").css({opacity:'1'},1);}
        else {				
    $("#n10").css({opacity:'0.4'},1);}	
    });
    
    $("#n11").append(function() {
        
        if (divIndex >= 11.79 && divIndex < 12.99) {
    $("#n11").css({opacity:'1'},1);}
        else {				
    $("#n11").css({opacity:'0.4'},1);}	
    });
    
    $("#n12").append(function() {
        
        if (divIndex >= 12.99 && divIndex < 14.19) {
    $("#n12").css({opacity:'1'},1);}
        else {				
    $("#n12").css({opacity:'0.4'},1);}	
    });
    
    $("#n13").append(function() {
        
        if (divIndex >= 14.19 && divIndex < 15.39) {
    $("#n13").css({opacity:'1'},1);}
        else {				
    $("#n13").css({opacity:'0.4'},1);}	
    });
    
    $("#n14").append(function() {
        
        if (divIndex >= 15.39 && divIndex < 16.59) {
    $("#n14").css({opacity:'1'},1);}
        else {				
    $("#n14").css({opacity:'0.4'},1);}	
    });
    
    $("#n15").append(function() {
        
        if (divIndex >= 16.59 && divIndex < 17.79) {
    $("#n15").css({opacity:'1'},1);}
        else {				
    $("#n15").css({opacity:'0.4'},1);}	
    });
    
    $("#n16").append(function() {
        
        if (divIndex >= 17.79 && divIndex < 18.99) {
    $("#n16").css({opacity:'1'},1);}
        else {				
    $("#n16").css({opacity:'0.4'},1);}	
    });
    
    $("#n17").append(function() {
        
        if (divIndex >= 18.99 && divIndex < 20.19) {
    $("#n17").css({opacity:'1'},1);}
        else {				
    $("#n17").css({opacity:'0.4'},1);}	
    });
    
    $("#n18").append(function() {
        
        if (divIndex >= 20.19 && divIndex < 21.39) {
    $("#n18").css({opacity:'1'},1);}
        else {				
    $("#n18").css({opacity:'0.4'},1);}	
    });
    
    $("#n19").append(function() {
        
        if (divIndex >= 21.39 && divIndex < 22.59) {
    $("#n19").css({opacity:'1'},1);}
        else {				
    $("#n19").css({opacity:'0.4'},1);}	
    });
        
    $("#intro a").append(function() {
        
        if (divIndex < 1) {
            $("#intro a").attr("href", "#arki");}	
        if (divIndex >= 1) {
            $("#intro a").attr("href", "#ce");}            
        if (divIndex >= 2.19) {
            $("#intro a").attr("href", "#writer");}
        if (divIndex >= 3.39) {
            $("#intro a").attr("href", "#doctor");}			
        if (divIndex >= 4.59) {
            $("#intro a").attr("href", "#barber");}	
        if (divIndex >= 5.79) {
            $("#intro a").attr("href", "#fashion");}	
        if (divIndex >= 6.99) {
            $("#intro a").attr("href", "#marketing");}	
        if (divIndex >= 8.19) {
            $("#intro a").attr("href", "#photography");}	
        if (divIndex >= 9.39) {
            $("#intro a").attr("href", "#teacher");}	
        if (divIndex >= 10.59) {
            $("#intro a").attr("href", "#videography");}
        if (divIndex >= 11.79) {
            $("#intro a").attr("href", "#footer");}	
        // if (divIndex >= 12.99) {
        //     $("#intro a").attr("href", "#fond11");}
        // if (divIndex >= 14.19) {
        //     $("#intro a").attr("href", "#fond12");}
        // if (divIndex >= 15.39) {
        //     $("#intro a").attr("href", "#fond13");}
        // if (divIndex >= 16.59) {
        //     $("#intro a").attr("href", "#fond14");}
        // if (divIndex >= 17.79) {
        //     $("#intro a").attr("href", "#fond15");}
        // if (divIndex >= 18.99) {
        //     $("#intro a").attr("href", "#fond16");}
        // if (divIndex >= 20.19) {
        //     $("#intro a").attr("href", "#fond17");}
        // if (divIndex >= 21.39) {
        //     $("#intro a").attr("href", "footer");}
        // if (divIndex >= 21.59) {
        //     $("#intro a").css({display:'none'},1);}
        else {
            $("#intro a").css({display:'block'},1);}

        
            
        
    });
    
    $("#fond19 img,#fond19 p,#fond19 hr").append(function() {
        if (divIndex >= 0.19 && divIndex <= 1.36) {
    $("#fond19 img").css({display:'block'},1);
    $("#fond19 p,#fond19 hr").fadeIn('fast');}
        else {			
    $("#fond19 img").css({display:'none'},1);			
    $("#fond19 p,#fond19 hr").fadeOut('fast');}				
    });
    
    
    });
    
