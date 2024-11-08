document.addEventListener("activeBreadcrumb", activeHomepage)

export function activeHomepage() {
    const tabs = document.querySelectorAll('.nav-link-homepage');

    tabs.forEach(tab => {
        tab.addEventListener('click', function () {
            tabs.forEach(t => t.classList.remove('active'));

            this.classList.add('active');
        });
    });
}
