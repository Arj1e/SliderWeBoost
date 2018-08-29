 jQuery( document ).ready( function ()
    {
        $( '#send' ).on( 'click', function ()
        {
            var file = $( '#sel-file' ).get( 0 ).files[0],
                formData = new FormData();
            
            formData.append( 'file', file );
            console.log( file );
            $.ajax( {
                url        : 'UploadImg.php',
                type       : 'POST',
                contentType: false,
                cache      : false,
                processData: false,
                data       : formData,
                xhr        : function ()
                {
                    var jqXHR = null;
                    if ( window.ActiveXObject )
                    {
                        jqXHR = new window.ActiveXObject( "Microsoft.XMLHTTP" );
                    }
                    else
                    {
                        jqXHR = new window.XMLHttpRequest();
                    }
                    //Upload progress
                    jqXHR.upload.addEventListener( "progress", function ( evt )
                    {
                        if ( evt.lengthComputable )
                        {
                            var percentComplete = Math.round( (evt.loaded * 100) / evt.total );
                            //Do something with upload progress
                            console.log( 'Uploaded percent', percentComplete );
                        }
                    }, false );
                    //Download progress
                    jqXHR.addEventListener( "progress", function ( evt )
                    {
                        if ( evt.lengthComputable )
                        {
                            var percentComplete = Math.round( (evt.loaded * 100) / evt.total );
                            //Do something with download progress
                            console.log( 'Downloaded percent', percentComplete );
                        }
                    }, false );
                    return jqXHR;
                },
                success    : function ( data )
                {
                    //Do something success-ish
                    console.log( 'Completed.' );
                }
            } );
        } );
    } );