
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