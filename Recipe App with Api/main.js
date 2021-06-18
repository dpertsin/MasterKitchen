const searchForm = document.querySelector('form');
const searchResultDiv = document.querySelector('.search-results');
const container = document.querySelector('.container');
let searchQuery = '';
let mealTypeForm = '%';
let cuisineTypeForm = '%';
let yieldForm = '%';
let dietTypeForm = '%';
let timeForm = '%';
const APP_ID = '8ff39162';
const APP_key = '28b831b2bca22d9ba0af01150bb0a7b7';

var from = 0;
var to = 9;


searchForm.addEventListener('submit', (e)=>{
    e.preventDefault();
    searchQuery = e.target.querySelector('input').value;
    mealTypeForm = e.target.querySelector('#meal').value;
    cuisineTypeForm = e.target.querySelector('#cuisine').value;
    yieldForm = e.target.querySelector('#yield').value;
    dietTypeForm = e.target.querySelector('#diet').value;
    timeForm = e.target.querySelector('#myRange').value;

    console.log(searchQuery);
    console.log(cuisineTypeForm);
    fetchAPI();
});

async function fetchAPI(){
    const baseURL = `https://api.edamam.com/search?q=${searchQuery}&app_id=${APP_ID}&app_key=${APP_key}&from=${from}&to=${to}&mealType=${mealTypeForm}&cuisineType=${cuisineTypeForm}&yield=${yieldForm}&diet=${dietTypeForm}&time=${timeForm}`;
    const response = await fetch(baseURL);
    const data = await response.json();
    generateHTML(data.hits);
    console.log(data);
    btnFavorite();
}

function generateHTML(results){
    let generatedHTML = '';
    results.map(result => {
        generatedHTML +=
        `
        <div class="recipe">
            <a href="${result.recipe.url}" target="_blank">
                <img src="${result.recipe.image}" alt="">
            </a>
            <div class="flex-container">
                <h3 class="recipe-title">
                    <a href="${result.recipe.url}" target="_blank">${result.recipe.label}</a>
                </h3>
                <button type="button" data-type="heart" class="far fa-heart favorites-icon" title="Προσθήκη στα αγαπημένα"></button>
            </div>
            <p class="recipe-data">Είδος φαγητού: ${result.recipe.mealType}</p>
            <p class="recipe-data">Είδος κουζίνας: ${result.recipe.cuisineType}</p>
            <p class="recipe-data">Βαθμός δυσκολίας: ${result.recipe.yield}</p>
            <p class="recipe-data">Θερμίδες: ${result.recipe.calories.toFixed(2)}</p>
            <p class="recipe-data">Χρόνος υλοποίησης: ${result.recipe.totalTime}'</p>
        </div>
        `            
    });
    searchResultDiv.innerHTML = generatedHTML;
}

// This is for range slider
var slider = document.getElementById("myRange");
var output = document.getElementById("time");
output.innerHTML = slider.value + "'"; // Display the default slider value

// Update the current slider value (each time you drag the slider handle)
slider.oninput = function() {
  output.innerHTML = this.value + "'";
}
// Range Slider ENDS

// START of pagination (prev or next page)
var current_page = 1;
btnVisibility(current_page);

function prevPage(){
    if(current_page > 1){
        from -= 9;
        to -= 9;
        current_page--;
        fetchAPI();
        btnVisibility(current_page);
    }
}

function nextPage(){
    if(current_page < 100){
        from += 9;
        to += 9;
        current_page++;
        fetchAPI();
        btnVisibility(current_page);
    }
}

function btnVisibility(page) {
    var btn_next = document.getElementById("btn_next");
    var btn_prev = document.getElementById("btn_prev");


    if (page == 1){
        btn_prev.style.visibility = "hidden";
    } else {
        btn_prev.style.visibility = "visible";
    }
        
    if (page == 100){
        btn_next.style.visibility = "hidden";
    } else {
        btn_next.style.visibility = "visible";
    }
}


// END of pagination (prev or next page)


// START of add to favorites
function btnFavorite(){
    var addFavorite = document.querySelectorAll('.favorites-icon');

    [].forEach.call(addFavorite, el => {
        el.addEventListener('click', btnAddFavorites, false);
    });

    function btnAddFavorites(){
        this.classList.toggle('fas');
    }
}
// END of add to favorites
