/**
 * Created by Niaina on 11/01/2017.
 */

var JSHelper = {
    init: function()
    {
        this.hide_loader();
        this.post_form();
    },
    post_form: function()
    {
        $('body').on('submit', '.ajaxForm', function (e) {
            e.preventDefault();

            JSHelper.show_loader();
            JSHelper.save_tinymce();

            $.ajax({
                type: $('.ajaxForm').attr('method'),
                url: $('.ajaxForm').attr('action'),
                data: $('.ajaxForm').serialize(),
                success: function( jqXHR ){
                    if(jqXHR.isvalid == 'false') {
                        JSHelper.handle_form_error( jqXHR );
                    }
                    JSHelper.hide_loader();
                }
            });

        });

        $('body').on('click','.submitForm', function(e){
            $('.ajaxForm').submit();
        });

    },
    show_modal: function( _id_modal, _title_modal, _route_modal, _params ){
        $('#' + _id_modal ).html('');

        this.show_loader();

        $.get(Routing.generate( _route_modal, _params ), null, function( data ) {
            $('#' + _id_modal ).html(data);
            $('#' + _id_modal +' .modal-title' ).html( _title_modal).promise().done(function(){
                JSHelper.hide_loader();
                $('#' + _id_modal).modal('show');
                $('.alert-danger').hide();
            });
        });
    },
    hide_loader: function()
    {
        $('#loader').remove();
    },
    show_loader: function()
    {
        $('<div id="loader"></div>').appendTo('body');
    },
    redirect_to: function( _location )
    {
        document.location.href = _location;
    },
    handle_form_error: function ( jqXHR )
    {
        $('.alert-danger').html( jqXHR.message );
        $('.alert-danger').show();

        for ( var key in jqXHR.data ) {
            $('.ajaxForm').find('[name*="'+key+'"]').eq(0).parent().addClass( 'has-error' );
            $('.ajaxForm').find('[name*="'+key+'"]').eq(0).tooltip({'trigger':'manual','title': jqXHR.data[key] });
            $('.ajaxForm').find('[name*="'+key+'"]').eq(0).tooltip('show');
        }
    },
    save_tinymce: function()
    {
        var idtinymce   = $('.tinymce').attr('id');
        $('#' + idtinymce).html( tinymce.get( idtinymce ).getContent() );
    }
}

JSHelper.init();

