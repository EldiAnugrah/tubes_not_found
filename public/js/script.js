// cari gambar input
function searchMovie() {
    $('#movie-list').html('');
    $.ajax({
        url: 'http://omdbapi.com',
        type: 'get',
        dataType: 'json',
        data: {
            'apikey' : 'b9411804',
            's' : $('#search-input').val()
        },
        success : function(result){
            if (result.Response == "True") {
                let movies = result.Search;

                $.each(movies, function(i,data) {
                    $('#movie-list').append(`
                        <div class="col-md-4">
                            <div class="card mb-3">
                                <a href="#" class="card-link select" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="`+ data.imdbID +`">
                                    <img src="`+ data.Poster +`" class="card-img-top" alt="...">
                                </a>
                            </div>
                        </div>
                    `)
                });

                $('#search-input').val('');
            }else{
                $('#movie-list').html(`
                    <div class="col">
                    <h1 class = "text-center">`+ result.Error +`</h1>
                `)
            }
        }
    });
}

$('#search-button').on('click', function (){
    searchMovie();
});

$('#search-input').on('keyup', function(event){
    if(event.keyCode === 13){
        searchMovie();
    }
});

// select img
$('.select').on('click',function(){
    $.ajax({
        url: 'http://omdbapi.com',
        type: 'get',
        dataType: 'json',
        data :{
            'apikey' : 'b9411804',
            'i' : $(this).data('id')
        },
        success:function(image){
            $('#selected-image').append(`
                <img src="`+ image.Poster +`">
            `)
        }
    })
});

// slider
$(document).ready(function(){
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    })
});

// gacha film
// ISI VARIABEL TIMER UNTUK WAKTU MUNDUR
let timer = 5
// SELEKSI ELEMENT DENGAN ID random-number
const hasil = document.getElementById('hasil-gacha');

// SELEKSI TOMBOL
const button = document.getElementById('btn-gacha');

const createRandomLength = function(stringLength = 1) {
    let randomLength = '';
    
    // ASSIGNMENT KARAKTERNYA
    let characters = '7';
    
    // PENGULANGAN YANG AKAN MENGHASILKAN RANDOM KARAKTER
    for (let i = 0 ; i < stringLength; i++) {
        let randomCharacters = 
        randomLength += characters.charAt(Math.floor(Math.random()  * characters.length))
    }
    
    // KEMBALIKAN NILAINYA
    return randomLength;
}

// FUNCTION UNTUK GENERATE RANDOM KARAKTER
const createRandomString = function(stringLength = createRandomLength()) {
    // ASSIGNMENT AWAL UNTUK MENGHASILKAN RANDOM KARAKTER
    let randomString = 'tt';
    
    // ASSIGNMENT KARAKTERNYA
    let characters = '1234567890';
    
    // PENGULANGAN YANG AKAN MENGHASILKAN RANDOM KARAKTER
    for (let i = 0 ; i < stringLength; i++) {
        let randomCharacters = 
        randomString += characters.charAt(Math.floor(Math.random()  * characters.length))
    }
    
    // KEMBALIKAN NILAINYA
    return randomString;
}

// pencarian gacha movie
function gachaMovie($hasil = createRandomString()) {
    console.log($hasil);
    $('#hasil-gacha').html('');
    $.ajax({
        url: 'http://omdbapi.com',
        type: 'get',
        dataType: 'json',
        data: {
            'apikey' : 'b9411804',
            'i' : $hasil
        },
        success : function(result){
            if (result.Response == "True") {
                    $('#hasil-gacha').html(`
                    <div class="col-md-4")>
                        <div class="card mb-3">
                            <img src="`+ result.Poster +`" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title">`+ result.Title +`</h5>
                            <h6 class="card-subtitle mb-2 text-muted">`+ result.Year +`</h6>
                            <a href="#" class="card-link see-detail" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="`+ result.imdbID +`">See Detail</a>
                            </div>
                        </div>
                    </div>
                    `)
            }else{
                $('#hasil-gacha').html(`
                    <div class="col">
                    <h1 class = "text-center">Coba Lagi..</h1>
                `)
            }
        }
    });
}

// JIKA TOMBOL DI KLIK, JALANKAN FUNGSI COUNDOWN DAN BUAT RANDOM KARAKTER
button.addEventListener('click', function() {
    
    const countdown = setInterval(function(){
        $('#hasil-gacha').html(`text akan di generate dalam waktu ${timer--}`)
        
        if (timer < 0) {
            clearInterval(countdown);
            // randomLength1.innerHTML = `length anda ${createRandomLength()}`;
            $('#hasil-gacha').html(`kode anda ${createRandomString()}`) 
            gachaMovie();
        }
    }, 1000);
        
});

// modal gacha
$('#hasil-gacha').on('click','.see-detail', function (){
    $.ajax({
        url: 'http://omdbapi.com',
        type: 'get',
        dataType: 'json',
        data :{
            'apikey' : 'b9411804',
            'i' : $(this).data('id')
        },
        success:function(movie){
            if (movie.Response === "True") {
                $('.modal-body').html(`
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="`+ movie.Poster +`" class="img-fluid">
                            </div>
                            <div class="col-md-8">
                                <ul class="list-group">
                                    <li class="list-group-item"><h3>`+ movie.Title +`</h3></li>
                                    <li class="list-group-item">Released : `+ movie.Release +`</li>
                                    <li class="list-group-item">Genre : `+ movie.Genre +`</li>
                                    <li class="list-group-item">Director : `+ movie.Director +`</li>
                                    <li class="list-group-item">Actors : `+ movie.Actors +`</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                `);
            }
        }
    });
});