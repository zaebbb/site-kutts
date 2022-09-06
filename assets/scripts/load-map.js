(() => {
    document.addEventListener("DOMContentLoaded", async () => {
        let data = await (await fetch("./../assets/db/map.json")).json()
        let mapContent = document.querySelector(".map__content")
        if(mapContent){
            data.data_map.forEach((el, i) => {
                mapContent.insertAdjacentHTML("beforeend", `
                <li class="map__content--one">
                <h3 class="map__heading">${el.head}</h3>
                <p class="map__description">${el.text}</p>
                    <span class="map__element">${i + 1}</span>
                </li>
                `)
            })
        }
    })
})()