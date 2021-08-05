<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Taplend</title>
  <link rel="stylesheet" href="/Content/Css/owl.carousel.min.css">
  <link rel="stylesheet" href="/Content/Css/owl.theme.green.min.css">
  <link rel="stylesheet" href="/Content/Css/jquery-ui.min.css">
  <link rel="stylesheet" href="/Content/Css/style.css">
  <script src="/Scripts/Libs/jquery-2.2.4.min.js"></script>
  <script src="/Scripts/Libs/jquery-ui.min.js"></script>
  <script src="/Scripts/Libs/jquery.ui.touch-punch.min.js"></script>
  <script src="/Scripts/Libs/owl.carousel.min.js"></script>
  <script type="text/javascript" src="/Scripts/Libs/require.js"></script>
  <script>
        require(['/Scripts/require.config.js'], function () {
            require(['/Scripts/Pages/Home/startup.js']);
        });
  </script>
</head>
<body class='landing'>
  <div class="wrapper">
    <div class="top_massage move_gradient" bg-color='#6abcf1' radial-gradient-color='#97fff5' size='20%'>
      <p>Warning: Late repayment can cause you serious money problems. For help, go to: www.moneyadviceservice.co.uk | Rates from 45.3% APR to 1575% APR</p>
    </div>
    <header>
      <div class="container">
        <div class="menu-btn" data-bind="click: menuButtonClick"></div>
        <div class="left">
          <div class="logo">
            <a href="/"><img src="Content/img/logo.png" alt="logo"></a>
          </div>
        </div>
        <nav>
          <ul>
            <li>
              <a href="#how_it_works">how it works?</a>
            </li>
            <li>
              <a href="#contact_us">contact us</a>
            </li>
          </ul>
        </nav>
        <div class="get_loan">
          <a href="#">get loan</a>
        </div>
      </div>
    </header>
    <div class="first_screen">
      <div class="container clear">
        <div class="content">
          <h5>Fast & Affordable</h5>
          <h1><span class='wrapper_span'>Personal<span></span></span> loans</h1>
          <p>Taplend is a financial help platform, giving an access to fast, safe and 100% online loans, provided by people or financial institutions.</p>
        </div>
        <div class="form">
          <form action="#">
            <div class="country">
              <p>your country:</p>
              <p>United States</p>
            </div>
            <div class="range_slider">
              <div class="wrap">
                <div class="left">
                  <p>How much cash do you want?</p>
                  <p class="range" data-bind="text: 'from ' + minCost + ' to ' + maxCost"></p>
                </div>
                <div class="right">
                  <p class='Cost'><svg version="1.1" id="Capa_1" style="margin-right:-2px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="30" height="30" viewbox="0 0 484.184 484.184" xml:space="preserve">
                  <g>
                    <path d="M309.43,219.944c-19-10.5-39.2-18.5-59.2-26.8c-11.6-4.8-22.7-10.4-32.5-18.2c-19.3-15.4-15.6-40.4,7-50.3c6.4-2.8,13.1-3.7,19.9-4.1c26.2-1.4,51.1,3.4,74.8,14.8c11.8,5.7,15.7,3.9,19.7-8.4c4.2-13,7.7-26.2,11.6-39.3c2.6-8.8-0.6-14.6-8.9-18.3c-15.2-6.7-30.8-11.5-47.2-14.1c-21.4-3.3-21.4-3.4-21.5-24.9c-0.1-30.3-0.1-30.3-30.5-30.3c-4.4,0-8.8-0.1-13.2,0c-14.2,0.4-16.6,2.9-17,17.2c-0.2,6.4,0,12.8-0.1,19.3c-0.1,19-0.2,18.7-18.4,25.3c-44,16-71.2,46-74.1,94c-2.6,42.5,19.6,71.2,54.5,92.1c21.5,12.9,45.3,20.5,68.1,30.6c8.9,3.9,17.4,8.4,24.8,14.6c21.9,18.1,17.9,48.2-8.1,59.6c-13.9,6.1-28.6,7.6-43.7,5.7c-23.3-2.9-45.6-9-66.6-19.9c-12.3-6.4-15.9-4.7-20.1,8.6c-3.6,11.5-6.8,23.1-10,34.7c-4.3,15.6-2.7,19.3,12.2,26.6c19,9.2,39.3,13.9,60,17.2c16.2,2.6,16.7,3.3,16.9,20.1c0.1,7.6,0.1,15.3,0.2,22.9c0.1,9.6,4.7,15.2,14.6,15.4c11.2,0.2,22.5,0.2,33.7-0.1c9.2-0.2,13.9-5.2,13.9-14.5c0-10.4,0.5-20.9,0.1-31.3c-0.5-10.6,4.1-16,14.3-18.8c23.5-6.4,43.5-19,58.9-37.8C386.33,329.544,370.03,253.444,309.43,219.944z"></path>
                  </g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g></svg> <span data-bind="text: newCost"></span></p>
                </div>
              </div>
              <div class="slider" id="loanAmountSlider"></div>
            </div>
            <div class="range_slider">
              <div class="wrap">
                <div class="left">
                  <p>How long do you want it for?</p>
                  <p class="range">from 1 to 18 months</p>
                </div>
                <div class="right">
                  <p class='Cost'><span data-bind="text:newMonthCount"></span>&nbsp;month</p>
                </div>
              </div>
              <div class="slider" id="loanTermSlider"></div>
            </div>
            <div class="btn__dop_wrap">
              <div class="btn_wrap">
                <input type="button" class='move_gradient button_radial_gradient' value="APPLY NOW" bg-color='#da8522' radial-gradient-color='#e5b92d' size='50%' data-bind="click: getLoanClick">
              </div>
            </div>
          </form>
          <p>Taplend is a financial help platform, giving an access to fast, safe and 100% online loans, provided by people or financial institutions.</p>
        </div>
      </div>
    </div>
    <div class="featured">
      <div class="container">
        <div class="item">
          <p class="title">Faster</p>
          <p class="text">Unlike the others, you can get extra money on your bank account within a one day</p><a href="#" class="more">read more</a>
        </div>
        <div class="item">
          <p class="title">Advantageous</p>
          <p class="text">With our system you can borrow money from other people under zero interest rate</p><a href="#" class="more">read more</a>
        </div>
        <div class="item">
          <p class="title">Safer</p>
          <p class="text">We guarantee the protection of your personal information</p><a href="#" class="more">read more</a>
        </div>
      </div>
    </div>
    <div class="how_it_works move_gradient" id='how_it_works' bg-color='#6abcf1' radial-gradient-color='#97fff5' size='60%'>
      <div class="slider owl-carousel">
        <div class="item container">
          <img src="Content/img/slider_step1.png" alt="slider">
          <div class="content">
            <p class="title">How it works?</p>
            <p class="text">Set desired loan size and duration.</p>
            <p class="dop_text">You can request a loan from £ 100 up to £ 2500 from 2 and up to 18 months.</p>
            <div class="count">
              <div>
                <span>1 of</span> <span>3</span>
              </div>
            </div>
            <div class="clear"></div>
            <div class="bottom">
              <div class="slider_pagination">
                <svg class='left' xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="22" height="18" viewbox="0 0 22 18">
                <defs>
                  <path id="a6gla" d="M975.73 1444.15a1 1 0 0 1-1 1h-14.5l4.5 4.51a1 1 0 1 1-1.4 1.4l-6.21-6.2a1 1 0 0 1 0-1.4l6.2-6.22a1 1 0 0 1 1.41 1.4l-4.5 4.52h14.5a1 1 0 0 1 1 1z"></path>
                </defs>
                <g>
                  <g transform="translate(-955 -1435)">
                    <use fill="#fff" xlink:href="#a6gla"></use>
                  </g>
                </g></svg>
                <ul>
                  <li></li>
                  <li></li>
                  <li></li>
                </ul><svg class="right" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="22" height="18" viewbox="0 0 22 18">
                <defs>
                  <path id="thi3a" d="M1130.85 1444.86l-6.2 6.2a1 1 0 0 1-1.42-1.4l4.51-4.51h-14.51a1 1 0 1 1 0-1.99h14.51l-4.5-4.51a1 1 0 1 1 1.4-1.4l6.2 6.2a1 1 0 0 1 0 1.4z"></path>
                </defs>
                <g>
                  <g transform="translate(-1111 -1435)">
                    <use fill="#fff" xlink:href="#thi3a"></use>
                  </g>
                </g></svg>
              </div>
              <p>Only 3 steps to get loan</p>
            </div>
            <div class="clear"></div>
          </div>
        </div>
        <div class="item container">
          <img src="Content/img/slider_step2.png" alt="slider">
          <div class="content">
            <p class="title">How it works?</p>
            <p class="text">Fill out the application form.</p>
            <p class="dop_text">Please, provide only true information, in order to get the application approved.</p>
            <div class="count">
              <div>
                <span>2 of</span> <span>3</span>
              </div>
            </div>
            <div class="clear"></div>
            <div class="bottom">
              <div class="slider_pagination">
                <svg class='left' xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="22" height="18" viewbox="0 0 22 18">
                <defs>
                  <path id="a6gla" d="M975.73 1444.15a1 1 0 0 1-1 1h-14.5l4.5 4.51a1 1 0 1 1-1.4 1.4l-6.21-6.2a1 1 0 0 1 0-1.4l6.2-6.22a1 1 0 0 1 1.41 1.4l-4.5 4.52h14.5a1 1 0 0 1 1 1z"></path>
                </defs>
                <g>
                  <g transform="translate(-955 -1435)">
                    <use fill="#fff" xlink:href="#a6gla"></use>
                  </g>
                </g></svg>
                <ul>
                  <li></li>
                  <li></li>
                  <li></li>
                </ul><svg class="right" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="22" height="18" viewbox="0 0 22 18">
                <defs>
                  <path id="thi3a" d="M1130.85 1444.86l-6.2 6.2a1 1 0 0 1-1.42-1.4l4.51-4.51h-14.51a1 1 0 1 1 0-1.99h14.51l-4.5-4.51a1 1 0 1 1 1.4-1.4l6.2 6.2a1 1 0 0 1 0 1.4z"></path>
                </defs>
                <g>
                  <g transform="translate(-1111 -1435)">
                    <use fill="#fff" xlink:href="#thi3a"></use>
                  </g>
                </g></svg>
              </div>
              <p>Only 3 steps to get loan</p>
            </div>
            <div class="clear"></div>
          </div>
        </div>
        <div class="item container">
          <img src="Content/img/slider_step3.png" alt="slider">
          <div class="content">
            <p class="title">How it works?</p>
            <p class="text">Wait until some of our partners approves your application.</p>
            <p class="dop_text">We will send your application to more than 40 lenders in the UK, it all take just 2-3 minutes.</p>
            <div class="count">
              <div>
                <span>3 of</span> <span>3</span>
              </div>
            </div>
            <div class="clear"></div>
            <div class="bottom">
              <div class="slider_pagination">
                <svg class='left' xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="22" height="18" viewbox="0 0 22 18">
                <defs>
                  <path id="a6gla" d="M975.73 1444.15a1 1 0 0 1-1 1h-14.5l4.5 4.51a1 1 0 1 1-1.4 1.4l-6.21-6.2a1 1 0 0 1 0-1.4l6.2-6.22a1 1 0 0 1 1.41 1.4l-4.5 4.52h14.5a1 1 0 0 1 1 1z"></path>
                </defs>
                <g>
                  <g transform="translate(-955 -1435)">
                    <use fill="#fff" xlink:href="#a6gla"></use>
                  </g>
                </g></svg>
                <ul>
                  <li></li>
                  <li></li>
                  <li></li>
                </ul><svg class="right" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="22" height="18" viewbox="0 0 22 18">
                <defs>
                  <path id="thi3a" d="M1130.85 1444.86l-6.2 6.2a1 1 0 0 1-1.42-1.4l4.51-4.51h-14.51a1 1 0 1 1 0-1.99h14.51l-4.5-4.51a1 1 0 1 1 1.4-1.4l6.2 6.2a1 1 0 0 1 0 1.4z"></path>
                </defs>
                <g>
                  <g transform="translate(-1111 -1435)">
                    <use fill="#fff" xlink:href="#thi3a"></use>
                  </g>
                </g></svg>
              </div>
              <p>Only 3 steps to get loan</p>
              <div class="clear"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class='footer clear main_page' id='contact_us'>
      <div class="top container">
        <h2>Got a question?</h2>
        <p>Contact us by email or fill out the form.</p>
        <div class="social">
          <div class="item"><img src="Content/img/facebook.png" alt="facebook"></div>
          <div class="item"><img src="Content/img/twitter.png" alt="twitter"></div>
          <div class="item"><img src="Content/img/google.png" alt="google"></div>
        </div>
      </div>
      <div class="container">
        <div class="column">
          <div class="logo">
            <a href="/"><img src="Content/img/logo2.png" alt="logo"></a>
          </div>
          <p>Lending Technologies Ltd.,<br>
          86/90 Paul street, London, EC2A4NE</p>
          <p>©Copyright 2016 Taplend, Inc.<br>
          All rights reserved.</p>
          <a href="https://boostylabs.com"><img src="Content/img/boostylabs-logo-white.png" alt="oostylabs-logo"></a>
        </div>
        <div class="column">
          <nav>
            <ul>
              <li>
                <a href="#">support</a>
              </li>
              <li>
                <a href="#">for Press</a>
              </li>
              <li>
                <a href="#">for partners</a>
              </li>
              <li>
                <a href="#">for investors</a>
              </li>
            </ul>
            <ul>
              <li>
                <a href="#">About Us</a>
              </li>
              <li>
                <a href="#">Jobs <span>We're Hiring</span></a>
              </li>
              <li>
                <a href="#">Contact Us</a>
              </li>
              <li>
                <a href="#">Blog</a>
              </li>
            </ul>
          </nav>
          <div class="secuse_logos"><img src="Content/img/secuse_logos1.png" alt="secuse_logos"> <img src="Content/img/secuse_logos2.png" alt="secuse_logos"> <img src="Content/img/secuse_logos3.png" alt="secuse_logos"></div>
        </div>
        <div class="column">
          <form action="#">
            <p>Subscribe for our news</p>
            <div class="wrap">
              <input type="text" placeholder="Enter your email"> <input type="button" value="sign up" bg-color='#6ec3eb' radial-gradient-color='#21edf6' class='move_gradient' size='80%'>
            </div>
          </form>
          <div class="markets">
            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="117" height="30" viewbox="0 0 117 30">
            <defs>
              <path id="v9ura" d="M888.62 218.15c0 .82-.25 1.48-.74 1.96-.55.58-1.28.87-2.17.87-.85 0-1.57-.3-2.17-.88-.6-.59-.9-1.32-.9-2.19 0-.87.3-1.6.9-2.19.6-.59 1.32-.88 2.17-.88.43 0 .83.08 1.22.25.38.16.69.38.92.65l-.52.52a2 2 0 0 0-1.62-.7c-.62 0-1.16.22-1.6.66-.46.43-.69 1-.69 1.7 0 .69.23 1.25.68 1.69.45.43 1 .65 1.61.65.66 0 1.21-.22 1.65-.66.29-.28.45-.68.5-1.19h-2.15v-.7h2.86c.03.15.05.3.05.44zm4.53-2.46h-2.69v1.87h2.43v.7h-2.43v1.87h2.7v.72h-3.45v-5.88h3.44zm3.2 5.16h-.76v-5.16h-1.65v-.72H898v.72h-1.65zm4.59 0v-5.88h.76v5.88zm4.12 0h-.76v-5.16h-1.65v-.72h4.06v.72h-1.65zm9.33-.76c-.58.6-1.3.9-2.16.9a3 3 0 0 1-3.03-3.07 3 3 0 0 1 3.03-3.08c.85 0 1.57.3 2.16.9a3 3 0 0 1 .87 2.17 3 3 0 0 1-.87 2.18zm-3.77-.49c.44.44.97.66 1.6.66.64 0 1.17-.22 1.61-.66.44-.44.66-1 .66-1.69a2.3 2.3 0 0 0-.66-1.69 2.17 2.17 0 0 0-1.6-.66c-.64 0-1.17.22-1.6.66-.44.44-.66 1-.66 1.7 0 .68.22 1.24.65 1.68zm5.7 1.25v-5.88h.93l2.87 4.58h.03l-.03-1.14v-3.44h.76v5.88h-.8l-3-4.8h-.03l.03 1.14v3.66zm-3.11 12.75c0 2.4-1.9 4.16-4.2 4.16a4.13 4.13 0 0 1-4.2-4.16 4.12 4.12 0 0 1 4.2-4.17c2.3 0 4.2 1.75 4.2 4.17zm-1.84 0c0-1.5-1.1-2.53-2.37-2.53-1.26 0-2.36 1.03-2.36 2.53 0 1.48 1.1 2.52 2.36 2.52 1.27 0 2.37-1.04 2.37-2.52zm-7.33 0c0 2.4-1.89 4.16-4.2 4.16a4.13 4.13 0 0 1-4.2-4.16 4.12 4.12 0 0 1 4.2-4.17c2.31 0 4.2 1.75 4.2 4.17zm-1.84 0c0-1.5-1.1-2.53-2.36-2.53-1.27 0-2.36 1.03-2.36 2.53 0 1.48 1.1 2.52 2.36 2.52 1.27 0 2.36-1.04 2.36-2.52zm-7.29-2.9c.07.32.1.7.1 1.11 0 1.33-.37 2.97-1.54 4.14a5.96 5.96 0 0 1-4.53 1.81c-3.59 0-6.6-2.9-6.6-6.47a6.58 6.58 0 0 1 11.05-4.69l-1.25 1.25a4.65 4.65 0 0 0-7.86 3.44c0 2.6 2.04 4.7 4.66 4.7 1.7 0 2.66-.67 3.28-1.29.5-.5.84-1.23.97-2.23h-4.25v-1.76zm38.8 1.85l-5.6 2.3c.44.85 1.1 1.27 2.04 1.27a2.4 2.4 0 0 0 2.06-1.15l1.43.95a4.17 4.17 0 0 1-3.5 1.84 4.09 4.09 0 0 1-4.15-4.16c0-2.48 1.8-4.17 3.95-4.17 2.17 0 3.24 1.72 3.58 2.65zm-2.15-.63c-.2-.52-.83-.88-1.56-.88-.93 0-2.23.82-2.18 2.43zm-8.3-6.66h1.85v12.25h-1.84zm-3 4.42H922v7.48c0 3.08-1.82 4.35-3.98 4.35a3.99 3.99 0 0 1-3.71-2.47l1.6-.66c.29.68.98 1.48 2.1 1.48 1.39 0 2.24-.85 2.24-2.44v-.6h-.06c-.41.5-1.2.94-2.2.94a4.14 4.14 0 0 1-4.01-4.15 4.15 4.15 0 0 1 4-4.18c1 0 1.8.44 2.21.93h.06zm.12 3.93c0-1.47-.98-2.54-2.23-2.54-1.27 0-2.33 1.07-2.33 2.54 0 1.45 1.06 2.51 2.33 2.51 1.25 0 2.23-1.06 2.23-2.5zm25.8-4.55c0 2.34-2 3.81-4.04 3.81h-2.56v4.64h-1.84v-12.25h4.4c2.04 0 4.04 1.47 4.04 3.8zm-1.84 0c0-.96-.78-2.1-2.15-2.1h-2.61v4.2h2.6a2.14 2.14 0 0 0 2.16-2.1zm12.93 3.73v4.7h-1.77v-.95h-.07a2.6 2.6 0 0 1-2.34 1.2c-1.61 0-3.05-1.05-3.05-2.7 0-1.79 1.79-2.75 3.54-2.75.87 0 1.59.28 1.92.47v-.12c-.02-1.01-.98-1.58-1.93-1.58-.68 0-1.33.22-1.68.9l-1.63-.68c.57-1.3 1.95-1.87 3.28-1.87 2.1 0 3.73 1.2 3.73 3.38zm-1.77 1.4c-.5-.25-.87-.42-1.68-.42-.9 0-1.95.36-1.95 1.3 0 .75.84 1.05 1.44 1.05 1.06 0 2.05-.8 2.19-1.94zm10.27-4.52l-5.05 11.56h-1.91l1.86-4.13-3.27-7.43h1.98l2.18 5.31h.06l2.1-5.3zm-18.58-4.41h1.83v12.25h-1.83zm-94.9-9.82c.46-.41 1.17-.44 1.97 0l14.37 8.14 4.8 2.72c1.38.77 1.38 2.05 0 2.82l-4.8 2.73-14.37 8.12c-.8.46-1.5.43-1.97.02a1.96 1.96 0 0 1-.53-1.45v-21.66a1.95 1.95 0 0 1 .53-1.44z"></path>
            </defs>
            <g>
              <g opacity=".5" transform="translate(-850 -213)">
                <use fill="#fff" xlink:href="#v9ura"></use>
              </g>
            </g></svg></a> <a href="#" class='app_store'><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="110" height="33" viewbox="0 0 110 33">
            <defs>
              <path id="f6a9a" d="M1021.02 237.2c-.81 0-1.47.64-1.47 1.44 0 .8.66 1.44 1.47 1.44.8 0 1.46-.64 1.46-1.44 0-.8-.65-1.44-1.46-1.44zm-5.54-.7h11.08v-16.32h-11.08zm22.45-19.6c-.12-.39-.2-.73-.3-1.07h-.02c-.08.34-.18.7-.3 1.06l-.57 1.69h1.78zm16.3 13.88c-1.3 0-2.45.91-2.8 2.22l-.03.19c-.04.2-.08.4-.08.56v1.84a2.8 2.8 0 0 0 2.82 2.86c1.9 0 3.09-1.5 3.09-3.9 0-1.88-.93-3.77-3-3.77zm4.87-13.47c-.53 0-1.02.37-1.17.94-.03.1-.04.2-.04.32v.75c0 .1 0 .2.02.28.15.53.61.9 1.16.9.82 0 1.3-.66 1.3-1.62 0-.85-.44-1.57-1.27-1.57zm-17.64 10.14c-.18.75-.38 1.45-.6 2.1l-1.38 4.04h4l-1.4-4c-.25-.76-.44-1.47-.62-2.14zm67.34-6.92h.01c.74 0 1.3-.69 1.3-1.64 0-.71-.37-1.6-1.28-1.6-.9 0-1.3.83-1.3 1.63 0 .92.52 1.6 1.27 1.6zm-9.76-2.42c.94 0 1.5-.45 1.5-1.24 0-.78-.56-1.15-1.4-1.15-.34 0-.6.03-.73.06v2.27c.17.04.39.06.63.06zm-32.84 12.67c-1.3 0-2.46.91-2.8 2.22l-.04.19c-.04.2-.07.4-.07.56v1.84a2.8 2.8 0 0 0 2.82 2.86c1.9 0 3.08-1.5 3.08-3.9 0-1.88-.92-3.77-3-3.77zm-21.07-10.97c0 .5.34.73.72.73.57 0 .93-.35 1.05-.7a.78.78 0 0 0 .03-.25v-.73c-.84-.01-1.8.13-1.8.95zm73.18-2.56c-.8 0-1.13.71-1.19 1.24h2.25c.01-.48-.2-1.24-1.06-1.24zm-52.59 0c-.79 0-1.12.71-1.18 1.24h2.25c0-.48-.2-1.24-1.07-1.24zm-12.36 2.56c0 .5.33.73.72.73.56 0 .92-.35 1.04-.7a.76.76 0 0 0 .04-.25v-.73c-.84-.01-1.8.13-1.8.95zm45 10.88c-2.15 0-3.12 1.98-3.12 3.94 0 2.26 1.28 3.9 3.05 3.9h.02c1.79 0 3.08-1.67 3.08-3.97 0-1.86-.95-3.87-3.04-3.87zm17.6-.09c-1.73 0-2.57 1.45-2.79 2.78h5.3a3.23 3.23 0 0 0-.8-2.14c-.42-.42-1-.64-1.7-.64zm2.41-13.9c1.4 0 1.75 1.21 1.75 1.98 0 .16 0 .28-.02.37l-2.99-.01c.02 1.03.68 1.45 1.45 1.45.56 0 .9-.1 1.18-.2l.14.53c-.27.12-.74.27-1.42.27-1.3 0-2.1-.86-2.1-2.11 0-1.28.77-2.27 2.01-2.27zm-5.88.11l.04.68h.02c.2-.38.7-.78 1.4-.78.6 0 1.5.35 1.5 1.79v2.5h-.76v-2.41c0-.68-.26-1.25-.99-1.25a1.11 1.11 0 0 0-1.1 1.13V221h-.77v-3.05c0-.45 0-.8-.03-1.14zm-3.64-.1c1.23 0 2.05.88 2.05 2.15 0 1.56-1.1 2.24-2.1 2.24h-.02c-1.14 0-2.04-.83-2.04-2.16 0-1.4.94-2.23 2.11-2.23zm-9.74-1.59c.76 0 1.32.17 1.67.49.32.27.53.7.53 1.22 0 .53-.16.94-.47 1.25-.4.42-1.07.64-1.81.64-.23 0-.44-.01-.62-.05V221h-.76v-5.77c.36-.07.85-.12 1.46-.12zm-3.12-.06c.3 0 .5.22.5.48 0 .27-.2.5-.5.5h-.02a.48.48 0 0 1-.48-.5c0-.26.2-.48.5-.48zm.39 1.75v4.2h-.78v-4.2zm-11.8-1.96h.78v2.62h.01c.13-.22.32-.42.56-.54.23-.14.5-.22.8-.22.56 0 1.48.35 1.48 1.8v2.5h-.78v-2.41c0-.69-.25-1.25-.98-1.25a1.12 1.12 0 0 0-1.1 1.12V221h-.77zm-3.35 1.96h.66v-.77l.76-.24v1.01h1.1v.58h-1.1v2.26c0 .52.15.82.58.82.21 0 .33-.02.45-.05l.03.58c-.15.05-.38.1-.68.1-.36 0-.66-.12-.84-.32-.21-.23-.3-.6-.3-1.1v-2.29h-.66zm-15.44-.1c1.38 0 1.75 1.2 1.75 1.97 0 .16-.01.28-.03.37l-2.98-.01c.01 1.03.67 1.45 1.45 1.45.55 0 .9-.1 1.18-.2l.14.53c-.27.12-.75.27-1.43.27-1.3 0-2.09-.86-2.09-2.11 0-1.28.76-2.27 2-2.27zm-3.72-1.86h.78v6.16h-.78zm-7.9 2.43c-.4 0-.81.11-1.11.31l-.18-.51a2.8 2.8 0 0 1 1.4-.37c1.32 0 1.64.88 1.64 1.72V220c0 .36.01.72.06 1h-.7l-.07-.52h-.02c-.23.33-.7.62-1.3.62-.87 0-1.3-.6-1.3-1.2 0-1.02.9-1.57 2.55-1.56v-.1c0-.34-.1-.97-.97-.96zm-3.27-2.43h.78v6.16h-.78zm-4.95 2.43c-.4 0-.82.11-1.12.31l-.17-.51a2.8 2.8 0 0 1 1.4-.37c1.32 0 1.63.88 1.63 1.72V220c0 .36.02.72.06 1h-.7l-.06-.52h-.03c-.23.33-.7.62-1.3.62-.86 0-1.3-.6-1.3-1.2 0-1.02.91-1.57 2.56-1.56v-.1c0-.34-.1-.97-.97-.96zm-5.02-.47l.83 2.35c.14.39.26.74.35 1.08h.02c.1-.34.22-.7.36-1.08l.83-2.35h.8l-1.66 4.2h-.74l-1.62-4.2zm-3.74-1.65h.92l2.02 5.85h-.81l-.64-1.84h-2.1l-.62 1.83h-.79zm-8.9 24.35c0 1.2-1 2.16-2.2 2.16h-10.14c-1.21 0-2.2-.97-2.2-2.16v-22.12c0-1.2.99-2.16 2.2-2.16h10.13c1.22 0 2.2.97 2.2 2.16zm17.32.58l-1.6-4.64h-5.06l-1.55 4.64h-2.4l5.22-15.13h2.6l5.24 15.13zm3.66-25.03c.3 0 .5.22.5.48 0 .27-.2.5-.5.5h-.01a.48.48 0 0 1-.49-.5c0-.26.2-.48.5-.48zm-.38 1.75h.77v4.2h-.77zm9.13 22.05a4.83 4.83 0 0 1-3.52 1.47 4.1 4.1 0 0 1-3.18-1.34v5.44H1049v-11.66c0-1.48-.02-2.52-.09-3.45v-.2h2.12l.09 1.51a4.37 4.37 0 0 1 3.7-1.75c1.33 0 2.54.55 3.4 1.55a6.03 6.03 0 0 1 1.36 4.02 6.2 6.2 0 0 1-1.56 4.4zm1.21-17.76c-.61 0-1.1-.23-1.42-.79h-.02l-.04.7h-.67c.02-.3.03-.72.03-1.09v-5.07h.78v2.63h.01c.28-.47.77-.77 1.46-.77 1.05 0 1.79.87 1.79 2.14 0 1.5-.97 2.25-1.92 2.25zm10.75 17.76a4.83 4.83 0 0 1-3.52 1.47 4.1 4.1 0 0 1-3.17-1.34v5.44h-2.33v-11.66c0-1.48-.02-2.51-.08-3.45l-.02-.2h2.13l.09 1.51a4.37 4.37 0 0 1 3.7-1.75c1.33 0 2.54.55 3.4 1.55a6.03 6.03 0 0 1 1.36 4.02 6.2 6.2 0 0 1-1.56 4.4zm2.03-17.76c-1.15 0-2.05-.83-2.05-2.16 0-1.4.95-2.23 2.11-2.23 1.23 0 2.05.88 2.05 2.15 0 1.56-1.1 2.24-2.1 2.24zm3.87-2.98c-.03.1-.05.23-.05.35V221h-.77v-3.05c0-.45-.01-.8-.04-1.14h.69l.04.68h.02c.21-.38.7-.78 1.4-.78.6 0 1.51.35 1.51 1.79v2.5h-.77v-2.41c0-.68-.26-1.25-.99-1.25-.5 0-.9.35-1.04.78zm4.39 22.21c-1.4 0-3.05-.42-3.93-1l-.11-.07.62-1.95.2.13c.95.59 2.17.93 3.35.93 1.82 0 2.96-.9 2.96-2.34 0-1.27-.74-2.02-2.7-2.74-2.8-1-4.09-2.39-4.09-4.38 0-2.47 2.07-4.19 5.03-4.19 1.89 0 3 .52 3.39.75l.13.07-.66 1.91-.2-.12a5.34 5.34 0 0 0-2.72-.67c-1.83 0-2.64 1.02-2.64 2.03 0 1.2.7 1.86 2.86 2.68 2.78 1.08 3.92 2.4 3.92 4.5 0 2.06-1.42 4.46-5.41 4.46zm12.4-9.38h-2.81v5.54c0 1.32.38 1.88 1.28 1.88.49 0 .8-.03 1.09-.12l.22-.07.1 1.83-.12.05c-.3.1-.92.27-1.8.27a3 3 0 0 1-2.24-.87c-.55-.6-.8-1.55-.8-2.9v-5.6h-1.68v-1.84h1.67v-1.9l2.28-.7v2.6h2.8zm.17-11.9l-2.98-.01c.02 1.03.68 1.45 1.45 1.45.56 0 .9-.1 1.18-.2l.14.53c-.27.12-.75.27-1.42.27-1.3 0-2.1-.86-2.1-2.11 0-1.28.77-2.27 2-2.27 1.4 0 1.76 1.2 1.76 1.97 0 .16 0 .28-.03.37zm5.42 21.28h-.02c-3.14 0-5.34-2.32-5.34-5.63 0-3.43 2.27-5.82 5.52-5.82 1.56 0 2.9.55 3.88 1.57a5.73 5.73 0 0 1 1.48 4.05c0 4-2.86 5.83-5.52 5.83zm5.82-22.98c-.5 0-.9.34-1.04.76a.9.9 0 0 0-.05.36V221h-.78v-6.15h.78v2.62h.01c.13-.22.32-.42.56-.54.23-.14.5-.22.79-.22.57 0 1.49.35 1.49 1.8v2.5h-.78v-2.41c0-.69-.25-1.25-.98-1.25zm5.95 13.71c-1.23 0-2.19.9-2.45 2.31-.04.27-.06.57-.06.89v5.83h-2.33l.03-7.48c0-1.37-.03-2.39-.1-3.3v-.19h2.08l.07 1.6a3.32 3.32 0 0 1 2.91-1.84c.2 0 .37.02.58.07l.14.04v2.14l-.25-.03c-.2-.02-.39-.04-.62-.04zm10.63 3.93l-.03.15-7.5-.02c.14 2.99 2.47 3.32 3.48 3.32a7.3 7.3 0 0 0 2.91-.52l.2-.07.44 1.7-.14.06c-.71.32-1.93.7-3.68.7-3.32 0-5.47-2.17-5.47-5.53 0-3.48 2.16-5.92 5.25-5.92 3.4 0 4.6 2.8 4.6 5.18 0 .4-.01.72-.06.95zm-29.6-17.74c-.8 0-1.13.71-1.2 1.24h2.26c0-.48-.2-1.24-1.06-1.24zm-19.01.04c-.9 0-1.3.83-1.3 1.63 0 .92.52 1.6 1.27 1.6h.01c.74 0 1.3-.68 1.3-1.63 0-.71-.37-1.6-1.28-1.6z"></path>
            </defs>
            <g>
              <g opacity=".5" transform="translate(-1012 -213)">
                <use fill="#fff" xlink:href="#f6a9a"></use>
              </g>
            </g></svg></a>
          </div>
          <div class="social">
            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18" height="15" viewbox="0 0 18 15">
            <defs>
              <path id="vawba" d="M1235.78 223.82c-.54.24-1.13.4-1.74.48.63-.38 1.1-.98 1.33-1.7-.58.35-1.23.6-1.92.75a3 3 0 0 0-2.22-.98 3.06 3.06 0 0 0-2.95 3.78 8.57 8.57 0 0 1-6.25-3.21 3.1 3.1 0 0 0 .94 4.1c-.5 0-.97-.15-1.38-.38v.04c0 1.5 1.05 2.74 2.43 3.02a3.01 3.01 0 0 1-1.36.05 3.04 3.04 0 0 0 2.83 2.14 6.03 6.03 0 0 1-4.5 1.28 8.5 8.5 0 0 0 4.66 1.38c5.58 0 8.63-4.7 8.63-8.76l-.01-.4c.59-.43 1.1-.97 1.51-1.6z"></path>
            </defs>
            <g>
              <g opacity=".5" transform="translate(-1219 -221)">
                <use fill="#fff" xlink:href="#vawba"></use>
              </g>
            </g></svg></a> <a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="10" height="17" viewbox="0 0 10 17">
            <defs>
              <path id="vi58a" d="M1284.36 225.88h-2.3v-1.53c0-.57.38-.7.64-.7h1.62v-2.53h-2.23c-2.47 0-3.04 1.88-3.04 3.08v1.68h-1.43v2.6h1.43v7.35h3.01v-7.35h2.04z"></path>
            </defs>
            <g>
              <g opacity=".5" transform="translate(-1276 -220)">
                <use fill="#fff" xlink:href="#vi58a"></use>
              </g>
            </g></svg></a> <a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18" height="19" viewbox="0 0 18 19">
            <defs>
              <path id="rlp6a" d="M1340.86 227.1h-6.93v2.93h4.02c-.16.93-.7 1.79-1.48 2.31a4.73 4.73 0 0 1-3.38.65 4.28 4.28 0 0 1-1.64-.72 4.65 4.65 0 0 1-.61-7 4.28 4.28 0 0 1 4.36-1.15c.6.19 1.14.52 1.59.95l1.35-1.37.72-.74a7.1 7.1 0 0 0-7.33-1.54 7.44 7.44 0 0 0-4.82 5.6 7.63 7.63 0 0 0 2.64 7.36 7.29 7.29 0 0 0 6.45 1.41 6.61 6.61 0 0 0 4.88-4.7c.36-1.3.41-2.67.18-3.99z"></path>
            </defs>
            <g>
              <g opacity=".5" transform="translate(-1325 -219)">
                <use fill="#fff" xlink:href="#rlp6a"></use>
              </g>
            </g></svg></a>
          </div>
        </div>
      </div>
    </footer>
  </div>
</body>
</html>
