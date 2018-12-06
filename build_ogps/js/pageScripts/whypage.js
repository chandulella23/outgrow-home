
window.openTestimonial = function (sectionId) {
    var sections = document.querySelectorAll('.protfolio-inner-section');
    sections.forEach(function (section) {
        section.classList.add('testhide','hide');
    });
    
    var arrowSections = document.querySelectorAll('.arrow_box');
    arrowSections.forEach(function (section) {
        section.classList.remove('testactive');
    });

    var showSection = document.getElementById(sectionId);
    showSection.classList.remove('testhide','hide');
    
    var activeImg = document.getElementById(`${sectionId}-img`);
    activeImg.classList.add('testactive');
}

jQuery(document).ready(function() {
    jQuery('#nav-why-interactive').addClass('active');
});