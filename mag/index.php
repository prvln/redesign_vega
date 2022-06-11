<?php
	require_once('../nutils.php');
	
	printHeader('Дисциплины магистратуры');
?>

<div class="container-md container-sm">
<div class="row my-2 ">
            <h2 class="element-animation">Магистратура<br>01.04.02 - Прикладная математика и информатика</h2>
            <h5 class="text-muted mt-3 element-animation"><strong>Навигация по семестрам:</strong></h5>
            
                <div class="d-flex justify-content-start flex-column flex-lg-row element-animation">
                   
                        <a href="#first-sem" class="btn btn-outline-secondary my-1 mr-lg-2">1 семестр</a>
                        <a href="#second-sem" class="btn btn-outline-secondary my-1 mr-lg-2">2 семестр</a>

                        <a href="#third-sem" class="btn btn-outline-secondary my-1 mr-lg-2">3 семестр</a>
                        <a href="#four-sem" class="btn btn-outline-secondary my-1 mr-lg-2">4 семестр</a>

                        <a href="../bak" class="btn btn-outline-danger my-1 mr-lg-2">Дисциплины бакалавриата &raquo;</a>
                        
                </div>
            <div class="element-animation text-center">
                <h2 class="mt-5">1 курс</h2>
                <h2 id="first-sem" class="mb-5">1 семестр</h2>
            </div>
            
            <div class="col-xl-3 col-md-6 element-animation">
                <div class="d-flex flex-column">
                    <h5>Информационные&nbspтехнологии</h5>
                    <div>
                        <button class="prof ">Языки высокоуровневого программирования</button> 
                        <button class="prof ">Тестирование программного обеспечения</button> 
                        <button data-toggle="Modal-2" class="prof ">Основы научных исследований</button> 
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 element-animation">
                <div class="d-flex flex-column">
                    <h5>Высшая математика</h5>
                    <div>
                        <button class="vmath ">Дискретные математические модели</button>
                        <button class="vmath ">Непрерывные математические модели</button>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 element-animation">
                <div class="d-flex flex-column">
                    <h5>Общепрофессиональные</h5>
                    <div>
                        <button class="otherDIS ">Иностранный язык</button>
                
                    </div>

                </div>
            </div>

            <div class="col-xl-3 col-md-6 element-animation">
                <div class="d-flex flex-column">
                    <h5>Проекты</h5>
                    <div >
                        <button class="projects">Научно-исследовательская работа</button>
                    </div>

                </div>
            </div>
            
            <div class="element-animation text-center">
                <h2 id="second-sem" class="my-5">2 семестр</h2>
            </div>
            <div class="col-xl-3 col-md-6 element-animation">
                <div class="d-flex flex-column">
                    <h5>Информационные&nbspтехнологии</h5>
                    <div>
                        <button class="prof ">Функциональное программирование</button> 
                        <button class="prof ">Программирование параллельных вычислений</button>
                        <button class="prof ">Искусственный интеллект и распознавание образов</button>
                        <button class="prof ">Администрирование Linux</button> 
                        <button class="prof ">Обработка радиолокационной информации</button> 

                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 element-animation">
                <div class="d-flex flex-column">
                    <h5>Проекты</h5>
                    <div >
                        <button class="projects ">Функциональное программирование</button>
                        <button data-toggle="Modal-28" class="projects ">Научно-исследовательская работа</button>
                    </div>
                </div>
            </div>

            <div class="element-animation text-center">
                <h2 class="mt-5">2 курс</h2>
                <h2 id="third-sem" class="mb-5">3 семестр</h2>
            </div>
            <div class="col-xl-3 col-md-6 element-animation">
                <div class="d-flex flex-column">
                    <h5>Информационные&nbspтехнологии</h5>
                    <div>
                        <button class="prof ">Дизайн-мышление</button>
						<button class="prof ">Эргономика программного обеспечения</button>
						<button class="prof ">Управление командными программными проектами</button>
                        <button class="prof ">Многокритериальная компьютерная обработка информации</button>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 element-animation">
                <div class="d-flex flex-column">
                    <h5>Высшая математика</h5>
                    <div>
                        <button class="vmath ">Моделирование волновых процессов</button> 
                        <button class="vmath ">История и современные проблемы прикладной математики и информатики</button>
                    </div>
                </div>
            </div>
            
            <div class="col-xl-3 col-md-6 element-animation">
                <div class="d-flex flex-column">
                    <h5>Проекты</h5>
                    <div >
                        <button data-toggle="Modal-28" class="projects ">Научно-исследовательская работа</button>
                        <button data-toggle="Modal-10" class="projects">Дизайн-мышление</button>
                    </div>

                </div>
            </div>
            
            <div class="element-animation text-center">
                <h2 id="four-sem" class="my-5">4 семестр</h2>
            </div>

            <div class="col-xl-3 col-md-6 element-animation">
                <div class="d-flex flex-column">
                    <h5>Проекты</h5>
                    <div >
                        <button class="projects ">Преддипломная практика</button>
                        <button class="projects ">Магистерская диссертация</button>
                    </div>
                </div>
            </div>

        </div>    
        
        
        
     
</div>

<?php
	printFooter();
?>