const mainUrl = `${window.location.protocol}//${window.location.host}/admin/blogs`;
const deleteAlertDialog = "Are you sure to delete this blog?";
const TOKEN = $('meta[name="csrf-token"]').attr("content");

document.getElementById("table-gridjs") &&
    new gridjs.Grid({
        columns: [
            {
                name: "№",
                width: "60px",
                formatter: function (index) {
                    return gridjs.html(
                        '<span class="fw-semibold">' + index + "</span>"
                    );
                },
            },
            {
                name: "Image",
                width: "100px",
                formatter: function (image) {
                    return gridjs.html(
                        `<img src="${image}" class="img-fluid" style="width: 100px; border-radius: 10px; object-fit: contain;" />`
                    );
                },
            },
            "Title",
            {
                name: "Status",
                width: "100px",
            },
            {
                name: "Ordering",
                width: "100px",
            },
            {
                name: "Actions",
                width: "120px",
                formatter: function (id) {
                    return gridjs.html(
                        `<a href='${mainUrl}/form/${id}' class='text-reset text-decoration-underline'>Edit</a> | 
                        <a href='#' class='text-reset text-decoration-underline' onclick="onDeleteUser(${id})">Delete</a>`
                    );
                },
            },
        ],
        search: !0,
        pagination: { limit: 50 },
        sort: !0,
        server: {
            url: `${mainUrl}/data-list`,
            then: (res) =>
                res.data.map((item, key) => {
                    const title = JSON.parse(item.title);
                    return [
                        key + 1,
                        item.imageUrl,
                        title.en,
                        item.status == 1 ? "Active" : "In-Active",
                        item.ordering,
                        item.id,
                    ];
                }),
            total: (res) => res.total,
        },
    }).render(document.getElementById("table-gridjs"));

function onDeleteUser(id) {
    Swal.fire({
        html: `<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon><div class="mt-4 pt-2 fs-15 mx-5"><h4>${deleteAlertDialog}</h4></div></div>`,
        showCancelButton: !0,
        confirmButtonClass: "btn btn-primary w-xs me-2 mb-1",
        confirmButtonText: "Yes, Delete It!",
        cancelButtonClass: "btn btn-light w-xs mb-1",
        buttonsStyling: !1,
        showCloseButton: !0,
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type: "post",
                headers: {
                    "X-CSRF-TOKEN": TOKEN,
                },
                url: `${mainUrl}/${id}`,
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
