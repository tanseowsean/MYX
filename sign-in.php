<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Sign In</title>

  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <link rel="stylesheet" type="text/css" href="css/roboto-font.css">
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-5/css/fontawesome-all.min.css">

  <link rel="stylesheet" href="css/style2.css" />
  <meta name="robots" content="noindex, follow">
  <!-- <script nonce="99d7c2d1-7868-49c3-86a9-5af4cd3c888c">(function(w,d){!function(dk,dl,dm,dn){dk[dm]=dk[dm]||{};dk[dm].executed=[];dk.zaraz={deferred:[],listeners:[]};dk.zaraz.q=[];dk.zaraz._f=function(dp){return function(){var dq=Array.prototype.slice.call(arguments);dk.zaraz.q.push({m:dp,a:dq})}};for(const dr of["track","set","debug"])dk.zaraz[dr]=dk.zaraz._f(dr);dk.zaraz.init=()=>{var ds=dl.getElementsByTagName(dn)[0],dt=dl.createElement(dn),du=dl.getElementsByTagName("title")[0];du&&(dk[dm].t=dl.getElementsByTagName("title")[0].text);dk[dm].x=Math.random();dk[dm].w=dk.screen.width;dk[dm].h=dk.screen.height;dk[dm].j=dk.innerHeight;dk[dm].e=dk.innerWidth;dk[dm].l=dk.location.href;dk[dm].r=dl.referrer;dk[dm].k=dk.screen.colorDepth;dk[dm].n=dl.characterSet;dk[dm].o=(new Date).getTimezoneOffset();if(dk.dataLayer)for(const dy of Object.entries(Object.entries(dataLayer).reduce(((dz,dA)=>({...dz[1],...dA[1]})))))zaraz.set(dy[0],dy[1],{scope:"page"});dk[dm].q=[];for(;dk.zaraz.q.length;){const dB=dk.zaraz.q.shift();dk[dm].q.push(dB)}dt.defer=!0;for(const dC of[localStorage,sessionStorage])Object.keys(dC||{}).filter((dE=>dE.startsWith("_zaraz_"))).forEach((dD=>{try{dk[dm]["z_"+dD.slice(7)]=JSON.parse(dC.getItem(dD))}catch{dk[dm]["z_"+dD.slice(7)]=dC.getItem(dD)}}));dt.referrerPolicy="origin";dt.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(dk[dm])));ds.parentNode.insertBefore(dt,ds)};["complete","interactive"].includes(dl.readyState)?zaraz.init():dk.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);</script> -->
  <script src="https://kit.fontawesome.com/d5d388fd48.js" crossorigin="anonymous"></script>
</head>

<body class="form-signin">
  <div class="signin-page-content">
    <div class="form-signin-content">
      <form class="form-detail" action="#" method="post">
        <div class="indexLogo">
          <img src="images/logoXS.png" alt="">
        </div>
        <h2>Sign In</h2>
        <div class="form-row">
          <label for="your-email">Email</label>
          <input type="text" name="your-email" id="your-email" class="input-text" placeholder="Your Email" required
            pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
          <i class="fas fa-envelope"></i>
        </div>
        <div class="form-row">
          <label for="password">Password</label>
          <input type="password" name="password" id="password" class="input-text" placeholder="Your Password" required>
          <i class="fas fa-lock"></i>
        </div>
        <div class="form-row-last">
          <input type="submit" name="sign-in" class="sign-in" value="Sign In">
        </div>
      </form>
    </div>
  </div>

  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
  </script>
  <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816"
    integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw=="
    data-cf-beacon='{"rayId":"7bec97ae0b9287d7","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2023.3.0","si":100}'
    crossorigin="anonymous"></script>
</body>

</html>