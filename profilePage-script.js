//Switching tabs
const tabs = document.querySelectorAll('[data-tab-target]')
const tabContents = document.querySelectorAll('[data-tab-content]')

tabs.forEach(tab =>{
    tab.addEventListener('click', () =>{
        /*the tab just clicked on */
        const target = document.querySelector(tab.dataset.tabTarget)
        
        /*make the content of a previously clicked tab disappear 
        whenever you click on a new tab*/
        tabContents.forEach(content =>{
            content.classList.remove('active')
        })

        /*showing which tab is the user is on */
        tabs.forEach(tab =>{
            tab.classList.remove('active')
        })

        tab.classList.add('active')
        target.classList.add('active')
    })
})