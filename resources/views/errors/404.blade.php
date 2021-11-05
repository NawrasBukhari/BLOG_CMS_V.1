<!DOCTYPE html>
<html>
    <body>
        <style type="text/css">
        body {
  margin: 0;
  font-family: Helvetica;
}

.section {
  width: 100vw;
  height: 100vh;
}

.text-ctn {
  margin: 18px;
}

.marquee {
  width: 360px;
  border-bottom: 3px solid #000000;
  background-color: #000000;
  white-space: nowrap;
}

.marquee-text {
  display: inline-block;
  width: 260px;
  font-size: 24px;
  font-weight: bold;
  color: #ffbb00;
  animation: scroll 3s linear infinite;
}

.marquee-text:before {
  content: "Not Found";
}

@keyframes scroll {
  100% {
    transform: translateX(-100%);
  }
}

#sec-1 {
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: #ffbb00;
}

#ctn {
  margin-top: 40px;
  width: 360px;
  height: 360px;
  font-size: 30px;
  font-weight: bold;
  text-align: center;
  overflow: hidden;
}

#forbidden {
  display: inline-block;
  padding: 5px 10px 5px 10px;
  border: 2px solid #000000;
  border-radius: 8px;
  font-size: 50px;
  animation: flash 1s linear infinite;
}

@keyframes flash {
  50% {
    opacity: 0;
  }
}
        </style>
<div id="sec-1" class="section">
    <div id="ctn">
      <div class="marquee">
        <div class="marquee-text"></div><div class="marquee-text"></div><div class="marquee-text"></div>
      </div>

      <div class="text-ctn">Error</div>

      <div id="forbidden">Not found</div>

      <div class="text-ctn">HTTP<br>404</div>

      <div class="marquee">
        <div class="marquee-text"></div><div class="marquee-text"></div><div class="marquee-text"></div>
      </div>
    </div>
  </div>
    </body>
</html>
