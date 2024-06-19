import "./bootstrap";
import "~resources/scss/app.scss";
import.meta.glob(["../img/**"]);
import * as bootstrap from "bootstrap";


document.addEventListener('DOMContentLoaded', function () {
    const titleInput = document.getElementById('title');
    if (titleInput) {
        titleInput.addEventListener('input', function () {
            let title = this.value;
            let slug = title.toLowerCase()
                .normalize('NFD')                  // Normalize the string to decompose combined characters
                .replace(/[\u0300-\u036f]/g, '')   // Remove diacritical marks
                .replace(/[^a-z0-9\s-]/g, '')      // Remove non-alphanumeric characters except spaces and hyphens
                .replace(/\s+/g, '-')              // Replace spaces with hyphens
                .replace(/-+/g, '-');              // Remove multiple hyphens
            document.getElementById('slug').value = slug;
        });
    }
});
