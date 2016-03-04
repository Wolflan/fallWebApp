<!DOCTYPE html>
<?php
  include('verificar_sessao.php');
?>
<html>
<head>
  <meta charset="utf-8">
  <title>Fall Detection</title>
  <script src="js/jquery.js" charset="utf-8"></script>
  <script src="js/funcoesTeste.js" charset="utf-8"></script>
  
  <link rel="stylesheet" href="css/bootstrap.css" media="screen" title="no title" charset="utf-8">
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" media="screen" title="no title" charset="utf-8">
  <link rel="stylesheet" href="css/master.css" media="screen" title="no title" charset="utf-8">
  <script src="js/bootstrap.js" charset="utf-8"></script>
  </head>
<body>

  <form name="escondido" method="post">
       
  </form>
	<div class="container-fluid">
  <div class="row" align="center">
        <div class="panel panel-primary">
          <div class="panel-heading"> <h1 class="panel-title"><i class="fa fa-compass fa-2x"></i> GIROSCÓPIO</h1> </div>
          
          <div class="panel-body"> 
            <div class="alert alert-success col-xs-4"><span id="gamma" class="badge">a</span></div>
                
            <div class="alert alert-success col-xs-4"><span id="beta" class="badge">a</span></div>
        
            <div class="alert alert-success col-xs-4"><span id="alpha" class="badge">a</span></div>
          </div>
        </div>
    </div>

    <div class="row" align="center">
        <div class="panel panel-primary">
          <div class="panel-heading"> <h2 class="panel-title"><i class="fa fa-tachometer fa-2x"></i> ACELERÔMETRO</h2> </div>
          
          <div class="panel-body"> 
            <div class="alert alert-success col-xs-4"><span id="x" class="badge">a</span></div>
                
            <div class="alert alert-success col-xs-4"><span id="y" class="badge">a</span></div>
        
            <div class="alert alert-success col-xs-4"><span id="z" class="badge">a</span></div>
          </div>
        </div>
    </div>

    
    <div class="row" align="center">
      <div class="panel panel-danger">
          <div class="panel-heading"> <h2 class="panel-title">QUEDA LIVRE</h2> </div>
          
          <div class="panel-body"> 
            <div class=""><span id="queda" class="badge">0</span></div>
          </div>
        </div>
    </div>

     <div class="row" align="center">
      <div class="panel panel-danger">
          <div class="panel-heading"> <h2 class="panel-title">IMPACTO</h2> </div>
          
          <div class="panel-body"> 
            <div class=""><span id="impact" class="badge">0</span></div>
          </div>
        </div>
    </div>

    <div class="row" align="center">
      <div class="panel panel-info">
          <div class="panel-heading"> <h2 class="panel-title"> VETOR DE ACELERAÇÃO</h2> </div>
          
          <div class="panel-body"> 
            <div class=""><span id="vetor" class="badge">a</span></div>
          </div>
        </div>
    </div>

    <div class="row" align="center">
      <div class="panel panel-info">
          <div class="panel-heading"> <h2 class="panel-title">INTERVALO</h2> </div>
          
          <div class="panel-body"> 
            <div class=""><span id="intervalo" class="badge">a</span></div>
          </div>
        </div>
    </div>
	</div>
<button  onclick="tela()" class="btn btn-danger btn-lg">Tela Cheia</button>
</body>
</html>