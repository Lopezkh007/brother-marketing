function Toast($msg, $status) {
    Toastify({
        text: $msg,
        duration: 1600,
        newWindow: true,
        close: true,
        gravity: "top", // `top` or `bottom`
        position: "right", // `left`, `center` or `right`
        className: $status === "success" ? "bg-success" : "bg-danger",
    }).showToast();
}
