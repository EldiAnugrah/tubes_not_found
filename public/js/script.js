$('#detail').on('click','.see-detail', function (){
    $.ajax({
        url: 'https://api.themoviedb.org/3/movie/',
        type: 'get',
        dataType: 'json',
        data :{
            'apikey' : 'cdad6ebd3dfb5513b13f66e45656e640',
        },
        success:function(movie){
            if (movie.Response === "True") {
                $('.modal-body').html(`
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="`+ movie.poster_path +`" class="img-fluid">
                            </div>
                            <div class="col-md-8">
                                <ul class="list-group">
                                    <li class="list-group-item"><h3>`+ movie.original_title +`</h3></li>
                                    <li class="list-group-item">Released : `+ movie.release_date +`</li>
                                    <li class="list-group-item">Genre : `+ movie.genre_ids +`</li>
                                    <li class="list-group-item">Genre : `+ movie.overview +`</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                `);
            }
        }
    });
});