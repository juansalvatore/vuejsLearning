<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <div id="root">
      <button  v-bind:title="title" type="button" name="button">Hover over me</button>
    </div>



    <script src="https://unpkg.com/vue"></script>
    <script type="text/javascript">
      var app = new Vue({
        el: '#root',

        data: {
          title: 'este es un titulo cool'
        },

      });
    </script>
  </body>
</html>
