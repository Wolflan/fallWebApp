init();

function init() {

  if ( ( (window.DeviceMotionEvent) || ('listenForDeviceMovement' in window) ) && (window.DeviceOrientationEvent) ) {

    freefall = false;
    impacto = false;
    beta = 90;

    window.addEventListener('devicemotion', deviceMotionHandler, false);

    window.addEventListener('deviceorientation', deviceOrientationHandler, false);



  } else {
    document.getElementById("dmEvent").innerHTML = "Not supported on your device or browser.  Sorry.";
  }
}

//Janela
setInterval(function (){ freefall = false; impacto = false; console.log('Nova janela'); },5000);

function deviceOrientationHandler(eventData) {
  // verifica o ângulo do dispositivo
  beta = Math.round(eventData.beta);
 
  document.getElementById("gamma").innerHTML = Math.round(eventData.gamma);
  document.getElementById("beta").innerHTML = Math.round(eventData.beta);
  document.getElementById("alpha").innerHTML = Math.round(eventData.alpha);
}

function deviceMotionHandler(eventData) {
  

  // Grab the acceleration including gravity from the results
  acceleration = eventData.accelerationIncludingGravity;
  document.getElementById("x").innerHTML = round(acceleration.x);
  document.getElementById("y").innerHTML = round(acceleration.y);
  document.getElementById("z").innerHTML = round(acceleration.z);
	
  var x = round(acceleration.x);
  var y = round(acceleration.y);
  var z = round(acceleration.z);

  document.getElementById('vetor').innerHTML = detectarQueda(x,y,z).toFixed(2);
  //Queda Livre
  if (detectarQueda(x,y,z) < 3) {
      document.getElementById('queda').innerHTML = detectarQueda(x,y,z).toFixed(2);
      freefall = true;
  }
  //Impacto
  if (detectarQueda(x,y,z) > 15) {
      document.getElementById('impact').innerHTML = detectarQueda(x,y,z).toFixed(2);
      impacto = true;
  }
  //Queda Detectada
  if (freefall && impacto) {
      freefall = false;
      impacto = false;
      if( !(beta >= 45 && beta <= 135) ) {

        document.forms["escondido"].action = "tudobem.php";
        document.forms["escondido"].submit();
      }
  }
  
  info = eventData.interval;
  document.getElementById("intervalo").innerHTML = info;
}

function round(val) {
  var amt = 10;
  return Math.round(val * amt) /  amt;
}

function detectarQueda(x,y,z) {

    var valor = ( Math.abs(x*x) + Math.abs(y*y) + Math.abs(z*z) );
    var resultado = Math.sqrt(valor);

    return resultado;
}

function tela() {
	document.documentElement.webkitRequestFullScreen();
}