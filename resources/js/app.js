import './bootstrap';


window.addEventListener('alert', (event =>{
    // Swal.fire({
    //     position: "top-end",
    //     icon: "success",
    //     title: "Deleted",
    //     showConfirmButton: false,
    //     timer: 1500
    // });
    toastr['success']('Have fun storming the castle!', 'Miracle Max Says', {
        "closeButton": true,
        "positionClass": "toast-top-center",
    });
}));