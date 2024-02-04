const mainUrl = `${window.location.protocol}//${window.location.host}/admin`;

tinymce.init({
    selector: "textarea.ckeditor-classic1",
    height: "450px",
    plugins: [
        "advlist",
        "autolink",
        "lists",
        "link",
        "image",
        "charmap",
        "preview",
        "anchor",
        "searchreplace",
        "visualblocks",
        "code",
        "fullscreen",
        "insertdatetime",
        "media",
        "table",
        "wordcount",
    ],
    toolbar:
        "fullscreen | bold italic underline | media link | numlist bullist | styles | alignleft aligncenter alignright alignjustify | outdent indent ",
    automatic_uploads: true,
    images_upload_url: "/admin/upload-content-file",
    relative_urls: false,
    remove_script_host: false,
});

tinymce.init({
    selector: "textarea.ckeditor-classic",
    height: "450px",
    plugins: [
        "advlist",
        "autolink",
        "lists",
        "link",
        "image",
        "charmap",
        "preview",
        "anchor",
        "searchreplace",
        "visualblocks",
        "code",
        "fullscreen",
        "insertdatetime",
        "media",
        "table",
        "wordcount",
    ],
    toolbar:
        "fullscreen | bold italic underline | media link | numlist bullist | styles | alignleft aligncenter alignright alignjustify | outdent indent ",
    automatic_uploads: true,
    images_upload_url: "/admin/upload-content-file",
    relative_urls: false,
    remove_script_host: false,
});

//Form Validation
window.addEventListener(
    "load",
    function () {
        var t = document.getElementsByClassName("needs-validation");
        t &&
            Array.prototype.filter.call(t, function (e) {
                e.addEventListener(
                    "submit",
                    function (t) {
                        !1 === e.checkValidity() &&
                            (t.preventDefault(), t.stopPropagation()),
                            e.classList.add("was-validated");
                    },
                    !1
                );
            });
    },
    !1
);
