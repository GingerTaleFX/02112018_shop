class product {
    constructor(name, price, pic = null, id) {  //создает карточку товара
        this.label = name;
        this.pic = pic;
        this.price = price;
        this.id = id;
    }
    renderProduct( el ) {
        let newProductBlock = document.createElement('a');
        newProductBlock.href = `handlers/getCatalogItem.php?products=${this.id}`;
        newProductBlock.classList.add('catalog-block__item');
        newProductBlock.innerHTML = `
                <div class="item-pic catalog-pic" style="background-image: url('${this.pic}')">           
                </div>
                <div class="item-name">
                <a href="#">${this.label}</a>
                </div>
                <div class="item-cost">
                    <p>${this.price}</p>
                </div>
        `;       
        el.appendChild(newProductBlock);
    }
}

class Catalog {
 constructor(CatalogBlock) {
     this.el = document.querySelector(CatalogBlock);
     this.products = [];
     this.paginationBlock = document.querySelector('.catalog-pages-counter > ul');

 }
 productsArray( products ) {
    this.products = products;
 }
 renderCatalog() {
     this.products.forEach((value) => {
        value.renderProduct( this.el );
     })
 }

 clear() {
    this.el.innerHTML = '';
    this.paginationBlock.innerHTML = '';
 }

 PreloaderOn() {
    let catalog = document.querySelector('.catalog-block');
    let preloader = document.createElement('div');
    preloader.innerHTML = '<img src="/images/icons/preloader.gif">';
    catalog.appendChild(preloader);
 }

 PreloaderOff() {
     let preloader = document.querySelector('body > div:nth-child(2) > div.catalog-block > div');
     preloader.innerHTML = '';
 }

 Pagination(data) {
    let pages = data['pagination']['CountPages'];
    let CurrentPage = data['pagination']['currentPage'];
    // let pagination_counter = document.querySelector('.counter');
    for ( let i = 0; i < pages; i++ ) {
        let newPackElement = document.createElement('li');
        newPackElement.innerText = i + 1;
        newPackElement.classList.add('counter');
            if (CurrentPage == i+1) {
                newPackElement.classList.add('counter-active');
            };

        this.paginationBlock.appendChild(newPackElement);
        newPackElement.addEventListener('click', function () { 
            catalog.load(0, i + 1);
         })
    }
 }



 load(cat = 1, page = 1) {    //метод будет загружать данные
        let xhr = new XMLHttpRequest(); //создается нвоый объект, в начале он пустой
        xhr.open('GET', `/api/get-products.php?category=${cat}&page=${page}`);
        xhr.send();
        this.clear();
        this.PreloaderOn();
        
        xhr.addEventListener('load', function(){
            // xhr.responseText; //получает ответ от сервера
            let data = JSON.parse(xhr.responseText); //преобразует JSON в массив объектов
            let dataArray =[];
            data['items'].forEach(function (value) { 
                dataArray.push( new product( value.name, value.cost, value.img_src, value.id) );
            });
        
        catalog.productsArray(dataArray);
        catalog.renderCatalog();
        catalog.Pagination(data);
        catalog.PreloaderOff();
        });
    };

};

let catalog = new Catalog('.catalog-block');

catalog.load(0);

let ItemType = document.getElementById('item-type');

ItemType.addEventListener('change', function() {
    catalog.load(ItemType.value);
});


