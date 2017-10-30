// var Title = Vue.extend({
//  name: 'title'
// });

var titleDes = new Vue({
  el : '#titleDes',
  data : {
    title : 'Автомобильная компания',
    description: 'С момента основания компании в 2017 году мы стремимся создавать для наших клиентов первоклассные решения во всем, что касается автомобилей.'
  }
});

// var ifelse = new Vue({
//   el: "#app",
//   data: {
//     name: "John",
//     flag: true
//   }
// });

// $(document).ready(function() {
//  $('#inputMark').on('change', function () {
//    var mark = $(this).val();

//    console.log(mark);

//    $('#inputPower option').each(function (id, elm) {
//      var current = $(elm);
//      if (current.attr('data-model') !== mark) {
//        current.attr('hidden', true);
//      } else {
//        current.attr('hidden', false);
//      }
//    });
//    $('#inputSpeed option').each(function (id, elm) {
//      var current = $(elm);
//      if (current.attr('data-model') !== mark) {
//        current.attr('hidden', true);
//      } else {
//        current.attr('hidden', false);
//      }
//    });
//  })
// });

// var car = new Vue({
//   el: '#cars',
//  data: {
//    items: [
//      {selectedMark: ""},
//      {selectedPower: ""},
//      {selectedSpeed: ""}
//    ]
//  },
//  onChange: function(){
//   console.log(selectedMark);
//  }
// })

// var vm = new Vue({
//     el: '#cars',
//     data: {
//         marks: window.marks, 
//         powers: window.powers, 
//         speeds: window.speeds, 
//         selectedMark: "", 
//         selectedPower: "",
//         selectedSpeed: ""
//       },

//        computed: {
//            powerOptions: function() {
//            let powerOptions = ''
//                 switch(this.category) {
//                     case 'Toyota':
//                     powerOptions = this.powersData.toyota
//                     break;

//                     case 'Honda':
//                     powerOptions = this.powersData.honda
//                     break;

//                     case 'Ford':
//                     powerOptions = this.powersData.ford
//                     break;

//                     case 'Nissan':
//                     powerOptions = this.powersData.nissan
//                     break;

//                     default: break;
//                 }
//                 return powerOptions
//            },

//            speedOptions: function() {
//            let speedOptions = ''
//                 switch(this.category) {
//                     case 'Toyota':
//                     speedOptions = this.speedsData.toyota
//                     break;

//                     case 'Honda':
//                     speedOptions = this.speedsData.honda
//                     break;

//                     case 'Ford':
//                     speedOptions = this.speedsData.ford
//                     break;

//                     case 'Nissan':
//                     speedOptions = this.speedsData.nissan
//                     break;

//                     default: break;
//                 }
//                 return speedOptions
//            }
//        }
// })

// var vm = new Vue({ 
//   el: '#cars', 

//   data: { 
//     marks: window.marks, 
//     powers: window.powers, 
//     speeds: window.speeds, 
//     selectedMark: "", 
//     selectedPower: "",
//     selectedSpeed: ""
//   }, 
//   methods:{ 
//     seen: function(powers) { 
//       if(powers.id == this.selectedMark) { 
//         return true 
//       } 
//       return false 
//     }, 
//     seen: function(speeds) { 
//       if(speeds.id == this.selectedMark) { 
//         return true 
//       } 
//       return false 
//     }, 
//     onChange: function () {
//     var mark = (this).val;
//     console.log(mark);
//       $('#inputPower option').each(function (id, elm) {
//        var current = $(elm);
//        if (current.attr('data-model') != 3) {
//          current.attr('hidden', true);
//        } else {
//          current.attr('hidden', false);
//        }
//      });
//     } 
//   } 
// })

function init() {
  var vm = new Vue({ 
    el: '#books', 

    data: { 
      genres: window.genres,
      books: window.books,
      selectedGenre: "", 
      selectedBook: ""
    }, 

    methods:{ 
      onChange: function(book) { 
        if(book.genreId == this.selectedGenre)  { 
          return true
        } 
        return false
      }   
    }
  });
}