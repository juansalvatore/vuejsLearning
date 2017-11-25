<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>class 4</title>
    <style media="screen">
      *{
        box-sizing: border-box;
      }
      .container{
        background-color: #eaeff9;
        width: 800px;
      }
      .head{
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #a2c4d7;
        width: 800px;
        height: 50px;
      }
      .body{
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 20px;
        line-height: 28px;
      }
    </style>
  </head>
  <body>
    <div id="root">
      <task-list></task-list>
      <text-block title="First block" body="This is the first block"></text-block>
      <br>
      <text-block title="Second block" body="This is the second block"></text-block>

    </div>


    <script src="https://unpkg.com/vue"></script>
    <script type="text/javascript" src="main.js"></script>
  </body>
</html>
