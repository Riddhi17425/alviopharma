(function () {
    console.log("dsfdsfd")
    function slugify(value) {
        return value
            .toString()
            .toLowerCase()
            .trim()
            .replace(/[^a-z0-9\s-]/g, '')
            .replace(/\s+/g, '-')
            .replace(/-+/g, '-');
    }

    function initproductsForm(form) {
        var titleInput = form.querySelector('[data-products-name]');
        var urlInput = form.querySelector('[data-products-url]');
        var metaTitle = form.querySelector('[data-products-meta-title]');

        

        var initialSlug = slugify(titleInput.value || '');
        var urlTouched = urlInput.value.trim() !== '' && urlInput.value !== initialSlug;
         

        titleInput.addEventListener('input', function () {
            if (!urlTouched) {
                urlInput.value = slugify(titleInput.value);
                metaTitle.value = titleInput.value;
            }
        });

        urlInput.addEventListener('input', function () {
            urlTouched = urlInput.value.trim() !== '';
            urlInput.value = slugify(urlInput.value);
        });

        
    }

    document.addEventListener('DOMContentLoaded', function () {
        var forms = document.querySelectorAll('[data-products-form]');

        forms.forEach(function (form) {
            initproductsForm(form);
        });
    });
})();


document.addEventListener("DOMContentLoaded", function () {

    // FRONT IMAGE PREVIEW
    const frontInput = document.getElementById("front_image");
    const frontPreview = document.getElementById("front_image_preview");

    if (frontInput) {
        frontInput.addEventListener("change", function (e) {
            const file = e.target.files[0];

            if (file) {
                const reader = new FileReader();

                reader.onload = function (event) {
                    frontPreview.src = event.target.result;
                    frontPreview.style.display = "block";
                };

                reader.readAsDataURL(file);
            }
        });
    }

    // DETAIL IMAGES PREVIEW (MULTIPLE)
    const detailInput = document.getElementById("detail_images");
    const detailPreview = document.getElementById("detail_images_preview");

    if (detailInput) {
        detailInput.addEventListener("change", function (e) {

            detailPreview.innerHTML = ""; // clear old preview

            const files = e.target.files;

            if (files.length > 0) {
                Array.from(files).forEach(file => {

                    const reader = new FileReader();

                    reader.onload = function (event) {
                        const img = document.createElement("img");
                        img.src = event.target.result;
                        img.style.maxWidth = "100px";
                        img.style.marginRight = "10px";

                        detailPreview.appendChild(img);
                    };

                    reader.readAsDataURL(file);
                });
            }
        });
    }

});



    document.addEventListener('DOMContentLoaded', function () {
        const checkboxes = document.querySelectorAll('#ingredientBoxWrap input');
        const preview = document.getElementById('selectedIngredients');

        function updateSelected() {
            preview.innerHTML = '';

            checkboxes.forEach(cb => {
                if (cb.checked) {
                    const text = cb.nextElementSibling.innerText;

                    const span = document.createElement('span');
                    span.innerText = text;

                    preview.appendChild(span);
                    cb.parentElement.classList.add('active');
                } else {
                    cb.parentElement.classList.remove('active');
                }
            });
        }

        checkboxes.forEach(cb => {
            cb.addEventListener('change', updateSelected);
        });

        updateSelected(); // initial load
    });
