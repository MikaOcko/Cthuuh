import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// Pop-up "Produit ajouté au panier"
document.getElementById("add-to-cart").addEventListener("click", function () {
    alert("Produit ajouté au panier");
});
