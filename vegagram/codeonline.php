<?php
	require_once('../nutils.php');
	
	printHeader('Онлайн-сервис для проверки программного кода');
?>

<div class="container-md mt-5">
<div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading mb-2">Онлайн-сервис для проверки программного кода</h2><br>
          <p class="lead" align="justify">Онлайн-сервис для проверки программного кода теперь используется для проведения контрольных работ по программированию на кафедре. <br><br>После ввода логина и пароля студент выбирает задание, загружает текст программы, а сервис выполняет ее компиляцию и тестирование по заранее заготовленным преподавателем критериям.<br><br>

          Затем преподаватель может увидеть, какие были попытки, чем они завершились и на каком этапе возникли ошибки. <br><br>
            
          Преподаватели наверняка оценят и скажут большое спасибо его разработчику - Евгению Пистуну.</p>
        </div>
        <div class="col-md-5 order-md-1">
          <img src="../images/other/code.jpg" class="card-img-top rounded-3">
          <img src="../images/other/code1.jpg" class="card-img-top rounded-3">
          <img src="../images/other/code2.jpg" class="card-img-top rounded-3">

        </div>
      </div>

    </div>
	
<?php
	printFooter();
?>