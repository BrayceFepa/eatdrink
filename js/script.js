fetch('http://localhost:3004/products', {
    method: 'GET',
})
.then(response => response.json())
.then(responseObject =>{
    console.log(responseObject);

    responseObject.forEach(obj => {

        let img = document.createElement('img');

        let foodCard = document.createElement('div');
        foodCard.setAttribute('class', 'food-card');

        let h4 = document.createElement('h4');

        let cardFoot = document.createElement('div');
        cardFoot.setAttribute('class', 'card-foot');

        let h3 = document.createElement('h3');

        let a = document.createElement('a');
        a.setAttribute('href', '');
        a.setAttribute('class', 'btn f-btn');




        img.setAttribute('src', `${obj.image}`);

        h4.textContent = `${obj.name}`;

        h3.textContent = `${obj.price}`;

        a.textContent = `${obj.add}`;

        cardFoot.appendChild(h3);
        cardFoot.appendChild(a);


        foodCard.appendChild(img);
        foodCard.appendChild(h4);
        foodCard.appendChild(cardFoot);


        let foodRow = document.getElementById('food-row');

        foodRow.appendChild(foodCard);

        






    })


}).catch(error => {
    console.error(error);
});