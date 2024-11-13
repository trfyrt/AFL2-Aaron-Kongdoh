// Scroll
const sections = ["welcome", "about-me", "skill", "project", "contact"];
let currentSectionIndex = 0;

document.querySelectorAll('#scrollspy .nav-link').forEach((link) => {
    link.addEventListener('click', (event) => {
        const index = parseInt(event.target.getAttribute('data-index'));
        if (!isNaN(index)) {
            currentSectionIndex = index;
        }
    });
});

window.addEventListener('wheel', (event) => {
    event.preventDefault();

    if (event.deltaY > 0) {
        if (currentSectionIndex < sections.length - 1) currentSectionIndex++;
    } else {
        if (currentSectionIndex > 0) currentSectionIndex--;
    }

    document.getElementById(sections[currentSectionIndex]).scrollIntoView({
        behavior: 'smooth'
    });
}, {
    passive: false
});

// parallax
document.addEventListener("mousemove", parallax);

function parallax(e) {
    document.querySelectorAll(".par-obj").forEach(function(move) {

        var moving_value = move.getAttribute("data-value");
        var x = e.clientX * moving_value;
        var y = e.clientY * moving_value;

        move.style.transform = `translateX(${x}px) translateY(${y}px)`;
    })
}
