$(document).ready(() => {
    $('#searchMovie').on('submit', (e) => {
        let searchTitle = $('#searchTitle').val();
        getFilms(searchTitle);
        e.preventDefault();
    });
});

function getFilms(searchTitle) {
    axios.get('https://api.themoviedb.org/3/search/movie?api_key=4ec327e462149c3710d63be84b81cf4f&language=en-US&query=' + searchTitle)
    .then(function (response) {
        let movies = response.data.results;
        let output = '';
        $.each(movies, (index, movie) => {
            output += `
            <div class="col-md-4">
              <!-- resultado -->
              <div class="card card-films mb-4 box-shadow">
                <img class="card-img-top" src="https://image.tmdb.org/t/p/w500${movie.poster_path}">
                    <div class="card-body">
                    <a class="link-cosmos">
                    <h5 class="card-title text-left">${movie.title}</h5>
                    </a>
                    </div>
                    <a class="btn btn-outline-warning" onclick="movieSelected('$(movie.id)')">Saiba mais!</a>
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