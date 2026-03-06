const buttons = document.querySelectorAll(".price-btn")

buttons.forEach(btn => {
    btn.addEventListener("click", () => {
        const billing = btn.dataset.billing

        const monthly = document.querySelectorAll('#price-month')
        const yearly = document.querySelectorAll('#price-year')

        if (billing === "year") {
            monthly.forEach(el => el.style.display = "none");
            yearly.forEach(el => el.style.display = "flex");
        } else {
            monthly.forEach(el => el.style.display = "flex");
            yearly.forEach(el => el.style.display = "none");
        }
    })
})