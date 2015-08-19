<!DOCTYPE html>
<html lang="en-US">
  <head>
    <title>Clock</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style type="text/css">
      html, body {
        background-color: #eee;
        font-family: tahoma;
        font-size: 90%;
        height: 100%;
        width: 100%;
      }
      * {
        margin: 0;
        padding: 0;
      }
      td {
        text-align: center;
      }
      #box {
        background-color: #cc0000;
        color: #fff;
        font-weight: bold;
        text-align: center;
        padding: 3px 0 3px 0;
      }
      #container {
        height: 100%;
        vertical-align: middle;
        width: 100%;
      }
      #clock {
        fill: #cc55fa;
        stroke: #000;
        stroke-linecap: round;
      }
      #surface, #h_pointer {
        stroke-width: 5px;
      }
      #delimiters, #s_pointer {
        stroke-width: 1px;
      }
      #m_pointer {
        stroke-width: 3px;
      }
      #numbers {
        font-family: sans-serif;
        font-size: 80%;
      }
    </style>
    <script language="javascript" type="text/javascript">
      function timerTick() {
        with (new Date()) {
          var h, m, s;
          
          h = 30 * ((getHours() % 12) + getMinutes() / 60);
          m = 6 * getMinutes();
          s = 6 * getSeconds();

          document.getElementById('h_pointer').setAttribute('transform', 'rotate(' + h + ', 50, 50)');
          document.getElementById('m_pointer').setAttribute('transform', 'rotate(' + m + ', 50, 50)'); 
          document.getElementById('s_pointer').setAttribute('transform', 'rotate(' + s + ', 50, 50)');
          
          setTimeout(timerTick, 1000);
        }
      }
    </script>
  </head>
  <body onload='timerTick()'>
    <noscript><div id='box'>Please, enable JavaScript and refresh page.</div></noscript>
   <a href="main.html" id="time_is_link" r style="font-size:36px">Back to Main </a>
   
    <table id='container'>
      <tr>
        <td>
          <svg id='clock' viewBox='0 0 100 100' width='200' height='200'>
            <circle id='surface' cx='50' cy='50' r='45'/>
            <g id='pointers'>
              <line id='h_pointer' x1='50' y1='50' x2='50' y2='27' />
              <line id='m_pointer' x1='50' y1='50' x2='50' y2='17' />
              <line id='s_pointer' x1='50' y1='50' x2='50' y2='13' />
            </g>
            <g id='numbers'>
              <text x='43' y='18'>12</text>
              <text x='85' y='54'>3</text>
              <text x='47' y='91'>6</text>
              <text x='9' y='54'>9</text>
            </g>
          </svg>
        </td>
      </tr>

    </table>


  </body>
</html>