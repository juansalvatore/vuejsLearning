<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Class 2</title>
    <style>
      h1 {
        transition: all ease-in-out 300ms;
      }
      .color-red{
        color: red;
      }
      .color-blue{
        color: blue;
      }
      .is-disabled {
        color: red;
      }
    </style>
  </head>
  <body>

    <div id="root">
      <h1 :class="className">Attributes and class binding</h1>
      <button :title="title" @click="changeTitleColor" >Hover over me</button>
      <button :disabled="isDisabled">Homework</button>
    </div>



    <script src="https://unpkg.com/vue"></script>
    <script type="text/javascript">
      var app = new Vue({
        el: '#root',

        data: {
          className: 'color-red',
          isDisabled: true,
          title: 'este es un titulo cool'
        },

        methods: {
          changeTitleColor(){
            if(this.className == 'color-blue'){
              this.className = 'color-red';
            } else {
              this.className = 'color-blue';
            }
          },
        },

        mounted(){

        },
      });
    </script>
  </body>
</html>
