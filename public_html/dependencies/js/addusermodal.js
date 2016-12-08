/**
 * This file inserts a new user into the database
 */

var createUserModal = $('#createUser').dialog({
    autoOpen: false,
    height: 610,
    width: 350,
    modal: true,
    buttons: {
        Submit: function () {
            createUser();
            createUserModal.dialog('close');
        }
    }
});

var createUser = function () {
    var userName = $('#userName2').val();
    var userPassword = $('#userPassword').val();
    var propertyID = $('#propertyID').val();


    $.ajax({
        url: 'controllers/newusercontroller.php',
        type: 'post',
        data: {
            userName: userName, userPassword: userPassword, propertyID: propertyID}

    })
};