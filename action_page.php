* {box-sizing: border-box}

/* Поля ввода полной ширины */
  input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Установите стиль для всех кнопок */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Дополнительные стили для кнопки "Отмена" */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Поплавок отмена и кнопки регистрации и добавить равную ширину */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Добавить отступы к элементам контейнера */
.container {
  padding: 16px;
}

/* Очистить поплавки */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Измените стили для кнопки отмены и кнопки регистрации на дополнительных маленьких экранах */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
    width: 100%;
  }
}