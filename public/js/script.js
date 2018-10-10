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



/**
 * Assign role to user
 *
 * @param id
 * @param event
 */
function assignRole(id, event) {
    event.preventDefault();

    $.ajax({
        type: 'GET',
        url: '/users/' + id + '/role',
        success: function (view) {
            $('.assign-role').html(view);
            $('#assign-role').modal('show');
        }
    });

}

/**
 * Delete role
 * @param id
 * @param event
 */
function deleteRole(id, event) {
    event.preventDefault();
    $('#delete-link').attr('href', '/roles/' + id + '/delete');
    $('#delete-modal').modal('show');
}

/**
 * Delete user
 *
 * @param id
 * @param event
 */
function deleteUser(id, event) {
    event.preventDefault();
    $('#delete-link').attr('href', '/users/' + id + '/delete');
    $('#delete-modal').modal('show');
}

function editRole(id, roleName, event) {
    event.preventDefault();
    $('#edit-role-form').attr('action', '/roles/' + id);
    $('#role-name').val(roleName);
    $('#edit-role-modal').modal('show');
}
