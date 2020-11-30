$(document).ready(() => {

    $('#create').on('click', e => {

        e.preventDefault();

        let showCreateForm = async () => {
            try {
                const response = await fetch('../forms/create.php');
                return response.text();
            } catch (reject) {
                return reject;
            }
        }

        showCreateForm().then( resolve => {
            $('#main-title, #usuarios').hide();
            $('#forms').empty().append(resolve);
        })
        .catch( reject => {
            alert('No se puede mostrar el formulario para crear un nuevo usuario.');
            console.log(reject);
        });

    });

    const isEmpty = form => {

        let data = new FormData(form);
        
        for(let value of data.values()){
            if(value === ""){
                return true;
            }
        }

    }

    $('#forms').on('click','#btn-create', e => {
        
        e.preventDefault();

        let form = document.getElementById('createForm');

        if(!isEmpty(form)){

            let data = new FormData(form);

            let updateData = data => {
                return new Promise ((resolve, reject) => {
                    fetch(
                        '../actions/actions.php?create=true',
                        {
                            method: 'POST',
                            body: data
                        }
                    ).then(resolve).catch(reject);
                });
            };

            updateData(data).then( resolve => {
                $('#forms').empty();
                $('#main-title, #usuarios').show();
                alert('Usuario añadido exitosamente');
                window.location.reload(); /*
                                            * Al trabajar con asincronía, no se debe recargar la página.
                                            * Pero como comenté en clases, debido a la estructura del 
                                            * código de este ejemplo, es la manera en que se reflejen los
                                            * cambios de forma inmediata.
                                            */
            })
            .catch( reject => {
                alert('Algo ha ido mal');
                console.log(reject);
            });

        }else{
            alert('Complete todos los campos');
        }

    })
    
    $('.update').on('click', e => {

        e.preventDefault();

        let id = $(e.target).data('id');

        let showUpdateForm = async id => {
            try{
                const response = await fetch('../forms/update.php?id='+id);
                return response.text();
            }catch (reject){
                return reject;
            }
        };

        showUpdateForm(id).then( response => {
            $('#main-title, #usuarios').hide();
            $('#forms').empty().append(response);
        })
        .catch( reject => {
            alert('Algo ha ido mal');
            console.log(reject);
        });

    });

    $('#forms').on('click','#btn-update', e => {

        e.preventDefault();

        let form = document.getElementById('update');

        if(!isEmpty(form)){

            let data = new FormData(form);

            let updateData = data => {
                return new Promise ((resolve, reject) => {
                    fetch(
                        '../actions/actions.php?update=true',
                        {
                            method: 'POST',
                            body: data
                        }
                    ).then(resolve).catch(reject);
                });
            };

            updateData(data).then( resolve => {
                $('#forms').empty();
                $('#main-title, #usuarios').show();
                alert('Usuario actualizado exitosamente');
                window.location.reload();
            })
            .catch( reject => {
                alert('Algo ha ido mal');
                console.log(reject);
            });

        }else{
            alert('Complete todos los campos');
        };

    });

    $('.delete').on('click', e => {

        e.preventDefault();

        let id = $(e.target).data('id');

        if(confirm('¿Desea eliminar con la eliminación de este usuario?')){    
        
            let deleteUser = async id => {
                try{
                    const response = await fetch('../actions/actions.php?delete=true&id='+id);
                    return response.text();
                }catch (reject){
                    return reject;
                }
            };

            deleteUser(id).then( response => {
                alert('Usuario eliminado exitosamente');
                window.location.reload();
            })
            .catch( reject => {
                alert('Algo ha ido mal');
                console.log(reject);
            });
        
        };

    });
    
});