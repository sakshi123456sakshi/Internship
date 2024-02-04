// import picture from '../image/b2.jpg'
let openShopping = document.querySelector('.shopping');
let closeShopping = document.querySelector('.closeShopping');
let list = document.querySelector('.list');
let listCard = document.querySelector('.listCard');
let body = document.querySelector('body');
let total = document.querySelector('.total');
let quantity = document.querySelector('.quantity');

openShopping.addEventListener('click', () => {
    body.classList.add('active');
})
closeShopping.addEventListener('click', () => {
    body.classList.remove('active');
})

let products = [{
        id: 1,
        name: 'Aloo tikki Burger',
        image: '../image/b2.jpg',
        price: 120
    },
    {
        id: 2,
        name: 'Cheesy French Fries ',
        image: '../image/ff1.jpg',
        price: 120
    },
    {
        id: 3,
        name: 'vanilla Milk Shake',
        image: '../image/m1.jpg',
        price: 220
    },
    {
        id: 4,
        name: 'Fish Fries',
        image: '../image/f1.jpg',
        price: 120
    },
    {
        id: 5,
        name: 'Fried Chicken',
        image: '../image/c1.jpg',
        price: 320
    },
    {
        id: 6,
        name: 'peri-peri French Fries',
        image: '../image/ff2.jpg',
        price: 140
    },
    {
        id: 7,
        name: 'Lemonade',
        image: '../image/m3.jpg',
        price: 150
    },
    {
        id: 8,
        name: 'Garlic Bread',
        image: '../image/garlic.jpg',
        price: 180
    },
    {
        id: 9,
        name: 'Spagetti',
        image: '../image/italip1.jpg',
        price: 200
    },
    {
        id: 10,
        name: 'Choclate Milk shake',
        image: '../image/m2.jpg',
        price: 150
    },
    {
        id: 11,
        name: 'choclate pestry',
        image: '../image/p1.jpg',
        price: 150
    },
    {
        id: 12,
        name: 'Red valvet Pestry',
        image: '../image/p2.jpg',
        price: 170
    },
    {
        id: 13,
        name: 'vanilla pestry',
        image: '../image/p3.jpg',
        price: 180
    },
    {
        id: 14,
        name: 'Noodles',
        image: '../image/noodle1.jpg',
        price: 120
    },
    {
        id: 15,
        name: 'Salad',
        image: '../image/r1.jpg',
        price: 160
    },
    {
        id: 16,
        name: 'Panner Sandwich',
        image: '../image/sand1.jpg',
        price: 320
    },
    {
        id: 17,
        name: 'Bombay Sandwich',
        image: '../image/sand2.jpg',
        price: 120
    },
    {
        id: 18,
        name: 'Salad',
        image: '../image/s1.jpg',
        price: 150
    },
    {
        id: 19,
        name: 'paneer Pizza',
        image: '../image/pizza1.jpg',
        price: 150
    },
    {
        id: 20,
        name: 'chicken Pizza',
        image: '../image/pizza3.jpg',
        price: 150
    },
    {
        id: 20,
        name: 'veggies pizza',
        image: '../image/pizza2.jpg',
        price: 150
    },


];
let listCards = [];

function initApp() {
    products.forEach((value, key) => {
        let newDiv = document.createElement('div');
        newDiv.classList.add('item');
        newDiv.innerHTML = `
            <img src="${value.image}">
            <div class="title">${value.name}</div>
            <div class="price">${value.price.toLocaleString()}</div>
            <button onclick="addToCard(${key})">Add To Card</button>`;
        list.appendChild(newDiv);
    })
}
initApp();

function addToCard(key) {
    if (listCards[key] == null) {
        listCards[key] = products[key];
        listCards[key].quantity = 1;
    }
    reloadCard();
}

function reloadCard() {
    listCard.innerHTML = '';
    let count = 0;
    let totalPrice = 0;
    listCards.forEach((value, key) => {
        totalPrice = totalPrice + value.price;
        count = count + value.quantity;
        if (value != null) {
            let newDiv = document.createElement('li');
            newDiv.innerHTML = `
               
                <div>${value.name}</div>
                <div>${value.price.toLocaleString()}</div>
                <div>
                    <button onclick="changeQuantity(${key}, ${value.quantity - 1})">-</button>
                    <div class="count">${value.quantity}</div>
                    <button onclick="changeQuantity(${key}, ${value.quantity + 1})">+</button>
                </div>`;
            listCard.appendChild(newDiv);
        }
    })
    total.innerText = totalPrice.toLocaleString();
    quantity.innerText = count;
}

function changeQuantity(key, quantity) {
    console.log(key, quantity);
    if (quantity == 0) {
        delete listCards[key];
    } else {
        listCards[key].quantity = quantity;
        listCards[key].price = quantity * products[key].price;
    }
    reloadCard();
}