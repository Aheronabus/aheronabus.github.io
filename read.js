document.querySelector("#btnLoadContent").addEventListener("click", () => {
  fetch("products.json")
    .then((response) => response.json())
    .then((data) => {
      document.querySelector("#content").innerHTML = "<div class='container'></div>";
      console.log(data);
      data.products.forEach((product) => {
        document.querySelector("#content").innerHTML += `
        <div class='row'>
            <div class="col-12">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">${product.name}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">${product.price}</h6>
                    <p class="card-text">${product.description}</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
                </div>
            </div>
        </div>
            `;
      });
    });
});
