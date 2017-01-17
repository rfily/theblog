/**
 * Created by Niaina on 11/01/2017.
 */

var JSHelper = {
    show_modal: function( _id_modal, _route_modal, _title_modal ){
        $('#' + _id_modal ).html('');
        $('#' + _id_modal ).on('show.bs.modal', function () {
            $('#' + _id_modal ).html('');
            $.get(Routing.generate( _route_modal ), null, function( data ) {
                $('#' + _id_modal ).html(data);
                $('#' + _id_modal +' .modal-title' ).html( _title_modal );
            });
        }).modal();
    },
    hide_loader: function()
    {
        $('.loader').hide();
    },
    show_loader: function()
    {
        alert('Go');
        $('.loader').show();
    }
}

