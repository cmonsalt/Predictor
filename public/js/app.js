import { loadLeagues } from "./loadLeagues.js";
import { loadTeams } from "./loadTeams.js";
import { showMessageGradually } from "./showMessageGradually.js";
import { processForm } from "./formProcessor.js";

$(document).ready(function () {
    var leagues = ["Liga BetPlay", "Premier League"];
    loadLeagues(leagues);

    $("#selectLeague").change(function () {
        var selectedLeague = $(this).val();
        $.ajax({
            url: "/equipos",
            method: "GET",
            data: { liga: selectedLeague },
            success: function (response) {
                var selectTeamLocal = $("#selectTeamLocal");
                var selectTeamVisitor = $("#selectTeamVisitor");
                loadTeams(selectTeamLocal, selectTeamVisitor, response);
            },
            error: function (xhr, status, error) {
                console.error(error);
            },
        });
    });

    $("#form").submit(function(event) {
        // Evitar el envío predeterminado del formulario
        event.preventDefault();
        // Procesar el formulario
        processForm();
    });
    // Llamar a la función para mostrar el mensaje gradualmente
    showMessageGradually();
});
