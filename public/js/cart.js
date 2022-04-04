// tăng giảm số lượng sản phẩm trong giỏ hàng
const checkAll = document.querySelector('#chooseAllProducts');
const btnUps = document.querySelectorAll(".btnUpProduct");
btnUps.forEach(btnUp => {
    btnUp.addEventListener('click', upProduct);
});
const btnDowns = document.querySelectorAll(".btnDownProduct");
btnDowns.forEach(btnDown => {
    btnDown.addEventListener('click', downProduct);
});

const checkOne = document.querySelectorAll(".chooseOneProduct");
// check all
checkAll.addEventListener('change', () => {
    if (checkAll.checked) {
        for (checkItem of checkOne) {
            checkItem.checked = true;
        }
    } else {
        for (checkItem of checkOne) {
            checkItem.checked = false;
        }
    }
})


function upProduct(e) {
    const inputNumberProduct = e.currentTarget.parentElement.querySelector('.number-product');
    const price_one = e.currentTarget.parentElement.parentElement.parentElement.querySelector('.price-one');
    const price = e.currentTarget.parentElement.parentElement.parentElement.querySelector('.price');
    let newNumberProduct = ++inputNumberProduct.value;
    let resultPrice = price_one.textContent * newNumberProduct;
    price.textContent = resultPrice.toFixed(3);
}

function downProduct(e) {
    const inputNumberProduct = e.currentTarget.parentElement.querySelector('.number-product');
    if (inputNumberProduct.value !== '1') {
        const price_one = e.currentTarget.parentElement.parentElement.parentElement.querySelector('.price-one');
        const price = e.currentTarget.parentElement.parentElement.parentElement.querySelector('.price');
        let newNumberProduct = --inputNumberProduct.value;
        let resultPrice = price_one.textContent * newNumberProduct;
        price.textContent = resultPrice.toFixed(3);
    }
}
