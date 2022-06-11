<?php
	require_once('../nutils.php');
	
	printHeader('Студентам');
?>

<div class="container-md">
    <h2 class="element-animation mt-4 text-center"><strong>Студентам</strong></h2>

    <div class="my-5">
        <h5 class="lead element-animation">Курсовые проекты и работы</h5>
        <ul class="lead element-animation">
            <li><a href="/files/title2021.docx">Образец титульного листа на реферат (2021)</a>
            </li>
            <li><a href="/files/instrCurs.doc">Инструкция по курсовому проектированию</a>
            </li>
        </ul>
    </div>

    <div class="my-5">
        <h5 class="lead element-animation">Летняя практика</h5>
        <ul class="lead element-animation">
            <li><a href="/files/task1.doc">Пример задания</a></li>
            <li><a href="/files/example-2.doc">Шаблон отчета (2020)</a></li>
        </ul>
    </div>

    <div class="my-5">
        <h5 class="lead element-animation">Производственное обучение (НИР)</h5>
            <ul class="lead element-animation">
                <li><a href="/files/dpo2.docx">Дневник производственного обучения</a></li>
            </ul>
    </div>

    <div class="my-5">
        <h5 class="lead element-animation">Семинары</h5>
        <p class="element-animation lead">19.11.2016 на кафедре прошли дополнительные семинары:</p>
        <ul class="lead element-animation">
            <li><a href="/sem/scrum.php">Cергей Архипов: Опыт внедрения технологий разработки ПО SCRUM</a></li>
            <li><a href="/sem/3d.php">Александр Стариков: Средства и технологии 3D-графики и спецэффектов</a></li>
        </ul>
    </div>
</div>
	
<?php
	printFooter();
?>