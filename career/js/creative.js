/*!
 * Start Bootstrap - Creative Bootstrap Theme (http://startbootstrap.com)
 * Code licensed under the Apache License v2.0.
 * For details, see http://www.apache.org/licenses/LICENSE-2.0.
 */

(function($) {
    "use strict"; // Start of use strict

    // jQuery for page scrolling feature - requires jQuery Easing plugin
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: ($($anchor.attr('href')).offset().top - 50)
        }, 1250, 'easeInOutExpo');
        event.preventDefault();
    });

    // Highlight the top nav as scrolling occurs
    $('body').scrollspy({
        target: '.navbar-fixed-top',
        offset: 51
    })

    // Closes the Responsive Menu on Menu Item Click
    $('.navbar-collapse ul li a').click(function() {
        $('.navbar-toggle:visible').click();
    });

    // Fit Text Plugin for Main Header
    $("h1").fitText(
        1.2, {
            minFontSize: '35px',
            maxFontSize: '65px'
        }
    );

    // Offset for Main Navigation
    $('#mainNav').affix({
        offset: {
            top: 100
        }
    })

    // Initialize WOW.js Scrolling Animations
    new WOW().init();

})(jQuery); // End of use strict

$(function(){

    $("#class a:contains('Kelas')").parent().addClass('active');
    $("#tryout a:contains('Tryout')").parent().addClass('active');
    $("#info a:contains('Info')").parent().addClass('active');
    $("#about a:contains('Tentang')").parent().addClass('active');
    $("#call a:contains('Hubungi Kami')").parent().addClass('active');

    $("#selectSD a:contains('SD')").parent().addClass('tab-selected');
    $("#selectSMP a:contains('SMP')").parent().addClass('tab-selected');
    $("#selectSMA a:contains('SMA')").parent().addClass('tab-selected');
    $("#selectUN a:contains('UN')").parent().addClass('tab-selected');
    $("#selectSBMPTN a:contains('SBMPTN')").parent().addClass('tab-selected');
    $("#selectLain a:contains('Lainnya')").parent().addClass('tab-selected');

    $("#tentangKami a:contains('Tentang')").parent().addClass('tab-selected');
    $("#timKami a:contains('Tim Kami')").parent().addClass('tab-selected');
    $("#kataMereka a:contains('Kata Mereka')").parent().addClass('tab-selected');

    $("#video a:contains('Video')").parent().addClass('tab-selected');
    $("#latihan a:contains('Latihan')").parent().addClass('tab-selected');
    $("#ringkasan a:contains('Ringkasan')").parent().addClass('tab-selected');

    $("#soal a:contains('Soal')").parent().addClass('tab-selected');
    $("#pembahasan a:contains('Pembahasan')").parent().addClass('tab-selected');
    // $("#profilku a:contains('Profilku')").parent().addClass('tab-selected');
    // $("#kelasku a:contains('Kelasku')").parent().addClass('tab-selected');
    // $("#raporku a:contains('Raporku')").parent().addClass('tab-selected');
    // $("#lencana a:contains('Lencana')").parent().addClass('tab-selected');


});

function select1(){
    document.getElementById("option-1").style.backgroundColor = "#F6AB02";
    document.getElementById("option-2").style.backgroundColor = "#e74c3c";
    document.getElementById("option-3").style.backgroundColor = "#e74c3c";    
    document.getElementById("option-4").style.backgroundColor = "#e74c3c";
    document.getElementById("option-5").style.backgroundColor = "#e74c3c";
}

function select2(){
    document.getElementById("option-1").style.backgroundColor = "#e74c3c"; 
    document.getElementById("option-2").style.backgroundColor = "#F6AB02";
    document.getElementById("option-3").style.backgroundColor = "#e74c3c";    
    document.getElementById("option-4").style.backgroundColor = "#e74c3c";
    document.getElementById("option-5").style.backgroundColor = "#e74c3c";
}

function select3(){
    document.getElementById("option-1").style.backgroundColor = "#e74c3c";
    document.getElementById("option-2").style.backgroundColor = "#e74c3c";
    document.getElementById("option-3").style.backgroundColor = "#F6AB02";    
    document.getElementById("option-4").style.backgroundColor = "#e74c3c";
    document.getElementById("option-5").style.backgroundColor = "#e74c3c";
}

function select4(){
    document.getElementById("option-1").style.backgroundColor = "#e74c3c";
    document.getElementById("option-2").style.backgroundColor = "#e74c3c";
    document.getElementById("option-3").style.backgroundColor = "#e74c3c";    
    document.getElementById("option-4").style.backgroundColor = "#F6AB02";
    document.getElementById("option-5").style.backgroundColor = "#e74c3c";
}

function select5(){
    document.getElementById("option-1").style.backgroundColor = "#e74c3c";
    document.getElementById("option-2").style.backgroundColor = "#e74c3c";
    document.getElementById("option-3").style.backgroundColor = "#e74c3c";    
    document.getElementById("option-4").style.backgroundColor = "#e74c3c";
    document.getElementById("option-5").style.backgroundColor = "#F6AB02";
}

function loggedIn(){

    document.getElementById("masuk").style.display="none";
    document.getElementById("daftar").style.display="none";
    document.getElementById("profil-text").style.display="block";
    document.getElementById("profil-img").style.display="block";
    //alert('masuk');
}


function selectAnimator(){
    document.getElementById("animator2").checked="true";
}

function selectStrategist(){
    document.getElementById("strategist2").checked="true";
}

function selectTeacher(){
    document.getElementById("teacher2").checked="true";
}