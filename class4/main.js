
Vue.component('task-list', {
  template: '<div><task v-for="task in tasks">{{ task.task }}</task></div>',

  data(){
    return {
      tasks: [
        { task: 'Go to the hospital', complete: false },
        { task: 'Go to the bank', complete: false },
        { task: 'Go to work', complete: true },
        { task: 'Go to class', complete: false },
      ]
    }
  }
});


Vue.component('task', {
  template: '<li><slot></slot></li>'
});

Vue.component('text-block', {
  props: ['title', 'body'],

  template: `
    <div class="container">
      <div class="head">
        <h2>{{ title }}</h2>
      </div>
      <div class="body">
        <p>{{ body }}</p>
      </div>
    </div>
  `
});


var app = new Vue({
  el: '#root',

  data: {

  },
});
