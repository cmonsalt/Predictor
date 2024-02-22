function loadLeagues(leagues) {
    var selectLeague = $("#selectLeague");
    //selectLeague.empty();
    $.each(leagues, function(index, league) {
        selectLeague.append("<option value='" + league + "'>" + league + "</option>");
    });
}

export { loadLeagues };
