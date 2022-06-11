<?php
	require_once('../nutils.php');
	
	printHeader('Фотогалерея');
?>

<div class="container-md">
<h2 id="up" class="featurette-heading my-4 element-animation">Фотогалерея<span class="text-muted"><br>Наши будни на кафедре</span></h2>
        <div id="myBtnContainer" class="element-animation">
          <button class="btn btn-secondary active" onclick="filterSelection('all')">Все</button>
          <button class="btn btn-outline-secondary" onclick="filterSelection('cafedra')">Кафедра</button>
          <button class="btn btn-outline-secondary" onclick="filterSelection('apis')">АПИС</button>
          <button class="btn btn-outline-secondary" onclick="filterSelection('ntk')">НТК</button>
        </div>
  
        <div class="photoview" style="width:100%">
          <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
          <img id="expandedImg" style="width:100%">
        </div>
  
        <div class="row row-cols-auto">
          <div class="col-6 col-md-4 col-lg-3 column my-2 element-animation cafedra">
            <a href="#up"><img src="../images/gallery/cafedra4.jpg" style="width:100%" onclick="myFunction(this);"></a>
          </div>
          <div class="col-6 col-md-4 col-lg-3 column my-2 element-animation ntk">
            <a href="#up"><img src="../images/gallery/cafedra5.jpg" style="width:100%" onclick="myFunction(this);"></a>
          </div>
  
          <div class="col-6 col-md-4 col-lg-3 column my-2 element-animation ntk">
            <a href="#up"><img src="../images/gallery/cafedra9.jpg" style="width:100%" onclick="myFunction(this);"></a>
          </div>
          <div class="col-6 col-md-4 col-lg-3 column my-2 element-animation ntk">
            <a href="#up"><img src="../images/gallery/cafedra7.jpg" style="width:100%" onclick="myFunction(this);"></a>
          </div>
          <div class="col-6 col-md-4 col-lg-3 column my-2 element-animation cafedra">
            <a href="#up"><img src="../images/gallery/dod.jpg" style="width:100%" onclick="myFunction(this);"></a>
          </div>
          
          <div class="col-6 col-md-4 col-lg-3 column my-2 element-animation apis">
            <a href="#up"><img src="../images/gallery/apis_20_1.jpg" style="width:100%" onclick="myFunction(this);"></a>
          </div>
          <div class="col-6 col-md-4 col-lg-3 column my-2 element-animation apis">
            <a href="#up"><img src="../images/gallery/apis_20_2.jpg" style="width:100%" onclick="myFunction(this);"></a>
          </div>
  
          <div class="col-6 col-md-4 col-lg-3 column my-2 element-animation apis">
            <a href="#up"><img src="../images/gallery/apis_21_1.jpg" style="width:100%" onclick="myFunction(this);"></a>
          </div>
          
          <div class="col-6 col-md-4 col-lg-3 column my-2 element-animation apis">
            <a href="#up"><img src="../images/gallery/cafedra3.jpg" style="width:100%" onclick="myFunction(this);"></a>
          </div>
          <div class="col-6 col-md-4 col-lg-3 column my-2 element-animation apis">
            <a href="#up"><img src="../images/gallery/cafedra10.jpg" style="width:100%" onclick="myFunction(this);"></a>
          </div>
          <div class="col-6 col-md-4 col-lg-3 column my-2 element-animation apis">
            <a href="#up"><img src="../images/gallery/cafedra33.jpg" style="width:100%" onclick="myFunction(this);"></a>
          </div>
  
          <div class="col-6 col-md-4 col-lg-3 column my-2 element-animation cafedra ntk">
            <a href="#up"><img src="../images/gallery/cafedra8.jpg" style="width:100%" onclick="myFunction(this);"></a>
          </div>
          
          <div class="col-6 col-md-4 col-lg-3 column my-2 element-animation apis">
            <a href="#up"><img src="../images/gallery/cafedra1.jpg" style="width:100%" onclick="myFunction(this);"></a>
          </div>
          <div class="col-6 col-md-4 col-lg-3 column my-2 element-animation apis">
            <a href="#up"><img src="../images/gallery/cafedra2.jpg" style="width:100%" onclick="myFunction(this);"></a>
          </div>
          <div class="col-6 col-md-4 col-lg-3 column my-2 element-animation cafedra">
            <a href="#up"><img src="../images/gallery/cafedra6.jpg" style="width:100%" onclick="myFunction(this);"></a>
          </div>
          <div class="col-6 col-md-4 col-lg-3 column my-2 element-animation ntk">
            <a href="#up"><img src="../images/gallery/gelya.jpg" style="width:100%" onclick="myFunction(this);"></a>
          </div>
          
          <div class="col-6 col-md-4 col-lg-3 column my-2 element-animation apis">
            <a href="#up"><img src="../images/gallery/cafedra11.jpg" style="width:100%" onclick="myFunction(this);"></a>
          </div>
          <div class="col-6 col-md-4 col-lg-3 column my-2 element-animation cafedra">
            <a href="#up"><img src="../images/gallery/cafedra12.jpg" style="width:100%" onclick="myFunction(this);"></a>
          </div>
          <div class="col-6 col-md-4 col-lg-3 column my-2 element-animation cafedra">
            <a href="#up"><img src="../images/gallery/kolya.jpg" style="width:100%" onclick="myFunction(this);"></a>
          </div>
          <div class="col-6 col-md-4 col-lg-3 column my-2 element-animation ntk">
            <a href="#up"><img src="../images/gallery/cafedra13.jpg" style="width:100%" onclick="myFunction(this);"></a>
          </div>
          <div class="col-6 col-md-4 col-lg-3 column my-2 element-animation ntk">
            <a href="#up"><img src="../images/gallery/cafedra14.jpg" style="width:100%" onclick="myFunction(this);"></a>
          </div>
          <div class="col-6 col-md-4 col-lg-3 column my-2 element-animation cafedra">
            <a href="#up"><img src="../images/gallery/cafedra17.jpg" style="width:100%" onclick="myFunction(this);"></a>
          </div>
          <div class="col-6 col-md-4 col-lg-3 column my-2 element-animation ntk">
            <a href="#up"><img src="../images/gallery/cafedra15.jpg" style="width:100%" onclick="myFunction(this);"></a>
          </div>
          
          <div class="col-6 col-md-4 col-lg-3 column my-2 element-animation cafedra ntk">
            <a href="#up"><img src="../images/gallery/cafedra18.jpg" style="width:100%" onclick="myFunction(this);"></a>
          </div>
          <div class="col-6 col-md-4 col-lg-3 column my-2 element-animation ntk">
            <a href="#up"><img src="../images/gallery/ntk4.jpg" style="width:100%" onclick="myFunction(this);"></a>
          </div>
          <div class="col-6 col-md-4 col-lg-3 column my-2 element-animation ntk">
            <a href="#up"><img src="../images/gallery/ntk3.jpg" style="width:100%" onclick="myFunction(this);"></a>
          </div>
          <div class="col-6 col-md-4 col-lg-3 column my-2 element-animation ntk">
            <a href="#up"><img src="../images/gallery/ntk2.jpg" style="width:100%" onclick="myFunction(this);"></a>
          </div>
          <div class="col-6 col-md-4 col-lg-3 column my-2 element-animation ntk">
            <a href="#up"><img src="../images/gallery/ntk1.jpg" style="width:100%" onclick="myFunction(this);"></a>
          </div>
          <div class="col-6 col-md-4 col-lg-3 column my-2 element-animation ntk">
            <a href="#up"><img src="../images/gallery/cafedra.jpg" style="width:100%" onclick="myFunction(this);"></a>
          </div>

  
          
  
        </div>
  
        
      </div>
	
<?php
	printFooter();
?>