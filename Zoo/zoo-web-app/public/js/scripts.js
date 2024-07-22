document.addEventListener('DOMContentLoaded', function() {
    const animalList = [
        { name: 'Lion', info: 'The king of the jungle.' },
        { name: 'Elephant', info: 'The largest land animal.' },
        { name: 'Giraffe', info: 'The tallest animal on earth.' }
    ];

    const animalListContainer = document.getElementById('animal-list');

    animalList.forEach(animal => {
        const animalDiv = document.createElement('div');
        animalDiv.classList.add('animal');
        
        const animalName = document.createElement('h3');
        animalName.textContent = animal.name;
        
        const animalInfo = document.createElement('p');
        animalInfo.textContent = animal.info;
        
        animalDiv.appendChild(animalName);
        animalDiv.appendChild(animalInfo);
        animalListContainer.appendChild(animalDiv);
    });
});
