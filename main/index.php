<?php
	require_once('../nutils.php');
	
	printHeader('Вега - МИРЭА');
	checkDatabase();
?>

<div class="container-md">
      <div class="d-none d-md-block me-auto element-animation">
          
        <div class="d-flex justify-content-center flex-column">
          <div class="w-100 align-self-center mb-3"> 
            <img src="../images/plane.png" class="d-block w-100 mb-0" alt="...">
          </div> 
          
        </div>
      </div>
    </div>
   
 
    <div class="container-md">
    <div class="text-start text-md-center element-animation my-5 my-md-0">
            <h2><strong>Что такое кафедра Веги?</strong> </h2>
            <p class="lead text-muted"> Мы готовим бакалавров и магистров по специальности <br>
                Прикладная математика и информатика 
            </p>
          </div>
      
      <div class="element-animation my-5">
        
        <h2 class="featurette-heading mb-4 blue">Расписание</h2>
          <div class="row ">
              <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4 mb-4">
                  <div class="card text-center h-100" >
                      <div class="card-body">
                        <h5 class="card-title"> <strong>Расписание занятий</strong> </h5>
                        <p class="card-text">Расписание занятий на 2022 год</p>
                        <div class="d-grid gap-2 d-md-block">
                         <a href="https://vega.fcyb.mirea.ru/rasp/2022spr9.xlsx"> <button class="btn btn-info w-100" type="button">
                             <svg xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 36 35.343">
                              <path d="M35.329,4.653H23.269V6.885h3.555v3.531H23.269v1.125h3.555v3.535H23.269v1.156h3.555v3.344H23.269v1.34h3.555v3.351H23.269v1.34h3.555v3.371H23.269v2.458h12.06c.19-.057.349-.282.477-.672A3.289,3.289,0,0,0,36,29.809V5.061c0-.192-.066-.307-.194-.348A1.65,1.65,0,0,0,35.329,4.653ZM33.765,28.974H27.979V25.607h5.785v3.368Zm0-4.707H27.979V20.915h5.785Zm0-4.692H27.979V16.247h5.785v3.329Zm0-4.5H27.979V11.544h5.785v3.531Zm0-4.679H27.979V6.887h5.785V10.4ZM0,4.1V32l21.24,3.674V.329L0,4.109ZM12.59,25.2q-.122-.328-1.137-2.795c-.674-1.644-1.08-2.6-1.2-2.874h-.038L7.938,24.957l-3.045-.205L8.505,18,5.2,11.252l3.1-.163,2.052,5.281h.04l2.318-5.521,3.208-.2-3.82,7.3L16.038,25.4l-3.448-.2Z" fill="#ffffff"/>
                            </svg>
  
                             Скачать расписание</button></a>
                          <a href="https://vega.fcyb.mirea.ru/rasp/2022spr9.pdf"><button class="btn btn-danger w-100" type="button">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-filetype-pdf" viewBox="0 0 16 16">
                                  <path fill-rule="evenodd" d="M14 4.5V14a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5L14 4.5ZM1.6 11.85H0v3.999h.791v-1.342h.803c.287 0 .531-.057.732-.173.203-.117.358-.275.463-.474a1.42 1.42 0 0 0 .161-.677c0-.25-.053-.476-.158-.677a1.176 1.176 0 0 0-.46-.477c-.2-.12-.443-.179-.732-.179Zm.545 1.333a.795.795 0 0 1-.085.38.574.574 0 0 1-.238.241.794.794 0 0 1-.375.082H.788V12.48h.66c.218 0 .389.06.512.181.123.122.185.296.185.522Zm1.217-1.333v3.999h1.46c.401 0 .734-.08.998-.237a1.45 1.45 0 0 0 .595-.689c.13-.3.196-.662.196-1.084 0-.42-.065-.778-.196-1.075a1.426 1.426 0 0 0-.589-.68c-.264-.156-.599-.234-1.005-.234H3.362Zm.791.645h.563c.248 0 .45.05.609.152a.89.89 0 0 1 .354.454c.079.201.118.452.118.753a2.3 2.3 0 0 1-.068.592 1.14 1.14 0 0 1-.196.422.8.8 0 0 1-.334.252 1.298 1.298 0 0 1-.483.082h-.563v-2.707Zm3.743 1.763v1.591h-.79V11.85h2.548v.653H7.896v1.117h1.606v.638H7.896Z"/>
                                </svg>
                              Скачать PDF
                          </button></a>
                        </div>
                      </div>
                      <div class="card-footer"><p>от 23.03.22</p></div>    
                  </div>
                    
              </div>
  
              <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4 mb-4">
                <div class="card text-center h-100" >
                      <div class="card-body">
                          <h5 class="card-title"> <strong>Расписание сессии</strong> </h5>
                          <p class="card-text">Расписание сессии на 2022 год</p>
                          <div class="d-grid gap-2 d-md-block">
                             <a href="https://vega.fcyb.mirea.ru/rasp/zex2021(22)sum4.xlsx"> <button class="btn btn-info w-100" type="button">
                             <svg xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 36 35.343">
                              <path d="M35.329,4.653H23.269V6.885h3.555v3.531H23.269v1.125h3.555v3.535H23.269v1.156h3.555v3.344H23.269v1.34h3.555v3.351H23.269v1.34h3.555v3.371H23.269v2.458h12.06c.19-.057.349-.282.477-.672A3.289,3.289,0,0,0,36,29.809V5.061c0-.192-.066-.307-.194-.348A1.65,1.65,0,0,0,35.329,4.653ZM33.765,28.974H27.979V25.607h5.785v3.368Zm0-4.707H27.979V20.915h5.785Zm0-4.692H27.979V16.247h5.785v3.329Zm0-4.5H27.979V11.544h5.785v3.531Zm0-4.679H27.979V6.887h5.785V10.4ZM0,4.1V32l21.24,3.674V.329L0,4.109ZM12.59,25.2q-.122-.328-1.137-2.795c-.674-1.644-1.08-2.6-1.2-2.874h-.038L7.938,24.957l-3.045-.205L8.505,18,5.2,11.252l3.1-.163,2.052,5.281h.04l2.318-5.521,3.208-.2-3.82,7.3L16.038,25.4l-3.448-.2Z" fill="#ffffff"/>
                            </svg>
  
                             Скачать расписание сессии</button></a>
                             <a href="https://vega.fcyb.mirea.ru/rasp/zex2021(22)sum4.pdf"> <button class="btn btn-danger w-100" type="button">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-filetype-pdf" viewBox="0 0 16 16">
                                      <path fill-rule="evenodd" d="M14 4.5V14a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5L14 4.5ZM1.6 11.85H0v3.999h.791v-1.342h.803c.287 0 .531-.057.732-.173.203-.117.358-.275.463-.474a1.42 1.42 0 0 0 .161-.677c0-.25-.053-.476-.158-.677a1.176 1.176 0 0 0-.46-.477c-.2-.12-.443-.179-.732-.179Zm.545 1.333a.795.795 0 0 1-.085.38.574.574 0 0 1-.238.241.794.794 0 0 1-.375.082H.788V12.48h.66c.218 0 .389.06.512.181.123.122.185.296.185.522Zm1.217-1.333v3.999h1.46c.401 0 .734-.08.998-.237a1.45 1.45 0 0 0 .595-.689c.13-.3.196-.662.196-1.084 0-.42-.065-.778-.196-1.075a1.426 1.426 0 0 0-.589-.68c-.264-.156-.599-.234-1.005-.234H3.362Zm.791.645h.563c.248 0 .45.05.609.152a.89.89 0 0 1 .354.454c.079.201.118.452.118.753a2.3 2.3 0 0 1-.068.592 1.14 1.14 0 0 1-.196.422.8.8 0 0 1-.334.252 1.298 1.298 0 0 1-.483.082h-.563v-2.707Zm3.743 1.763v1.591h-.79V11.85h2.548v.653H7.896v1.117h1.606v.638H7.896Z"/>
                                    </svg>
                                  Скачать PDF
                              </button></a>
                            </div>
                      </div>
                      <div class="card-footer"> <p>от 23.03.22</p></div>
                  </div>
              </div>
  
              <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4 mb-4">
                  <div class="card text-center h-100" >
                      <div class="card-body">
                        <h5 class="card-title"> <strong>Списки подгрупп</strong> </h5>
                        <p class="card-text">Списки подгрупп 1-2 курсов</p>
                        <a href="http://vega.fcyb.mirea.ru/rasp/groups.php" class="btn btn-info w-100">Перейти к списку подгрупп &raquo;</a>
                      </div>
                      <div class="card-footer"><p>от 23.03.22</p></div>
                  </div>
              </div>
          </div>
          </div>
          
      
          <!-- <div class="col-12 text-center my-5 element-animation">
      
      <svg xmlns="http://www.w3.org/2000/svg" class="my-3" width="90" viewBox="0 0 114.923 91.939">
        <path id="Icon_awesome-laptop-code" data-name="Icon awesome-laptop-code" d="M45.8,46.984a2.873,2.873,0,0,0,4.064,0l2.031-2.031a2.873,2.873,0,0,0,0-4.064l-6.414-6.412,6.412-6.414a2.873,2.873,0,0,0,0-4.064l-2.031-2.031a2.873,2.873,0,0,0-4.064,0L35.317,32.444a2.873,2.873,0,0,0,0,4.064L45.8,46.984Zm17.24-2.029,2.031,2.031a2.873,2.873,0,0,0,4.064,0L79.606,36.51a2.873,2.873,0,0,0,0-4.064L69.13,21.97a2.873,2.873,0,0,0-4.064,0L63.035,24a2.873,2.873,0,0,0,0,4.064l6.412,6.412-6.412,6.414a2.873,2.873,0,0,0,0,4.064ZM112.05,74.7H68.512a5.661,5.661,0,0,1-5.879,5.746H51.715A6.1,6.1,0,0,1,45.831,74.7H2.873A2.882,2.882,0,0,0,0,77.573v2.873A11.526,11.526,0,0,0,11.492,91.939h91.939a11.526,11.526,0,0,0,11.492-11.492V77.573A2.882,2.882,0,0,0,112.05,74.7ZM103.431,8.619A8.645,8.645,0,0,0,94.812,0h-74.7a8.645,8.645,0,0,0-8.619,8.619V68.954h91.939ZM91.939,57.462H22.985V11.492H91.939Z" fill="#55b5db"/>
      </svg>
      
      <h2 class="blue">Траектория обучения</h2>
    
      <a class="btn btn-outline-info m-1 w-75" href="../bak">Дисциплины бакалавриата &raquo;</a> <br>
      <a class="btn btn-outline-info m-1 w-75" href="../mag">Дисциплины магистратуры &raquo;</a><br>
      <a class="btn btn-outline-info m-1 w-75" href="https://vega.fcyb.mirea.ru/rasp/ctl2021.php">Отчетность &raquo;</a>
    </div> -->
      
        <?php
          $db = pg_pconnect("host=".$host." port=".$port." dbname=".$dbname." user=".$user." password=".$password);
          $today = date("w", mktime(0,0,0,date("m"),date("d"),date("Y")));
          
          $preps = pg_query($db,  "SELECT distinct sc_prep.* from sc_prep inner join sc_rasp on sc_rasp.prep_id = sc_prep.id WHERE weekday =  $today");
          
          $preps = pg_fetch_all($preps);


          if($today==0 || empty($preps)){

           
          ?>
             <div class="element-animation my-5">
                <h2 class="featurette-heading mb-4 green">Сегодня никого нет на кафедре</h2>
                
             
            <?php
            }
            else{

            
        ?>
        <div class="element-animation">
          <h2 class="featurette-heading mb-4 green">Сегодня на кафедре</h2>
        </div>
        <div class="row row-cols-auto my-5">
            <?php
            foreach($preps as $n=>$p)
            {
              if($n > 0 && $n%30 == 0)
              {
          ?>
              </div>	
              <div class="row row-cols-auto">		
          <?php
              }


              $img = file_exists('../images/preps/'.$p['photo']) ? $p['photo'] : 'profile.png';
              $img_parts = pathinfo($img);
              $name = explode(' ', $p['fio']);
          ?>
                    
                <div class="col-md-6 col-lg-3 mb-4 element-animation">
                  <div class="flex-fill text-center mb-2">
                  <?= '<a href="../my_prep/index.php'.'?id='.$p['id'].'">' ?><img class="prepImg" src="../images/preps/<?=$img?>" style="width : 80%"></a>
                  </div>
                  

                  <div class="d-flex align-items-start">
                    <div class="prep-sign" style="color : #20c997">{</div>
                    <div class="d-flex flex-column">
                      <h5><?='<strong class="green">'.$name[0].'</strong>'.'<br>'.$name[1].'&nbsp;'.$name[2]?></h5>
                      <p class="prep-title lh-sm mb-2"><?=$p['chair']?></p>
                      <p class="prep-title lh-sm"><?=($p['degree'] == '-' ? '' : ''.$p['degree'])?></p>
                    </div>
                  </div>
                </div>
                    
          <?php
            }
          ?>

        <?php
            }
          ?>
  <div class="col-md-6 col-lg-3 mb-4 element-animation align-self-start">
    <div class="flex-fill text-center mb-2">
    <a href="../nprep"><img src="../images/preps/preps1.png" style="width : 80%"></a>
    </div>
      <div class="d-flex flex-column w-100">
        <a class="btn btn-outline-success w-100" href="../nprep">Все преподаватели &raquo;</a>
      </div>
  </div> 
  </div>
     
        
	<div class="my-5">
  <h2 class="featurette-heading element-animation mb-4 violet">Vegagram</h2>

      <div class="row row-cols-auto mb-5">
      <div class="col-12 col-md-4 col-lg-3 mb-5 element-animation">
          <div class="card h-100">
            <a href="https://vega.fcyb.mirea.ru/ntk2022/"><img src="../images/other/ntk22.jpg" class="card-img-top"></a>
            <div class="card-body">
              <h5 class="card-title"><strong>НТК МИРЭА 2022</strong></h5>
              <p class="card-text">Вот и прошла кафедральная секция VII научно-технической конференции РТУ МИРЭА 2022.</p>
            </div>
            <div class="card-body d-flex align-items-end">
              <a href="https://vega.fcyb.mirea.ru/ntk2022/" class="btn btn-outline-warning w-100">Перейти к НТК &raquo;</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4 col-lg-3 mb-5 element-animation">
          <div class="card h-100">
            <a href="https://vega.fcyb.mirea.ru/list/"><img src="../images/other/awesome.jpg" class="card-img-top"></a>
            <div class="card-body">
              <h5 class="card-title"><strong>Awesome List</strong></h5>
              <p class="card-text">Значимые и удачные работы студентов и преподавателей кафедры собраны в разделе Awesome List.</p>
            </div>
            <div class="card-body d-flex align-items-end">
            <a href="https://vega.fcyb.mirea.ru/list/" class="btn btn-outline-warning w-100">Awesome List &raquo;</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4 col-lg-3 mb-5 element-animation">
          <div class="card h-100">
            <a href="../vegagram/caf.php"><img src="../images/caf.png" class="card-img-top"></a>
            <div class="card-body">
              <h5 class="card-title"><strong>Базовая кафедра</strong></h5>
              <p class="card-text">Наша кафедра – одно из подразделений Института искусственного интеллекта...</p>
            </div>
            <div class="card-body d-flex align-items-end">
              <a href="../vegagram/caf.php" class="btn btn-outline-warning w-100">Читать далее &raquo;</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4 col-lg-3 mb-5 element-animation">
          <div class="card h-100">
            <a href="../vegagram"><img src="../images/other/vegagram2.png" class="card-img-top"></a>
            <div class="card-body">
              <h5 class="card-title"><strong>Vegagram</strong></h5>
              <p class="card-text">Здесь мы постим интересную информацию о нашей кафедре.</p>
            </div>
            <div class="card-body d-flex align-items-end">
              <a href="../vegagram" class="btn btn-outline-danger w-100">Все посты &raquo;</a>
            </div>
          </div>
        </div>
        
      </div>      
	  </div>  
  </div>

        
	
    
	
<?php
	printFooter();
?>