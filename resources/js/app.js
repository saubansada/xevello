
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

//require('./uikit');
 
if(performance.navigation.type == 2){
    location.reload(true);
 }
 
$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(".delete-product").on('click', function (e) {
        var deleteUrl = $(this).data("url");
        UIkit.modal.confirm('Are you sure this record it?').then(function () {
            $.ajax({
                url: deleteUrl,
                method: 'DELETE',
                async: true,
                success: function success(res) { 
                    if (res == "true") {
                        window.setTimeout(function () {
                            UIkit.modal.dialog('<p class="uk-modal-body uk-alert uk-alert-success">Deleted Successfully!</p>');
                        }, 200);
                        location.reload();
                    }
                },
                error: function error(res) { 
                    window.setTimeout(function () {
                        UIkit.modal.dialog('<p class="uk-modal-body uk-alert uk-alert-danger">Error While Deleting!</p>');
                    }, 200);
                }
            });
        }, function () {
            console.log('Rejected.');
        });
    });
});