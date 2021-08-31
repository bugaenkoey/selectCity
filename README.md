# selectCity
  
Задание 1
Создайте в базе данных две связанные таблицы Countries и
Cities:
Countries
(
id int, //primary key
country varchar(64) //country name
)и
Cities
(
id int, //primary key
city varchar(64), //city name
countryid int //foreign key for relationship with Countries
)
Создайте страницу lists.php, в которой создайте элемент select,
отображающий перечень стран из таблицы Countries.
Средствами AJAX сделайте так, чтобы при выборе страны в
этом элементе select, под ним появлялась таблица (тег table), содержащая список городов выбранной страны. Никаких кнопок
на странице быть не должно.
