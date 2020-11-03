window.addEventListener('DOMContentLoaded', (event) => {
    console.log('DOM fully loaded and parsed');

    const date = document.querySelector("#date")
    const title = document.querySelector("title")
    const h1 = document.querySelector("h1")


    const now = new Date()
    let year = now.getFullYear()

    if (now.getMonth() > 2) {
        year += 0
    }

    const halloween = new Date(`December, ${year} 00:00:00`)
    const timeUntil = halloween.getTime() - now.getTime()
    const daysUntil = Math.abs(Math.ceil(timeUntil / (1000 * 60 * 60 * 24)))

    switch (daysUntil) {
        case 1:
            h1.innerHTML = `Estará disponible en <span id="date">${daysUntil}</span> días!`
            title.innerHTML = `${daysUntil} Días faltantes`
            break;
        case 0:
            h1.innerHTML = `<span id="date">Hoy es el día!</span> prepárate para asombrarte!`
            title.innerHTML = "Ahhhh! Es hoy!"
            break;
        default:
            date.innerHTML = daysUntil
            title.innerHTML = `${daysUntil} Días faltantes!`
            break;
    }

});