(() => {
    document.addEventListener("DOMContentLoaded", async () => {
        let data = await (await fetch("./../assets/db/works.json")).json()
        let worksContent = document.querySelector(".works__container")
        if(worksContent){
            let content = ""

            data.data_works.forEach((el, i) => {
                if(i === 0 || (i + 1) % 5 === 0){
                    content += `<ul class="works__list">`
                }


                content +=  `
                <li class="works__item">
                        <h3 class="works__heading">${el.head}</h3>
                        <p class="works__description">${el.text}</p>
                        <a href="${el.link}" class="works__btn btn">
                            <span class="btn__text">Подробнее</span>
                        </a>
                    </li>
                `

                if(i !== 0 && (i + 1) % 4 === 0){
                    content += `</ul>`
                }
            })

            worksContent.insertAdjacentHTML("beforeend", content)
        }
    })
})()