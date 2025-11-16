document.addEventListener("DOMContentLoaded", () => {

    const openCart = document.getElementById("open-mini-cart");
    const overlay = document.getElementById("dulciela-mini-cart");
    const closeBtn = document.querySelector(".mini-cart-close");

    if (!openCart || !overlay) return;

    openCart.addEventListener("click", (e) => {
        e.preventDefault();
        overlay.classList.add("active");
    });

    closeBtn.addEventListener("click", () => {
        overlay.classList.remove("active");
    });

    overlay.addEventListener("click", (e) => {
        if (e.target === overlay) {
            overlay.classList.remove("active");
        }
    });

});
