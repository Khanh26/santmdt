// tăng giảm số lượng sản phẩm trong giỏ hàng
const checkAll = document.querySelector('#chooseAllProducts');

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
