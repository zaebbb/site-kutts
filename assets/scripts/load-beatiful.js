(() => {
    document.addEventListener("DOMContentLoaded", async () => {
        let data = await (await fetch("./../assets/db/beatiful.json")).json()
        let beatifulContent = document.querySelector(".beatiful__list")
        if(beatifulContent){
            data.data_beatiful.forEach((el, i) => {
                beatifulContent.insertAdjacentHTML("beforeend", `
                <li class="beatiful__item">
                    <div class="beatiful__content">
                        <img src="${el.image}" alt="${el.head}" class="beatiful__image">
                        <h3 class="beatiful__heading">${el.head}</h3>
                        ${el.plusses.map(elem => `<span class="beatiful__beatify">${elem}</span>`).join("")}
                        <a href="${el.link}" class="beatiful__btn btn">
                            <span class="btn__text">Подробнее</span>
                        </a>
                    </div>
                </li>
                `)
            })
        }
    })
})()