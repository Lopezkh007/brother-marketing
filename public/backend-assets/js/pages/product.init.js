const mainUrl = `${window.location.protocol}//${window.location.host}/admin/products`;
const deleteAlertDialog = "Are you sure to delete this product?";
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
                name: "Product",
                formatter: function (row) {
                    return gridjs.html(
                        `<div class="d-flex align-items-center">
                            <div class="avatar-sm bg-light rounded p-1 me-2">
                                <img src="${row.image}" alt="" class="img-fluid d-block">
                            </div>
                            <div>
                                ${row.code ? `<strong class="text-muted">#${row.code}</strong>` : ''}
                                <h5 class="fs-14 my-1 text-reset">${row.name}</h5>
                                ${row.discount > 0 ? `<span class="text-muted">$${(row.price - (row.price * (row.discount / 100))).toFixed(2)}  <small><del>$${row.price.toFixed(2)}</del></small></span>` : `<span class="text-muted">${row.price}</span>`}
                            </div>
                        </div>`
                    );
                },
            },
            "Brand",
            "Category",
            "Feature",
            "Hot Sale",
            "Status",
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
                    const name = JSON.parse(item.name);
                    const category = JSON.parse(item.categoryName);
                    const brand = JSON.parse(item.brandName);
                    return [
                        key + 1,
                        {image: item.imagePath, code: item.code, name: name.en, price: item.price, discount: item.discount},
                        brand ? brand.en : "N/A",
                        category ? category.en : "N/A",
                        item.is_feature ? "TRUE" : "FALSE",
                        item.is_hot ? "TRUE" : "FALSE",
                        item.status == 1 ? "Active" : "In-Active",
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
