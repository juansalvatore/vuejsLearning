<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Class 1</title>
  </head>
  <body>
    <div id="root">
      <ul>
        <h1 v-text="titulo"></h1>
        <li v-for="name in names" v-text="name"></li>
      </ul>
      <input type="text" v-model="newName">
      <button @click="addName">submit</button>
    </div>

    <script src="https://unpkg.com/vue"></script>

    <script type="text/javascript">

      var app = new Vue({

        el: '#root',

        data: {
          titulo: 'Nombres:',
          newName: '',
          names: ['pepito', 'robertito', 'juan'],
        },

        methods: {
          addName() {
            this.names.push(this.newName);
            this.newName = '';
          }
        },

        // once everything is ready to go
        mounted() {

        }
      })
    </script>

  </body>
</html>
