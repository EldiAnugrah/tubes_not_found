// slider
$(document).ready(function () {
    $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 3,
            },
            1000: {
                items: 5,
            },
        },
    });
});

// gacha film
async function getFilm() {
    let angkaAcak = Math.floor(Math.random() * 20); // mengacak data api film
    let pageAcak = Math.floor(Math.random() * 532); // mengacak halaman api
    console.log(angkaAcak);
    const response = await fetch(
        "https://api.themoviedb.org/3/movie/top_rated?api_key=cdad6ebd3dfb5513b13f66e45656e640&page=" +
            pageAcak
    ); // memanggil api
    const data = await response.json();
    const film = data.results[angkaAcak];

    const genreArray = await fetch(
        "https://api.themoviedb.org/3/genre/movie/list?api_key=cdad6ebd3dfb5513b13f66e45656e640"
    ); // memanggil genre
    const genres = console.log(film);
    gachaMovie(film); // memanggil fungsi gacha movie
}

function gachaMovie(film) {
    // pendefeinisian
    const img = document.getElementById("img_gacha");
    const title = document.getElementById("title_gacha");
    const released = document.getElementById("released_gacha");
    const rating = document.getElementById("rating_gacha");
    const sinopsis = document.getElementById("sinopsis_gacha");

    // mengisikan data
    img.setAttribute(
        "src",
        `https://image.tmdb.org/t/p/w400/.` + `${film.poster_path}`
    );
    title.innerText = `Title : ${film.title}`;
    released.innerText = `Released : ${film.release_date}`;
    rating.innerText = `Rating : ${film.vote_average}`;
    sinopsis.innerText = `Sinopsis : ${film.overview}`;
}

$("#btn-gacha").on("click", function () {
    getFilm();
});
