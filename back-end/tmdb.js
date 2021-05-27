$(document).ready(() => {
    $('#searchMovie').on('submit', (e) => {
        let searchTitle = $('#searchTitle').val();
        getFilms(searchTitle);
        e.preventDefault();
    });
});

function getFilms(searchTitle) {
    axios.get('https://api.themoviedb.org/3/search/movie?api_key=4ec327e462149c3710d63be84b81cf4f&language=pt-BR&query=' + searchTitle)
    .then(function (response) {
        let movies = response.data.results;
        let output = '';
        $.each(movies, (index, movie) => {
            output += `
            <div class="col-md-4">
              <!-- resultado -->
              
              <div class="card  mb-3 box-shadow">
                <img class="card-img-top" src="https://image.tmdb.org/t/p/w500${movie.poster_path}">
                    <div class="card-body">
                    <a class="link-cosmos">
                     <h5 class="card-title text-left">${movie.title}</h5>
                    </a>
                    <p class="card-text text-justify">${movie.overview}</p>
                    <p class="card-text text-justify">Lançado em: ${movie.release_date}</p>
                     <small class="text-success">${movie.genres}</small>
                    </div>
                    <a href="https://www.themoviedb.org/movie/${movie.id}" target="_blank" class="btn btn-primary">Saiba mais</a>
                </div>
          </div>
            `;
        });

        $('#movies').html(output);
    })
    .catch((err) => {
        console.log(err);
    });
}

//Detalhes do filme
//function filmSelected(id) {
   // sessionStorage.setItem('movieId', id);
    //window.location = 'details.php';
    //return false;
//}
