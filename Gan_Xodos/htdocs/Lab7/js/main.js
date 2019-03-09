$(document).ready(function(){ 
    /* ScrollReveal */
    window.sr = ScrollReveal(); 
    
    sr.reveal('.heroitems',{ 
        duration:1000, 
        origin:'bottom', 
        delay:500, 
        distance:'100px' });

    /* Lightbox */ 
    baguetteBox.run('.gallery', { 
        animation: 'fadeIn' 
    });

    
});

function subscribeValidator() {
    var subcribe = document.getElementById('subscribe').value;
    if (subcribe == '') {
        alert("Enter a valid email address.");
        document.getElementById('subscribe').style.borderColor = "red";
        return false;
    }
}

function formValidator() {
    var name = document.getElementById('name').value;
    var phone = document.getElementById('phone').value;
    var email = document.getElementById('email').value;
    if (name == '') {
        alert("Enter a valid name.");
        document.getElementById('name').style.borderColor = "red";
        return false;
    }
    if (phone == '') {
        alert("Enter a valid phone number.");
        document.getElementById('phone').style.borderColor = "red";
        return false;
    }
    if (email == '') {
        alert("Enter a valid email address.");
        document.getElementById('email').style.borderColor = "red";
        return false;
    }
    // code below not necessary because php handles the data
    // else {
    //     alert("Thank you for contacting us! We will get back to you as soon as possible!");
    //     document.getElementById('name').style.borderColor = "green";
    //     return true;
    // }
    // // return true;
}

// Error stops currently broken for modals for room modals 2,3,4,5,6 and for 'no rooms selected' and 'no guests selected' errors for all room modals
function bookNow(){
    var bookDate = document.getElementById('bookDate').value;
    var bookDated = document.getElementById('bookDated').value;
    var bookEmail = document.getElementById('bookEmail').value;
    var bookMessage = document.getElementById('bookMessage').value;
    // if (bookDate == '') {
    //     alert("Enter a valid arrival date.");
    //     document.getElementById('bookDate').style.borderColor = "red";
    //     return false;
    // } if (bookDated == '') {
    //     alert("Enter a valid departure date.");
    //     document.getElementById('bookDated').style.borderColor = "red";
    //     return false;
    // }
    if ((luxury_executive_lounge == '') && (exquisite_presidential_suite == '') && (executive_club_room == '') && (bellingham_mini_suite == '') && (the_murphy_room == '') && (deluxe_suite == '')) {
        alert("A room field must be filled.");
        document.getElementById('room').style.borderColor = "red";
        return false;
    }
    if ((lel_guests == '') && (eps_guests == '') && (ecr_guests == '') && (bms_guests == '') && (tmr_guests == '') && (ds_guests == '')) {
        alert("Enter at least one guest.");
        document.getElementById('guest').style.borderColor = "red";
        return false;
    }
    // if (bookEmail == '') {
    //     alert("Enter a valid email address.");
    //     document.getElementById('bookEmail').style.borderColor = "red";
    //     return false;
    // }
    // if (bookMessage == '') {
    //     alert("Message field must be filled.");
    //     document.getElementById('bookMessage').style.borderColor = "red";
    //     return false;
    // }
    return true;
}