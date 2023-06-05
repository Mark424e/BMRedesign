export default class Cars {
    constructor() {
        this.data = {
            password: "Qwerty123",
        }

        this.rootElem = document.querySelector('.products');
        this.filter = this.rootElem.querySelector('.filter');
        this.items = this.rootElem.querySelector('.items');

        this.nameSearch = this.filter.querySelector('.nameSearch');
    }

    async init() { // index.html kalder på init funktionen, hvor init kalder på render funktionen, som til sidst kalder på getData funktionen
        this.nameSearch.addEventListener('input', () => {
            if (this.nameSearch.value.length >= 3) {
                this.render();
            }
            this.render();
        });

        await this.render();
    }

    async render() {
        const data = await this.getData();

        const row = document.createElement('div');
        row.classList.add('row', 'g-4');

        for (const item of data) {
            const col = document.createElement('div');
            col.classList.add('col-sm-6', 'col-lg-6', 'col-xl-3');

            col.innerHTML = `
                    <a href="product.php?carID=${item.carID}" class="text-decoration-none card bg-primary text-light h-100">
                        <div><img src="uploads/${item.carImg}" class="card-img-top" alt="${item.carBrand} ${item.carModel}"></div>
                        <div class="card-body">
                            <div class="row justify-content-between">
                        
                                <div class="col-8">
                                    <h6 class="card-title max-lines-1">${item.carBrand} ${item.carModel}</h6>
                                    <p class="card-subtitle text-gray max-lines-1">${item.carMotor}</p>
                                </div>
                            
                                <div class="d-flex justify-content-end col-3">
                                    <img class="car-logo" src="uploads/${item.carLogo}" alt="${item.carLogo}">
                                </div>
                           
                            </div>
                        
                            <hr>
                        
                            <div class="row justify-content-between g-2">
                                <div class="col-6">
                                    <p class="text-gray card-text">1. Reg</p>
                                    <p class="card-text max-lines-1">${item.carReg}</p>
                                </div>
                                
                                <div class="col-6">
                                    <p class="text-gray card-text">Farve</p>
                                    <p class="card-text max-lines-1">${item.carColor}</p>
                                </div>
                                
                                <div class="col-6">
                                    <p class="text-gray card-text">Km.</p>
                                    <p class="card-text max-lines-1">${item.carDistance}</p>
                                </div>
                                
                                <div class="col-6">
                                    <p class="text-gray card-text">Pris</p>
                                    <p class="card-text max-lines-1">${item.carPrice},-</p>
                                </div>
                            </div>
                        
                        </div>
                        
                    </a>
                    
                    `;
            row.appendChild(col);
        }

        this.items.innerHTML = '';
        this.items.appendChild(row);

    }

    async getData() { // Fetcher dataen fra api.php
        this.data.nameSearch = this.nameSearch.value;

        const response = await fetch('api.php', {
            method: "POST",
            body: JSON.stringify(this.data)
        });
        return await response.json();
    }
}