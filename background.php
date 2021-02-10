<!doctype html>
<html>
    <head>
        <style>
html {
  background: #000;
}

.container {
  margin: 30px auto;
  border: 1px solid #333;
  background: #55c1e7;
}

/*--extend--*/
.area {
  width: 600px;
  height: 288px;
  transform: translateZ(0);
  backface-visibility: hidden;
  perspective: 1000;
}

.fore, .mid, .bk, .container { 
  @extend .area; 
}

.figure {
  
  width: 220px;
  height: 266px;
  transform: translate3D(200px, 50px, 0);
  animation: walk 0.78s steps(9) infinite;
  transform: translateZ(0);
  backface-visibility: hidden;
  perspective: 1000;
}
.no-svg .figure {
  background: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/57786/dog-walk.p5ng");
}

.fore {
  background: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/57786/foreground.svg");
  transform: translateZ(0);
  animation: bk 10s -5s linear infinite;
}
.no-svg .fore {
  background: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/57786/foreground.png");
}

.mid {
  background: url("tenor.gif");
");
  animation: bk 15s -5s linear infinite;
  transform: translateZ(0);
}
.no-svg .mid {
  background: url("tenor.gif");
");
}

.bk {
  background: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/57786/background.svg");
  animation: bk 20s -5s linear infinite;
  transform: translateZ(0);
}
.no-svg .bk {
  background: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/57786/background.png");
}

@keyframes walk {
  100% { background-position: 0 -2376px; }
}

@keyframes bk {
  100% { background-position: 200% 0; }
}

@media screen and ( max-width: 600px ) {
  .container { 
    width: 100%; 
    margin-top: 0;
  }
  .figure { transform: translate3D(40%, 50px, 0); }
}</style>
    </head>
<body>
<div class='container'>
  <div class='bk'>
    <div class='mid'>
      <div class='fore'>
        <div class='figure'></div>
      </div>
    </div>
  </div>
</div>
    </body>
    </html>