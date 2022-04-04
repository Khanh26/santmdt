const tabOrder = document.querySelectorAll('.tab-order');
tabOrder.forEach((element, index, tabs) => {
    element.addEventListener('click', (e) => {
        tabs.forEach(tab => tab.classList.remove('active'));
        e.target.classList.add('active');
    })
});
