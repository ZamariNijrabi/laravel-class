$(document).ready(function () {


});

// company scripts
function editCompany(id, event) {
    event.preventDefault();
    $.ajax({
        url: '/companies/' + id + '/edit',
        success: function (view) {
            $('.edit-modal-body').html(view);
            $('#edit-company').modal('show');
        }
    })
}