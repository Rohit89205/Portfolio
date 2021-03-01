var footer = document.getElementById('main-footer');
footer.insertAdjacentHTML('afterbegin', ` 
    Copyright &copy; <span class="year"></span> | Rohit Yadav 
    <a href="#" target="_blank" class="power">
    </a>`);


const year1 = document.querySelector('.year');
const date = new Date();
const year = date.getFullYear();
year1.innerText = year;