var finobeApp = {
	Games : {
		fetchPlaceList : function fetchPlaceList(string){
			var games = $.ajax({
				method:"GET",
				url:"/app/game/gamesGenre?genreType=" + string,
				cache:false
				}, 
			);
			games.done(function ( data ){
				$('#gamesList').html(data);
			});
		},
		goPlace : function goPlace(id){
			window.location="/places/view?id=" + id;
		}
	}
}