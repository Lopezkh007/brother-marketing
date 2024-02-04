document.getElementById("table-gridjs") &&
    new gridjs.Grid({
        columns: [
            {
                name: "№",
                width: "60px",
                formatter: function (e) {
                    return gridjs.html(
                        '<span class="fw-semibold">' + e + "</span>"
                    );
                },
            },
            "Name",
            {
                name: "Email",
                formatter: function (e) {
                    return gridjs.html('<a href="">' + e + "</a>");
                },
            },
            "Phone",
            "Role",
            {
                name: "Actions",
                width: "120px",
                formatter: function (id) {
                    return gridjs.html(
                        `<a href='${window.location.protocol}//${window.location.host}/admin/setting/team/${id}' class='text-reset text-decoration-underline'>Edit</a> | <a href='#' class='text-reset text-decoration-underline' onclick="onDeleteUser(${id})">Delete</a>`
                    );
                },
            },
        ],
        search: !0,
        pagination: { limit: 50 },
        sort: !0,
        server: {
            url: `${window.location.protocol}//${window.location.host}/admin/setting/api/users`,
            then: (res) =>
                res.data.map((item, key) => [
                    key + 1,
                    item.first_name + " " + item.last_name,
                    item.email,
                    item.phone,
                    item.role,
                    item.id,
                ]),
            total: (res) => res.total,
        },
    }).render(document.getElementById("table-gridjs"));

function onDeleteUser(id) {
    const URL = `${window.location.protocol}//${window.location.host}/admin/setting/team/${id}`;
    const TOKEN = $('meta[name="csrf-token"]').attr("content");

    Swal.fire({
        html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon><div class="mt-4 pt-2 fs-15 mx-5"><h4>Are you sure to delete this user?</h4></div></div>',
        showCancelButton: !0,
        confirmButtonClass: "btn btn-primary w-xs me-2 mb-1",
        confirmButtonText: "Yes, Delete It!",
        cancelButtonClass: "btn btn-danger w-xs mb-1",
        buttonsStyling: !1,
        showCloseButton: !0,
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type: "post",
                headers: {
                    "X-CSRF-TOKEN": TOKEN,
                },
                url: URL,
                data: {
                    _method: "delete",
                },
                success: function () {
                    Toastify({
                        text: "Delete Successfully",
                        duration: 1300,
                        newWindow: true,
                        close: true,
                        gravity: "top", // `top` or `bottom`
                        position: "right", // `left`, `center` or `right`
                        className: "bg-success",
                        callback: function () {
                            location.reload();
                        },
                    }).showToast();
                },
            });
        }
    });
}
