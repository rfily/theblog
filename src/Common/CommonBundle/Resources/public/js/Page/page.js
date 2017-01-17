/**
 * Created by Niaina on 03/01/2017.
 */
$(document).ready(function() {
    JSHelper.hide_loader();

    $(".link_ajouter").click(function (e) {
        JSHelper.show_loader();
        JSHelper.show_modal('myModal', 'admin_admin_ajoutpage', 'Ajout de Page');
        JSHelper.hide_loader();
        e.preventDefault();
    });
});
