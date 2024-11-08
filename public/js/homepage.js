document.addEventListener("activeHomepage", activeHomepage)

export function activeHomepage() {
    const tabs = document.querySelectorAll('.nav-link-homepage');

    tabs.forEach(tab => {
        tab.addEventListener('click', function () {
            tabs.forEach(t => t.classList.remove('active'));

            this.classList.add('active');
        });
    });
}


document.getElementById('scrollRight').addEventListener('click', function() {
    document.querySelector('.destination-cards-container').scrollBy({
        left: 300,
        behavior: 'smooth'
    });
});
