<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>class3</title>
    <style>
      .inline {
        display: inline;
      }

      .is-done {
        background-color: #b5fd87;
      }
    </style>
  </head>
  <body>
    <div id="root">
      <h1>{{ reversedMessage }}</h1>

      <h3>All tasks</h3>
      <ul>
        <li v-for="(task, key) in tasks">
          <p class="inline" v-text="task.description"></p>
          <button :class="{ 'is-done' : task.completed }" @click="finishActivity(key)" class="inline">done</button>
        </li>

      </ul>

      <h3>Uncompleted tasks</h3>
      <ul>
        <li v-for="task in incompleteTasks" v-text="task.description"></li>
      </ul>
    </div>

    <script src="https://unpkg.com/vue"></script>
    <script type="text/javascript">
    var app = new Vue({
      el: '#root',

      data: {
        message: 'Hello World',

        isDone: false,

        tasks: [
          { description: 'Go to the store', completed: false },
          { description: 'Finish screencast', completed: false },
          { description: 'Make donation', completed: false },
          { description: 'Clear Inbox', completed: false },
          { description: 'Make dinner', completed: false },
          { description: 'Clean room', completed: false },
        ],
      },

      computed: {
        reversedMessage(){
          return this.message.split('').reverse().join('');
        },

        incompleteTasks(){
          return this.tasks.filter(task => ! task.completed);
        }
      },

      methods: {
        finishActivity(key){
          if(this.tasks[key].completed){
            this.tasks[key].completed = false;
          } else {
            this.tasks[key].completed = true;
          }

        },
      }

    });
    </script>
  </body>
</html>
