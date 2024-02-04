// Author: PHOEM Phanith
// Email: phanith1826@gmail.com
// Date: 19/02/2023 1:48 PM
// Ref: https://codesandbox.io/s/js-read-file-mi3880?file=/index.html:745-2006

var openSingleFile = function (file) {
    var input = file.target;
    var previewImage = event.target.getAttribute("data-preview");
    var reader = new FileReader();
    reader.onload = function () {
        var dataURL = reader.result;
        var output = document.getElementById(previewImage);
        output.style.display = "inline-block";
        output.src = dataURL;
    };
    reader.readAsDataURL(input.files[0]);
};

var openMultiFiles = function (files) {
    var parent = document.querySelector("#galleries_prev");

    while (parent.hasChildNodes()) {
        parent.removeChild(parent.firstChild);
    }

    var reader = new FileReader();
    function readFile(index) {
        if (index >= files.length) return;
        var file = files[index];
        reader.onload = function (e) {
            // get file content
            var bin = e.target.result;
            // append image
            var child = document.createElement("img");
            child.classList.add("border-1")
            child.classList.add("col-6");
            child.classList.add("col-md-3");
            child.style.height = "150px";
            child.style.objectFit = "cover";
            child.src = bin;
            parent.appendChild(child);
            // recursion
            readFile(index + 1);
        };
        reader.readAsDataURL(file);
    }
    readFile(0);
};
