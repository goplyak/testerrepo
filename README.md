# Тестовое
Сделал проверку по номеру телефона [посмотреть можно здесь](https://derror.ru/hi-tech/), по факту можно ипользовать библиотеку, но я же тестируюсь. Ушло 3 часа, пока разобрался с кодами стран :)

НО:
Писать это на php нет смысла (если данные не будут уходит в бд или как-то взаимодействовать),
лучше написать это на js и снять лишнию нагрузку с сервере (но повесить на пользователя), условно к примеру:

[Есть библиотека intl-tel-input](https://github.com/jackocnr/intl-tel-input), вес 30 кб js и 20 кб css, быстрее в реализаци.

Я не писал подобное, но больше чем уверен, если немного проще сделать, будет меньше весить, но также все зависит от проекта
и возможностей сервера :)

+ ну или все данные хвранить в каком-то json файле и js-ом пробегатся по нему к примеру.