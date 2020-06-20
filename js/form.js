/*validacion nombre*/
$('#validate').click(function () {
    if ($('.texto').val() === '') {
        Swal.fire({
            title: 'El campo nombre es requerido',
            width: 400,
            padding: '3em',
            backdrop: `
              rgba(0,0,0,0.5)
              url("/images/nyan-cat.gif")
              center left
              no-repeat
            `,
        });    
       
    }
     location.reload();
});

/*validacion nombre*/


