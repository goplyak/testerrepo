//	Данные для передачи на сервер например	id товаров и его количество


// принцип	тот же самый что и у обычного POST	запроса

function ajax(phone) {

    let request = new XMLHttpRequest();
    let url = "https://derror.ru/hi-tech/ajax.php";

    let text = document.querySelector('.msg-result');
    text.innerHTML = '';

    let params = "phone=" + phone;

    request.responseType = "json";
    request.open("POST", url, true);
    request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    request.addEventListener("readystatechange", () => {

        if (request.readyState === 4 && request.status === 200) {
            let obj = request.response;
            if (obj.error) {
                text.innerHTML = obj.error;
                setTimeout(function tick() {
                    text.innerHTML = '';
                }, 7000);
            } else {
                text.innerHTML = obj.country;
            }

        }
    });

    request.send(params);
}

const form = document.querySelector('#detect-form');
const btn = document.querySelector('#detect-submit');

form.addEventListener('submit', function (event) {
    event.preventDefault();
});

btn.addEventListener('click', function (event) {
    let phone = form.querySelector('input').value;
    ajax(phone);
});

