function loadTeams(selectTeamLocal, selectTeamVisitor, response) {
    selectTeamLocal.empty();
    selectTeamVisitor.empty();
    $.each(response, function(index, team) {
        selectTeamLocal.append("<option value='" + team + "'>" + team + "</option>");
        selectTeamVisitor.append("<option value='" + team + "'>" + team + "</option>");
    });
    selectTeamLocal.prop("disabled", false);
    selectTeamVisitor.prop("disabled", false);
    $("#selectLevel").prop("disabled", false);
}

export { loadTeams };
