function showSection(sectionId) {
    const sections = document.querySelectorAll('.content-section');
    const links = document.querySelectorAll('nav ul li a');

    sections.forEach(section => {
        section.classList.remove('active');
    });

    links.forEach(link => {
        link.classList.remove('active');
    });
    
    const activeSection = document.getElementById(sectionId);
    activeSection.classList.add('active');

    const activeLink = document.getElementById(`link-${sectionId}`);
    activeLink.classList.add('active');
}

// Nastavit výchozí zobrazení první sekce
document.addEventListener("DOMContentLoaded", function() {
    showSection('section-contact');
});