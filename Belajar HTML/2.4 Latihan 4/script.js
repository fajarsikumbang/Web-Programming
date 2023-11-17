document.addEventListener('DOMContentLoaded', function() {
    const planets = [
        {name: 'Merkurius', description: 'Planet terdekat dengan Matahari.'},
        {name: 'Venus', description: 'Planet yang paling mirip dengan Bumi dalam hal ukuran dan struktur.'},
        {name: 'Bumi', description: 'Planet yang kita tinggali.'},
        {name: 'Mars', description: 'Dikenal sebagai "Planet Merah" karena permukaannya berwarna merah.'},
        {name: 'Jupiter', description: 'Planet terbesar dalam Tata Surya.'},
        {name: 'Saturnus', description: 'Dikenal karena cincin-cincinnya yang terlihat.'},
        {name: 'Uranus', description: 'Planet berwarna biru kehijauan dengan sumbu rotasi yang miring.'},
        {name: 'Neptunus', description: 'Planet terjauh dari Matahari dalam Tata Surya.'}
    ];

    const planetList = document.getElementById('planet-list');
    const planetDetails = document.getElementById('planet-details');

    function displayPlanets() {
        planets.forEach((planet, index) => {
            const planetCard = document.createElement('div');
            planetCard.classList.add('planet-card');
            planetCard.textContent = planet.name;
            planetCard.addEventListener('click', () => displayPlanetDetails(index));
            planetList.appendChild(planetCard);
        });
    }

    function displayPlanetDetails(index) {
        const selectedPlanet = planets[index];
        const detailCard = document.createElement('div');
        detailCard.classList.add('detail-card');
        detailCard.innerHTML = `<h3>${selectedPlanet.name}</h3><p>${selectedPlanet.description}</p>`;
        planetDetails.innerHTML = '';
        planetDetails.appendChild(detailCard);
    }

    displayPlanets();
});
