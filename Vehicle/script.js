$(document).ready(function(){
    // Function to load vehicles table
    function loadVehiclesTable() {
        $.ajax({
            url: "get_vehicles.php",
            type: "GET",
            success: function(response) {
                $('#vehicles_table').html(response);
            }
        });
    }

    // Load vehicles table on page load
    loadVehiclesTable();
});
