<?php

require_once('../../auth/variables.php');
include_once('../../auth/auth_ssh.class.php');

function checkDatabase()
{
	global $host, $port, $dbname, $user, $password;
	
	if (@pg_pconnect("host=".$host." port=".$port." dbname=".$dbname." user=".$user." password=".$password) === false) {
?>
        <div class="container-lg my-5">
			Ошибка подключения к БД
		</div>
<?php
		printFooter();
		http_response_code(500);
		exit;
	}
}

function printHeader($title = 'Базовая кафедра Веги', $submenu = "", $styles = NULL, $scripts = NULL)
{
	session_start();
	$au = new auth_ssh();
	$logged = $au->loggedIn(@$_SESSION['hash']);	
	
	$darktheme = false;
	
	if(array_key_exists('dark', $_REQUEST))
		$_SESSION['darktheme'] = ($_REQUEST['dark'] == 1) ? true : false;

	if(array_key_exists('darktheme', $_SESSION))
		$darktheme = $_SESSION['darktheme'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"> -->
    <meta name="apple-touch-fullscreen" content="yes"/>
    <meta name="keywords" content="базовая кафедра, программное обеспечение, программные средства, прикладная математика, кибернетика, РТУ МИРЭА, РТУ, Российский технологический университет, радиоэлектронная аппаратура, АО Концерн радиостроения, Вега, Московский институт радиотехники электроники автоматики, МИРЭА, абитуриенты, студенты, аспиранты, преподаватели">
	<title><?=$title?></title> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="/style/style.css" type="text/css">
<!--	<link rel="stylesheet" href="/style/utils.css" type="text/css"> -->
<?php
    if(is_array($styles))
    {
        foreach($styles as $style)
        {
?>
        <link href="<?=$style?>" type="text/css" rel="stylesheet">
<?php
        }
    }
	
	if ($darktheme)
	{
?>
    <link rel="stylesheet" href="../nstyle/dark.css">
<?php
	}
	else
	{
?>
    <link rel="stylesheet" href="../nstyle/light.css">
<?php
	}
?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<script src="/disc_htm_files/roe.js" type="text/javascript"></script> 
<?php
    if(is_array($scripts))
    {
        foreach($scripts as $script)
        {
?>
        <script type="text/javascript" src="<?=$script?>"></script>
<?php
        }
    }
?>
</head>

<body>
  <div class="vegaNavbar sticky-top">
		<nav class="navbar navbar-expand-lg navbar-dark py-3">
			<div class="container-sm container-md">
			  
				<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>    
				</button>

					  <div class="hideBTN gap-2 d-lg-flex justify-content-lg-end my-2 mr-lg-2 mr-md-0">
							<form method="POST">
								<input type="hidden" name="dark" value="<?=(($darktheme)?0:1)?>">
								<button class="btn btn-outline-light w-100" type="submit">Тема</button>
							</form> 
					  </div>

                <?php
        if($logged)
        {
?>

						<div class="hideBTN gap-2 d-lg-flex justify-content-lg-end my-2">
							<form method="POST" enctype="multipart/form-data" action="/auth/action.php">
								<button class="btn btn-outline-light" type="submit">Выход</button>
								<input type="hidden" name="action" value="logout">
							</form>
						</div>

<?php
        }
        else
        {
?>
   					
						<div class="hideBTN gap-2 d-lg-flex justify-content-lg-end my-2">
								<button class="btn btn-outline-light" data-toggle="ModalSignIn">Вход</button>
						</div>
					
<?php
        }
?>

				<a href="../main" class="navbar-brad me-lg-3 me-xl-4 me-xxl-5"><svg xmlns="http://www.w3.org/2000/svg" width="44.996" height="45" viewBox="0 0 44.996 45">
					<path id="Logo" data-name="Logo" d="M149.546,195.5a22.506,22.506,0,0,0-22.1,18.244,54.633,54.633,0,0,1,9.445-2.678,55.249,55.249,0,0,1,18.59-.3,54.567,54.567,0,0,0-28.435,7.519,22.527,22.527,0,0,0,.674,5.206,40.427,40.427,0,0,1,29.827-10.734,37.33,37.33,0,0,0-11.988,3.283,38.273,38.273,0,0,0-15.447,13.3,22.594,22.594,0,0,0,3.914,4.945,37.942,37.942,0,0,1,8.877-11.167,38.443,38.443,0,0,1,17.365-8.412l.008-.551-5.975,1.918,4.869-3.836-6.418-4.131,7.451,2.139v-4.131l2.066,3.541,2.434-1.475-.664,2.8,3.91.885-3.91,1.254,4.426,7.008-6.049-5.533-2.213,4.943.054-3.912c-5.48,3.747-11.053,7.675-13.849,13.428a21.07,21.07,0,0,0-1.908,10.866,22.5,22.5,0,1,0,5.044-44.432Z" transform="translate(-127.05 -195.5)" fill="#fff"/>
					</svg>
				</a>

				<div class="collapse navbar-collapse" id="navbarResponsive">
					<ul class="navbar-nav mr-auto align-items-start">
						<li class="nav-item mx-2 mx-xl-4 mx-xxl-5">
                            <div class="Dropdown">
                            <a href="../main" class="Dropbtn nav-link active"><h6>О&nbsp;кафедре 
                            </h6>
                            </a>
                            <div class="DropdownContent">
                            <a href="../concern">О&nbsp;базовом предприятии</a>  
                            <a href="../nprep">Коллектив кафедры</a>  
                            <a href="https://vega.fcyb.mirea.ru/files/vega-web.pdf">Презентация кафедры</a>
                            <a href="../gallery">Фотогалерея</a>
                            <a href="../vegagram">Vegagram</a>
                            

                            </div>
                        </div>
						</li>

						<li class="nav-item mx-2 mx-xl-4 mx-xxl-5">
                        <div class="Dropdown">
                            <a href="../abiturientam" class="Dropbtn nav-link active"><h6>Абитуриентам 
                            </h6>
                            </a>
                            <div class="DropdownContent">
                            <a href="../files/poster2022.pdf">Постер</a>
                            <a href="../bak">Дисциплины бакалавриата</a>
                            <a href="../mag">Дисциплины магистратуры</a>
                            <a href="../practice">Практика на предприятии</a>
                            <a href="../gallery">Студенческая жизнь</a>
                            <a href="https://vega.fcyb.mirea.ru/files/vega-web.pdf">Презентация кафедры</a>
                            <a href="https://vega.fcyb.mirea.ru/files/magpr2016.pdf">Презентация магистерской программы</a>
                            <a href="../progremmer_test">Тест на программиста</a>
                            
                            </div>
                        </div>
						</li>

<?php
	if ($logged) {
?>
						<li class="nav-item mx-2 mx-xl-4 mx-xxl-5">
                        <div class="Dropdown">
                            <a href="../students" class="Dropbtn nav-link active"><h6>Студентам 
                            </h6>
                            </a>
                            <div class="DropdownContent">
                            <a href="https://vega.fcyb.mirea.ru/stud.php">Учебно-вспомогательные материалы</a>
                            <a href="https://vega.fcyb.mirea.ru/disc/">Страницы по дисциплинам</a>
                            <a href="https://vega.fcyb.mirea.ru/board/">Лента снимков доски</a>
                            <a href="https://vega.fcyb.mirea.ru/list/">Коллекция лучших работ</a>
                            <a href="https://vega.fcyb.mirea.ru/ntk2022/">НТК</a>
                            </div>
                        </div>
						</li>
<?php
	}
	else
	{
?>
						<li class="nav-item mx-2 mx-xl-4 mx-xxl-5">
							<a href="#" class="nav-link disabled text-muted"><h6>Студентам</h6></a>
						</li> 
<?php 		
	}
	
	if ($au->isAdminOrPrep(@$_SESSION['hash'])) {
?>
						<li class="nav-item mx-2 mx-xl-4 mx-xxl-5">
                        <div class="Dropdown">
                        <a href="https://vega.fcyb.mirea.ru/rasp/groups.php" class="Dropbtn nav-link active"><h6>Преподавателям</h6></a>
                            <div class="DropdownContent">
                            <a href="https://vega.fcyb.mirea.ru/disc/">Страницы по дисциплинам</a>
                            <a href="https://vega.fcyb.mirea.ru/rasp/groups.php">Списки подгрупп</a>
                            <a href="https://vega.fcyb.mirea.ru/board/">Лента снимков доски</a>
                            <a href="https://vega.fcyb.mirea.ru/list/">Коллекция лучших работ</a>
                            <a href="https://vega.fcyb.mirea.ru/ntk2022/">НТК</a>
                            </div>
                            </div>
						</li>
<?php
	}
	else
	{
?>
						<li class="nav-item mx-2 mx-xl-4 mx-xxl-5">
							<a href="#" class="nav-link disabled text-muted"><h6>Преподавателям</h6></a>
						</li> 
<?php 		
	}
	
	if ($au->isAdmin(@$_SESSION['hash']) || $au->isKafAdmin(@$_SESSION['hash'])) {
?>
						<li class="nav-item mx-2 mx-xl-4 mx-xxl-5">
                        <div class="Dropdown">
                        <a href="https://vega.fcyb.mirea.ru/disc/attendance.php" class="Dropbtn nav-link active"><h6>Администрации</h6></a>
                            <div class="DropdownContent">
                            <a href="https://vega.fcyb.mirea.ru/students/">Списки студентов</a>
                            <a href="https://vega.fcyb.mirea.ru/disc/">Страницы по дисциплинам</a>
							<a href="https://vega.fcyb.mirea.ru/disc/attendance.php">Контроль посещаемости</a>
                            <a href="https://vega.fcyb.mirea.ru/mail/">Почтовая рассылка студентам</a>
                            <a href="https://vega.fcyb.mirea.ru/ym/">Назначение предзащит</a>
                            <a href="https://vega.fcyb.mirea.ru/ntk2022/">НТК</a>
                            </div>
                            </div>
						</li>
<?php
	}
	else
	{
?>
						<li class="nav-item mx-2 mx-xl-4 mx-xxl-5">
							<a href="#" class="nav-link disabled text-muted"><h6>Администрации</h6></a>
						</li> 
<?php 		
	}
?>
					</ul>
					  <div class="hideBTN-sm d-grid gap-2 d-lg-flex justify-content-lg-end my-2 mr-lg-2 mr-md-0">
							<form method="POST">
								<input type="hidden" name="dark" value="<?=(($darktheme)?0:1)?>">
								<button class="btn btn-outline-light w-100" type="submit">Тема</button>
							</form> 
					  </div>
<?php
        if($logged)
        {
?>
						<div class="hideBTN-sm gap-2 d-lg-flex justify-content-lg-end my-2">
							<form method="POST" enctype="multipart/form-data" action="/auth/action.php">
								<button class="btn btn-outline-light w-100" type="submit">Выход</button>
								<input type="hidden" name="action" value="logout">
							</form>
						</div>
<?php
        }
        else
        {
?>
   					
						<div class="hideBTN-sm gap-2 d-lg-flex justify-content-lg-end my-2">
								<button class="btn btn-outline-light w-100" data-toggle="ModalSignIn">Вход</button>
						</div>
					
<?php
        }
?>

				</div>
			</div>
		</nav>
	</div>  
      
    <div class="vegaLine">
        <div class="container-lg">
            <div class="d-flex" >

                <div class="d-none d-lg-block me-auto py-2"> <small> <p>Кафедра программного обеспечения систем радиоэлектронной аппаратуры <br> 
					при <a href="https://www.vega.su/">АО «Концерн «Вега»</p> </small></a> 
                </div>
                
                <div class="d-none d-lg-block  flex-shrink-1 py-2 text-end"><small> <p><a href="https://www.mirea.ru/">МИРЭА - Российский технологический университет</a><br>
                  <a href="https://cyber.mirea.ru/">Институт искусственного интеллекта</a></p></small>
                </div>

            </div>
        </div>
    </div>
	
<?php
}

function printFooter()
{
	$au = new auth_ssh();
?>
	<div class="vegaNavbar">
        <div class="container-sm container-lg container-md"> 
            <footer class="row row-cols-6 py-5 mt-5">
            <div class="col-sm-12 col-md-4 col-lg-3 mb-4">
                <div class="footer-title"><h5><strong>О&nbsp;кафедре</strong></h5></div> 
                <ul class="nav flex-column mb-4">
                <li class="nav-item mb-2"><a href="../concern" class="nav-link p-0 ">О&nbsp;базовом предприятии</a></li>
                <li class="nav-item mb-2"><a href="../nprep" class="nav-link p-0 ">Коллектив кафедры</a> </li>
                <li class="nav-item mb-2"><a href="https://vega.fcyb.mirea.ru/files/vega-web.pdf" class="nav-link p-0 ">Презентация кафедры</a> </li>
                <li class="nav-item mb-2"><a href="../gallery" class="nav-link p-0 ">Фотогалерея</a> </li>
                <li class="nav-item mb-2"><a href="../vegagram" class="nav-link p-0 ">Vegagram</a> </li>
                <li class="nav-item mb-2"><a href="https://vega.fcyb.mirea.ru/polozh.zip" class="nav-link p-0 ">Положения о кафедре</a></li>
                <li class="nav-item mb-2"><a href="https://vega.fcyb.mirea.ru/smko-t.zip" class="nav-link p-0 ">Цели</a></li>
                <li class="nav-item mb-2"><a href="https://vega.fcyb.mirea.ru/smko-p.zip" class="nav-link p-0 ">Политика в области качества</a></li>
                </ul>
                <div class="footer-title"><h5><strong>Наши контакты</strong></h5></div> 
                <ul class="nav flex-column mb-4">
                <li class="nav-link mb-2 p-0">+7 (499) 215-65-65 доб. 2404</li>
                <li class="nav-item mb-2"><a href="vega@mirea.ru" class="nav-link p-0 ">vega@mirea.ru</a></li>
                </ul>
<?php
	if ($au->isAdmin(@$_SESSION['hash']) || $au->isKafAdmin(@$_SESSION['hash'])) {
?>
                <div class="footer-title"><h5><strong>Администрации</strong></h5></div> 
                <ul class="nav flex-column mb-4">
                    <li class="nav-item mb-2"><a href="https://vega.fcyb.mirea.ru/students/" class="nav-link p-0 ">Списки студентов</a></li>
                    <li class="nav-item mb-2"><a href="https://vega.fcyb.mirea.ru/disc" class="nav-link p-0">Страницы по дисциплинам</a></li>
                    <li class="nav-item mb-2"><a href="https://vega.fcyb.mirea.ru/disc/time.php" class="nav-link p-0 ">Использование страниц</a></li>
                    <li class="nav-item mb-2"><a href="https://vega.fcyb.mirea.ru/disc/discAccess.php" class="nav-link p-0 ">Доступ к страницам дисциплин</a></li>
                    <li class="nav-item mb-2"><a href="https://vega.fcyb.mirea.ru/disc/attendance.php" class="nav-link p-0 ">Контроль посещаемости</a></li>
                    <li class="nav-item mb-2"><a href="https://vega.fcyb.mirea.ru/mail/" class="nav-link p-0 ">Почтовая рассылка студентам</a></li>
                    <li class="nav-item mb-2"><a href="https://vega.fcyb.mirea.ru/ym/" class="nav-link p-0 ">Назначение предзащит</a></li>
                    <li class="nav-item mb-2"><a href="https://vega.fcyb.mirea.ru/ntk2022/" class="nav-link p-0">НТК МИРЭА 2022</a></li>
                </ul>
<?php
	}
?>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-3 mb-4">
                <div class="footer-title"><h5> <strong>Абитуриентам</strong></h5></div> 
                <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="../files/poster2022.pdf" class="nav-link p-0 ">Постер</a></li>
                <li class="nav-item mb-2"><a href="../bak" class="nav-link p-0 ">Дисциплины бакалавриата</a></li>
                <li class="nav-item mb-2"><a href="../mag" class="nav-link p-0 ">Дисциплины магистратуры</a></li>
                <li class="nav-item mb-2"><a href="../practice" class="nav-link p-0 ">Практика на предприятии</a></li>
                <li class="nav-item mb-2"><a href="../gallery" class="nav-link p-0 ">Студенческая жизнь</a></li>
                <li class="nav-item mb-2"><a href="https://vega.fcyb.mirea.ru/files/vega-web.pdf" class="nav-link p-0 ">Презентация кафедры</a></li>
                <li class="nav-item mb-2"><a href="https://vega.fcyb.mirea.ru/files/magpr2016.pdf" class="nav-link p-0 ">Презентация магистерской программы</a></li>
                <li class="nav-item mb-2"><a href="../progremmer_test" class="nav-link p-0 ">Тест на программиста</a></li>
                </ul>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-3 mb-4">
<?php
	if ($au->loggedIn(@$_SESSION['hash'])) {
?>			
                <div class="footer-title"><h5><strong>Студентам</strong></h5></div> 
                <ul class="nav flex-column">

                <li class="footer-title text-muted mb-2 p-0">Расписание 2022</li>
                <li class="nav-item mb-2"><a href="https://vega.fcyb.mirea.ru/rasp/2022spr9.xlsx" class="nav-link p-0">- Расписание занятий</a></li>
                <li class="nav-item mb-2"><a href="https://vega.fcyb.mirea.ru/rasp/2022spr9.pdf" class="nav-link p-0">- Расписание занятий PDF</a></li>
                <li class="nav-item mb-2"><a href="https://vega.fcyb.mirea.ru/rasp/zex2021(22)sum4.xlsx" class="nav-link p-0">- Расписание сессии лето</a></li>
                <li class="nav-item mb-2"><a href="https://vega.fcyb.mirea.ru/rasp/zex2021(22)sum4.pdf" class="nav-link p-0">- Расписание сессии лето PDF</a></li>
                <li class="nav-item mb-2"><a href="http://vega.fcyb.mirea.ru/rasp/groups.php" class="nav-link p-0 ">- Списки подгрупп</a></li>

                <li class="footer-title text-muted mb-2 p-0">Учебный план</li>
                <li class="nav-item mb-2"><a href="../bak" class="nav-link p-0 ">- Дисциплины бакалавриата</a></li>
                <li class="nav-item mb-2"><a href="../mag" class="nav-link p-0 ">- Дисциплины магистратуры</a></li>
                <li class="nav-item mb-2"><a href="../practice" class="nav-link p-0 ">- Практика на предприятии</a></li>
                <li class="nav-item mb-2"><a href="https://vega.fcyb.mirea.ru/rasp/ctl2020.php" class="nav-link p-0 ">- Промежуточная отчётность</a></li>
    
                <li class="nav-item mb-2"><a href="../students" class="nav-link p-0 ">Учебно-вспомогательные материалы</a></li>

                <li class="nav-item mb-2"><a href="https://vega.fcyb.mirea.ru/disc/" class="nav-link p-0 ">Страницы по дисциплинам</a></li>
                <li class="nav-item mb-2"><a href="https://vega.fcyb.mirea.ru/apis" class="nav-link p-0 ">- Анализ и проектирование ИС</a></li>
                <li class="nav-item mb-2"><a href="https://vega.fcyb.mirea.ru/vpd" class="nav-link p-0 ">- Введение в проф. деятельность</a></li>
                <li class="nav-item mb-2"><a href="https://vega.fcyb.mirea.ru/misp" class="nav-link p-0 ">- Методы и стандарты про­грам­ми­ро­вания</a></li>
                <li class="nav-item mb-2"><a href="https://vega.fcyb.mirea.ru/urpo" class="nav-link p-0 ">- Управление разработкой ПО</a></li>
                <li class="nav-item mb-2"><a href="https://vega.fcyb.mirea.ru/chm" class="nav-link p-0 ">- Численные методы</a></li>
                <li class="nav-item mb-2"><a href="https://vega.fcyb.mirea.ru/vkr" class="nav-link p-0 ">- ВКР</a></li>
                <li class="nav-item mb-2"><a href="https://vega.fcyb.mirea.ru/disc" class="nav-link p-0 ">- Другие дисциплины</a></li>

                <li class="nav-item mb-2"><a href="https://vega.fcyb.mirea.ru/board/" class="nav-link p-0 ">Лента снимков доски <span class="badge bg-danger">New</span></a></li>
                <li class="nav-item mb-2"><a href="https://vega.fcyb.mirea.ru/list/" class="nav-link p-0 ">Коллекция лучших работ <span class="badge bg-danger">New</span></a></li>
                <li class="nav-item mb-2"><a href="https://vega.fcyb.mirea.ru/ntk2022/" class="nav-link p-0 ">НТК МИРЭА 2022</a></li>

                <li class="nav-item mb-2"><a href="https://vega.fcyb.mirea.ru/gitlab" class="nav-link p-0 ">GitLab</a></li>
                <li class="nav-item mb-2"><a href="https://www.youtube.com/channel/UCqlR1_U26s0g_-7Xk2Neaog" class="nav-link p-0 ">YouTube</a></li>
                <li class="nav-item mb-2"><a href="https://t.me/bkvega" class="nav-link p-0 ">Telegram</a></li>
                </ul>
<?php
	}
?>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-3 mb-4">
<?php
	if ($au->isAdminOrPrep(@$_SESSION['hash'])) {
?>				
                <div class="footer-title"><h5> <strong>Преподавателям</strong></h5></div> 
                <ul class="nav flex-column">

                <li class="footer-title text-muted mb-2 p-0">Расписание 2022</li>
                <li class="nav-item mb-2"><a href="https://vega.fcyb.mirea.ru/rasp/2022spr9.xlsx" class="nav-link p-0">- Расписание занятий</a></li>
                <li class="nav-item mb-2"><a href="https://vega.fcyb.mirea.ru/rasp/2022spr9.pdf" class="nav-link p-0">- Расписание занятий PDF</a></li>
                <li class="nav-item mb-2"><a href="https://vega.fcyb.mirea.ru/rasp/zex2021(22)sum4.xlsx" class="nav-link p-0">- Расписание сессии лето</a></li>
                <li class="nav-item mb-2"><a href="https://vega.fcyb.mirea.ru/rasp/zex2021(22)sum4.pdf" class="nav-link p-0">- Расписание сессии лето PDF</a></li>
                <li class="nav-item mb-2"><a href="http://vega.fcyb.mirea.ru/rasp/groups.php" class="nav-link p-0 ">- Списки подгрупп</a></li>

                <li class="nav-item mb-2"><a href="https://vega.fcyb.mirea.ru/disc/" class="nav-link p-0 ">Страницы по дисциплинам</a></li>
                <li class="nav-item mb-2"><a href="https://vega.fcyb.mirea.ru/board/" class="nav-link p-0 ">Лента снимков доски <span class="badge bg-danger">New</span></a></li>
                <li class="nav-item mb-2"><a href="https://vega.fcyb.mirea.ru/list/" class="nav-link p-0 ">Коллекция лучших работ <span class="badge bg-danger">New</span></a></li>
                <li class="nav-item mb-2"><a href="https://vega.fcyb.mirea.ru/ntk2022/" class="nav-link p-0 ">НТК МИРЭА 2022</a></li>
                
                <li class="nav-item mb-2"><a href="https://vega.fcyb.mirea.ru/gitlab" class="nav-link p-0 ">GitLab</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Инструкции по стримам</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Объявления</a></li>
                </ul>
<?php
	}
?>				
            </div>
			</footer>
        </div>
    </div>
	<script src="../js/modal_window_sign_in.js"></script>
    <script src="../js/animation.js"></script>
    <script src="../js/modal_window_bak.js"></script>   
    <script src="../js/quiz_data.js"></script>
    <script src="../js/quiz_answer.js"></script>
    <script src="../js/quiz_code.js"></script>
    <script src="../js/gallery.js"></script>
	</body></html>
<?php
}

function vHeader()
{
    printHeader();
}

function vutilster()
{
    printFooter();
}
?>