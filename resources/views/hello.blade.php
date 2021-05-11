<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Toboolist</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <style>
              * {
          margin: 0;
          padding: 0;
          box-sizing: border-box;
          font-family: 'Roboto', sans-serif;
          }

          body {
          background-color: #F0F8FF;
          }

          /*banner*/

          .banner {
          background-color: white;
          }

          img {
          margin: 10px 10px;
          vertical-align: middle;
          }

          h1 {
          display: inline;
          vertical-align: middle;
          margin-left: 120px;
          color: blue;
          }

          /*button section*/

          .button_container {
          background-color: #fff;
          margin: auto;
          padding: 10px 50px;
          width: 80%;
          height: 10%;
          border-radius: 3px;
          border-bottom: #F0F8FF solid 4px;
          }

          .altezza_button_container {
          margin-top: 30px;
          }

          .button {
          background-color: #6495ED;
          border: #6495ED solid 1px;
          color: #FFF;
          padding: 6px 15px;
          font-size: 11px;
          border-radius: 5px;
          }

          .button.two {
          background-color: #FFF;
          border: #D3D3D3 solid 1px;
          color: #D3D3D3;

          }

          /*main_container*/

          .main_container {
          background-color: #fff;
          margin: auto;
          padding: 10px 50px;
          width: 80%;
          height: 100%;
          }

          /*list section*/

          .list_section {
          width: 100%;
          height: 30%;
          top: 50px;
          margin: 20px 0;
          }

          li {
          list-style: none;
          margin-top: 20px;
          font-size: 13px;
          }

          h2 {
          font-size: 20px;
          margin: 5px;
          }

          .list_section h2:before {
          content: '\25BE';
          margin: 5px;
          }

          .little_container {
          border-radius: 15px;
          color: #FFF;
          padding: 4px 8px 4px;
          margin: 10px;
          font-size: 8px;
          }


          li .simbolo:before {
          border: #66CDAA solid 1px;
          border-radius: 50%;
          content:'\2713';
          margin: 5px;
          padding: 3px;
          font-size: 10px;
          color: #66CDAA;
          }

          .negativo .simbolo:before {
          border: #B22222 solid 1px;
          border-radius: 50%;
          content:'\2573';
          margin: 5px;
          padding: 3px;
          font-size: 7px;
          color: #B22222;
          }

    </style>
  </head>
  <body>
<!--banner-->
    <div class="banner">
      <h1>HELLO WORLD!</h1>
    </div>

<!--<button container-->
    <div class="button_container altezza_button_container">
      <div class="button_small_container">
        <button type="button" name="button" class="button">
          <a href="/hello">
            Click Me
          </a>
        </button>
        <button type="button" name="button" class="button two">
          Add Section</button>
      </div>
    </div>

<!--main container-->

    <div class="main_container">
<!--<first list section-->
      <div class="list_section">
        <h2>New Task</h2>
        <ul>
          <li>
            <span class="simbolo"></span>
            Quarterly Newsletter
            <span class="little_container" style="background-color: #6495ED;">
              Editorial</span></li>
        </ul>
        <br>
<!--<second list section-->
        <h2>Today</h2>
        <ul>
          <li>
            <span class="simbolo"></span>
            Recruiting blog post<span class="little_container" style="background-color: #6495ED;">
              Editorial</span>
          </li>
          <li class="negativo">
            <span class="simbolo"></span>
            Mobile app launch<span class="little_container" style="background-color: #9400D3;">
               Q1 Goals</span>
          </li>
          <li>
            <span class="simbolo"></span>
            Recruiting blog post<span class="little_container" style="background-color: #66CDAA;">
               Recruiting</span>
          </li>
        </ul>
        <br>
<!--<third list section-->
        <h2>Upcoming</h2>
        <ul>
          <li class="negativo">
            <span class="simbolo"></span>
            Schedule meeting with Alex <span class="little_container">
               Mobile</span>
          </li>
          <li>
            <span class="simbolo"></span>
            Homepage refresh<span class="little_container" style="background-color: #FF69B4;">
               Website</span>
          </li>
          <li>
            <span class="simbolo"></span>
            Onboard new Sales team members<span class="little_container" style="background-color: #FFA500;">
              Sales</span>
          </li>
          <li>
            <span class="simbolo"></span>
            Review editorial calendar<span class="little_container" style="background-color: #6495ED;">
              Editorial</span>
          </li>
        </ul>
      </div>
    </div>
  </body>
</html>
