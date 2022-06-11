<?php
	require_once('../nutils.php');
	
	printHeader('Покорми котика');
?>

<div class="container-md mt-5">
<div class="row featurette">
        <div class="col-md-8">
          <h2 class="featurette-heading mb-2">Дистанционная технология подкармливания котиков</h2><br>
          <p class="lead" align="justify">Дистанционную технологию подкармливания котиков разработали студенты кафедры Борис Лесин и Михаил Ступак. <br><br>С помощью телеграм-бота он командует компьютеру Raspberry Pi и контроллеру на платформе Arduino повернуть банку с кормом с помощью сервомотора, а также сделать фотографию довольного котика.Если на фотографии котик недоволен, можно послать команду подогреть ему коврик.<br><br>Опытный образец эксплуатируется на даче преподавателя кафедры Г. А. Милонова.<br><br></p>
        </div>
        <div class="col-md-4">
          <img src="../images/other/cat1.jpg" class="card-img-top rounded-3" >
          <img src="../images/other/cat3.jpg" class="card-img-top rounded-3" >
          <img src="../images/other/cat2.jpg" class="card-img-top rounded-3" >
        </div>
      </div>

    </div>
	
<?php
	printFooter();
?>