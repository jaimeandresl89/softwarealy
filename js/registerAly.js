window.onload = function () {
  const formcheckInput = document.querySelectorAll('.form-check-input');
  const formBodyPart = document.querySelector('#formBodyPart');

  const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
      toast.addEventListener('mouseenter', Swal.stopTimer)
      toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
  })


  let contador = 0;
  
  const submitForm = ( newData ) => {
    console.table (  newData );
    $.ajax({
      type: "POST",
      data: {
        dataForm : newData,
        dataType : 'create',
        dataControl: 'bodyPart'
      },
      //dataType: 'json',
      url: "./classDAO/dolenciasController.php",
      success: function(res){
        var data = jQuery.parseJSON(res);
        data.forEach( element => {
          if( element['error'] ){
            Swal.fire(
              'Uppps!', 
              element['restext'],
              'error'
            );    
            return false;
          }
          else {
            Toast.fire({
              icon: 'success',
              title: element['restext']
            })
            
          }
        });
        setTimeout(() => {
          let timerInterval
          Swal.fire({
            title: 'Un momento!',
            html: 'Estamos generando sus recomendaciones',
            timer: 2000,
            timerProgressBar: true,
            didOpen: () => {
              Swal.showLoading()
              const b = Swal.getHtmlContainer().querySelector('b')
              timerInterval = setInterval(() => {
                b.textContent = Swal.getTimerLeft()
              }, 100)
            },
            willClose: () => {
              clearInterval(timerInterval)
            }
          }).then((result) => {
            /* Read more about handling dismissals below */
            if (result.dismiss === Swal.DismissReason.timer) {
              console.log('I was closed by the timer')
              window.location='./recomendaciones.php';
            }
          })
        }, 1500);
      }
    });
  };

  if( formcheckInput ) {
    formcheckInput.forEach( input  => {
      input.addEventListener('change', () => {
        contador += input.checked ? +1 : -1;
        let idSvg = input.dataset.idSvg
        let activeBodyPart = document.querySelector(`#${idSvg}`)        
        if( idSvg == 'cabezaEntera') { document.querySelector('#ojos').classList.add('removeActive') }
        if( idSvg == 'ojos') { document.querySelector('#ojos').classList.toggle('removeActive') }
        activeBodyPart.classList.toggle('isActive');
      })
    });
  }

  if( formBodyPart ) {
    formBodyPart.addEventListener('submit', ( event ) => {
      event.preventDefault();
      let newData = Array();
      console.log("se registra el form")
      if( contador > 0 ){
        let dataForm =  $(formBodyPart).serializeArray();
        dataForm.forEach( element => {
          let dataElement = formBodyPart.querySelector(`[name="${element.name}"]`)
          newData.push( {
            'bodyPart': dataElement.id,
            'idPart': dataElement.dataset.idPart,
            'idSvg': dataElement.dataset.idSvg
          })
        });
        submitForm( newData  );
      }
      else {
        Swal.fire({
          icon: 'warning',
          title: 'Oops...',
          text: 'Debe seleccionar una opción antes de registrar',
        })
      }
    })
  }
}