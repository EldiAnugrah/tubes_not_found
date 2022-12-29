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
$('#movie-list').on('click','select',function(){
    $.ajax({
        url: 'http://omdbapi.com',
        type: 'get',
        dataType: 'json',
        data :{
            'apikey' : 'b9411804',
            'i' : $(this).data('id')
        },
        success:function(image){
            $('#selected-image').val(`
                <img src="`+ image.Poster +`">
            `)
        }
    })
})

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
})